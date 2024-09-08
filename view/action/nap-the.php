<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
require $_SERVER['DOCUMENT_ROOT'].'/lib/xss_anti/xss_anti.php';
$xss = new Xss_Anti; 

$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `username`='".$user['username']."'"));
?>



<div class="c-layout-sidebar-content">
	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
	<div class="c-content-title-1">
		<h3 style="color:white" class="c-font-uppercase c-font-bold">NẠP THẺ</h3>
		<div class="c-line-left"></div>
	</div>
	<?php echo $thong_bao; ?>
	<o id="result"></o>


	   
                <th><span class="c-font-uppercase" data-toggle="tooltip" data-placement="top" title="" data-original-title="Đây là ID tài khoản của bạn không phải mã giới thiệu"><?php echo $row['id'];?></span></th>
      <p style="text-align: center;color: red">*Chú ý: Nạp thẻ sai mệnh giá mất 100% giá trị thẻ</p> 
      <form method="POST" action="https://dichvufbstart.tk/user/napthe" accept-charset="UTF-8" class="form-horizontal form-charge">
       <input name="_token" type="hidden" value="OBZULewE3m8CSwOXJ5kzKJieJxCywdnrmPuo9MmO"> 
       <div class="form-group"> 
        <label class="col-md-3 control-label">Tài khoản:</label> 
        						<div class="col-md-6">
				<div class="input-group c-square">
					<p class="form-control c-square c-theme c-theme-static m-b-0"><?php echo $user['id']; ?>@facebook.com</p>
					<span class="input-group-btn">
						<span class="btn btn-default c-font-dark"><?php echo $user['username']; ?></span>
					</span>
				</div>
			</div>
		</div>
		<div class="form-group">
       
		
			<label class="col-md-3 control-label">Loại thẻ:</label>
			<div class="col-md-6">
				<select class="form-control  c-square c-theme" name="type">
					<option value="VIETTEL">VIETTEL</option>
					<option value="VINAPHONE">VINAPHONE</option>
					<option value="MOBIFONE">MOBIFONE</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Mệnh giá:</label>
			<div class="col-md-6">
				<select class="form-control  c-square c-theme" name="amount">
					<option value="10000">10,000VNĐ</option>
					<option value="20000">20,000VNĐ</option>
					<option value="50000">50,000VNĐ</option>
					<option value="100000">100,000VNĐ</option>
					<option value="200000">200,000VNĐ</option>
					<option value="500000">500,000VNĐ</option>
					
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Mã số thẻ:</label>
			<div class="col-md-6">
				<input class="form-control  c-square c-theme" type="text" name="pin">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Số serial:</label>
			<div class="col-md-6">
				<input class="form-control  c-square c-theme" type="text" name="serial">
			</div>
		</div>

		<div class="form-group c-margin-t-0">
			<div class="col-md-offset-3 col-md-6">
				<button type="submit" name="submit" class="btn btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block">Nạp thẻ
								</button> </div>
		</div> 
       </form> 
      <div class="alert alert-info">

<p class="c-btn-bold">NẠP 100K CARD = 100K TIỀN TRÊN SHOP</p>
<p class="c-btn-bold"><span style="color:#e74c3c">AE VUI LÒNG CHỌN ĐÚNG MỆNH GIÁ THẺ. CHỌN SAI SẼ MẤT THẺ NHÉ.</span></p>
<p class="c-btn-bold">NẠP XONG ĐỢI 5S-1P THẺ SẼ ĐƯỢC DUYỆT VÀ TIỀN SẼ ĐƯỢC CỘNG VÀO TÀI KHOẢN CỦA AE.</p>

    </div>
       
                       <!-- BEGIN: PAGE CONTENT -->
                <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                <div class="c-content-title-1">
                    
                    
                </div>

                <table class="table table-hover table-custom-res">
                    <thead>
                    <tr>
                        <th style="color:white">Thời Gian</th>
                        <th  style="color:white">Nhà mạng</th>
                        <th style="color:white">Mã thẻ</th>
                        <th style="color:white">Serial</th>
                        <th style="color:white">Kiểu Nạp</th>
                        <th style="color:white">Mệnh giá</th>
                        <th style="color:white">Kết Qủa</th>
                    </tr>
                    </thead>
	                    <tbody>
<?php 
	while($row = mysqli_fetch_array($result)) {
		if($row['status'] == 0) {
			$status = '<p class="m-badge  m-badge--success m-badge--wide">Thất Bại</p>';
		}else if($row['status'] == 1) {
			$status = '<p class="m-badge  m-badge--success m-badge--wide">Thành Công</p>';
		}else if($row['status'] == 2) {
			$status = '<p class="m-badge  m-badge--success m-badge--wide">Chờ Duyệt</p>';
		}
		?>
		   <tr>
		       <td><?php echo date('d/m H:i', $row['time']);?></td>
                                        <td><?php echo $xss->xss_clean($row['type']);?></td>
                                        <td class="text-center"><?php echo $xss->xss_clean($row['pin']);?></td>
                                        <td class="text-center"><?php echo $xss->xss_clean($row['serial']);?></td>
                                        <td>Auto</td>
                                        <td><?php echo number_format($xss->xss_clean($row['amount']));?>đ</td>
                                        <td><?php echo $xss->xss_clean($status);?></td>
                                    
                                    </tr>
                                    


		<?php
	}
?>
    
	                    </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->

	                  <div class="text-center">	<center>
							<?php
							if ($tong > $kmess){
							echo '<center>' . $kun->phantrang('/user/napthe', $start, $tong, $kmess) . '</center>';
							}
							?>
					  </div>


                </div>
</div>    
    
    
    </script> 
      </div> 
     </div> 
    </div> 
    <!-- END: PAGE CONTENT --> 
   </div> 
   <!-- END: PAGE CONTENT --> 
</div>
</div>
<script type="text/javascript">
	$("form").submit(function(e) {
		e.preventDefault();
		var form = this;
		var cont = $('#result');

		var type = $('select[name=type]').val();
		var amount = $('select[name=amount]').val();
		var serial = $('input[name=serial]').val();
		var pin = $('input[name=pin]').val();

		if (!type) {
			cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
		} else if (!amount) {
			cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
		} else if (!serial) {
			cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Seri!</div>');
		} else if (!pin) {
			cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Pin!</div>');
		} else {
			cont.html('');
			$('button[name=submit]').attr("disabled", true);
			//$('button[name=submit]').removeAttr("disabled");
			$('button[name=submit]').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý');


			$.ajax({
				type: 'post',
				dataType: "JSON",
				url: '/system/napthe',
				data: {
					type: type,
					amount: amount,
					serial: serial,
					pin: pin,
					token: '<?php echo $user['token']; ?>'
				},
				success: function(json) {
					if (json.status == false) {
						swal("Lỗi!", json.msg, "error");
						cont.html('<div class="alert alert-danger">Lỗi: ' + json.msg + '</div>');
					} else if (json.status == true) {
						swal("Thành Công!", json.msg, "success");
						cont.html('<div class="alert alert-success">Thành Công: ' + json.msg + '</div>');
					} else {
						swal("Lỗi!", "Lỗi hệ thống!", "error");
					}
					$('button[name=submit]').html('NẠP THẺ');
					$('button[name=submit]').removeAttr("disabled");
				}
			});

		}

	});
</script>

                <style>
            .c-layout-page{
                padding: 15px;
                background-color :rgba(0, 0, 0, 0.7);
            }
            input[type="submit"],button[type="submit"]{
                color:black;
                background-color: #f3f08c;
            }
        </style>