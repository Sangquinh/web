<?// thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user(); // gọi giá trị user đang login
    
    if(!$_SESSION['token']) {
        $gift = "<font color=black>Bạn Chưa Đăng Nhập!</font>";
    }else {

        if($kun->check_user_nhan_qua() == true) {
            $gift = "<font color=black>Bạn Đã Nhận Quà Rồi!</font>";
        }else {

            $rand = rand(20, 30); // số kim cương ngẫu nhiên
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

<script>
    swal("Thông Báo", "<?php echo $gift;?>");
</script>