<?php
// Kiểm tra trạng thái cài đặt website
if (!(file_exists('HIEUVIP22CONFIG/hieuvip22database.php'))) {   
header("Location: /install");            
}

 // Define Chống vào thẳng file
define("KUNKEYPR", true); // gán defined chống khách vào thẳng file

 // Require Hàm hệ thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user(); // gọi giá trị user đang login

	// web setting

$_logo = $kun->settings('logo');
$_banner = $kun->settings('banner');
$_title = $kun->settings('title');
$_admin = $kun->settings('admin');
$_color = $kun->settings('color');
$_thongbao = $kun->settings('thongbao');


	// Title

$exec_url = $_SERVER['REQUEST_URI'];
	
	if($exec_url == '/' || $exec_url == '/index.php' || $exec_url == '/index.html') {
		$title = $_title['title'].' - '.$_title['name'];
	}else if ($kun->tim_chuoi($exec_url, 'html/quay/')) {
		$title = 'Vòng quay kim cương';
	}else if ($kun->tim_chuoi($exec_url, 'body/random/KC2')) {
		$title = 'Bánh kim cương';
	}else if ($kun->tim_chuoi($exec_url, 'body/random/KC1')) {
		$title = 'Nồi bánh chưng';		
	}else if ($kun->tim_chuoi($exec_url, 'html/quay11')) {
		$title = 'Máy xèng cánh diều tuổi thơ';
	}else if ($kun->tim_chuoi($exec_url, 'html/quay12')) {
		$title = 'Bingo tiệc bãi biển';
	}else if ($kun->tim_chuoi($exec_url, 'html/quay6')) {
		$title = 'Hoa phượng nở rực';	
	}else if ($kun->tim_chuoi($exec_url, 'html/quay9')) {
		$title = 'VÒNG QUAY BINGO TẾT TRUNG THU 20K';
	}else if ($kun->tim_chuoi($exec_url, 'html/quayso3')) {
		$title = 'Quay số trúng thưởng';			
	}else if ($kun->tim_chuoi($exec_url, 'body/random/FREEFIRE')) {
		$title = 'FREE FIRE GIÁ RẺ ';
	}else if ($kun->tim_chuoi($exec_url, 'body/lienquan')) {
		$title = 'LIÊN QUÂN GIÁ RẺ ';		
	}else if ($kun->tim_chuoi($exec_url, 'nap-tien.html')) {
		$title = 'Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, 'doimatkhau')) {
		$title = 'Đổi Mật Khẩu';
	}else if ($kun->tim_chuoi($exec_url, 'lichsugiaodich')) {
		$title = 'Lịch Sử Giao Dịch';
	}else if ($kun->tim_chuoi($exec_url, 'html/lichsuquay')) {
		$title = 'Lịch Sử Quay';		
	}else if ($kun->tim_chuoi($exec_url, 'lichsunapthe')) {
		$title = 'Lịch Sử Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/html/kimcuong')) {
		$title = 'Rút Kim Cương';
	}else if ($kun->tim_chuoi($exec_url, '/html/quanhuy')) {
		$title = 'Rút Quân Huy';
	}else if ($kun->tim_chuoi($exec_url, 'lich-su-mua.html')) {
		$title = 'Lịch Sử Mua';
	}else if ($kun->tim_chuoi($exec_url, '/user.html')) {
		$title = 'Trang Cá Nhân';
	}else if ($kun->tim_chuoi($exec_url, 'login/doipass')) {
		$title = 'Đổi Mật Khẩu';
	}else if ($kun->tim_chuoi($exec_url, 'lich-su-giaodich.html')) {
		$title = 'Lịch Sử Giao Dịch';
	}else if ($kun->tim_chuoi($exec_url, '/nap-tien.html')) {
		$title = 'Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/lich-su-nap.html')) {
		$title = 'Lịch Sử Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/latbai')) {
		$title = 'MÒ CUA BẮT ỐC';
	}else if ($kun->tim_chuoi($exec_url, '/latbai1')) {
		$title = 'QUAF TIẾP TẾ';
	}else if ($kun->tim_chuoi($exec_url, '/latbai2')) {
		$title = 'GIẢI NHIỆT MÙA HÈ';
	}else if ($kun->tim_chuoi($exec_url, 'sieucap')) {
	$title = 'Bánh Dày Kính Dâng';
	}else if ($kun->tim_chuoi($exec_url, 'sieucap1')) {
		$title = 'Vòng Quay Siêu Cấp'; 
	}else if ($kun->tim_chuoi($exec_url, '/random/freefire/')) {
		$title = 'RANDOM FREE FIRE';
	}else if ($kun->tim_chuoi($exec_url, '/random/lienquan/')) {
		$title = 'RANDOM LIÊN QUÂN';		
	}else if ($kun->tim_chuoi($exec_url, 'lich-su-random.html')) {
		$title = 'LỊCH SỬ MUA RANDOM';
	}else if ($kun->tim_chuoi($exec_url, '/login.html')) {
		$title = 'Đăng Nhập';
	}else if ($kun->tim_chuoi($exec_url, '/reg.html')) {
		$title = 'Đăng Kí';
	}else if ($kun->tim_chuoi($exec_url, 'vongquaycodesung.html')) {
		$title = 'Vòng Quay Code Súng';
	}else if ($kun->tim_chuoi($exec_url, '/nap-the.html')) {
		$title = 'Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/user/rutkc/')) {
		$title = 'Rút Kim Cương Tự Động';
	}



 // một vài cái linh tinh
$token = $_SESSION['token'];
if($token) $btn_login = $user['username'].' - $ '.number_format($user['money']).''; else $btn_login = "Đăng nhập";
if($token) $btn_fbid = 'ID: '.$user['id'].' - $ '.number_format($user['money']).''; else $btn_fbid = "Đăng nhập";
if($token) $btn_reg = "Đăng Xuất"; else $btn_reg = "Đăng Kí";
if($token) $href_login = '/user.html'; else $href_login = "/login.html";
if($token) $href_reg = "/body/logout"; else $href_reg = "/reg.html";
if($kun->is_admin()) $btn_admin = '<li><a href="/admin" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-uppercase c-btn-sbold"></i>Vào Admin</a></li>'; else $btn_admin = '';

    require $root.'/view/header.php';
		if(!$_GET['modun'] && !$_GET['act']) {
		    require $root.'/view/index.php';
		}else {
			$modun = $_GET['modun'];
			$act = $_GET['act'];

					if (file_exists($root.'/view/'.$modun.'/'.$act.'.php')){
		    			require $root.'/view/'.$modun.'/'.$act.'.php';
					}else{
					    echo "<center>404 - Not Found</center>";
					}

		}

    require $root.'/view/footer.php';