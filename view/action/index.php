		<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<?php
if($kun->is_admin()) {
    $level = 'Administrator'; 
}else { 
    $level = 'Thành Viên';


}
?>

    

    
        <!-- BEGIN: PAGE CONTENT -->


<?php require $root.'/view/action/right_menu.php';?>
<?php 
if($_GET['cmd']) {
    require $root.'/view/action/'.$_GET['cmd'].'.php';
}else {
?>
Chức Năng này không tồn tại!


<?php
}
?>