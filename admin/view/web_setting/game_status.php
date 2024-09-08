<?php 
defined('KUNKEYPR') or exit('Restricted Access');

//echo $kun->hienthi_game('banaccff');
function option_default($value) {
    switch ($value) {
        case '1':
            return '<option value="1">Đang Bật</option>';
            break;
        case '0':
            return '<option value="0">Đang Tắt</option>';
            break;
    }
}

$banaccff = option_default($kun->hienthi_game('banaccff'));
$vanmayff = option_default($kun->hienthi_game('vanmayff'));
$homthinhff = option_default($kun->hienthi_game('homthinhff'));
$bingo5 = option_default($kun->hienthi_game('bingo5'));
$homkimcuong = option_default($kun->hienthi_game('homkimcuong'));
$lienquan = option_default($kun->hienthi_game('lienquan'));


if(isset($_POST['submit'])) {

    $data = array(
        'banaccff' => $_POST['banaccff'],
        'vanmayff' => $_POST['vanmayff'],
        'homthinhff' => $_POST['homthinhff'],
        'bingo5' => $_POST['bingo5'],
        'homkimcuong' => $_POST['homkimcuong'],
        'lienquan' => $_POST['lienquan']
    );

    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value`='".mysqli_escape_string($kun->connect_db(), json_encode($data))."' WHERE `key`='hienthi_game'"); 
    echo '<div class="alert alert-success"><strong>CẬP NHẬT THÀNH CÔNG!</strong></div>';
    echo '<meta http-equiv=refresh content="1; URL=">';
}
?>




                            <form method="post" action="">
                <div class="row">



                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> BÁN ACC FREEFIRE</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="banaccff" class="form-control" id="exampleFormControlSelect1">
                                            <?php echo $banaccff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">BINGO</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="vanmayff" class="form-control" id="exampleFormControlSelect1">
                                           <?php echo $vanmayff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  HÒM THÍNH BÍ ẨN</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="homthinhff" class="form-control" id="exampleFormControlSelect1">
                                             <?php echo $homthinhff;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>





                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Hòm Kim Cương</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="homkimcuong" class="form-control" id="exampleFormControlSelect1">
                                             <?php echo $homkimcuong;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">BINGO</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="bingo5" class="form-control" id="exampleFormControlSelect1">
                                              <?php echo $bingo5;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  BÁN ACC LIÊN QUÂN</h4>
                                <form class="mt-4">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Hiển Thị</label>
                                        <select name="lienquan" class="form-control" id="exampleFormControlSelect1">
                                            <?php echo $lienquan;?>
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>








                            <div class="col-md-12"> 
                                        <center><button type="submit" name="submit" class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">CẬP NHẬT</button></center>
                            </div>


                            </form>
                </div>









