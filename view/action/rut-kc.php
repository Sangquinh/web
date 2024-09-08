<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();

$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `username`='".$user['username']."'"));
 
 $rkc = $kun->settings('rut_kc');
 
 $list_kc = [];
 $getkc  = mysqli_query($kun->connect_db(), "SELECT * FROM `list_kc`");
 for ($i=0;$i<$getkc->num_rows;$i++) $list_kc[] = $getkc->fetch_assoc();
?>
   				<div class="c-layout-sidebar-content ">
   				  <div class="c-content-title-1">
   				    <h3 class="c-font-uppercase c-font-bold">Rút Kim Cương</h3>
   				    <div class="c-line-left"></div>
   				  </div>
   				  <div class="text-center">
                    <center>
                      <h2 class="c-font-22 c-font-red">Số kim cương hiện có: <b><?php echo $user['kimcuong'];?></b></h2>
                    </center>
                  </div>
   				  <form class="form-horizontal" method="POST">
<?php if (isset($_POST["rutkimcuong"])) {
    require $_SERVER["DOCUMENT_ROOT"] . "/lib/xss_anti/xss_anti.php";
    $xss = new Xss_Anti();

    $idgame = mysqli_real_escape_string(
        $kun->connect_db(),
        $xss->xss_clean($_POST["idgame"])
    );
    $kimcuong_id = intval($xss->xss_clean($_POST["kimcuong"]));
    $check_kimcuong = mysqli_query(
            $kun->connect_db(),
            "SELECT * FROM `list_kc` WHERE `id`='" .$kimcuong_id ."'"
        );
    $noidung = strip_tags(
        mysqli_real_escape_string(
            $kun->connect_db(),
            $xss->xss_clean($_POST["noidung"])
        )
    );
    $check = mysqli_num_rows(
        mysqli_query(
            $kun->connect_db(),
            "SELECT * FROM `rut_kim_cuong` WHERE `idgame`='" .$idgame ."' AND `status` = '2'"
        )
    );
    $kimcuong = ($check_kimcuong->num_rows > 0) ? $check_kimcuong->fetch_assoc() : '';
    $nguoirut = $user["username"];

    if (empty($idgame) || $check_kimcuong->num_rows === 0) {
        echo '<div class="alert alert-danger"> Xin vui lòng nhập đầy đủ thông tin!</div>';
//    } elseif ($user["kimcuong"] < 45) {
//        echo '<div class="alert alert-danger"> Bạn Không Đủ Kim Cương Để Rút!</div>';
    } elseif ($kimcuong['soluong'] > $user["kimcuong"]) {
        echo '<div class="alert alert-danger"> Kim Cương Bạn Cần Rút Phải Nhỏ Hơn Số Kim Cương Hiện Tại !</div>';
    } else {
        //Lấy hash
        //$hash_kc = md5($nguoirut . $idgame . $kimcuong['soluong'] . time() , rand(12345, 67890));
        $hash_kc = $user['id'] . $idgame . $kimcuong['soluong'] . time() . rand(12345, 67890);
        
        //Gọi api rút kc napcard.vn
        $post_data = [
            "APIkey" => $rkc['key_kc'],
            "playerid" => $idgame,
            "menhgia" => $kimcuong['menhgia'],
            "content" => $hash_kc
        ];
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://napcard.vn/ChargingKC/v2',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query($post_data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($response,true);
        
        if($result['status'] == 200 || $result['status'] == "00"){
            // Thành công
            
            // Trừ kim cương của tài khoản
            $tru_kimcuong = $kimcuong['soluong'] + $rkc['phi_kc'];
            mysqli_query(
                $kun->connect_db(),
                "UPDATE `users` SET `kimcuong` = `kimcuong` - '" . $tru_kimcuong . "' WHERE `username` = '" .$user["username"] ."' "
            );
            // update vào lịch sử rút
            mysqli_query(
                $kun->connect_db(),
                "INSERT INTO `rut_kim_cuong` SET 
                `username` = '" . $user["username"] ."',
                `idgame` = '" . $idgame ."',
                `kimcuong` = '" . $kimcuong['soluong'] ."',
                `tru_kc` = '" . $tru_kimcuong ."',
                `noidung` = '" . $noidung . "',
                `status` = '2',
                `time` = '" . time() ."',
                `hash` = '$hash_kc'"
            );

            // Update vào lịch sử user
            mysqli_query(
                $kun->connect_db(),
                "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('" .$user["username"] ."', 'Rút Kim Cương Freefire', 'Rút Kim Cương Freefire', '-" .number_format($kimcuong['soluong']) ." kc', 'Rút " .number_format($kimcuong['soluong']) ." kim cương vào ID " .$idgame ."', '" .time() ."')"
            );
            echo '<div class="alert alert-success">Đã rút '.number_format($kimcuong['soluong']).' kim cương, vui lòng chờ vài phút để duyệt (Trừ '.number_format($tru_kimcuong)." kim cương trong tài khoản)</div>";
        } else if($result['status'] == 57) {
            echo '<div class="alert alert-danger"> Xin vui lòng nhập đầy đủ thông tin!</div>';
        } else {
            echo '<div class="alert alert-danger">Sai thông tin api hoặc api không tồn tại. (Mã lỗi: '.$result['status'].')</div>';
        }
    }
}
?>
   				  <div class="form-group">
   				    <label class="col-md-3 control-label">
   				      <span style="color: white">Số lượng kim cương: </label>
   				    <div class="col-md-6">
   				      <div class="input-group c-square" style="width: 100%">
   				        <select style="width: 100%" class="form-control c-square c-theme" name="kimcuong" id="kimcuong">
   				          <option value="" disabled="disabled" selected>Chọn số lượng kim cương</option>
   				          
                          <?php foreach($list_kc as $kc_id => $kc){?>
   				          <option value="<?=$kc['id'];?>" data-soluong="<?=$kc['soluong'];?>"><?=$kc['soluong'];?> Kim Cương</option>
                          <?php } ?>
                          
   				        </select>
   				        <span class="input-group-btn"></span>
   				      </div>
   				    </div>
   				  </div>
   				  <div class="form-group">
   				    <label class="col-md-3 control-label">
   				      <span style="color: white">ID tài khoản: </label>
   				    <div class="col-md-6">
   				      <div class="input-group c-square" style="width: 100%">
   				        <input type="number" name="idgame" style="width: 100%" class="form-control" placeholder="Nhập ID tài khoản"/>
   				        </span>
   				      </div>
   				    </div>
   				  </div>
   				  <div class="block-load-info"></div>
   				  <div class="form-group c-margin-t-40">
   				    <div class="col-md-offset-3 col-md-6">
   				      <button type="submit" name="rutkimcuong" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block">RÚT NGAY</button>
   				    </div>
   				  </div>
   				  </form>
   				  <div class="" style="margin: 35px 0px;border: 1px solid #cccccc;padding: 15px">
   				      Vui Lòng Nhập Đúng ID.
   				      <br>Sau khi đã tạo đơn rút thành công, Vui lòng chờ từ 5-15p để hệ thống duyệt kim cương vào acc. Xin cảm ơn
   				      <?php if ($rkc['phi_kc'] > 0){?><br>Phí rút là <?=$rkc['phi_kc'];?> kim cương<?php }?>
   				  </div>
   				  <table id="charge_recent" class="table table-striped table-custom-res">
   				    <thead>
   				      <tr>
   				        <th>Mã Đơn</th>
   				        <th>Id Nhận</th>
   				        <th>Số Kc</th>
   				        <th>Thời Gian</th>
   				        <th>Trạng thái</th>
   				      </tr>
   				    </thead>
   				    <tbody>
<?php 
  while($row = mysqli_fetch_array($result)) {
    if($row['status'] == 0) {
      $status = '<p style="color: green;">Thành Công</p>';
    }else if($row['status'] == 1) {
      $status = '<p style="color: green;">Thành Công</p>';
    }else if($row['status'] == 2) {
      $status = '<p style="color: green;">Thành Công</p>';
    }
?>
   				        <tr>
    				        <td>#<?php echo $row['id'];?></td>
    				        <td><?php echo $row['idgame'];?></td>                                        
                            <td><span class="c-font-bold text-danger"><?php echo number_format($row['kimcuong']);?> kc</span></td>
                            <td><?php echo date('d/m H:i', $row['time']);?></td>
                            <td><?php echo $status;?></td>
                        </tr>

<?php } ?>

                    </tbody>
                </table>
                <div class="text-center">
                    <center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/user/rutkc', $start, $tong, $kmess);
}
?>
                    </center>
                </div>


                <style>
                .c-layout-page{
                    padding: 15px;
                    background-color :rgba(0, 0, 0, 0.7);
                }
                input[type="submit"],button[type="submit"]{
                    color:black;
                    background-color: #f3f08c;
                }
                </style>
                <script>
                </script>
            </div>
        </div>