<?php
defined('KUNKEYPR') or exit('Restricted Access');
$id = intval($_GET['id']);

$check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT COUNT(*) FROM `nickff` WHERE `id`='".$id."'"));

if($check < 1){
	die ('<div style="padding-left:20px;font-size: 30px;text-align:center"><b style="color:red">Tài khoản Không tồn tại trên hệ thống!</b></div>');
}


$getrank = array("K.Rank","Đồng", "Bạc", "Vàng", "B.Kim", "K.Cương", "H.Thoại", "T.Đấu");
$getnv = array("NULL", "Nam", "Nữ");
$getpet = array("Có", "Không");
$gettvc = array("Có", "Không");
$getdk = array("Facebook", "vkontakte");
$result = mysqli_query($kun->connect_db(), "SELECT * FROM `nickff` WHERE `id` = '".$id."' LIMIT 1");

while($getdv = mysqli_fetch_assoc($result)){
?>



  <div class="container content-black">
    <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
        <div class="container">
            <div class="c-shop-product-details-4">
                <div class="row">
                    <div class="col-md-4 m-b-20">
                        <div class="c-product-header">
                            <div class="c-content-title-1">
   <h3 class="c-font-uppercase c-font-bold">#<?=$getdv['id']?></h3>
                                <span class="c-font-red c-font-bold">FreeFire</span>
                            </div>
                        </div>
                    </div>
      <div class="col-sm-12 visible-sm visible-xs visible-sm">
                        <div class="text-center m-t-20">
							<img class="img-responsive img-thumbnail" src="<?php echo $kun->get_thumb_freefire($getdv['id']);?>">
                        </div>
 <div class="c-product-meta">
                            <div class="c-content-divider">
                                <i class="icon-dot"></i>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Đăng ký: <span class="c-font-red"><?=$getdk[$getdv['dangky']]?></span></p>
</div>
 <div class="col-sm-4 col-xs-6 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Pet: <span class="c-font-red"><?=$getpet[$getdv['pet']]?></span></p>
</div>
<div class="col-sm-4 col-xs-6 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red"><?=$getrank[$getdv['rank']]?></span></p>
</div>

<div class="col-sm-4 col-xs-6 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nhân Vật: <span class="c-font-red"><?=$getnv[$getdv['nhanvat']]?></span></p>
</div>
<div class="col-sm-4 col-xs-6 col-lg-3 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">THẺ VÔ CỰC: <span class="c-font-red"><?=$gettvc[$getdv['tvc']]?></span></p>
</div>
<div class="col-sm-12 col-xs-12 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nổi bật: <span class="c-font-red"><?=$getdv['noibat'];?></span></p>
</div>
</div>
<div class="c-content-divider">
<i class="icon-dot"></i>
</div>
</div>
</div>
   <div class="col-md-4">
                        <div class="c-product-meta">
                            <div class="c-product-price c-theme-font" style="float: none;text-align: center"> 
                                <?=number_format($getdv['giatien']);?> CARD
                            </div>
                        </div>
                    </div>
<div class="col-md-4 text-right">
<div class="c-product-header">
<div class="c-content-title-1">
<button onclick="get_data('<?=$getdv['id']?>')" class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal"></i> Mua ngay</button>

<a href="/user/napthe" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">Nạp Thẻ</a>
</div>
</div>
</div>
</div>




<div class="c-content-divider hidden-lg hidden-md">
<i class="icon-dot"></i>
</div>

<div class="c-product-meta visible-md visible-lg">
<div class="c-content-divider">
<i class="icon-dot"></i>
</div>
<div class="row">
<div class="col-sm-4 col-xs-6 col-lg-3 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Đăng ký: <span class="c-font-red"><?=$getdk[$getdv['dangky']]?></span></p>
</div>
<div class="col-sm-4 col-xs-6 col-lg-3 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Pet: <span class="c-font-red"><?=$getpet[$getdv['pet']]?></span></p>
</div>
<div class="col-sm-4 col-xs-6 col-lg-3 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red"><?=$getrank[$getdv['rank']]?></span></p>
</div>
<div class="col-sm-4 col-xs-6 col-lg-3 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nhân Vật: <span class="c-font-red"><?=$getnv[$getdv['nhanvat']]?></span></p>
</div>

<div class="col-sm-12 col-xs-12 c-product-variant">
<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nổi bật: <span class="c-font-red"><?=$getdv['noibat'];?></span></p>
</div>
</div>
<div class="c-content-divider">
<i class="icon-dot"></i>
</div>
</div>
</div>
</div>
<div class="container m-t-20 content_post">


						

    <?php 
        $path = $_SERVER["DOCUMENT_ROOT"]."/upload/nickff/";
        $dir = $path.'info/'.$id;

                  if ($opendirectory = opendir($dir)){
                    while (($file = readdir($opendirectory)) !== false){

                        if ($file != "." && $file != "..") {
                        echo '<p><img class="zoom" style="max-width: 100%;" src="/upload/nickff/info/'.$id.'/'.$file.'"></p>';
        				}
                  	}

                    closedir($opendirectory);
                  }
    ?>


<div class="buy-footer" style="text-align: center">
<button onclick="get_data('<?=$getdv['id']?>')" type="button" class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal">Mua ngay</button>
    </div>

        </div>

  
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
  function get_data(id) {
    var curModal = $('#LoadModal');
    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/img/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


      $.ajax({
                method: "POST",
                url: "/model/freefire/laythongtin.php",
                data: {
                    id: id
                },
                success : function(response){
          curModal.modal('show').find('.modal-content').html(response);
                }
            });

  }
</script>

<?php } ?>  