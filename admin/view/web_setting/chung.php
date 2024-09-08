<?php 
defined('KUNKEYPR') or exit('Restricted Access');

$logo = $kun->settings('logo');
$banner = $kun->settings('banner');
$title = $kun->settings('title');
$admin = $kun->settings('admin');
$color = $kun->settings('color');
$thongbao = $kun->settings('thongbao');
$napthe = $kun->settings('napthe');
$rkc = $kun->settings('rut_kc');
//$brick = $kun->settings('brick');
$cardv3 = $kun->settings('cardv3');
if(isset($_POST['submit'])) {

	$_title = json_encode(array('title'=> $_POST['web_title'], 'name'=>$_POST['web_name']));
	$_logo = json_encode(array('url'=> $_POST['web_logo'], 'height'=>$_POST['web_logo_x'], 'width'=>$_POST['web_logo_y']));
	$_banner = json_encode(array('url'=> $_POST['web_banner']));
	$_color = json_encode(array('color'=> $_POST['web_color']));
	$_admin = json_encode(array('name'=> $_POST['admin_name'], 'phone'=>$_POST['admin_phone'], 'facebook'=>$_POST['admin_facebook'], 'youtube'=> $_POST['admin_youtube']));
	$_thongbao = json_encode(array('thongbao'=> $_POST['web_thongbao'], 'time'=> $_POST['web_thongbao_time']));

    $_napthe = json_encode(array('kieunap'=> $_POST['web_napthe'], 'api_key'=> $_POST['api_key'], 'site' => $_POST['web_brick']));
    //$_brick = json_encode(array('site'=> $_POST['web_brick'], 'partner_id'=> null, 'partner_key' => null));
    $_rutkc = json_encode(array('key_kc' => $_POST['key_kc'], 'phi_kc' => ((int) $_POST['phi_kc'])));
    $_cardv3 = json_encode(array('site' => $_POST['cardv3_site'], 'id' => $_POST['cardv3_id'], 'key' => $_POST['cardv3_key']
    ));

	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_title)."' WHERE `key` = 'web_title'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_logo)."' WHERE `key` = 'web_logo'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_banner)."' WHERE `key` = 'web_banner'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_color)."' WHERE `key` = 'web_color'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_admin)."' WHERE `key` = 'web_admin'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_thongbao)."' WHERE `key` = 'web_thongbao'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_napthe)."' WHERE `key` = 'web_napthe'");
    //mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_brick)."' WHERE `key` = 'web_brick'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_rutkc)."' WHERE `key` = 'rut_kc'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '". mysqli_escape_string($kun->connect_db(), $_cardv3) . "' WHERE `key` = 'web_cardv3'");

        echo '<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success!</strong> Chỉnh sửa thành công</div>';
		echo '<meta http-equiv="refresh" content="1;URL=" /> ';
}


?>
                            <form method="post" action="">
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Tiêu đề WebSite</h4>
                                      <div class="form-group">
                                        <input name="web_title" type="text" class="form-control" value="<?php echo $title['title'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Tên Website:</h4>
                                      <div class="form-group">
                                        <input name="web_name" type="text" class="form-control" value="<?php echo $title['name'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Url Logo:</h4>
                                      <div class="form-group">
                                        <input name="web_logo" type="text" class="form-control" value="<?php echo $logo['url'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Chiều Cao:</h4>
                                      <div class="form-group">
                                        <input name="web_logo_x" type="text" class="form-control" value="<?php echo $logo['height'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Chiều Rộng:</h4>
                                      <div class="form-group">
                                        <input name="web_logo_y" type="text" class="form-control" value="<?php echo $logo['width'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Hình Ảnh Banner:</h4>
                                      <div class="form-group">
                                        <input name="web_banner" type="text" class="form-control" value="<?php echo $banner['url'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Màu Chủ Đề:</h4>
                                      <div class="form-group">
                                        <input id="color" type="color" onchange="javascript:document.getElementById('chosen-color').value = document.getElementById('color').value;" class="form-control" value="<?php echo $color['color'];?>">
                                      </div>
                                      <span class="input-group-addon">
                                        <i style="background-color: rgb(121, 227, 237);"></i>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Màu Chủ Đề (Mã Màu):</h4>
                                      <div class="form-group">
                                        <input name="web_color" type="text" id="chosen-color" class="form-control" value="<?php echo $color['color'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Họ Tên Admin:</h4>
                                      <div class="form-group">
                                        <input name="admin_name" type="text" class="form-control" value="<?php echo $admin['name'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Hotline:</h4>
                                      <div class="form-group">
                                        <input name="admin_phone" type="number" class="form-control" value="<?php echo $admin['phone'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Link Facebook:</h4>
                                      <div class="form-group">
                                        <input name="admin_facebook" type="text" class="form-control" value="<?php echo $admin['facebook'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Link YouTuBe:</h4>
                                      <div class="form-group">
                                        <input name="admin_youtube" type="text" class="form-control" value="<?php echo $admin['youtube'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Thông Báo:</h4>
                                      <div class="form-group">
                                        <textarea class="form-control" name="web_thongbao" rows="8"><?php echo htmlentities($thongbao['thongbao']);?></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <input name="web_thongbao_time" type="hidden" class="form-control" value="<?php
        echo $thongbao['time'];?>">


        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kiểu Nạp Thẻ</h4>
                    <div class="form-group">
                        <select name="web_napthe" class="form-control">
                            <option value="naptudong" <?=($napthe['kieunap'] === "naptudong") ? 'selected=""' :"";?>>Nạp Tự Động</option>
                            <option value="napcham" <?=($napthe['kieunap'] === "napcham") ? 'selected=""' :"";?>>Nạp Chậm</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bên Gạch Thẻ</h4>
                    <div class="form-group">
                        <select name="napthe_site" class="form-control">
                            
                            <option value="cardv3" <?=($napthe['site'] === 'cardv3') ? 'selected=""':'';?>>TheSieuNgon.VN (CardV3)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bên Gạch Thẻ</h4>
                    <div class="form-group">
                        <select name="web_brick" class="form-control">
                            <option value="cardv3" <?=($brick['site'] === 'cardv3') ? 'selected=""':'';?>>TheSieuNgon.VN (CardV3)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Website CardV3</h4>
                    <div class="form-group">
                        <input name="cardv3_site" type="text" class="form-control" value="<?=$cardv3['site'];?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Partner ID CardV3</h4>
                    <div class="form-group">
                        <input name="cardv3_id" type="text" class="form-control" value="<?=$cardv3['id'];?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Partner Key CardV3</h4>
                    <div class="form-group">
                        <input name="cardv3_key" type="text" class="form-control" value="<?=$cardv3['key'];?>">
                    </div>
                </div>
            </div>
        </div>
        <hr>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">KEY RÚT KIM CƯƠNG NAPCARD.VN</h4>
                                      <div class="form-group">
                                        <input name="key_kc" type="text" class="form-control" value="<?php echo $rkc['key_kc'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">PHÍ RÚT KIM CƯƠNG (KIM CƯƠNG)</h4>
                                      <div class="form-group">
                                        <input name="phi_kc" type="number" class="form-control" value="<?php echo $rkc['phi_kc'];?>">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <center>
                                    <button type="submit" name="submit" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">CẬP NHẬT</button>
                                  </center>
                                </div>
                            </form>
                            </div>




