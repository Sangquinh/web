<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

// check session
if(!$_SESSION['token']) {
		die(json_encode(array('status' => 3,'data' => 'Bạn Cần Đăng Nhập!','msg' => 'lỗi!')));
}

$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo4`"));

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

  $rand = rand(10, 999); // số kim cương ngẫu nhiên
// gán item và hình ảnh sau khi chạy tỷ lệ
switch ($kundeptrai) {
    case '1':
    $vongquay = 1;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay);
        break;
    case '2':
    $vongquay = 2;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay);       
        break;
    case '3':
    $vongquay = 3;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay);     
        break;
    case '4':
    $vongquay = 4;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay);   
        break;
    case '5':
    $vongquay = 5;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay); 
        break;
    case '6':
    $vongquay = 6;
    $location = array('role_1' => $vongquay, 'role_2' => $vongquay, 'role_3' => $vongquay);         
        break;
    case '8':
    $vongquay = "8";
    $role_1=rand(1,6);$role_2=rand(1,6);$role_3=rand(1,6);
    $location = array('role_1' => $role_1, 'role_2' => $role_2, 'role_3' => $role_3); 
        break;    
}



// gán giá trị theo tỷ lệ 
if($vongquay == 1){
    $gift = "Bạn Nhận được 19 Kim Cương"; 
    $kimcuong = 19;
}elseif($vongquay == 2){
    $gift = "Bạn Nhận được 99 Kim Cương";
    $kimcuong = 99;
}elseif($vongquay == 3){
    $gift = "Bạn Nhận được 999 Kim Cương";
    $kimcuong = 999;
}elseif($vongquay == 4){
    $gift = "Bạn Nhận được 6.999 Kim Cương";
    $kimcuong = 6999;
}elseif($vongquay == 5){
    $gift = "Bạn Nhận được 14.999 Kim Cương";
    $kimcuong = 14999;
}elseif($vongquay == 6){
    $gift = "Bạn Nhận được 19.999 Kim Cương";
    $kimcuong = 19999;
}

//UPDATE Kimcuong vào acc
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `kimcuong` = `kimcuong` + '".$kimcuong."' WHERE `username` = '".$user["username"]."'");
// Update Lần sử dụng vòng quay
    mysqli_query($kun->connect_db(), "UPDATE `setting_bingo4` SET `sudung` = `sudung` + 1");
// update tiền  
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$row['giatien']."' WHERE `username` = '".$user["username"]."'"); 
// update lich su
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`, `history`) VALUES ('".$user['username']."', 'VÒNG QUAY BINGO TẾT TRUNG THU', 'VÒNG QUAY BINGO TẾT TRUNG THU', '-".number_format($row['giatien'])."đ', '".$gift."', '".time()."', '10')");
// xuất json
	die(json_encode(array('status' => 1,'data' => $location,'msg' => $gift)));

