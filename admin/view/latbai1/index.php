<?php
defined('KUNKEYPR') or exit('Restricted Access');
?>


<?php

     //lấy tỷ lệ vòng quay bingo
    $_bingo = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_latthe1`"));
    $item_1 = $_bingo['item_1'];
    $item_2 = $_bingo['item_2'];
    $item_3 = $_bingo['item_3'];
    $item_4 = $_bingo['item_4'];
    $item_5 = $_bingo['item_5'];
    $item_6 = $_bingo['item_6'];
    $giatien = $_bingo['giatien']; 



if(isset($_POST['submit'])) {

    $item_1s = $_POST["item_1"];
    $item_2s = $_POST["item_2"];
    $item_3s = $_POST["item_3"];
    $item_4s = $_POST["item_4"];
    $item_5s = $_POST["item_5"];
    $item_6s = $_POST["item_6"];
    $giatien = $_POST["giatien"];

      if(
       $item_1s ||
       $item_2s || 
       $item_3s || 
       $item_4s || 
       $item_5s || 
       $item_6s || 
       $giatien
   ){
$cmd = "UPDATE `setting_latthe1` SET
        `item_1` = '$item_1s',
        `item_2` = '$item_2s',
        `item_3` = '$item_3s',
        `item_4` = '$item_4s',
        `item_5` = '$item_5s',
        `item_6` = '$item_6s',
        `giatien` = '$giatien'
        ";

         mysqli_query($kun->connect_db(), $cmd);


        echo '<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">Chỉnh sửa thành công</div>';
                        echo '<meta http-equiv=refresh content="1; URL=">';
    }else{
        echo '<div class="alert alert-danger alert-dismissible bg-primary text-white border-0 fade show" role="alert">Vui lòng nhập đủ thông tin</div>';
    }
}
?>




                            <form method="POST">
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title"><b>CHỈNH SỬA TỈ LỆ LẬT THẺ HOA PHƯỢNG</b></h2>

<div class="row">

                                            <div class="col-md-2 col-lg-2 col-xs-12">
                                                <label>9.999 Kim Cương</label>
                                                <div class="form-group">
                                                     <input type="text" name="item_1" class="form-control" value="<?php echo $item_1;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-lg-2 col-xs-12">
                                                <label>Hoa Phượng Mùa Hè 19 Kim Cương</label>
                                                <div class="form-group">
                                                     <input type="text" name="item_2" class="form-control" value="<?php echo $item_2;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-lg-2 col-xs-12">
                                                <label>399 Kim Cương</label>
                                                <div class="form-group">
                                                     <input type="text" name="item_3" class="form-control" value="<?php echo $item_3;?>">
                                                </div>
                                            </div>


                                            <div class="col-md-2 col-lg-2 col-xs-12">
                                                <label>999 Kim Cương</label>
                                                <div class="form-group">
                                                     <input type="text" name="item_4" class="form-control" value="<?php echo $item_4;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-lg-2 col-xs-12">
                                                <label>14.999 Kim Cương</label>
                                                <div class="form-group">
                                                    <input type="text" name="item_5" class="form-control" value="<?php echo $item_5;?>">
                                                </div>
                                            </div>



                                            <div class="col-md-2 col-lg-2 col-xs-12">
                                                <label>2.999 Cương</label>
                                                <div class="form-group">
                                                    <input type="text" name="item_6" class="form-control" value="<?php echo $item_6;?>">
                                                </div>
                                            </div>



                                            <div class="col-md-4 col-lg-4 col-xs-12">
                                                <label>Số Tiền Mỗi Lần Lật Bài:</label>
                                                <div class="form-group">
                                                    <input name="giatien" type="text" value="<?php echo $giatien;?>" class="form-control" placeholder="Nhập Số Tiền Mỗi Lượt Quay">
                                                </div>
                                            </div>





                            <div class="col-md-12"> 
                                <center><button type="submit" name="submit" class="btn btn-info">Cập Nhật</button></center>
                            </div>


</div>


                            </div>
                        </div>
                    </div>
</div>



                            </form>





