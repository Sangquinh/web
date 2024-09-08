<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Core.php';

$kun = new System();
$user = $kun->user();
$_get_settings = $kun->settings('napthe');
$_cardv3 = $kun->settings("cardv3");

if (!$_SESSION['token']) {
    die(json_encode(['status' => false, 'msg' => 'Bạn Chưa Đăng Nhập!']));
}

switch ($_get_settings['kieunap']) {
    case 'napcham':
        $loaithe = $_POST['type'];
        $menhgia = $_POST['amount'];
        $seri = str_replace('/[^0-9]/', '', $_POST['serial']);
        $mathe = str_replace('/[^0-9]/', '', $_POST['pin']);

        $arr_loaithe = ["VIETTEL", "VINAPHONE", "MOBIFONE"];
        $arr_menhgia = ["10000", "20000", "50000", "100000", "200000", "500000", "1000000"];

        if (!in_array($loaithe, $arr_loaithe)) {
            die(json_encode(['status' => false, 'msg' => 'Lỗi Hệ Thống!']));
        }
        if (!in_array($menhgia, $arr_menhgia)) {
            die(json_encode(['status' => false, 'msg' => 'Lỗi Hệ Thống!']));
        }
        if (!$seri) {
            die(json_encode(['status' => false, 'msg' => 'Vui Lòng Nhập Vào Mã Serial!']));
        }
        if (!$mathe) {
            die(json_encode(['status' => false, 'msg' => 'Vui Lòng Nhập Vào Mã Thẻ!']));
        }

        if ($kun->check_int($seri) == false) {
            die(json_encode(['status' => false, 'msg' => 'Mã Serial Phải Là Dạng Số!']));
        }

        if ($kun->check_int($mathe) == false) {
            die(json_encode(['status' => false, 'msg' => 'Mã Thẻ Phải Là Dạng Số!']));
        }

        if (strlen($seri) < 10) {
            die(json_encode(['status' => false, 'msg' => 'Độ dài mã Seri không hợp lệ!']));
        }
        if (strlen($mathe) < 10) {
            die(json_encode(['status' => false, 'msg' => 'Độ dài mã thẻ không hợp lệ!']));
        }

        $tranid = rand(1000, 999999);
        $cmd =
            "INSERT INTO `napthe` SET `username` = '" .
            $user['username'] .
            "', `type` = '" .
            $loaithe .
            "', `amount` = '" .
            $menhgia .
            "', `serial` = '" .
            $seri .
            "', `pin` = '" .
            $mathe .
            "', `tranid` = '" .
            $tranid .
            "', `status` = '2', `time` = '" .
            time() .
            "'";
        mysqli_query($kun->connect_db(), $cmd);

        die(json_encode(['status' => true, 'msg' => 'Thẻ ' . $loaithe . ' mệnh giá ' . number_format($menhgia) . 'đ đã được lưu vào hệ thống thành công! Vui lòng chờ admin duyệt thẻ trong 30p - 1h!']));

        break;

    case 'naptudong':
        $CARDS = ["VIETTEL", "MOBIFONE", "VINAPHONE", "VIETNAMOBILE", "ZING"];
        $AMOUNTS = [10000, 20000, 30000, 50000, 100000, 200000, 300000, 500000, 1000000];
        switch ($_get_settings["site"]) {
            case "cardv3":
                $card_type = $_POST['type'];
                $card_amount = (int) $_POST['amount'];
                $card_serial = trim($_POST['serial']);
                $card_code = trim($_POST['pin']);
                if (!in_array($card_type, $CARDS))
                    die(json_encode(['status' => false, 'msg' => 'Loại thẻ không hợp lệ!']));
                else if (!in_array($card_amount, $AMOUNTS))
                    die(json_encode(['status' => false, 'msg' => 'Mệnh giá không hợp lệ!']));
                else if ($card_code === "")
                    die(json_encode(['status' => false, 'msg' => 'Vui lòng nhập mã thẻ!']));
                else if ($card_serial === "")
                    die(json_encode(['status' => false, 'msg' => 'Vui lòng nhập mã seri!']));
                else if ($card_type !== "ZING" && !is_numeric($card_code))
                    die(json_encode(['status' => false, 'msg' => 'Mã thẻ phải là một số!']));
                else if ($card_type !== "ZING" && !is_numeric($card_serial))
                    die(json_encode(['status' => false, 'msg' => 'Mã seri phải là một số!']));
                else if ($kun->connect_db()->query( "SELECT * FROM `napthe` WHERE `pin` = '$card_code' AND `serial` = '$card_serial'")->num_rows)
                    die(json_encode(['status' => false, 'msg' => 'Thẻ đã tồn tại trên hệ thống!']));
                else {
                    $card_type_send = ($card_type === "VIETNAMOBILE") ? "VNMOBI" : $card_type;
                    $request_id = rand(123456789, 987654321);
                    $data = [
                        'telco'      => $card_type_send,
                        'code'       => $card_code,
                        'serial'     => $card_serial,
                        'amount'     => $card_amount,
                        'request_id' => $request_id,
                        'partner_id' => $_cardv3['id'],
                        'sign'       => md5($_cardv3['key'] . $card_code . $card_serial),
                        'command'    => 'charging'
                    ];
                    $ch = curl_init(ltrim($_cardv3['site'], "/") ."/chargingws/v3");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, count($data));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    $result = json_decode(curl_exec($ch));
                    curl_close($ch);

                    if ($result->code != 200){
                        die(json_encode(['status' => false, 'msg' => $result->msg]));
                    } else {
                        $kun->connect_db()->query("INSERT INTO `napthe` SET `username` = '{$user['username']}', `type` = '$card_type', `amount` = '$card_amount', `serial` = '$card_serial', `pin` = '$card_code', `tranid` = '$request_id', `status` = '2', `time` = '" . time() . "'");
                        die(json_encode(['status' => true, 'msg' => "Vui lòng đợi duyệt thẻ"]));
                    }
                }

                break;
            default:
                die(json_encode(['status' => false, 'msg' => 'Hệ thống đang bảo trì']));
                break;
        }
        /*
        function curl_post($url = null, $header = [])
        {
            if (!empty($url)) {
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                if (curl_errno($ch)) {
                    $res = "Lỗi: " . curl_error($ch);
                } else {
                    $res = curl_exec($ch);
                }
                curl_close($ch);
                return $res;
            }
        }
        if (!isset($_POST['type']) || !isset($_POST['serial']) || !isset($_POST['pin']) || !isset($_POST['amount'])) {
            die(json_encode(['status' => false, 'msg' => 'Bạn cần nhập đầy đủ thông tin!']));
        } else {
            $type = $_POST['type'];
            $serial = $_POST['serial'];
            $pin = $_POST['pin'];
            $amount = $_POST['amount'];
             $apikey = $_get_settings['api_key'];
            $callback_url = "https://".$_SERVER['SERVER_NAME']."/model/card_callback.php";


            $check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `pin` = '" . $pin . "' AND `serial` = '" . $serial . "'"));

            if ($check > 0) {
                die(json_encode(['status' => false, 'msg' => 'Thẻ này đã tồn tại trên hệ thống!']));
            } else {
                $tranid = rand(10000, 99999); /// Cái này có thể mà mã order của bạn, nó là duy nhất (enique) để phân biệt giao dịch.
                $url = 'https://cardvip1s.net/api/card-auto.php?type='.$type.'&menhgia='.$amount.'&seri='.$serial.'&pin='.$pin.'&APIKey='.$apikey.'&callback='.$callback_url.'&content='.$tranid;

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);
                $json = json_decode($data, true);

                if (isset($json['data']))
                {
                    if ($json['data']['status'] == 'error')
                    {
                        die(json_encode(['status' => false, 'msg' => $json['data']['msg']]));
                    }
                    else if ($json['data']['status'] == 'success')
                    {
                        $cmd =
                        "INSERT INTO `napthe` SET `username` = '" .
                        $user['username'] .
                        "', `type` = '" .
                        $type .
                        "', `amount` = '" .
                        $amount .
                        "', `serial` = '" .
                        $serial .
                        "', `pin` = '" .
                        $pin .
                        "', `tranid` = '" .
                        $tranid .
                        "', `status` = '2', `time` = '" .
                        time() .
                        "'";

                        mysqli_query($kun->connect_db(), $cmd);

                        die(json_encode(['status' => true, 'msg' => 'Thẻ ' . $type . ' mệnh giá ' . number_format($amount) . ' seri ' . $serial. ' đã được lưu vào hệ thống ! Vui lòng chờ duyệt thẻ trong 30s - 2 phút! Bạn sẽ được  cộng tiền ngay sau khi thẻ thành công ']));
                    }
                }
            }
        }
        */

        break;
}