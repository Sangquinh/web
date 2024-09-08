<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

$condition = "";
if(isset($_POST['loc'])) {



    if($_POST['maso']) {
        $condition .= " AND `id`='".$_POST['maso']."'";
    }

    if($_POST['price']) {

        switch ($_POST['price']) {
            case 'duoi-50k':
                $condition .= " AND `giatien`<= 50000";
                break;
            case 'tu-50k-200k':
                $condition .= " AND `giatien` >= 50000 AND `giatien` <= 200000 ";
                break;
            case 'tu-500k-1-trieu':
                $condition .= " AND `giatien` >= 500000 AND `giatien` <= 1000000";
                break;
            case 'tren-1-trieu':
                $condition .= " AND `giatien` >= 1000000";
                break;
            case 'tren-5-trieu':
                $condition .= " AND `giatien` >= 5000000";
                break;
            case 'tren-10-trieu':
                $condition .= " AND `giatien`>= 1000000";
                break;
        }

    }

    if($_POST['rank']) {
        $condition .= " AND `rank`='".$_POST['rank']."'";
    }

    if($_POST['nhanvat']) {
        $condition .= " AND `nhanvat`='".$_POST['nhanvat']."'";
    }

    if($_POST['pet']) {
        $condition .= " AND `pet`='".$_POST['pet']."'";
    }

}

$sql = "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition." ORDER BY time DESC LIMIT $start, $kmess";

 $result = mysqli_query($kun->connect_db(), $sql);
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `nickff` WHERE `status`='1' AND `nguoimua`='null' ".$condition));
?>


    <div class="container content-black">

	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-info" role="alert">
					<h2 class="alert-heading" style="color:#000">Free Fire</h2>
                    <p><strong><span style="color:#ff0000">100% Nick Đ&uacute;ng Mật Khẩu Trắng Th&ocirc;ng Tin, TẤT CẢ C&Aacute;C ACC FREE FIRE ĐANG ĐƯỢC GIẢM GI&Aacute; 50%, AE MUA CHƠI NGAY N&Agrave;O !!! [ Hỗ Trợ Lỗi Li&ecirc;n Hệ Page Nh&eacute; ]</span></strong></p>

<p><strong>Lưu &yacute; : Nếu acc c&oacute; m&atilde; đăng nhập th&igrave; bạn chỉ cần nhập m&atilde; đăng nhập shop cung cấp tr&ecirc;n th&ocirc;ng tin&nbsp;l&agrave; được .</strong></p>

<p><strong>Ch&uacute; &yacute; gỡ bỏ tất cả t&agrave;i khoản tr&ecirc;n ứng dụng Facebook sau đ&oacute; đăng nhập nick bằng mạng 3G 4G để hạn chế bị x&aacute;c minh danh t&iacute;nh ( Kh&ocirc;ng Đang Nhập Bằng Wifi )</strong></p>

<p><strong>Kh&aacute;ch h&agrave;ng kh&ocirc;ng được thay đổi Email, SĐT ( v&igrave; đ&oacute; l&agrave; SĐT, Email ảo kh&ocirc;ng ảnh hưởng g&igrave;) chỉ cần đổi mật khẩu , nếu bắt x&aacute;c minh danh t&iacute;nh vui l&ograve;ng b&aacute;o với SHOP để được hỗ trợ x&aacute;c minh kh&ocirc;ng được tự &yacute; x&aacute;c minh</strong></p>

