
<?php

	if($kun->is_mobile()) {
		if($kun->hienthi_web('napthe_mobile') == 1) {
			require $root.'/view/Widget/Top_Widget.php';			
		}
	}else {		
		if($kun->hienthi_web('napthe_pc') == 1) {
			require $root.'/view/Widget/Top_Widget.php';			
		}
	}
?>
</style>
<div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
      </div>
      <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
          <?php echo nl2br($_thongbao['thongbao']);?>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Tắt 3h</button>
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="time_popup" value="">
<script>
    $(document).ready(function() {
        var time = $("#time_popup").val();
        if ($("#time_popup").val() == '') {
            time = 0;
        }
        if ($.cookie('noticeModal') != '1' || time == 0) {
            //show popup here
            $('#noticeModal').modal('show')
            var date = new Date();
            var minutes = time * 60;
            date.setTime(date.getTime() + (minutes * 60 * 1000));
            // alert(date);
            $.cookie('c', '1', {
                expires: date
            });
        }
    });
</script>
<!-- BEGIN: PAGE CONTENT -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Oswald');

    .box-title-menu-game {
        text-align: center;
        font-size: 22px;
        margin-bottom: 18px;
        color: #f6bd00;
        font-family: 'Oswald', sans-serif !important;
    }

    .custom1286 {
        background: url(https://quanlyshop.vip/upload/doanhmuc/1654017981966796.png);
        background-size: 136px 36px;
    }

    .custom1286:hover {
        background: url(https://quanlyshop.vip/upload/doanhmuc/1654017981966796.png);
        background-size: 136px 36px;
        filter: saturate(2);
        filter: brightness(130%);
    }

    .custom2108 {
        background: url(https://quanlyshop.vip/upload/doanhmuc/1654017981966796.png);
        background-size: 136px 36px;
    }

    .custom2108:hover {
        background: url(https://quanlyshop.vip/upload/doanhmuc/1654017981432603.png);
        background-size: 136px 36px;
        filter: saturate(2);
        filter: brightness(130%);
    }

    .custom1319 {
        background: url(https://quanlyshop.vip/upload/doanhmuc/1654017981432603.png);
        background-size: 136px 36px;
    }

    .custom1319:hover {
        background: url(https://quanlyshop.vip/upload/doanhmuc/1654017981432603.png);
        background-size: 136px 36px;
        filter: saturate(2);
        filter: brightness(130%);
    }
    
</style>
<style>

		@import url('https://fonts.googleapis.com/css?family=Oswald');

		    .box-title-menu-game {
		    text-align: center;
		    font-size: 22px;
		    margin-bottom: 18px;
		    color: #f6bd00;
		    font-family: 'Oswald', sans-serif !important;
		}





		</style>
	<div class="container" style=" background-color: rgba(0,0,0,0.8); ">
			<div class="c-line-center c-theme-bg c-theme-marquee"></div>			
					<div class="">
				<marquee style="color: #FFFFFF; background-image: url(https://static.nulled.to/public/assets/sparkling.gif); " id="slideText"><p><strong>XIN CHÀO CÁC BẠN SHOP ĐANG ĐUA TOP NẠP THẺ THÁNG NHÉ
</strong></p></marquee>
			</div>
			</div>
<div class="c-layout-page">
    <div class="container" style="background-color:rgba(0,0,0,0.8);margin-bottom:15px;margin-bottom:15px">
        <div class="sa-logmain sa-themain">
<div class="box-title-menu-game">
                <center><img class=" lazyloaded"  src="https://luongchinh.xyz/tep-tin/559354danh mục ff 1.png"></center>
                    <br>
            </div>
	<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
	 ?>
            <div class="sl-prodli">
                <div class="sl-prodbox">
                    <img style="position:absolute;max-width:50%;height:auto;top:-5px;right:-5px;z-index:10" src="https://quanlyshop.vip/upload/doanhmuc/1654019494869405.png">
                    <a class="sl-prlinks" href="/html/quay/
				<?php echo $row['id'];?>">
                       
                        <p class="sl-primg">
                            <img src="
						<?=($row['thumb']=='')?$kun->vongquaykimcuong_image($row['id'], 'thumb'):$row['thumb'];?>">
                        </p>
                           <h3 class="sl-prcode text-center"><span><?php echo $row['name'];?></span></h3>
                    </a>
                    <div class="sl-prifs">
                        <div class="sl-prifbot">
                            <ul>
                                <li style="text-align:left">Số lượt quay: <?php echo number_format($row['sudung'])?> </li>
                            </ul>
                            <span class="outPrice">
                                <span class="oldPrice"> <?php echo $row['mota'];?> </span>
                                <span class="newPrice"> <?php echo number_format($row['giatien']);?>đ </span>
                        </div>
                        <p class="sl-prbot">
                            <a class="custom1286 sl-btnod" href="/html/quay/
								<?php echo $row['id'];?>" title="
								<?php echo $row['name'];?>">
                            </a>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
 </style> <style type="text/css">
@media (max-width: 550px){
.sl-primg {
    height: 107px;
    margin-bottom: 0px !important;
}
}
    .custom1271 {
    background: url(https://luongchinh.xyz/tep-tin/873191choixx.png);
    background-size: 136px 36px;
}

.custom1271:hover{

    background: url(https://luongchinh.xyz/tep-tin/873191choixx.png);
    background-size: 136px 36px;

}
.sl-prifbot {
    padding: 15px;
    max-height: 175px;
    overflow: hidden;
}
.sl-prifbot ul {
    height: initial;
}
.sl-prifbot ul {
    height: initial;
}
@media (min-width: 555px){
.sl-prifbot {
    min-height: 120px;
}
}

.sl-prodbox {
    height: auto;
    padding-bottom: 10px;
    overflow: hidden;
    position: relative;
    background: #1f2228;
    border: 1px solid #30343c;
}
.outPrice {
    padding-top: 20px;
    text-align: center;
    width: 100px;
    margin: 0 auto;
    margin-top: 10px;
    display: flex;
    justify-content: center;
}
.oldPrice {
    text-decoration: line-through;
    color: #666;
    border: 1px solid;
    padding: 5px 15px;
    border-radius: 5px;
}
.newPrice {
    border: 1px solid red;
    padding: 5px 15px;
    color: red;
    display: inline-block;
    border-radius: 5px;
    margin-left: 10px;
}
.custom37 {
    background: url(https://luongchinh.xyz/tep-tin/130546muaxxx.png);
    background-size: 136px 36px;
}
.custom37:hover {
    background: url(https://luongchinh.xyz/tep-tin/130546muaxxx.png);
    background-size: 136px 36px;
}
    #bonus{
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus img{
        width: 100%;
    }
    #bonus_login{
        display:block;
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus_login img{
        width: 100%;
    }
    .mobile{
        width: 30%!important;
    }
    @media  only screen and (max-width: 640px) {
        #bonus_login{width: 50%!important;!important;}
        #bonus img{
       width: 65%!important;}
    }
    #bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>
	<?php } } ?>
 
        </p>
                                
                            </div>
                   
                    
              


            <div class="sa-logmain sa-themain">


            <div class="sl-produl clearfix">

		<?php if($kun->hienthi_game('banaccff') == 1) { ?>
<?php 
?>     
<div class="sl-prodli">
                          <div class="sl-prodbox"> 
                             
<a class="sl-prlinks" href="/body/random/FREEFIRE" title="Thử vận may 25.000đ">
                                                              

                                <p class="sl-primg"><img data-src="<?php echo $kun->hinhanh_game('banaccff');?>" class="lazyload" alt="Thử vận may 25.000đ"></p>
                                 <h3 class="sl-prcode text-center"><span>Acc Free Fire Chơi Được Giá Rẻ</span></h3>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Số Tài Khoản: <b><?php echo $kun->count_acc_ff('conlai');?></b></li> 
          </ul> 
           <span class="outPrice">
                                        <span class="newPrice">
                                                                                            Giảm 50%
                                                                                    </span>
                                    </span>
                                    </div>


                                <p class="sl-prbot"> <a class="custom1319 sl-btnod" href="/body/random/FREEFIRE"> </a> </p>
                            </div>
                        </div>
                    </div>

<?php } ?>


<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
			$count = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire_nick` WHERE `status`='true' AND `cname`='".$row['cname']."'"));
	 ?>

                  
<div class="sl-prodli">
<div class="sl-prodbox"> 

         <div class="bgclassWithPad"></div> 
                            <a class="sl-prlinks" href="/random/freefire/<?php echo $row['cname'];?>" title="<?php echo $row['name'];?>">
                                <p class="sl-primg"><img data-src="<?php echo $row['thumb'];?>" class="lazyload" alt="<?php echo $row['name'];?>"></p>
                                <h3 class="sl-prcode text-center"><span><?php echo $row['name'];?><span> </h3>
                            </a>
                            <div class="sl-prifs">
                                <div class="sl-prifbot">
                                    <ul>
                                        <li>Số Tài Khoản: <b><?php echo number_format($count)?></b></li> 
             </ul> 
            <span class="outPrice">
                                        
                                    <span class="newPrice"><?php echo number_format($row['giatien']);?>đ</span>
                                    </span>
            </ul>
           </div> 

                                <p class="sl-prbot"> <a class="custom1319 sl-btnod" href="/random/freefire/<?php echo $row['cname'];?>" title="<?php echo $row['name'];?>"> </a> </p>
                                       
                                       
                                       
                                                </div>
                        </div>
                    </div>

	<?php } } ?>
</div>
                               
               

        </div>
        
    

       </div>

        </div>
    
</div>

        </div>
    
    </div>

        </div>
    