<?php
 // Require Hàm hệ thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$version = $config['version'];

require $_SERVER['DOCUMENT_ROOT'].'/lib/Curl/Class.Curl.php';
$cUrl = new cUrl();
$cUrl->url = "https://update.kundeptrai.net/update.php?version=".$version;

echo $cUrl->try_cURL();
?>