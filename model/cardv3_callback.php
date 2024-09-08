<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Core.php';
require $_SERVER['DOCUMENT_ROOT'] . '/lib/Pusher/Pusher.php';
$kun = new System();
$user = $kun->user();

$_get_settings = $kun->settings('napthe');
$_cardv3 = $kun->settings("cardv3");

$data = (isset($_GET["callback_sign"])) ? $_GET : json_decode(file_get_contents('php://input'), true);

if (isset($data["callback_sign"])) {
    $tran_id = $data['request_id'];
    $check = $kun->connect_db()->query("SELECT * FROM `napthe` WHERE `tranid` = '$tran_id'");

    //Kiểm tra xem thẻ tồn tại không
    if (!$check->num_rows) die();
    $check = $check->fetch_assoc();

    // Kiểm tra hash
    if ($data['callback_sign'] != md5($_cardv3['key'] . $check['pin'] . $check['serial'])) die();
    

    if ($data['status'] == 1) {
        //Thành công
        // update tiền
        $kun->connect_db()->query("UPDATE `users` SET `money` = `money` + '{$data['amount']}' WHERE `username` = '{$check['username']}' ");
        // update tiền nạp
        $kun->connect_db()->query("UPDATE `users` SET `money_nap` = `money_nap` + '{$data['amount']}' WHERE `username` = '{$check['username']}' ");
        // update trạng thái thẻ
        $kun->connect_db()->query("UPDATE `napthe` SET `status` = '1' WHERE `tranid` = '$tran_id'");
        // update lịch sử giao dịch
        $kun->connect_db()->query("UPDATE `users` SET `diemtichluy` = `diemtichluy` + '5' WHERE `uid` = '{$check['username']}' ");
        // Update vào lịch sử user
        $kun->connect_db()->query(
            "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('{$check['username']}', 'Nạp Thẻ', 'Nạp Thẻ Tự Động', '+" . number_format($data['amount']) . "đ', 'Nạp Thẻ " . $check['type'] . " Thành Công!', '" . time() . "')");
        echo "Thành công";
    } else {
        //Lỗi, sai mệnh giá
        // update trạng thái thẻ
        $kun->connect_db()->query("UPDATE `napthe` SET `status` = '0' WHERE `tranid` = '$tran_id'");
        echo "Thất bại";
    }
} else
    http_response_code(404);