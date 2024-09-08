<?php

defined("KUNKEYPR") or exit("Restricted Access");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $giatien = $_POST["giatien"];

    $mota = $_POST["mota"];
    
    $vq_image = $_POST["image"];
    $vq_thumb = $_POST["thumb"];

    $item = "text_";
    $kimcuong = "kimcuong_";
    $tyle = "tyle_";

    for ($i = 1; $i <= 8; $i++) {
        $data[] = [
            "text" => $_POST[$item . $i],
            "kimcuong" => $_POST[$kimcuong . $i],
            "tyle" => $_POST[$tyle . $i],
        ];
    }

    $time = time();
    mysqli_query(
        $kun->connect_db(),
        "INSERT INTO `vongquay_kimcuong` (`id`, `name`, `image`, `thumb`, `mota`, `giatien`, `sudung`, `time`) VALUES (NULL, '$name', '$vq_image', '$vq_thumb', '', '$giatien', '0', '$time')"
    );

    $last_id = mysqli_fetch_assoc(
        mysqli_query(
            $kun->connect_db(),
            "SELECT * FROM `vongquay_kimcuong` order by `id` desc limit 1"
        )
    );

    mysqli_query(
        $kun->connect_db(),
        "INSERT INTO `vongquay_kimcuong_gift` (`id_vongquay`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`) VALUES ('" .
            $last_id["id"] .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[0])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[1])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[2])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[3])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[4])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[5])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[6])
            ) .
            "', '" .
            mysqli_real_escape_string(
                $kun->connect_db(),
                json_encode($data[7])
            ) .
            "')"
    );
    
    /*
    $path = $_SERVER["DOCUMENT_ROOT"] . "/upload/wheel_data";
    // ảnh thumb
    if ($_FILES["thumb"]["error"] == 0) {
        $arr = explode(".", $_FILES["thumb"]["name"]);
        move_uploaded_file(
            $_FILES["thumb"]["tmp_name"],
            $path . "/thumb/" . $last_id["id"] . "." . end($arr)
        );
    }
    // ảnh thông tin

    if ($_FILES["image"]["error"] == 0) {
        $arrc = explode(".", $_FILES["image"]["name"]);
        move_uploaded_file(
            $_FILES["image"]["tmp_name"],
            $path . "/image/" . $last_id["id"] . "." . end($arrc)
        );
    }
    if (
        $imageFileType != "jpg" &&
        $imageFileType != "png" &&
        $imageFileType != "jpeg" &&
        $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    */

    echo '<div class="alert alert-info bg-info text-white border-0" role="alert">Thêm Vòng Quay <b>"' .$name .'" Thành Công!</b></div>';
}
?>
<h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Thêm Vòng Quay!</h3>
<br>
<form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
    <div class="form-body">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tên Vòng Quay</h4>
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên cho vòng quay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Giá Tiền mỗi lần quay</h4>
                        <div class="form-group">
                            <input type="number" id="giatien" name="giatien" class="form-control" placeholder="Nhập giá mỗi lần quay cho vòng quay">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ảnh Thumbnail (hiện ở index)</h4>
                        <div class="form-group">
                            <!--<input class="currency form-control" id="thumb" type="file" name="thumb" accept="thumb/*">-->
                            <input class="currency form-control" id="thumb" type="url" name="thumb" placeholder="https://i.imgur.com/u27W7ui.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ảnh Vòng Quay (8 phần quà)</h4>
                        <div class="form-group">
                            <!--<input class="currency form-control" id="image" type="file" name="image" accept="image/*">-->
                            <input class="currency form-control" id="image" type="url" name="image" placeholder="https://i.imgur.com/u27W7ui.jpg">
                        </div>
                    </div>
                </div>
            </div>
<?php 
$rows = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong_gift` WHERE `id_vongquay`='".$_GET['id']."'"));
$item = 'item_';
for($x=1;$x<=8;$x++) {
$items = $rows[$item.$x];

$json = json_decode($items, true);

 ?>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">Thông Số Phần Quà <?php echo $x;?> </h4>
                        </center>
                        <h4 class="card-title">Text hiện khi quay trúng</h4>
                        <div class="form-group">
                            <input type="text" id="text_<?php echo $x;?>" name="text_<?php echo $x;?>" class="form-control" placeholder="Text Hiện Khi Quay Trúng">
                        </div>
                        <h4 class="card-title">Giá Trị(Kim Cương)</h4>
                        <div class="form-group">
                            <input type="number" id="kimcuong_<?php echo $x;?>" name="kimcuong_<?php echo $x;?>" min="0" class="form-control" placeholder="Kim Cương Trúng" value="0" required="">
                        </div>
                        <h4 class="card-title">Tỷ Lệ Trúng(%)</h4>
                        <div class="form-group">
                            <input type="number" id="tyle_<?php echo $x;?>" name="tyle_<?php echo $x;?>" min="0" max="100" class="form-control" placeholder="Tỷ Lệ Trúng" value="0" required="">
                        </div>
                    </div>
                </div>
            </div> <?php } ?> <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mô Tả Cho Vòng Quay</h4>
                        <div class="form-group">
                            <textarea name="mota" rows="6" class="form-control no-resize" placeholder="Bạn muốn nói gì về vòng quay kim cương này..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions mt-4">
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary waves-effect">
                        <i class="fa fa-plus"></i>
                        <span>Tạo Vòng Quay</span>
                    </button>
                </div>
            </div>
            </div>
            </div>
            </form>
            <script type="text/javascript">
                function validate() {
                    valid = true;
                    if ($("#name").val() == '') {
                        valid = false;
                        alert('Thiếu Tên!');
                    } else if ($("#giatien").val() == '') {
                        valid = false;
                        alert('Thiếu Giá Tiền!');
                    } else {
                        if ($("#text_1").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 1!');
                        } else if ($("#kimcuong_1").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 1!');
                        } else if ($("#tyle_1").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 1!');
                        } else if ($("#text_2").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 2!');
                        } else if ($("#kimcuong_2").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 2!');
                        } else if ($("#tyle_2").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 2!');
                        } else if ($("#text_3").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 3!');
                        } else if ($("#kimcuong_3").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 3!');
                        } else if ($("#tyle_3").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 3!');
                        } else if ($("#text_4").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 4!');
                        } else if ($("#kimcuong_4").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 4');
                        } else if ($("#tyle_4").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 4!');
                        } else if ($("#text_5").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 5!');
                        } else if ($("#kimcuong_5").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 5!');
                        } else if ($("#tyle_5").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 5!');
                        } else if ($("#text_6").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 6!');
                        } else if ($("#kimcuong_6").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 6!');
                        } else if ($("#tyle_6").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 6!');
                        } else if ($("#text_7").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 7!');
                        } else if ($("#kimcuong_7").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 7!');
                        } else if ($("#tyle_7").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 7!');
                        } else if ($("#text_8").val() == '') {
                            valid = false;
                            alert('Thiếu Text Phần Quà 8!');
                        } else if ($("#kimcuong_8").val() == '') {
                            valid = false;
                            alert('Thiếu Giá Trị 8!');
                        } else if ($("#tyle_8").val() == '') {
                            valid = false;
                            alert('Thiếu Tỷ Lệ 8!');
                        } else {
                            valid = true;
                        }
                    }
                    return valid //true or false
                }
            </script>