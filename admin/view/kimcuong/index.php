<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);


 $sql = mysqli_query($kun->connect_db(), "SELECT * FROM `kimcuong` WHERE `status`='1' ORDER BY `time` DESC LIMIT $start, $kmess");
 $sql2 = mysqli_query($kun->connect_db(), "SELECT * FROM `kimcuong` WHERE `status`='0' ORDER BY `time` DESC LIMIT $start, $kmess");
 $tong1 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `kimcuong` WHERE `status`='1'"));
 $tong2 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `kimcuong` WHERE `status`='0"));
?>


<?php 
if(isset($_POST['submit'])) {

$kimcuong = intval($_POST['kimcuong']);
$giatien = intval($_POST['giatien']);
$soluong = intval($_POST['soluong']);

    if($kimcuong && $giatien && $soluong) {

    $i = 1;
    for($i; $i <= $soluong; $i++) {

        mysqli_query($kun->connect_db(), "INSERT INTO `kimcuong` SET 
            `kimcuong`='$kimcuong',
            `giatien`='".abs($giatien)."',  
            `nguoimua` = 'null',         
            `status` = '1',
            `time`='".time()."'
        ");

    }

echo '<div class="alert alert-success fade in alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    <strong>Success!</strong> Đăng bán Hòm Kim Cương
</div>';
echo '<meta http-equiv=refresh content="1; URL=">';

    }else {
echo '<div class="alert alert-danger fade in alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    <strong>Lỗi!</strong> Vui lòng nhập đầy đủ thông tin!
</div>';        
    }

}
?>


                            <form method="post" action="">

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Rương Thần Huyền Bí</h3>

<div class="row">

                                            <div class="col-md-4 col-lg-4 col-xs-12">
                                                <label>Kim Cương:</label>
                                                <div class="form-group">
                                                     <input name="kimcuong" type="text" class="form-control" placeholder="Nhập Số Kim Cương Xuất Hiện Trong Hòm Kim Cương">
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-lg-4 col-xs-12">
                                                <label>Giá Tiền:</label>
                                                <div class="form-group">
                                                     <input name="giatien" type="number" class="form-control" placeholder="Nhập Giá Tiền(nhập 25k)">
                                                </div>
                                            </div>



                                            <div class="col-md-4 col-lg-4 col-xs-12">
                                                <label>Số Lượng :</label>
                                                <div class="form-group">
                                                    <input name="soluong" type="number" min="1" max="50" value="1" class="form-control" placeholder="Nhập Số Lượng...." required="">
                                                </div>
                                            </div>


                            <div class="col-md-12"> 
                                <center><button type="submit" name="submit" class="btn btn-info">ĐĂNG BÁN Hòm Kim Cương</button></center>
                            </div>


</div>


                            </div>
                        </div>
                    </div>
</div>



                             </form>    





<div class="row">
                    <div class="col-lg-6 col-xs-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">KIM CƯƠNG ĐANG BÁN</h3>

<div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                           <th>ID #</th>
                                           <th>Kim Cương</th>
                                           <th>Giá Tiền</th>
                                           <th>Thời Gian</th>
                                           <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        while ($row = mysqli_fetch_array($sql)) {
                                            ?>

                                        <tr>
                                           <th scope="row">#<?php echo $row['id'];?></th>
                                           <td><?php echo $row['kimcuong'];?></td>
                                           <td><?php echo number_format($row['giatien']);?> <sup>vnđ</sup></td>
                                           <td><?php echo date('H:i d/m', $row['time']);?></td>
                                        <td>
                                           <button onclick="del(<?php echo $row['id'];?>)" type="button" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-trash"></i></button>
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
echo '<center>' . $kun->phantrang('/admin/kimcuong/', $start, $tong1, $kmess) . '</center>';
}
?>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">KIM CƯƠNG ĐÃ BÁN</h3>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                           <th>ID #</th>
                                           <th>Người Mua</th>
                                           <th>Kim Cương</th>
                                           <th>Giá Tiền</th>
                                           <th>Thời Gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($row = mysqli_fetch_array($sql2)) {
                                            ?>

                                        <tr>
                                           <th scope="row">#<?php echo $row['id'];?></th>
                                           <td><?php echo $row['nguoimua'];?></td>
                                           <td><?php echo number_format($row['kimcuong']);?> <sup>kim cương</sup></td>
                                           <td><?php echo number_format($row['giatien']);?> <sup>vnđ</sup></td>
                                           <td><?php echo date('H:i d/m', $row['time']);?></td>
                                        </tr> 

                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>

<?php
if ($tong2 > $kmess){
echo '<center>' . $kun->phantrang('/admin/kimcuong/', $start, $tong2, $kmess) . '</center>';
}
?>

                            </div>
                        </div>
                    </div>
</div>




<script type="text/javascript">
function del(id, name) {
     if (confirm('Bạn có chắc muốn xóa Rút Kim Cương này?')) {
            location.href = '?modun=kimcuong&act=delete&id='+id;
        } else {
            alert('Hãy suy nghĩ kĩ trước khi xóa gì đó nhé!');
        }
}
</script>









