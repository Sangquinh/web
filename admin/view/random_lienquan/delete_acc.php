<?php
if(!$kun->is_admin()) {
	 die('<center><h1>Access Denied!!!</h1></center>');
}else {	
	mysqli_query($kun->connect_db(), "DELETE FROM `random_lienquan_nick` WHERE `id`='".$_GET['id']."'");	
	echo '<script>location.href="/admin/?modun=random_lienquan&act=index";</script>';
}
?>