<p><span style="color:#e74c3c"><strong>Anh em&nbsp; mua acc lấy m&atilde; đăng nhập ở phần bổ sung ( nếu c&oacute; ) mỗi m&atilde; chỉ được sử dụng 1 lần ( shop sẽ cung cấp 10 m&atilde; ) , Anh em đăng nhập lỗi hoặc hết m&atilde; vui l&ograve;ng li&ecirc;n hệ với shop để được hỗ trợ !!!</strong></span></p>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 15px">
			<div class="m-l-10 m-r-10">
				<form class="form-inline m-b-10" role="form" method="get">


					<div class="col-md-3 col-sm-4 p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Tìm kiếm</span>
							<input type="text" class="form-control c-square" placeholder="Tìm kiếm" disabled="">

						</div>
					</div>
					<div class="col-md-3 col-sm-4 p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Mã số</span>
							<input type="number" class="form-control c-square" value="" placeholder="Mã số" name="id">

						</div>
					</div>

					<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Giá tiền</span>
							<select style="" class="form-control c-square" name="price">
								<option value="">Chọn giá tiền</option>
		                        <option value="1" >Dưới 50K</option>
		                        <option value="2">Từ 50K - 200K</option>
		                        <option value="3">Từ 200K - 500K</option>
		                        <option value="4">Từ 500K - 1 Triệu</option>
		                        <option value="5">Trên 1 Triệu</option>
		                        <option value="6">Trên 5 Triệu</option>
		                        <option value="7">Trên 10 Triệu</option>
							</select>
						</div>
					</div>

					<div class="col-md-3 col-sm-4 p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Trạng thái</span>
							<select style="" class="form-control c-square">
								<option value="1" selected="">Chưa bán</option>
							</select>
						</div>
					</div>



					<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Nhân Vật</span>
							<select name="nhanvat" class="form-control c-square" title="-- Không chọn --">
								<option value="">-- Không chọn --</option>
								<option value="1" >Nam</option>
								<option value="2" >Nữ</option>
							</select>
						</div>
					</div>


					<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Đăng ký</span>
							<select name="login" class="form-control c-square" title="-- Không chọn --">
								<option value="">-- Không chọn --</option>
								<option value="1" >Facebook</option>
								<option value="2" >Vkontakte</option>
							</select>
						</div>
					</div>


					<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Pet</span>
							<select name="pet" class="form-control c-square" title="-- Không chọn --">
								<option value="">-- Không chọn --</option>
								<option value="1" >Không</option>
								<option value="2" >Có</option>
							</select>
						</div>
					</div>


					<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
						<div class="input-group c-square">
							<span class="input-group-addon">Rank</span>
							<select class="form-control c-square" title="-- Không chọn --">
								<option value="">-- Không chọn --</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 p-5 no-radius">
						<button type="submit" class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
						<a class="btn c-square m-l-0 btn-danger" href="/garena/freefire">Tất cả</a>
					</div>
				</form>
			</div>
		</div>

                    <div class="row row-flex  item-list">

<?php 
while ($row = mysqli_fetch_array($result)) { ?>


	<div class="col-sm-6 col-md-3">
        				<div class="classWithPad">
        					<div class="image">
          	<a href="/nickfreefire/nick-<?php echo $row['id'];?>.html">
        							<img src="<?php echo $kun->get_thumb_freefire($row['id']);?>">
        							<span class="ms">MS: <?php echo $row['id'];?></span>
        						</a>
                     	</div>
        					<div class="description">
        
        					</div>
        					<div class="attribute_info">
        						<div class="row">
        
        
        							<div class="col-xs-6 a_att">
        								Nhân Vật: <b>Nam</b>
        							</div>
        
        
        							<div class="col-xs-6 a_att">
        								Đăng ký: <b>Facebook</b>
        							</div>
        
        
        							<div class="col-xs-6 a_att">
        								Pet: <b>Không</b>
        							</div>
        
        
        						</div>
        					</div>
        <div class="a-more">
            <div class="row">
                <div class="col-xs-6">
                    <div class="price_item">
                        <?php echo number_format($row['giatien']);?>đ

                    </div>
                </div>
                <div class="col-xs-6 ">
                    <div class="view">
                        				  


                        <a href="/body/random/FREEFIRE/acc/<?php echo $row['id'];?>.html">Chi tiết</a>
                        
                        
                                            </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php } ?>


<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/nickff/', $start, $tong, $kmess) . '</center>';
}
?>
	</center>
</div>
</div>




                </div>

             <div id="loading" style="display: none; text-align: center; margin-bottom: 30px;">
                    <div class="loader loader--style7" title="6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <rect x="0" y="0" width="4" height="20" fill="#333">
                          <animate attributeName="opacity" attributeType="XML"
                            values="1; .2; 1"
                            begin="0s" dur="0.6s" repeatCount="indefinite" />
                        </rect>
                        <rect x="7" y="0" width="4" height="20" fill="#333">
                          <animate attributeName="opacity" attributeType="XML"
                            values="1; .2; 1"
                            begin="0.2s" dur="0.6s" repeatCount="indefinite" />
                        </rect>
                        <rect x="14" y="0" width="4" height="20" fill="#333">
                          <animate attributeName="opacity" attributeType="XML"
                            values="1; .2; 1"
                            begin="0.4s" dur="0.6s" repeatCount="indefinite" />
                        </rect>
                      </svg>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="pull-right">
                  <div id="phantrang">
                        <ul id="pagination-demo" class="pagination-sm demo3" style="float:right"></ul>
                  </div>

                </div>
                </div>


        </div>
    </div>





                

<script>
    $(function(){
                        $('#noticeModal').modal('show')



    });
</script>
