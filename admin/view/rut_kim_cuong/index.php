<?php
defined("KUNKEYPR") or exit("Restricted Access");
$kmess = 7; // Số phim hiện trong mỗi page
$page =
    isset($_REQUEST["page"]) && $_REQUEST["page"] > 0
        ? intval($_REQUEST["page"])
        : 1;
$start = isset($_REQUEST["page"])
    ? $page * $kmess - $kmess
    : (isset($_GET["start"])
        ? abs(intval($_GET["start"]))
        : 0);
/*
$sql = $kun->connect_db()->query("SELECT * FROM `rut_kim_cuong` WHERE `status`='2' ORDER BY `time` DESC LIMIT $start, $kmess");
$sql2 = mysqli_query(
    $kun->connect_db(),
    "SELECT * FROM `rut_kim_cuong` WHERE `status`='1' ORDER BY `time` DESC LIMIT $start, $kmess"
);
$tong1 = mysqli_num_rows(
    mysqli_query(
        $kun->connect_db(),
        "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'"
    )
);
$tong2 = mysqli_num_rows(
    mysqli_query(
        $kun->connect_db(),
        "SELECT * FROM `rut_kim_cuong` WHERE `status`='0"
    )
);
*/
$all_history = $kun->connect_db()->query("SELECT * FROM `rut_kim_cuong` ORDER BY `time` DESC");
$total_history = $all_history->num_rows;

$show_history = $kun->connect_db()->query("SELECT * FROM `rut_kim_cuong` ORDER BY `time` DESC LIMIT $start, $kmess");
?>


<div class="row">
  <div class="col-md-12 col-lg-12 col-xs-12">
    <div class="card">
      <div class="card-body">
        <b>LỊCH SỬ RÚT KIM CƯƠNG</b>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th>STT</th>
              <th>Người rút</th>
              <th>ID GAME</th>
              <th>Kim Cương</th>
              <th>Thời gian</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
          <?php
          while ($row = mysqli_fetch_array($show_history)) {
            if($row['status'] == 0) {
              $status = '<p style="color: red;">Thất Bại</p>';
            }else if($row['status'] == 1) {
              $status = '<p style="color: green;">Thành Công</p>';
            }else if($row['status'] == 2) {
              $status = '<p style="color: black;">Chờ Duyệt</p>';
            }
            ?>
            <tr>
              <th scope="row"># <?php echo $row['id'];?> </th>
              <td> <?php echo $row['username'];?> </td>
              <td> <?php echo $row['idgame'];?> </td>
              <td> <?php echo $row['kimcuong'];?> </td>
              <td> <?php echo date('d/m G:i', $row['time']);?> </td>
              <td> <?php echo $status;?> </td>
            </tr>
          <?php }?>
          </tbody>
        </table>
        <?php
        if ($total_history > $kmess){
            echo $kun->pag('/admin/rutkimcuong/', $total_history, $kmess, $page);
        }
        ?>
      </div>
    </div>
  </div>
</div>