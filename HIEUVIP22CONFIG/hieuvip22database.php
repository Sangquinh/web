<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => 'localhost', // mysql host service
'USERNAME' => 'wshopxukaknet_00000test', // username
'PASSWORD' => 'wshopxukaknet_00000test', // password
'DATABASE' => 'wshopxukaknet_00000test', // database name

'facebook_app_id' => 'null',  //PHẦN NÀY ĐỂ LOGIN FACEBOOK
'facebook_app_key' => 'null',
'home' => 'https://twndemo.tk', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'https://'.$_SERVER['SERVER_NAME'].'/model/cardv3_callback.php', // Không thay đổi
'version' => '8.0.0', // Phiên bản mã nguồn hiện tại
'author' => 'HIEUVIP22',
'contact' => 'https://taowebngon.net'
);
?>