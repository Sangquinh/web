<?php
defined('KUNKEYPR') or exit('Restricted Access');
?>

<?php

     //lấy tỷ lệ vòng quay bingo
    $_bingo = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
    $item_1 = $_bingo['item_1'];
    $item_2 = $_bingo['item_2'];
    $item_3 = $_bingo['item_3'];
    $item_4 = $_bingo['item_4'];
    $item_5 = $_bingo['item_5'];
    $item_6 = $_bingo['item_6'];
    $item_7 = $_bingo['item_7'];
    $item_8 = $_bingo['item_8'];
    $giatien = $_bingo['giatien'];




if(isset($_POST['submit'])) {

    $item_1s = $_POST["item_1"];
    $item_2s = $_POST["item_2"];
    $item_3s = $_POST["item_3"];
    $item_4s = $_POST["item_4"];
    $item_5s = $_POST["item_5"];
    $item_6s = $_POST["item_6"];
    $item_7s = $_POST["item_7"];
    $item_8s = $_POST["item_8"];
    $giatien = $_POST["giatien"];

      if(
       $item_1s ||
       $item_2s || 
       $item_3s || 
       $item_4s || 
       $item_5s || 
       $item_6s || 
       $item_7s || 
       $item_8s ||
       $giatien 
   ){
$cmd = "UPDATE `setting_bingo` SET
        `item_1` = '$item_1s',
        `item_2` = '$item_2s',
        `item_3` = '$item_3s',
        `item_4` = '$item_4s',
        `item_5` = '$item_5s',
        `item_6` = '$item_6s',
        `item_7` = '$item_7s',
        `item_8` = '$item_8s',
        `giatien` = '$giatien'
        ";

         mysqli_query($kun->connect_db(), $cmd);


        echo '<div class="alert alert-info bg-info text-white border-0" role="alert">Chỉnh sửa thành công</div>';
        echo '<meta http-equiv=refresh content="1; URL=">';
    }else{
        echo '<div class="alert alert-danger bg-info text-white border-0" role="alert">Vui lòng nhập đủ thông tin</div>';
    }
}
?>



<h2><b>CHỈNH SỬA TỈ LỆ RỒNG THẦN</b></h2><br>



                            <form method="POST">

    <div class="row">


                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">19 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" id="name" name="item_1" class="form-control" value="<?php echo $item_1;?>">
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">99 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" id="name" name="item_2" class="form-control" value="<?php echo $item_2;?>">
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">399 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" id="name" name="item_3" class="form-control" value="<?php echo $item_3;?>">
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">999 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" id="name" name="item_4" class="form-control" value="<?php echo $item_4;?>">
                                    </div>
                            </div>
                        </div>
                    </div>
  <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">2.999 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" id="name" name="item_5" class="form-control" value="<?php echo $item_5;?>">
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">6.999 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" id="name" name="item_6" class="form-control" value="<?php echo $item_6;?>">
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">14.999 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" name="item_7" class="form-control" value="<?php echo $item_7;?>">                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">19.999 Kim Cương</h4>
                                    <div class="form-group">
                                        <input type="text" name="item_8" class="form-control" value="<?php echo $item_8;?>">                                    </div>
                            </div>
                        </div>
                    </div>

          



                    <div class="col-sm-12 col-md-12 col-lg-12">



                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Số Tiền Mỗi Lượt Quay:</h4>
                                    <div class="form-group">
                                        <input name="giatien" type="text" value="<?php echo $giatien;?>" class="form-control" placeholder="Nhập Số Tiền Mỗi Lượt Quay">
                                                                            </div>
                            </div>
                        </div>
                    </div>









              <div class="text-center "><button type="submit" name="submit" class="btn btn-primary waves-effect">
                                        <i class="fa fa-cogs"></i>
                                        <span>Cập Nhập</span>
                                    </button></div>



        </div>
                            </form>

