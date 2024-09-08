<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `username`='".$user['username']."' AND `history`='10' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `username`='".$user['username']."' AND `history`='10'"));
?>



        <div class="c-layout-sidebar-content ">
    <!-- BEGIN: PAGE CONTENT -->
                    
    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
    <div class="c-content-title-1">
        <h3 class="c-font-uppercase c-font-bold">Lịch sử quay Vòng quay</h3>
        <div class="c-line-left"></div>
    </div>
    <form class="form-horizontal form-find m-b-20" role="form" method="get">

        <div class="row">
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <div class="input-group m-b-10 c-square">
                        <div class="input-group date" data-rtl="false">
                            <span class="input-group-addon" id="basic-addon1">Tên quà</span>
                            <input type="text" class="form-control c-square c-theme" name="title" autocomplete="off" autofocus="" placeholder="Tên quà" value="">
                        </div>
                    </div>
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
                <input type="submit" class="btn c-theme-btn c-btn-square m-b-10" value="Tìm kiếm">
                <a class="btn c-btn-square m-b-10 btn-danger" href="/user/history/wheel">Tất cả</a>
            </div>
        </div>


    </form>
				<table class="table table-hover table-custom-res">
					<tbody>
					<tr>
						<th>ID</th>
						<th>Giao dịch</th>
						<th>Số tiền</th>
						<th>Mô tả</th>
						<th>Thời gian</th>

					</tr>



					</tbody>
					<tbody>
<?php 
	while($row = mysqli_fetch_array($result)) {
		?>
                                    <tr>
                                        <td>#<?php echo $row['id'];?></td>
                                        <td><?php echo $row['action'];?></td>
                                        <td><span class="c-font-bold text-danger"><?php echo $row['sotien'];?></span></td>
                                        <td><?php echo $row['mota'];?></td>
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
echo '<center>' . $kun->phantrang('/html/lichsuquay/', $start, $tong, $kmess) . '</center>';
}
?></div>

 <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">

    </div>

</div>
                

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