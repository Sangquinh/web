<?php 
// Require Hàm hệ thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user(); // gọi giá trị user đang login
    
    if(!$_SESSION['token']) {
        $gift = "Bạn Chưa Đăng Nhập!";
    }else {

        if($kun->check_user_nhan_qua() == true) {
            $gift = "Bạn Đã Nhận Quà Rồi!";
        }else {

            $rand = rand(20, 100); // số kim cương ngẫu nhiên
            $gift = "Bạn Nhận Được ".$rand." Kim Cương!";



            //UPDATE Kimcuong vào acc
            mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$rand."' WHERE `username` = '".$user["username"]."'");
            //UPDATE Log
            mysqli_query($kun->connect_db(),"INSERT INTO `register_gift` (`username`, `name`, `kimcuong`, `time`) VALUES ('".$user['username']."', '".$user['name']."', '".$rand."', '".time()."')");

            // update lich su
            mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Nhận Quà Đăng Kí', 'Nhận Quà Đăng Kí', '-0đ', '".$gift."', '".time()."')");
            
        }
    }
?>
<!-- MODAL NOTIFY -->
        <div style="margin-top: 200px;" class="modal show" id="noticeModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                       <center><?php echo $gift;?></center>
                    </div>
                    <div class="modal-footer">
                        <a href="/user/rutkimcuong" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase">Rút Kim Cương</a>
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" onclick="javascript:void($('#modal_register_gift').hide(500))">Đóng</button>
                    </div>
                </div>
            </div>
        </div>