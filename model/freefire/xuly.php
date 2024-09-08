<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

$time = time();
$id = abs($_POST['id']);
$giftcode = addslashes($_POST['giftcode']);

if(!$_SESSION['token']) {
    die("<script>swal('Lỗi', 'Bạn Cần Đăng Nhập', 'error');setTimeout(function(){location.href='/signin.html';}, 1500);</script>");
}


$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `nickff` WHERE `id`='".$id."' AND `status`='1'"));


if(!$row['id']) {
    die("<script>swal('Lỗi', 'Tài Đã Bị Mua Hoặc Không tồn tại!', 'error');</script>");
}



if($giftcode) {
$rowe = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `giftcode` WHERE `giftcode`='".$giftcode."' AND `action`='mua_acc' AND `status`='true' AND `expire` > ".$time));

if(!$rowe['id']) {
    die("<script>swal('Lỗi', 'Mã GiftCode Không Chính Xác Hoặc Đã Được Sử Dụng!', 'error');</script>");
}
    $row['giatien'] = $row['giatien'] * (100 - $rowe['percent']) / 100; // tính giá thực để trừ tiền
}


if($row['giatien'] > $user['money']) {
    die("<script>swal('Lỗi', 'Bạn Không Đủ Tiền Để Mua Nick Freefire Này!', 'error');</script>");
}


        // Update GiftCode
    mysqli_query($kun->connect_db(),"UPDATE `giftcode` SET `username` = '".$user['username']."', `status` = 'false' WHERE `giftcode` = '".$giftcode."'");
    	// Update vào lịch sử user
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `hisnick`) VALUES ('".$user['username']."', 'Mua Nick', '".$row['id']."', '-".number_format($row['giatien'])."đ', 'Mua Nick Freefire #".$row['id']."', '".time()."', '1')");
    	// Update Tiền User
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$row['giatien']."' WHERE `username` = '".$user["username"]."'");
    	// Update Trạng thái hòm thính
    mysqli_query($kun->connect_db(),"UPDATE `nickff` SET `nguoimua` = '".$user['username']."', `status`='0' WHERE `id` = '".$id."'");

    echo "<script>swal('Thông Báo!', 'Bạn Vừa Mua Nick Freefire #".$row['id']." Thành Công! Vui Lòng Kiểm Tra Lại Thông Tin Nick Trong Phần Tài Khoản Đã Mua!', 'success');reload_money();</script>";
?>
