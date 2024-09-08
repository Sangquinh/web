<?php
if(!$kun->is_admin()) {
	 die('<center><h1>Access Denied!!!</h1></center>');
}else {
	mysqli_query($kun->connect_db(), "DELETE FROM `giftcode` WHERE `id`='".$_GET['id']."' AND `status`='true'");
	echo '<script>location.href="/admin/?modun=giftcode&act=index";</script>';
}
?>