<?php
defined('KUNKEYPR') or exit('Restricted Access');

// phân trang trang 2 trở đi bị lỗi nên phải thêm đoạn này
if($kun->tim_chuoi($_GET['cname'], '/page=')) {
	$exp = explode("/page=", $_GET['cname']);
	$_GET['cname'] = $exp[0];
	$_REQUEST['page'] = $exp[1];
}


$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $thread = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire` WHERE `cname`='".$_GET['cname']."'"));
 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire_nick` WHERE `status`='true' AND `cname`='".$_GET['cname']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire_nick` WHERE `status`='true' AND `cname`='".$_GET['cname']."'"));
?>









<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->


  <div class="container content-black">

    
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info" role="alert">
                      <p></p><p><span style="color:#c0392b"><span style="font-size:16px"><strong><?php echo $row['name'];?></strong></span></span></p>
                      
                      
                      
                      
                            
                    <p></p><p><span style="color:#c0392b"><span style="font-size:16px"><strong>Thử Vận May Phải Chấp Nhận Hên Xui</strong></span></span></p>

<p><strong>100% Nick Đúng Mật Khẩu, 20% Nick Có Skin Hot, 30% Nick Có 3000 KC, 25% Nick Cùi, 5% Nick Bị Xác Minh</strong></p>

<p><strong>Tất Cả Tài Khoản Đăng Nhập Bằng Facebook</strong></p>

<p><strong>Không hỗ trợ những ních tự xác minh ảnh&nbsp;</strong></p>

<p><strong>Chú ý&nbsp;gỡ bỏ&nbsp;tất cả tài khoản trên ứng dụng Facebook sau đó&nbsp;đăng nhập nick bằng mạng 3G 4G&nbsp;để hạn chế&nbsp;bị xác minh danh tính</strong></p>

<p><strong>Khách hàng không được thay đổi&nbsp;Email ( vì đó là&nbsp;&nbsp;Email ảo không ảnh hưởng gì) chỉ cần đổi mật khẩu . tự ý thay thông tin không hỗ trợ</strong></p><p></p>
                </div>
            </div>
        </div>

<style type="text/css">
    .form-control {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    box-shadow: none;
    outline: none;
    font-weight: 300;
    background: while;
    border-color: #fcfcfc;
}

</style>


        
                    <div class="row row-flex  item-list">


<?php 
while ($row = mysqli_fetch_array($result)) { ?>

                



<div class="col-sm-6 col-md-3">
    <div class="classWithPad">
        <div class="image">

            <a href="#" class="load-modal" rel="/buyruby/201059">
                <img src="<?php echo $thread['thumb'];?>">
                			<span class="ms">MS: #<?php echo $row['id'];?></span>
			</a>
			</div>


			<div class="attribute_info">
			<div class="row">
			<div class="col-xs-6 a_att">
			Tỉ lệ: <b>100% trúng</b>
			</div>
			<div class="col-xs-6 a_att">
			Thể loại: <b>Random</b>
			</div>

			<div class="a-more">
			<div class="row">
			<div class="col-xs-6">
			<div class="price_item">
			<?php echo number_format($thread['giatien']);?>đ
			</div>
			</div>
			<div class="col-xs-6 ">
			<div class="view">
			<a href="#" class="load-modal" onclick="getdata('<?php echo $row['id'];?>')">Mua ngay</a>
			</div>
			</div>


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
echo '<center>' . $kun->phantrang('/random-freefire/'.$_GET['cname'].'/', $start, $tong, $kmess) . '</center>';
}
?>
	</center>
</div>

</div>


</div>

<style type="text/css">
	.modal-dialog {
    top: 180;
}
</style>

<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>

</div>
        </div>
    </div>
</div>
        
<script type="text/javascript">
	function getdata(id) {
		var curModal = $('#LoadModal');
		curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/img/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


			$.ajax({
                method: "POST",
                url: "/model/random_freefire/laythongtin.php",
                data: {
                    id: id
                },
                success : function(response){
					curModal.modal('show').find('.modal-content').html(response);
                }
            });



	}
</script>