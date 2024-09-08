<?php
defined('KUNKEYPR') or exit('Restricted Access');
$banaccff = $kun->hinhanh_game('banaccff');
$lienquan = $kun->hinhanh_game('lienquan');
$mayxeng = $kun->hinhanh_game('mayxeng');
$homkimcuong = $kun->hinhanh_game('homkimcuong');
$homthinhff = $kun->hinhanh_game('homthinhff');
$lattheff = $kun->hinhanh_game('lattheff');
$lattheff1 = $kun->hinhanh_game('lattheff1');
$lattheff1 = $kun->hinhanh_game('lattheff2');


if(isset($_POST['submit'])) {

    $data = array(
        'banaccff' => $_POST['banaccff'],
        'lienquan' => $_POST['lienquan'],
        'mayxeng' => $_POST['mayxeng'],
        'homkimcuong' => $_POST['homkimcuong'],
        'homthinhff' => $_POST['homthinhff'],
        'bingo5' => $_POST['bingo5'],
        'lattheff1' => $_POST['lattheff1'],

    );

    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value`='".mysqli_escape_string($kun->connect_db(), json_encode($data))."' WHERE `key`='hinhanh_game'"); 
    echo '<div class="alert alert-success"><strong>CẬP NHẬT THÀNH CÔNG!</strong></div>';
    echo '<meta http-equiv=refresh content="1; URL=">';
}
?>


    

                <div class="row">
                    <div class="col-12">

                        <form action="" method="post">


                        <!-- Row -->
                        <div class="row">


                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $banaccff;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Bán Acc Free Fire</h4>

                                                <div class="form-group">
                                                    <input type="text" name="banaccff" class="form-control" value="<?php echo $banaccff;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

      <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $lienquan;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Bán Acc Liên Quân</h4>

                                                <div class="form-group">
                                                    <input type="text" name="lienquan" class="form-control" value="<?php echo $lienquan;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                           
                      <!-- column -->
                          
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $mayxeng;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">VÒNG QUAY HỖN MANG</h4>

                                                <div class="form-group">
                                                    <input type="text" name="mayxeng" class="form-control" value="<?php echo $mayxeng;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                  

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $homthinhff;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">HÒM THÍNH FREE FRIRE</h4>

                                                <div class="form-group">
                                                    <input type="text" name="homthinhff" class="form-control" value="<?php echo $homthinhff;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $homkimcuong;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">HÒM KIM CƯƠNG</h4>

                                                <div class="form-group">
                                                    <input type="text" name="homkimcuong" class="form-control" value="<?php echo $homkimcuong;?>">
                                                </div>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?php echo $lattheff1;?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">LẬT THẺ MAY MẮN</h4>

                                                <div class="form-group">
                                                    <input type="text" name="lattheff1" class="form-control" value="<?php echo $lattheff1;?>">
                                                </div>
                                                
                                                   </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            

                            <div class="col-md-12"> 
                                        <center><button type="submit" name="submit" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">CẬP NHẬT ẢNH</button></center>
                            </div>



                            </form>


                        </div>
                        <!-- Row -->
                    </div>
                </div>





