<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $sql = mysqli_query($kun->connect_db(), "SELECT * FROM `rut_quan_huy` WHERE `status`='2' ORDER BY `time` DESC LIMIT $start, $kmess");
 $sql2 = mysqli_query($kun->connect_db(), "SELECT * FROM `rut_quan_huy` WHERE `status`='1' ORDER BY `time` DESC LIMIT $start, $kmess");
 $tong1 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_quan_huy` WHERE `status`='2'"));
 $tong2 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_quan_huy` WHERE `status`='0"));
?>



<?php 

if(isset($_POST['accept_all'])) {
        mysqli_query($kun->connect_db(), "UPDATE `rut_quan_huy` SET `status` = '0' WHERE `status` = '2'");

echo '<div class="alert alert-success"> Duyệt Đơn Quân Huy Thành công!<meta http-equiv="refresh" content="2"></div>';

    }

if(isset($_POST['accept'])) {
        mysqli_query($kun->connect_db(), "UPDATE `rut_quan_huy` SET `status` = '1' WHERE `id` = '".$_POST['id']."'");

echo '<div class="alert alert-success"> Duyệt Đơn Quân Huy Thành công!
    <meta http-equiv="refresh" content="2">
</div>';

    }

if(isset($_POST['not_accept'])) {

        $get_info = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_quan_huy` WHERE `id`='".$_POST['id']."'"));
            // update quanhuy user
        mysqli_query($kun->connect_db(), "UPDATE `users` SET `quanhuy` = `quanhuy` + '".$get_info['quanhuy']."' WHERE `username` = '".$get_info['username']."' ");
            // Update vào lịch sử user
        mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Rút Quân Huy Liên Quân', 'Rút Quân Huy Liên Quân', '+".number_format($get_info['quanhuy'])." kc', 'Hoàn Lại ".number_format($get_info['quanhuy'])." Quân Huy cho đơn hàng #".$_POST['id']."', '".time()."')");

        mysqli_query($kun->connect_db(), "UPDATE `rut_quan_huy` SET `status` = '0' WHERE `id` = '".$_POST['id']."'");

echo '<div class="alert alert-danger">
    <strong>Error !</strong> Đơn hàng này thất bại hoàn Quân Huy !
    <meta http-equiv="refresh" content="2"> 
</div>';

    }

?>






<div class="row">


      <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <b>TỔNG SỐ ĐƠN RÚT QUÂN HUY CẦN DUYỆT</b>
                            </div>

                            <!--
                              <center>
                              <form action="" method="post" id="accept_all">
                                <button type="submit" name="accept_all" class="btn bg-deep-purple waves-effect">
                                    <i class="material-icons">done_all</i>
                                    <span>Hủy Tất Cả Đơn Rút QUÂN HUY</span>
                                </button>
                              </form>                                
                            </center>
                          -->
                        <script type="text/javascript">
                          $("#accept_all").submit(function(e) {
                            if(confirm('Bạn Có Muốn Xóa Tất Cả Đơn Rút Quân Huy không?') == true){
                              if(confirm('Bạn Có Muốn Xóa Tất Cả Đơn Rút Quân Huy không? Hỏi lần thứ 2') == true){
                                if(confirm('Bạn Có Muốn Xóa Tất Cả Đơn Rút Quân Huy không? Lần cuối?') == true){
                                  $("#accept_all").submit();
                                }
                              }
                            }
                          });
                        </script>


                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                       <tr>
                                         <th>STT</th>
                                         <th>Người rút</th>
                                         <th>Tài Khoản</th>
                                         <th>Mật Khẩu</th>
                                         <th>Quân Huy</th>
                                         <th>Thời gian</th>
                                         <th>Tình Trạng</th>
                                         <th>Thao tác</th>
                                       </tr>
                                    </thead>
                                    <tbody>

  <?php

    while ($row = mysqli_fetch_array($sql)) {
          if($row['status'] == 0) {
            $status = '<p style="color: red;">Thất Bại</p>';
          }else if($row['status'] == 1) {
            $status = '<p style="color: green;">Thành Công</p>';
          }else if($row['status'] == 2) {
            $status = '<p style="color: black;">Chờ Duyệt</p>';
          }
      ?>
<tr>
   <th scope="row">#<?php echo $row['id'];?></th>
   <td><?php echo $row['username'];?></td>
   <td><?php echo $row['t'];?></td>
   <td><?php echo $row['p'];?></td>
   <td><?php echo $row['quanhuy'];?></td>
   <td><?php echo date('d/m G:i', $row['time']);?></td>
   <td><?php echo $status;?></td>
   <td>
    <div class="col-md-1 col-sm-1">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <button type="submit" name="accept" data-toggle="tooltip" data-placement="top" title="" data-original-title="Duyệt thẻ" class="btn btn-info btn-outline btn-xs m-r-5 tooltip-info"><i class="fa fa-check"></i></button>
    </form>
   </div>
    <div class="col-md-1 col-sm-1">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <button type="submit" name="not_accept" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xóa yêu cầu" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-times"></i></button>
    </form>
       </div>
   </td>
</tr> 
    <?php
    }
    ?>

                                    </tbody>
                                </table>
                            </div>

<?php
if ($tong1 > $kmess){
echo '<center>' . $kun->phantrang('/admin/rutquanhuy', $start, $tong1, $kmess) . '</center>';
}
?>

                        </div>
                    </div>




</div>