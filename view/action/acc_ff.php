<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Mua Nick' AND `username`='".$user['username']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Mua Nick' AND `username`='".$user['username']."'"));
?>




 <div class="c-layout-sidebar-content ">
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->

    
    <div class="c-content-title-1">
        <h3 class="c-font-uppercase c-font-bold">Tài khoản đã mua</h3>
        <div class="c-line-left"></div>
    </div>
    <form class="form-horizontal form-find m-b-20" role="form" method="get">

        <div class="row">
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square ">
                    <span class="input-group-addon" id="basic-addon1">Mã tài khoản #</span>
                    <input type="text" class="form-control c-square c-theme" name="id" value="" autofocus="" placeholder="Mã tài khoản">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <span class="input-group-addon" id="basic-addon1">Game</span>

                    <select id="group_id" class="form-control c-square c-theme">
                        <option value="">-- Tất cả các game --</option>
                    </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <span class="input-group-addon" id="basic-addon1">Trạng thái</span>
                    <select class="form-control c-square c-theme">.
                        <option value=""> Tất cả </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
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
            <div class="col-md-4">
                <div class="input-group m-b-10 c-square">
                    <span class="input-group-addon" id="basic-addon1">Số tiền</span>
                    <select name="game" class="form-control c-square c-theme">
                        <option value="">Chọn giá tiền</option>
                        <option value="1">Dưới 50K</option>
                        <option value="2">Từ 50K - 200K</option>
                        <option value="3">Từ 200K - 500K</option>
                        <option value="4">Từ 500K - 1 Triệu</option>
                        <option value="5">Trên 1 Triệu</option>
                        <option value="6">Trên 5 Triệu</option>
                        <option value="7">Trên 10 Triệu</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="submit" class="btn c-theme-btn c-btn-square m-b-10" value="Tìm kiếm">
                <a class="btn c-btn-square m-b-10 btn-danger" href="/lich-su-mua.html">Tất cả</a>
            </div>
        </div>


    </form>
				<table class="table table-hover table-custom-res">
					<tbody>
					<tr>
						<th>ID</th>
						<th>Giao dịch</th>
						<th>Số tiền</th>
						<th>Thời gian</th>
						<th>Hành động</th>
					</tr>



					</tbody>
					<tbody>
<?php 

	while($row = mysqli_fetch_array($result)) {
		$id_acc = $row['action_name'];
		?>
                                    <tr>
                                        <td>#<?php echo $row['id'];?></td>
                                        <td><?php echo $row['mota'];?></td>
                                        <td><span class="c-font-bold text-danger"><?php echo $row['sotien'];?></span></td>
                                        <td><?php echo date('d/m H:i', $row['time']);?></td>
                          <?php
                           if($row['hisnick'] == 1){
                                        ?>
                                        <td class="action_area_2"><button onclick="check_thong_tin('<?php echo $id_acc;?>')" type="button" class="btn c-bg-dark c-font-white c-btn-square btn-xs  load-modal" rel="/tran/acc/check-login?id=<?php echo $id_acc;?>">Thông Tin</button></td>
                                    </tr>
                                    <?php
}
?>
                                    
  <?php
if($row['hisnick'] == 2){
?>
                                        <td class="action_area_2"><button onclick="check_thong_tin_lq('<?php echo $id_acc;?>')" type="button" class="btn c-bg-dark c-font-white c-btn-square btn-xs  load-modal" rel="/tran/acc/check-login?id=<?php echo $id_acc;?>">Thông Tin</button></td>
                                    </tr>
                                        
<?php
}
?>
		<?php
	}
?>

                        </tbody>
                    </table>
                    
                    <!-- END: PAGE CONTENT -->        

                  <div class="text-center">	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/user/accfreefire/', $start, $tong, $kmess) . '</center>';
}
?></div>



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

<script type="text/javascript">
  function check_thong_tin_lq(id) {
    var curModal = $('#LoadModal');
    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


      $.ajax({
                method: "POST",
                url: "/model/lienquan/lienquandamua.php",
                data: {
                    id: id
                },
                success : function(response){
          curModal.modal('show').find('.modal-content').html(response);
                }
            });

  }
</script>

<script type="text/javascript">
  function check_thong_tin(id) {
    var curModal = $('#LoadModal');
    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


      $.ajax({
                method: "POST",
                url: "/model/freefire/nickffdamua.php",
                data: {
                    id: id
                },
                success : function(response){
          curModal.modal('show').find('.modal-content').html(response);
                }
            });

  }
</script>
