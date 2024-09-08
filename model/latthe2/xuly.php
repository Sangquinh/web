<?php

require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

// check session
if(!$_SESSION['token']) {
		die(json_encode(array('status' => 3,'data' => 'Bạn Cần Đăng Nhập!','msg' => 'lỗi!')));
}

$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_latthe2`"));

// check tiền
if($row['giatien'] > $user['money']) {
		die(json_encode(array('status' => 4,'data' => 'Bạn không đủ tiền để chơi!','msg' => 'lỗi!')));
}

// thư viện tỷ lệ
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Element.php';
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Randomizer.php';


// chạy tỷ lệ
  $randomizer = new Randomizer();
  
  $randomizer          ->add( new Element('1', $row['item_1'])) 
                       ->add( new Element('2', $row['item_2'])) 
                       ->add( new Element('3', $row['item_3']))
                       ->add( new Element('4', $row['item_4'])) 
                       ->add( new Element('5', $row['item_5']))
                       ->add( new Element('6', $row['item_6'])) 
                          ;
            $kundeptrai = $randomizer->get();       

// gán random giá trị hình random 1x-99x
$rand = rand(10, 999); // số kim cương ngẫu nhiên
// gán item và hình ảnh sau khi chạy tỷ lệ
switch ($kundeptrai) {
    case '1':
    $vongquay = 1;
    $img = '/assets/img/latthe2/1.png'; // 9,999 kc
        break;
    case '2':
    $vongquay = 2;
    $img = '/assets/img/latthe2/2.png';      // 399 kc
        break;
    case '3':
    $vongquay = 3;
    $img = '/assets/img/latthe2/3.png';      // 19,999 kc
        break;
    case '4':
    $vongquay = 4;
    $img = '/assets/img/latthe2/4.png';    // 99 kc
        break;
    case '5':
    $vongquay = 5;
    $img = '/assets/img/latthe2/5.png';   // 999 kc
        break;
    case '6':
    $vongquay = 6;
    $img = '/assets/img/latthe2/6.png';    // 14,999 kc
        break;
         
}

// gán giá trị theo tỷ lệ 
if($vongquay == 1){
    $gift = "Kết Quả: Bạn Trúng 2.999 Kim Cương"; 
    $kimcuong = 2999;
}elseif($vongquay == 2){
    $gift = "Kết Quả: Bạn Trúng 14.999 Kim Cương";
    $kimcuong = 14999;
}elseif($vongquay == 3){
    $gift = "Kết Quả: Bạn Trúng Gã Hề Joker 21 Kim Cương";
    $kimcuong = 21;
}elseif($vongquay == 4){
    $gift = "Kết Quả: Bạn Trúng 999 Kim Cương";
    $kimcuong = 999;
}elseif($vongquay == 5){
    $gift = "Kết Quả: Bạn Trúng 399 Kim Cương";
    $kimcuong = 399;
}elseif($vongquay == 6){
    $gift = "Kết Quả: Bạn Trúng 6.999 Kim Cương";
    $kimcuong = 6999;
}




//UPDATE Kimcuong vào acc
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kimcuong."' WHERE `username` = '".$user["username"]."'");
// update tiền  
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$row['giatien']."' WHERE `username` = '".$user["username"]."'"); 
// update lich su
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'LẬT THẺ JOKER', 'LẬT THẺ JOKER', '-".number_format($row['giatien'])."đ', '".$gift."', '".time()."')");
// xuất json
	die(json_encode(array('status' => 1,'img' => $img,'msg' => $gift)));

