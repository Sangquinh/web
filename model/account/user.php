<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;


switch ($_POST['type']) {
	case 'login':
		$kun->check_login();

$u = addslashes($_POST['username']);
$p = addslashes($_POST['password']);

if(!$u || !$p) {
	die('<script>toastr["error"]("Hãy điền đầy đủ thông tin! ", "Lỗi")</script>');
}

if($kun->check_user($u,$p) == true) {

$token = $kun->Creat_Token(30);

 
    $res = mysqli_query($kun->connect_db(), "UPDATE users SET token = '".$token."', ip = '".$_SERVER['REMOTE_ADDR']."' WHERE `username`='".$u."'");

    $_SESSION['token'] = $token;
 
	echo '<script>toastr["success"]("Đăng nhập thành công!", "Thông Báo")</script>';
	echo '<meta http-equiv="refresh" content="0;URL=/" />';

}else {
	echo '<script>toastr["error"]("Đăng nhập thất bại! ", "Thông Báo")</script>';
}








		break;

	case 'register':
	$kun->check_login();

	

$u = $_POST['username'];
$e = $_POST['email'];

$p = $_POST['password'];
$rp = $_POST['repassword'];


if(!$e || !$u  || !$p || !$rp) {
	die('<script>toastr["error"]("Hãy điền đầy đủ thông tin! ", "Lỗi")</script>');
}


$syntax = array('<' , '>' , '"' , "'" , '$'  , ',' , '*' , '!' , '(' , ')' , ';' , ':' , '?' , '+' , '=' , '#' , '/','-');


foreach ($syntax as $key) {
	if($kun->tim_chuoi($n,$key) == true) {
	die('<script>toastr["error"]("Tên của bạn không được có kí tự lạ! ", "Lỗi")</script>');
	}

	if($kun->tim_chuoi($u,$key) == true) {
	die('<script>toastr["error"]("Tên tài khoản không được có kí tự lạ! ", "Lỗi")</script>');
	}
	if($kun->tim_chuoi($e,$key) == true) {
	die('<script>toastr["error"]("Email Không đúng định dạng! ", "Lỗi")</script>');
	}


	if($kun->tim_chuoi($p,$key) == true) {
	die('<script>toastr["error"]("Mật khẩu không được có kí tự lạ! ", "Lỗi")</script>');
	}

}

	if($kun->tim_chuoi($n,'.') == true) {
	die('<script>toastr["error"]("Tên của bạn không được có kí tự lạ! ", "Lỗi")</script>');
	}

	if($kun->tim_chuoi($u,'.') == true) {
	die('<script>toastr["error"]("Tên tài khoản không được có kí tự lạ! ", "Lỗi")</script>');
	}
	if($kun->tim_chuoi($e) == true) {
	die('<script>toastr["error"]("Email không được có kí tự lạ! ", "Lỗi")</script>');
	}

	if($kun->dectect_tiengviet($u) == true) {
	die('<script>toastr["error"]("Tên tài khoản phải là tiếng việt không dấu! ", "Lỗi")</script>');
	}




if(strlen($u) > 30) {
	die('<script>toastr["error"]("Tên tài khoản không được quá 30 kí tự! ", "Lỗi")</script>');
}

if(strlen($u) < 6) {
	die('<script>toastr["error"]("Tên tài khoản không nhỏ hơn 6 kí tự! ", "Lỗi")</script>');
}

if(strlen($e) > 30) {
	die('<script>toastr["error"]("Email không được quá 30 kí tự! ", "Lỗi")</script>');
}

if(strlen($e) < 6) {
	die('<script>toastr["error"]("Email không nhỏ hơn 6 kí tự! ", "Lỗi")</script>');
}

if(strlen($p) < 6) {
	die('<script>toastr["error"]("Mật khẩu phải lớn hơn 6 kí tự! ", "Lỗi")</script>');
}


if($rp !== $p) {
	die('<script>toastr["error"]("2 mật khẩu bạn nhập không giống nhau! ", "Lỗi")</script>');
}







$u = $kun->rewrite($u);


if($kun->check_user_register($u) == false) {

$token = $kun->Creat_Token(30);
$auth =  $kun->Creat_Token(30);

$time = time();
  
  
$verify_code = rand(10000, 99999);
 
 $cmd = "INSERT INTO users (fbid, admin, name, username,  money, password, email, token, auth, ip, verify_code, verify, time) VALUES ('0', 0, '".$n."', '".$u."', 10000, '".md5($p)."', '".$e."', '".$token."','".$auth."', '".$_SERVER['REMOTE_ADDR']."', '".$verify_code."', 'true', '".$time."')";

    $res = mysqli_query($kun->connect_db(), $cmd);

    $_SESSION['token'] = $token;


	echo '<script>toastr["success"]("Đăng kí thành công!", "Thông Báo")</script>';
	echo '<meta http-equiv="refresh" content="0;URL=/" />';

}else {

	echo '<script>toastr["error"]("Tên tài khoản đã có người sử dụng! ", "Thông Báo")</script>';


}

		break;
		

	
	case 'get-money':
		if($_SESSION['token']) {
			$user = $kun->user();
			die(json_encode(array('status'=>true, 'code'=> 200, 'money'=> number_format($user['money']), 'msg'=>'success')));
		}else {
			die(json_encode(array('status'=>false, 'code'=> 500, 'money'=> '', 'msg'=>'disconnect to server!')));
		}

		break;
	
	
	default:
		echo '<script>toastr["error"]("Lỗi hệ thống! Vui lòng thử lại sau!", "Thông Báo")</script>';
		break;
}

?>
