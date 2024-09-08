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


	<div class="c-layout-sidebar-content ">
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
    <div class="c-content-title-1">
        <h3 class="c-font-uppercase c-font-bold">Thẻ cào đã nạp</h3>
        <div class="c-line-left"></div>
    </div>
    <form class="form-horizontal form-find m-b-20" role="form" method="get">

        <div class="row">

            <div class="col-md-4">
                <div class="input-group m-b-10 c-square ">
                    <span class="input-group-addon" id="basic-addon1">Thẻ cào</span>
                                        <input type="text" class="form-control c-square c-theme" name="find" value="" autofocus="" placeholder="Serial">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <span class="input-group-addon" id="basic-addon1">Loại thẻ</span>
                    <select class="form-control c-square c-theme">.
                        <option value=""> Tất cả loại thẻ</option>

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <span class="input-group-addon" id="basic-addon1">Kiểu nạp </span>
                    <select id="type_charge" class="form-control c-square c-theme">

                        <option value="0" selected="">
                            Nạp tự động
                        </option>
                    </select>
                </div>
            </div>


        </div>

        <div class="row">


            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <span class="input-group-addon" id="basic-addon1">Trạng thái</span>
                    <select id="status" class="form-control c-square c-theme">.
                        <option class="stt_all" value=""> Tất cả</option>
                    </select>

                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy" data-rtl="false">
                        <span class="input-group-btn">
                                    <button class="btn default c-btn-square p-l-10 p-r-10" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                        <input type="text" class="form-control c-square c-theme" name="started_at" autocomplete="off" autofocus="" placeholder="Từ ngày" value="">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy" data-rtl="false">
                        <span class="input-group-btn">
                                    <button class="btn default c-btn-square p-l-10 p-r-10" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                        <input type="text" class="form-control c-square c-theme" name="ended_at" autocomplete="off" placeholder="Đến ngày" value="">
                    </div>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-md-4">
                <button type="submit" class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
            </div>
        </div>



    </form>

    <div class="row">
        <div class="col-md-12">
            <a class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px" href="/lich-su-nap.html"><i class="glyphicon glyphicon-calendar"></i> Hôm nay</a>
            <a class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px" href="/lich-su-nap.html"><i class="glyphicon glyphicon-calendar"></i> Hôm qua</a>
            <a class="btn c-btn-square m-b-10 btn-danger" style="margin-left: 0px" href="/lich-su-nap.html"><i class="glyphicon glyphicon-calendar"></i> Tất cả</a>
        </div>
    </div>

                <table class="table table-hover table-custom-res">
        <thead>
            <tr role="row">
                                                <th>ID</th>
                                                <th>Mệnh giá</th>
                                                <th>Tình trạng</th>
                                                <th>Loại thẻ</th>
                                                <th>Số seri</th>
                                                <th>Mã thẻ</th>
                    </tr>
                    </thead>
	                    <tbody>
<?php 

	while($row = mysqli_fetch_array($result)) {
		if($row['status'] == 0) {
			$status = '<p style="color: red;">Thất Bại</p>';
		}else if($row['status'] == 1) {
			$status = '<p style="color: green;">Thành Công</p>';
		}else if($row['status'] == 2) {
			$status = '<p style="color: yellow;">Chờ Duyệt</p>';
		}
		?>
                                    <tr>
                                    	<td><?php echo $xss->xss_clean($row['id']);?></td>
                                        <td><?php echo number_format($xss->xss_clean($row['amount']));?>đ</td>
                                        <td><?php echo $xss->xss_clean($status);?></td>
                                        <td><?php echo $xss->xss_clean($row['type']);?></td>
                                        <td class="text-center"><?php echo $xss->xss_clean($row['serial']);?></td>
                                        <td class="text-center"><?php echo $xss->xss_clean($row['pin']);?></td>
                                    	<td><?php echo date('d/m H:i', $row['time']);?></td>
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
							echo '<center>' . $kun->phantrang('/user/lichsunapthe/', $start, $tong, $kmess) . '</center>';
							}
							?>
							</div>
		</div>
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
</div>



    </div>