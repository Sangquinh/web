<?php
/*
╔════════════════════════════════════════════════╗
║     Design by HIEUVIP22                        ║
║     Facebook: facebook.com/HIEUVIP22PR         ║
║      Vui Lòng không Xoá dòng này               ║
╚════════════════════════════════════════════════╝
*/
defined('KUNKEYPR') or exit('Restricted Access');
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` WHERE `id`='".$_GET['id']."' AND `status`='true'"));
if(!$row['id']) die("<center><h1>Không Tìm Thấy Vòng Quay!</center>");
//var_dump($row);die();
?>
</style> 
  <div class="c-layout-page" style="background-color: rgba(0,0,0,0.8);"> 
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all" rel="stylesheet" type="text/css"> 
   <link href="nguyenvanson27.tk/assets/frontend/vongquay/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
   <link href="nguyenvanson27.tk/assets/frontend/vongquay/css/components.css" id="style_components" rel="stylesheet" type="text/css"> 
   <link href="nguyenvanson27.tk/assets/frontend/vongquay/css/style.css" rel="stylesheet" type="text/css"> 
   
<style>
    .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn > .btn, .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media        screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {
                margin-top: 245px;
            }
        }

        @media        screen and (max-width: 767px) {
            .modal-dialog:before {
                margin-top: 75px;
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }

            .modal-dialog {
                width: 100%;

            }

            .modal-content {
                margin-right: 20px;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;


        }

        .mfp-wrap {
            z-index: 20000 !important;
        }

        .c-content-overlay .c-overlay-wrapper {
            z-index: 6;
        }

        .z7 {
            z-index: 7 !important;
        }
        
        
        
        
        
    .nickdaquay{position:fixed;
    z-index:9999;
    bottom:170px;
    right:0px;
    max-width: 15%;
    min-width: 120px;
    min-height: 120px;}
    .anhbymanh{position:fixed;
    z-index:9999;
    bottom:80px;
    left:0px;
    max-width: 29%;
    min-height: 20px;}
    .napthebymanh{position:fixed;
    z-index:9999;
    bottom:100px;
    right:0px;
    max-width: 15%;
    min-height: 40px;
    min-width: 100px;
    }
    .flex-list .item {
        width: 50%;
        padding: 0 30px;
    }
        .rotation {
        text-align: center;
    }
    section {
        padding: 30px 0;
    }
        .rotation .play-spin {
        width: 100%;
        position: relative;
        margin: 0 auto;
    }
    .rotation .play-spin .ani-zoom {
        position: absolute;
        display: block;
        width: 110px;
        z-index: 5;
        top: calc(50% - 70px);
        left: calc(50% - 55px);
    }
    .ani-zoom {
        -webkit-transition: all .2s linear;
        -moz-transition: all .2s linear;
        -ms-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear;
    }
    img {
        max-width: 100%;
    }
    img {
        vertical-align: middle;
    }
    img {
        border: 0;
    }
    .text-center {
        text-align: center;
    }
    li{
        list-style: none;
    }

    .form-notication-bottom {
    position: fixed;
    bottom: 20px;
    left: 10px;
    width: 330px;
    height: auto;
    background-color: #fff;
    border-radius: 40px;
    z-index: 1;
    box-shadow: 2px 2px 10px 2px hsla(0,0%,60%,.2);
    animation: example 8s infinite;
    max-width: calc(90% - 10px);
    overflow: hidden;
}


@keyframes    example{0%{bottom: -100px;}25%{bottom: 20px;} 50%{bottom: 20px;}100%{bottom: -100px;}}

li {
    list-style-type: none
}
.history {
    width: 40% !important;
}
@media    only screen and (max-width: 800px) {
    .c-content-client-logos-slider-1 .item {
        width: 90%;
        margin:auto;
    }
    
    #rotate-play {
        width: 100% !important;
        max-width: 100% !important;
    }
    .rotation .play-spin .ani-zoom img {
        width: 85% !important;
    }
    .history {
        width: 100% !important;
    }
}
.c-content-box.c-size-md{
    padding: 0
}
.pd50{
    padding-top: 50px;
}
.list-roll{
    margin-top: 30px;
    margin-bottom: 30px;
}

@media    screen and (min-width: 800px) {
    .list-roll-inner{
        width: 85%;
        margin-top: 30px;
        max-height: 400px;
        overflow-y: scroll;
        margin:0 auto;
    }
}

@media    screen and (min-width: 1600px) {
    .list-roll-inner{
        width: 85%;
        margin-top: 30px;
        max-height: 600px;
        overflow-y: scroll;
        margin:0 auto;
    }
}
.btn-top{
    display: flex;
    justify-content: center;
    margin-bottom: 30px
}
.btn-top .btn{
    margin-left: 2px;
    margin-right: 2px;
    padding: 6px 10px;
}
.btn-top span{
    font-size: 18px;
}
@media    screen and (max-width: 640px) {
    .btn-top span{
        font-size: 15px;
    }
	.btn-top .btn{
    padding: 6px 4px;
	}
}
.scrollauto{overflow:auto!important}
</style> 

	
<div class="c-content-title-1 pd50">
    <h1 class="c-center c-font-uppercase c-font-bold" style="color:white"><?php echo $row['name'];?></h1>
    <div class="c-line-center c-theme-bg"></div>
</div>
<input type="hidden" id="document" value="<?php echo $_GET['id'];?>">
<form id="form"></form>
 <div class="col-lg-6 col-md-12"> 
    <div class="c-content-box c-size-md "> 
     <!-- <div class="container"> --> 
     <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl"> 
      <div class="row row-flex-safari game-list" style="display: flex; flex-wrap: wrap"> 
       <div class=" item-left"> 
        <section class="rotation"> 
         <div class="play-spin"> 
          <a class="ani-zoom" id="start"><img src="https://luongchinh.xyz/tep-tin/950418qbvlxj3gk0.png" alt="Play Center"></a> 
          <img style="width: 80%;max-width: 80%;opacity: 1;" src="<?= ($row['image']=='')? $kun->vongquaykimcuong_image($_GET['id'], 'image'):$row['image'];?>" id="rotate">
         </div> 
         <div class="text-center"> 
          <h3 class="num-play hidden">Giá: <span>25,000đ</span> / 1 lượt quay.</h3> 
          <div class="progress" style="margin-bottom:0;position:relative;z-index:1" title="Nổ hũ - khi đạt 100% sẽ có quà"> 
           <div class="bar shadow bubbles " style="width:50%"></div> 
           <div class="persion_ppt" style="position: absolute;top: 0;left: 0;width: 100%;font-size: 12px;color: #423dea;line-height: 30px;">
            50/100 point
           </div> 
          </div> 
          <span style="font-size: 11px;text-align: center;color: #fff;margin-bottom: 15px;display: block;margin-top: 5px;">Quay Càng Nhiều , Cơ Hội Nổ Hũ Càng Cao</span> 
          <div class="saleoff">
           <input style="border: 1px solid #f02396;border-radius: 10px;background: #64b57f;padding: 3px 10px;color: #fff!important;" type="text" placeholder="Nhập mã giảm giá" value="" id="saleoffpass">
          </div> 
          <section class="dropdownlist" style="color: black;">
            <select style='width:50%;color: black;margin: auto;padding:5px 10px;border: 1px solid #144ed7;'  id="x" name="x" >
              <option value="271">QUAY X1 - <?php echo $kun->compact_number($row['giatien']);?>/ 1 Lần Quay</option>
            </select>
          </section> 
          <div
          <div style="position:relative;z-index:100;margin:auto;margin-top:20px">
                      <a class="num-play-try btn btn-primary" id="starttest">Chơi thử</a> 
 
           <a class="btn btn-success ani-zoom" id="buttonplay"><i class="glyphicon glyphicon-flash"></i>Quay ngay</a>
          </div> 
          <li><a style="display: none" class="ani-zoom btn-img deposit-btn disabled" href="/nap-the" data-toggle="modal" data-target="#modalBuy"><img src="assets/frontend/vongquay/image/mualuot.png" alt=""></a></li> 
                      

         </div> 
        </section> 
       </div> 
      </div> 
      <div class="table-body scrollbar-inner"> 
       <table class="table table-bordered"> 
        <tbody></tbody> 
       </table> 
      </div> 
     </div> 
     <!-- </div> --> 
    </div> 
   </div> 
   <div class="col-lg-6 col-md-12 list-roll"> 
     <div class="btn-top"> 
      <a href="#" class="thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Thể Lệ</span> </span> </a> 
      <a href="#" class="tylevongquay btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill hidden"> <span> <i class="la la-cloud-upload"></i> <span>Tỷ lệ vòng quay</span> </span> </a> 
      <!--<a href="#" rel="/topwheel/1309"  class="load-modal info btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Top quay thưởng</span>
            </span>
        </a>--> 
      <a href="#" class="topquaythuong info topquaythuong btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Top quay thưởng</span> </span> </a> 
      <a href="/html/kimcuong/" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span></span> <i class="la la-cloud-upload"></i> <span>Rút quà</span> </a> 
      <a href="/rubywheel/logacc/1309" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Lịch sử quay</span> </span> </a> 
      </div> 
     <div class="c-content-title-1" style="margin: 0 auto"> 
      <h3 class="c-center c-font-uppercase c-font-bold">LƯỢT QUAY GẦN ĐÂY</h3> 
     </div> 
     <div class="list-roll-inner" style="height: 460px;overflow: hidden;background: #3c3c3c !important"> 
      <table cellpadding="10" class="table table-striped"> 
       <tbody> 
        <tr> 
         <th><b class="text-danger">Tài khoản</th> 
         <th><b class="text-danger">Giải thưởng</th> 
         <th><b class="text-danger">Thời gian</th> 
        </tr> 
       </tbody> 
       <tbody> 
       
<?php 
$res = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='Vòng Quay FreeFire' AND `action_name`='".$row['name']."' ORDER BY `time` DESC LIMIT 0, 50");
while ($row = mysqli_fetch_array($res)) {
    ?>
 <tr>
<td><b class="text-danger"><?php echo $kun->compact_string($row['username'], 7, '***');?></td>
<th><b class="text-danger">Nhận được 9999 Kim Cương</th>
<th><b class="text-danger"><?php echo date('H:i d/m', $row['time']);?></th>
</tr>    
<?php } ?>


</tbody>
   </table> 
     </div> 
     <a href="javascript://" title="Xem thêm" class="viewmoreHistory" style="position: relative;z-index: 1;color: #086a2a;display:block;margin: 20px auto;text-align: center"><i class="fa fa-arrow-down"></i>Xem thêm</a> 
     <script>
						$(".viewmoreHistory").on("click",function(){
							if($(".scrollauto").length == 0)
							{
								$(".list-roll-inner").addClass("scrollauto");
								$(".viewmoreHistory").html('<i class="fa fa-arrow-up"></i>Ẩn bớt')
							}
							else
							{
								$(".list-roll-inner").removeClass("scrollauto");
								$(".viewmoreHistory").html('<i class="fa fa-arrow-down"></i>Xem thêm')
							}
						})
			</script> 
     <div class="modal fade" id="theleModal" role="dialog" aria-hidden="true" style="display: none;"> 
      <div class="modal-dialog" role="document"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
         <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4> 
        </div> 
        <div class="modal-body" style="font-family: helvetica, arial, sans-serif;"> 
         <p style="text-align:center"><span style="font-size:12px"><span style="color:#16a085"><strong>KHI BẠN CÓ ĐỦ 20K&nbsp;BẠN SẼ ĐƯỢC 1 LƯỢT QUAY&nbsp;</strong></span></span></p> 
         <p style="text-align:center"><span style="font-size:12px"><span style="color:#16a085"><strong>KHI KIM QUAY DỪNG Ở Ô NÀO BẠN SẼ NHẬN ĐƯỢC SỐ KIM CƯƠNG TƯƠNG ỨNG ĐÓ</strong></span></span></p> 
         <p style="text-align:center"><span style="font-size:12px"><span style="color:#16a085"><strong>BẠN SẼ CÓ CƠ HỘI NHẬN ĐƯỢC 1350&nbsp;KC 3322&nbsp;KC , 9999 KC HOẶC 15777&nbsp;KC</strong></span></span></p> 
         <p style="text-align:center"><span style="font-size:12px"><span style="color:#16a085"><strong>CHÚC CÁC BẠN MAY MẮN</strong></span></span></p> 
        </div> 
        <div class="modal-footer"> 
         <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
        		
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="modal fade" id="tylevongquayModal" role="dialog" aria-hidden="true"> 
      <div class="modal-dialog" role="document"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
         <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Tỷ lệ vòng quay</h4> 
        </div> 
        <div class="modal-body" style="font-family: helvetica, arial, sans-serif;"> 
        </div> 
        <div class="modal-footer"> 
         <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="modal fade" id="topquaythuongModal" role="dialog" aria-hidden="true"> 
      <div class="modal-dialog" role="document"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
         <h4 style="text-transform: uppercase;" class="modal-title"><span>Bảng xếp hạng vòng quay</span></h4> 
        </div> 
        <div class="modal-body"> 
         <div id="tap1" class="rank-modal-tab"> 
          <ul role="tablist" class="nav nav-tabs"> 
           <li role="presentation" class="active"><a id="tap1-tab-1" role="tab" aria-controls="tap1-pane-1" aria-selected="true" href="#"><span>Hôm nay</span></a></li> 
           <li role="presentation" class=""><a id="tap1-tab-2" role="tab" aria-controls="tap1-pane-2" tabindex="-1" aria-selected="false" href="#"><span>30 ngày qua</span></a></li> 
           <li role="presentation" class=""><a id="tap1-tab-3" role="tab" aria-controls="tap1-pane-3" tabindex="-1" aria-selected="false" href="#"><span>Quà đua Top</span></a></li> 
          </ul> 
          <div class="tab-content"> 
           <div id="tap1-pane-1" aria-labelledby="tap1-tab-1" role="tabpanel" aria-hidden="false" class="tab-pane active in"> 
            <div> 
             <div class="top-info-section"> 
              <img src="/assets/backend/images/icon-user.png" class="" alt="top donate">
              <img src="https://files.playerduo.com/production/static-files/no1_top_list.png" class="background-top1" alt="s"> 
              <p style="margin-top: 25px;"><span><a href="#" target="_blank" style="font-weight: bold;" rel="noopener noreferrer"> namxinh1122</a></span></p> 
              <p style="font-weight: bold;font-size:15px">133 lượt quay</p> 
             </div> 
             <ul class="rank-list"> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#2</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1"> duatopdayne</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">128 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#3</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">betapduatoop</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">127 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#4</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Huyencutee</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">126 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#5</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Hahamxinh</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">120 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#6</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Phạm Trung Vàng</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">116 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#7</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Mạnh Quân</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">94 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#8</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Iod Ko Nha</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">94 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#9</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Hồ Mỹ Hoàng</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">73 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#10</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_quan2003ak</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">62 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#11</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Nguyen Truong</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">51 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#12</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Trần Minh Luân</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">38 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#13</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Đạt Văn Nguyễn</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">25 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
             </ul> 
            </div> 
           </div> 
           <div id="tap1-pane-2" aria-labelledby="tap1-tab-2" role="tabpanel" aria-hidden="true" class="tab-pane"> 
            <div> 
             <div class="top-info-section"> 
              <img src="/assets/backend/images/icon-user.png" class="" alt="top donate">
              <img src="https://files.playerduo.com/production/static-files/no1_top_list.png" class="background-top1" alt="s"> 
              <p style="margin-top: 25px;"><span><a href="#" target="_blank" style="font-weight: bold;" rel="noopener noreferrer"> loveff</a></span></p> 
              <p style="font-weight: bold;font-size:15px">1133 lượt quay</p> 
             </div> 
             <ul class="rank-list"> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#2</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">tretrauusike</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">1028 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#3</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">fakerff</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">927 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#4</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1"> Tĩn Cuteee </p> 
               </div> <p class="pull-right" style="margin-right: 0px;">901 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#5</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1"> Chaien</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">815 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#6</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_Diemmy0910</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">800 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#7</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Minh Lâm</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">782 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#8</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Duy Ka</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">677 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#9</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Nhut Ngoc</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">675 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#10</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Minh Phúc</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">505 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#11</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Huy Tran</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">411 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#12</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_Choann</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">333 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#13</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_Ngantiendat2006</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">311 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#14</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_binok777</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">310 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
              <li> 
               <div class="pull-left"> 
                <p class="pull-left" style="width: 25px;">#15</p> 
                <div class="avt avt-xs">
                 <img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo">
                </div> 
                <p class="name-player-review hidden-over-name color-vip-1">Trần Mận</p> 
               </div> <p class="pull-right" style="margin-right: 0px;">289 lượt</p> 
               <div class="clearfix"> 
               </div> </li> 
             </ul> 
            </div> 
           </div> 
           <div id="tap1-pane-3" aria-labelledby="tap1-tab-3" role="tabpanel" aria-hidden="true" class="tab-pane"> 
            <div class="content-qdt"> 
             <!--                        <div class="top-info-section">
                           <img src="/assets/backend/images/icon-user.png" class="" alt="top donate"><img src="https://files.playerduo.com/production/static-files/no1_top_list.png" class="background-top1" alt="s">
                           <p style="margin-top: 25px;"><span><a href="#" target="_blank" style="font-weight: bold;" rel="noopener noreferrer">
						   loveff</a></span></p>
                           <p style="font-weight: bold;font-size:15px">133 lượt quay</p>
                        </div>
																			<ul class="rank-list">
																																							<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#2</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">tretrauusike</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">628 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#3</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">fakerff</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">527 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#4</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1"> Tĩn Cuteee </p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">426 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#5</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1"> Chaien</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">324 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#6</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_Diemmy0910</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">373 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#7</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">Minh Lâm</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">372 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#8</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">Duy Ka</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">346 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#9</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">Nhut Ngoc</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">342 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#10</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">Minh Phúc</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">239 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#11</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">Huy Tran</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">235 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#12</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_Choann</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">234 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#13</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_Ngantiendat2006</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">233 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#14</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">shopbacgau.com_binok777</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">131 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   																								<li>
									  <div class="pull-left">
										 <p class="pull-left" style="width: 25px;">#15</p>
										 <div class="avt avt-xs"><img src="/assets/backend/images/icon-user.png" class="avt-img" alt="player duo"></div>
										 <p class="name-player-review hidden-over-name color-vip-1">Trần Mận</p>
									  </div>
									  <p class="pull-right" style="margin-right: 0px;">128 lượt</p>
									  <div class="clearfix"> </div>
								   </li>
							   														</ul>
						--> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div> 
        <div class="modal-footer"> 
         <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
        </div> 
       </div> 
      </div> 
     </div> 
     <style>
.rank-modal-tab{font-size:15px}
.modal-content .modal-header h4 {
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    color: #354052;
}
.rank-modal-tab ul.nav-tabs {
    border-bottom: none;
    margin-bottom: 10px;
}
.rank-modal-tab ul.nav-tabs li {
    width: 33%;
    text-align: center;
}
.rank-modal-tab ul.nav-tabs li.active a, .rank-modal-tab ul.nav-tabs li.active a:active, .rank-modal-tab ul.nav-tabs li.active a:focus, .rank-modal-tab ul.nav-tabs li.active a:hover {
    border-radius: 0;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
    border-bottom: 4px solid #f0564a;
    opacity: 1;font-size:13px;font-weight:bld
}
.rank-modal-tab ul.nav-tabs li a, .rank-modal-tab ul.nav-tabs li a:active, .rank-modal-tab ul.nav-tabs li a:focus, .rank-modal-tab ul.nav-tabs li a:hover {
    cursor: pointer;
    border-radius: 0;
    background-color: initial;
    outline: none;
    border: none;
    border-bottom: 4px solid #fff;
    opacity: .5;
    color: #000;
    padding-top: 0;;font-size:13px;font-weight:bld
}
.rank-modal-tab ul.nav-tabs li a, .rank-modal-tab ul.nav-tabs li a:active, .rank-modal-tab ul.nav-tabs li a:focus, .rank-modal-tab ul.nav-tabs li a:hover {
    cursor: pointer;
    color: #000;
}
.top-info-section {
    text-align: center;
    border-bottom: 10px solid #f4f3f3;
    margin-top: 50px;
    position: relative;
}
.top-info-section img {
    width: 80px;
    height: 80px;
    border-radius: 100%;
}
.top-info-section .background-top1 {
    position: absolute;
    top: -34px;
    left: 33%;
    height: 149px;
    width: 190px;
}
.rank-modal-tab p {
    color: orange;
    font-size: 1.4rem;
    line-height: 25px;
}
.rank-modal-tab p a{
    color: #f0564a;font-size:14px
}
.rank-modal-tab ul.rank-list {
    margin-top: 10px;
    padding: 0;
}
.rank-modal-tab ul.rank-list li {
    padding: 10px 0;
}.pull-left {
    float: left !important;
}
.rank-modal-tab ul.rank-list li p {
    margin-right: 10px;
    color: #333;
	font-size:15px
}
.rank-modal-tab ul.rank-list li .avt, .rank-modal-tab ul.rank-list li .name-player-review {
    float: left;
    min-width: 40px;
}
.avt-xs {
    width: 25px;
    height: 25px;
}
.avt {
    position: relative;
}
.rank-modal-tab ul.rank-list li img {
    margin-right: 10px;
    color: #333;
    width: 30px;
    height: 30px;
    border-radius: 150px;
}
.avt .avt-img {
    min-width: 25px;
}
.rank-modal-tab ul.rank-list li img {
    margin-right: 10px;
    color: #333;
    width: 30px;
    height: 30px;
    border-radius: 150px;
}
.avt .vip-avatar {
    position: absolute;
    top: -5px;
    left: -2px;
}
.rank-modal-tab ul.rank-list li .avt, .rank-modal-tab ul.rank-list li .name-player-review {
    float: left;
    min-width: 40px;
}
.rank-modal-tab ul.rank-list li p {
    margin-right: 10px;
    color: #333;
}
.hidden-over-name {
    display: block;
    overflow: hidden;
}

@media    screen and (max-width: 678px) {
    .top-info-section .background-top1 {
		position: absolute;
		top: -34px;
		left: 19%;
		height: 149px;
		width: 190px;
	}
}
</style> 
     <script>
$(".nav-tabs #tap1-tab-1").on("click",function(){
	$(".active").removeClass("active");
	$(this).parents("li").addClass("active");
	$(".tab-pane").hide();
	$("#tap1-pane-1").show();
})
$(".nav-tabs #tap1-tab-2").on("click",function(){
	$(".active").removeClass("active");
	$(this).parents("li").addClass("active");
	$(".tab-pane").hide();
	$("#tap1-pane-2").show();
})
$(".nav-tabs #tap1-tab-3").on("click",function(){
	$(".active").removeClass("active");
	$(this).parents("li").addClass("active");
	$(".tab-pane").hide();
	$("#tap1-pane-3").show();
	
})
</script> 
    </div> 
    <script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".tylevongquay").on("click", function(){
            $("#tylevongquayModal").modal('show');
        })
		$(".topquaythuong").on("click", function(){
            $("#topquaythuongModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
    });
</script> 
    <div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true"> 
     <div class="modal-dialog" role="document"> 
      <div class="modal-content"> 
       <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Uy Tín</h4> 
       </div> 
       <div class="modal-body" style="font-family: helvetica, arial, sans-serif;"> 
        <p><span style="font-size:12px"><span style="color:#2ecc71"><strong>Tri Ân Khách Hàng Cực Sốc Với Top Phần Thưởng Vừa Chơi Lại Vừa Có Quà Khi Đạt Top Bạn Sẽ Nhận Được Các Phần Thưởng Dưới Đây ( Bắt Đầu Áp Dụng Từ &nbsp;1/2 /2021 )</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#f1c40f"><strong>TOP 1: 5.000 Kim Cương&nbsp;&nbsp;</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#e74c3c"><strong>TOP 2:&nbsp;4.000 Kim Cương</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#2ecc71"><strong>TOP 3:&nbsp;3.000 Kim Cương</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#ff6600"><strong>TOP 4:&nbsp;500 kim Cương</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#f1c40f"><strong>TOP 5:&nbsp;200 Kim Cương</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#ffcc00"><strong>TOP 6 -10 : 1 Phần Quà Bất Ngờ</strong></span></span></p> 
        <p><span style="font-size:12px"><span style="color:#2ecc71"><strong>GIẢI THƯỞNG&nbsp;SẼ ĐƯỢC TRAO VÀO NGÀY 30&nbsp;HÀNG THÁNG</strong></span></span></p> 
       </div> 
       <div class="modal-footer"> 
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog" role="document"> 
     <div class="modal-content"> 
      <div class="modal-header"> 
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
       <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4> 
      </div> 
      <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
        àdsafdsafdsaf 
      </div> 
      <div class="modal-footer"> 
       <a href="/user/withdrawruby/2?withdraw_type=1" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">Rút quà</a> 
       <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
      </div> 
     </div> 
    </div> 
   </div> 
   <style type="text/css">
        #start-played1{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            margin:auto;
        }
    </style> 
   <input type="hidden" id="ID_NROGEM" value="1802"> 
   <input type="hidden" id="ID_NROCOIN" value="1801"> 
   <input type="hidden" id="ID_NINJAXU" value="1795"> 
   <input type="hidden" id="withdrawruby_2" value="Rút Kim Cương FF"> 
   <input type="hidden" id="numgift" value="8"> 
   <script>
function animate(options) {

      var start = performance.now();

      requestAnimationFrame(function animate(time) {
        // timeFraction от 0 до 1
        var timeFraction = (time - start) / options.duration;
        if (timeFraction > 1) timeFraction = 1;

        // текущее состояние анимации
        var progress = options.timing(timeFraction)
        
        options.draw(progress);

        if (timeFraction < 1) {
          requestAnimationFrame(animate);
        }

      });
    }
</script> 
   
                    

   <div class="clearfix"></div> 
   <link href="https://shopas.vn/assets/frontend/theme/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"> 
   <link rel="stylesheet" href="https://shopas.vn/assets/frontend/plugins/owl-carousel/owl.carousel.css"> 
   <link rel="stylesheet" href="https://shopas.vn/assets/frontend/plugins/owl-carousel/owl.theme.css"> 
   <style type="text/css">
    .news_image, .image, .news_title, .a-more, .news_description {
        position: relative;
        z-index: 200;
    }

    span.sale {
        position: absolute;
        z-index: 1000;
        left: 8px;
        background: rgba(255, 212, 36, .9);
        padding: 5px;
        text-align: center;
        color: #ee4d2d;
        width: 50px;
        font-weight: 700;
        font-size: 15px;
    }

    .bgclassWithPad {
        position: absolute;
        top: -2px;
        z-index: 10;
        left: 4px;
        width: calc(100% + -7px);
        background: url("/images/4HvuMqtycb_1614833070.gif") no-repeat center center;
        background-size: 100% 100%;
        height: calc(100% + 2px);
        padding: 12px;
    }

    .sale:after {
        content: "";
        width: 0;
        height: 0;
        left: 0;
        bottom: -4px;
        position: absolute;
        border-color: transparent rgba(255, 212, 36, .9);
        border-style: solid;
        border-width: 0 25px 4px;
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
        color: #3f0;
        border: 2px solid;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
    }

    .newPrice {
        border: 2px solid red;
        padding: 5px 15px;
        color: red;
        display: inline-block;
        border-radius: 5px;
        margin-left: 10px;;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
    }


    .game-list1 .classWithPad {
        border: 1px solid #cccccc;
        padding: 2px;
        text-align: center;
        border-radius: 4px;
    }

    .game-list1 .news_title {
        text-align: center;
        margin-top: 9px;
        color: #f7b03c;
    }
    .game-list1 .news_title a {
        color: #f7b03c;
        font-weight: bold;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        line-height: 24px;
        text-transform: uppercase;
    }

    .news_description >p{
        color: #fff;
    }
    .related{
        padding:15px 0px;
    }

    @media (max-width: 550px) {
        .outPrice {
            flex-direction: column;
        }

        .newPrice {
            margin-left: 0;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }

    .game-list1 .classWithPad{
        height: 348px;
        background-color: #13151a;
    }
</style> 
   </div> 
  </div> 
  <script>
            $(document).ready(function () {
                var owl =$('.wheel_lucky').owlCarousel({
                    loop: false,
                    margin: 10,
                    responsiveClass: true,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    nav: true,
                    dots: false,
                    autoplay:true,
                    autoplayTimeout:6000,

                    responsive: {
                        //màn iphone
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            stagePadding: 10,
                            margin: 5

                        },
                        //màn iphone 6
                        360: {
                            items: 2,
                            nav: true,
                            loop: true,
                            stagePadding: 10,
                            margin: 5

                        },
                        //tab
                        500: {
                            items: 2,
                            nav: false,
                            loop: true,
                            stagePadding: 30
                        },
                        767: {
                            items: 2,
                            nav: true,
                            loop: true,
                            stagePadding: 60
                        },
                        //desktop
                        1024: {
                            items: 4,
                            nav: true,
                            loop: false,
                        }
                    }
                });

            })
        </script> 
  <!-- End--> 
  <span class="viewmore"> »</span> 
  <!-- End--> 
  <style type="text/css">
        @media    only screen and (max-width: 580px) {
            .hidetext {
                max-height: 220px;
                overflow: hidden;
            }
        }
        @media    only screen and (min-width: 580px) {
            .hidetext {
                max-height: 220px;
                overflow: hidden;
            }
        }
        .showtext {
            max-height:initial;
        }
        .viewless,.viewmore{
            display: block;
            cursor: pointer;
            color: #f1c40f;
            padding-top: 10px;
            float: right;
            font-size: 18px;
        }
    </style> 
  <script type="text/javascript">
        $('body').delegate('.viewmore','click',function(){
            $(this).addClass('viewless').removeClass('viewmore');
            $(this).text('« Thu gọn');
            $('.hidetext').addClass('showtext').removeClass('hidetext');
        })
        $('body').delegate('.viewless','click',function(){
            $(this).addClass('viewmore').removeClass('viewless');
            $(this).text('Xem tất cả »');
            $('.showtext').addClass('hidetext').removeClass('showtext');
        })
    </script> 
  <style>
@import  url('https://fonts.googleapis.com/css?family=Bitter');
.progress {

    display: block;
	width: 200px;
	height: 30px;
	margin:auto;
	margin-top:35px;margin-bottom:35px;
	border-radius: 20px;
	background: #ffd197;
	z-index: 10;
	box-shadow:5px 5px 5px #5e67e3,5px -5px 5px #5e67e3,-5px 0px 5px #5e67e3
}

.bar {
    border-radius: 20px;
    width: 1%;
    height: 100%;
    transition: width;
    transition-duration: 1s;
    transition-timing-function: cubic-bezier(.36,.55,.63,.48);
}

.mobile {
    display: none;
}

.shadow {
    /* 25 50 */
    box-shadow: 0px 45px 50px rgba(0, 0, 0, 0.25); 
}

.crosses {
	transition-duration: 2s;
    background-color: #DFDBE5;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='25' height='25' viewBox='0 0 40 40'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.4'%3E%3Cpath d='M0 38.59l2.83-2.83 1.41 1.41L1.41 40H0v-1.41zM0 1.4l2.83 2.83 1.41-1.41L1.41 0H0v1.41zM38.59 40l-2.83-2.83 1.41-1.41L40 38.59V40h-1.41zM40 1.41l-2.83 2.83-1.41-1.41L38.59 0H40v1.41zM20 18.6l2.83-2.83 1.41 1.41L21.41 20l2.83 2.83-1.41 1.41L20 21.41l-2.83 2.83-1.41-1.41L18.59 20l-2.83-2.83 1.41-1.41L20 18.59z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.jupiter {
	transition-duration: 2s;
    background-color: #f395a5;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='52' height='52' viewBox='0 0 52 52'%3E%3Cpath fill='%23e6cca5' fill-opacity='0.4' d='M0 17.83V0h17.83a3 3 0 0 1-5.66 2H5.9A5 5 0 0 1 2 5.9v6.27a3 3 0 0 1-2 5.66zm0 18.34a3 3 0 0 1 2 5.66v6.27A5 5 0 0 1 5.9 52h6.27a3 3 0 0 1 5.66 0H0V36.17zM36.17 52a3 3 0 0 1 5.66 0h6.27a5 5 0 0 1 3.9-3.9v-6.27a3 3 0 0 1 0-5.66V52H36.17zM0 31.93v-9.78a5 5 0 0 1 3.8.72l4.43-4.43a3 3 0 1 1 1.42 1.41L5.2 24.28a5 5 0 0 1 0 5.52l4.44 4.43a3 3 0 1 1-1.42 1.42L3.8 31.2a5 5 0 0 1-3.8.72zm52-14.1a3 3 0 0 1 0-5.66V5.9A5 5 0 0 1 48.1 2h-6.27a3 3 0 0 1-5.66-2H52v17.83zm0 14.1a4.97 4.97 0 0 1-1.72-.72l-4.43 4.44a3 3 0 1 1-1.41-1.42l4.43-4.43a5 5 0 0 1 0-5.52l-4.43-4.43a3 3 0 1 1 1.41-1.41l4.43 4.43c.53-.35 1.12-.6 1.72-.72v9.78zM22.15 0h9.78a5 5 0 0 1-.72 3.8l4.44 4.43a3 3 0 1 1-1.42 1.42L29.8 5.2a5 5 0 0 1-5.52 0l-4.43 4.44a3 3 0 1 1-1.41-1.42l4.43-4.43a5 5 0 0 1-.72-3.8zm0 52c.13-.6.37-1.19.72-1.72l-4.43-4.43a3 3 0 1 1 1.41-1.41l4.43 4.43a5 5 0 0 1 5.52 0l4.43-4.43a3 3 0 1 1 1.42 1.41l-4.44 4.43c.36.53.6 1.12.72 1.72h-9.78zm9.75-24a5 5 0 0 1-3.9 3.9v6.27a3 3 0 1 1-2 0V31.9a5 5 0 0 1-3.9-3.9h-6.27a3 3 0 1 1 0-2h6.27a5 5 0 0 1 3.9-3.9v-6.27a3 3 0 1 1 2 0v6.27a5 5 0 0 1 3.9 3.9h6.27a3 3 0 1 1 0 2H31.9z'%3E%3C/path%3E%3C/svg%3E");
}

.piano {
	transition-duration: 2s;
    background-color: #cccccc;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='70' height='46' viewBox='0 0 70 46'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23333333' fill-opacity='0.4'%3E%3Cpolygon points='68 44 62 44 62 46 56 46 56 44 52 44 52 46 46 46 46 44 40 44 40 46 38 46 38 44 32 44 32 46 26 46 26 44 22 44 22 46 16 46 16 44 12 44 12 46 6 46 6 44 0 44 0 42 8 42 8 28 6 28 6 0 12 0 12 28 10 28 10 42 18 42 18 28 16 28 16 0 22 0 22 28 20 28 20 42 28 42 28 28 26 28 26 0 32 0 32 28 30 28 30 42 38 42 38 0 40 0 40 42 48 42 48 28 46 28 46 0 52 0 52 28 50 28 50 42 58 42 58 28 56 28 56 0 62 0 62 28 60 28 60 42 68 42 68 0 70 0 70 46 68 46'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.dominos {
	transition-duration: 2s;
    background-color: #fff6bd;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='126' height='84' viewBox='0 0 126 84'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23333333' fill-opacity='0.4'%3E%3Cpath d='M126 83v1H0v-2h40V42H0v-2h40V0h2v40h40V0h2v40h40V0h2v83zm-2-1V42H84v40h40zM82 42H42v40h40V42zm-50-6a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm96 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm-42 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm30-12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM20 54a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm12 24a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM8 54a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm24 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM8 78a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm12 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm54 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM50 54a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm24 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM50 78a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm54-12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm12 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM92 54a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm24 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM92 78a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm24-42a4 4 0 1 1 0-8 4 4 0 0 1 0 8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.pie {
	transition-duration: 2s;
    background-color: #faaca8;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 60 60'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23f55b53' fill-opacity='0.4' fill-rule='nonzero'%3E%3Cpath d='M29 58.58l7.38-7.39A30.95 30.95 0 0 1 29 37.84a30.95 30.95 0 0 1-7.38 13.36l7.37 7.38zm1.4 1.41l.01.01h-2.84l-7.37-7.38A30.95 30.95 0 0 1 6.84 60H0v-1.02a28.9 28.9 0 0 0 18.79-7.78L0 32.41v-4.84L18.78 8.79A28.9 28.9 0 0 0 0 1.02V0h6.84a30.95 30.95 0 0 1 13.35 7.38L27.57 0h2.84l7.39 7.38A30.95 30.95 0 0 1 51.16 0H60v27.58-.01V60h-8.84a30.95 30.95 0 0 1-13.37-7.4L30.4 60zM29 1.41l-7.4 7.38A30.95 30.95 0 0 1 29 22.16 30.95 30.95 0 0 1 36.38 8.8L29 1.4zM58 1A28.9 28.9 0 0 0 39.2 8.8L58 27.58V1.02zm-20.2 9.2A28.9 28.9 0 0 0 30.02 29h26.56L37.8 10.21zM30.02 31a28.9 28.9 0 0 0 7.77 18.79l18.79-18.79H30.02zm9.18 20.2A28.9 28.9 0 0 0 58 59V32.4L39.2 51.19zm-19-1.4a28.9 28.9 0 0 0 7.78-18.8H1.41l18.8 18.8zm7.78-20.8A28.9 28.9 0 0 0 20.2 10.2L1.41 29h26.57z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.bees {
	transition-duration: 2s;
    background-color: #fcc846;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%237a4948' fill-opacity='0.83' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.food {
	transition-duration: 2s;
    background-color: #ffcb05;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 260 260'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ec008c' fill-opacity='0.83'%3E%3Cpath d='M24.37 16c.2.65.39 1.32.54 2H21.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06A5 5 0 0 1-17.45 28v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H-20a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1L.9 19.22a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0L2.26 23h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM-13.82 27l16.37 4.91L18.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H-13.1z'/%3E%3Cpath id='path6_fill-copy' d='M284.37 16c.2.65.39 1.32.54 2H281.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06a5 5 0 0 1-2.24-8.94v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H240a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM246.18 27l16.37 4.91L278.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H246.9z'/%3E%3Cpath d='M159.5 21.02A9 9 0 0 0 151 15h-42a9 9 0 0 0-8.5 6.02 6 6 0 0 0 .02 11.96A8.99 8.99 0 0 0 109 45h42a9 9 0 0 0 8.48-12.02 6 6 0 0 0 .02-11.96zM151 17h-42a7 7 0 0 0-6.33 4h54.66a7 7 0 0 0-6.33-4zm-9.34 26a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-7a7 7 0 1 1 0-14h42a7 7 0 1 1 0 14h-9.34zM109 27a9 9 0 0 0-7.48 4H101a4 4 0 1 1 0-8h58a4 4 0 0 1 0 8h-.52a9 9 0 0 0-7.48-4h-42z'/%3E%3Cpath d='M39 115a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm6-8a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-3-29v-2h8v-6H40a4 4 0 0 0-4 4v10H22l-1.33 4-.67 2h2.19L26 130h26l3.81-40H58l-.67-2L56 84H42v-6zm-4-4v10h2V74h8v-2h-8a2 2 0 0 0-2 2zm2 12h14.56l.67 2H22.77l.67-2H40zm13.8 4H24.2l3.62 38h22.36l3.62-38z'/%3E%3Cpath d='M129 92h-6v4h-6v4h-6v14h-3l.24 2 3.76 32h36l3.76-32 .24-2h-3v-14h-6v-4h-6v-4h-8zm18 22v-12h-4v4h3v8h1zm-3 0v-6h-4v6h4zm-6 6v-16h-4v19.17c1.6-.7 2.97-1.8 4-3.17zm-6 3.8V100h-4v23.8a10.04 10.04 0 0 0 4 0zm-6-.63V104h-4v16a10.04 10.04 0 0 0 4 3.17zm-6-9.17v-6h-4v6h4zm-6 0v-8h3v-4h-4v12h1zm27-12v-4h-4v4h3v4h1v-4zm-6 0v-8h-4v4h3v4h1zm-6-4v-4h-4v8h1v-4h3zm-6 4v-4h-4v8h1v-4h3zm7 24a12 12 0 0 0 11.83-10h7.92l-3.53 30h-32.44l-3.53-30h7.92A12 12 0 0 0 130 126z'/%3E%3Cpath d='M212 86v2h-4v-2h4zm4 0h-2v2h2v-2zm-20 0v.1a5 5 0 0 0-.56 9.65l.06.25 1.12 4.48a2 2 0 0 0 1.94 1.52h.01l7.02 24.55a2 2 0 0 0 1.92 1.45h4.98a2 2 0 0 0 1.92-1.45l7.02-24.55a2 2 0 0 0 1.95-1.52L224.5 96l.06-.25a5 5 0 0 0-.56-9.65V86a14 14 0 0 0-28 0zm4 0h6v2h-9a3 3 0 1 0 0 6H223a3 3 0 1 0 0-6H220v-2h2a12 12 0 1 0-24 0h2zm-1.44 14l-1-4h24.88l-1 4h-22.88zm8.95 26l-6.86-24h18.7l-6.86 24h-4.98zM150 242a22 22 0 1 0 0-44 22 22 0 0 0 0 44zm24-22a24 24 0 1 1-48 0 24 24 0 0 1 48 0zm-28.38 17.73l2.04-.87a6 6 0 0 1 4.68 0l2.04.87a2 2 0 0 0 2.5-.82l1.14-1.9a6 6 0 0 1 3.79-2.75l2.15-.5a2 2 0 0 0 1.54-2.12l-.19-2.2a6 6 0 0 1 1.45-4.46l1.45-1.67a2 2 0 0 0 0-2.62l-1.45-1.67a6 6 0 0 1-1.45-4.46l.2-2.2a2 2 0 0 0-1.55-2.13l-2.15-.5a6 6 0 0 1-3.8-2.75l-1.13-1.9a2 2 0 0 0-2.5-.8l-2.04.86a6 6 0 0 1-4.68 0l-2.04-.87a2 2 0 0 0-2.5.82l-1.14 1.9a6 6 0 0 1-3.79 2.75l-2.15.5a2 2 0 0 0-1.54 2.12l.19 2.2a6 6 0 0 1-1.45 4.46l-1.45 1.67a2 2 0 0 0 0 2.62l1.45 1.67a6 6 0 0 1 1.45 4.46l-.2 2.2a2 2 0 0 0 1.55 2.13l2.15.5a6 6 0 0 1 3.8 2.75l1.13 1.9a2 2 0 0 0 2.5.8zm2.82.97a4 4 0 0 1 3.12 0l2.04.87a4 4 0 0 0 4.99-1.62l1.14-1.9a4 4 0 0 1 2.53-1.84l2.15-.5a4 4 0 0 0 3.09-4.24l-.2-2.2a4 4 0 0 1 .97-2.98l1.45-1.67a4 4 0 0 0 0-5.24l-1.45-1.67a4 4 0 0 1-.97-2.97l.2-2.2a4 4 0 0 0-3.09-4.25l-2.15-.5a4 4 0 0 1-2.53-1.84l-1.14-1.9a4 4 0 0 0-5-1.62l-2.03.87a4 4 0 0 1-3.12 0l-2.04-.87a4 4 0 0 0-4.99 1.62l-1.14 1.9a4 4 0 0 1-2.53 1.84l-2.15.5a4 4 0 0 0-3.09 4.24l.2 2.2a4 4 0 0 1-.97 2.98l-1.45 1.67a4 4 0 0 0 0 5.24l1.45 1.67a4 4 0 0 1 .97 2.97l-.2 2.2a4 4 0 0 0 3.09 4.25l2.15.5a4 4 0 0 1 2.53 1.84l1.14 1.9a4 4 0 0 0 5 1.62l2.03-.87zM152 207a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6 2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-11 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-6 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3-5a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-8 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm0 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5-2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-5-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-24 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm16 5a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm7-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm86-29a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1 246 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM275 214a29 29 0 0 0-57.97 0h57.96zM72.33 198.12c-.21-.32-.34-.7-.34-1.12v-12h-2v12a4.01 4.01 0 0 0 7.09 2.54c.57-.69.91-1.57.91-2.54v-12h-2v12a1.99 1.99 0 0 1-2 2 2 2 0 0 1-1.66-.88zM75 176c.38 0 .74-.04 1.1-.12a4 4 0 0 0 6.19 2.4A13.94 13.94 0 0 1 84 185v24a6 6 0 0 1-6 6h-3v9a5 5 0 1 1-10 0v-9h-3a6 6 0 0 1-6-6v-24a14 14 0 0 1 14-14 5 5 0 0 0 5 5zm-17 15v12a1.99 1.99 0 0 0 1.22 1.84 2 2 0 0 0 2.44-.72c.21-.32.34-.7.34-1.12v-12h2v12a3.98 3.98 0 0 1-5.35 3.77 3.98 3.98 0 0 1-.65-.3V209a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4v-24c.01-1.53-.23-2.88-.72-4.17-.43.1-.87.16-1.28.17a6 6 0 0 1-5.2-3 7 7 0 0 1-6.47-4.88A12 12 0 0 0 58 185v6zm9 24v9a3 3 0 1 0 6 0v-9h-6z'/%3E%3Cpath d='M-17 191a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2H4zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1-14 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM15 214a29 29 0 0 0-57.97 0h57.96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.floor {
	transition-duration: 2s;
    background-color: #00b9f2;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 80 80'%3E%3Cg fill='%2392278f' fill-opacity='0.71'%3E%3Cpath fill-rule='evenodd' d='M0 0h40v40H0V0zm40 40h40v40H40V40zm0-40h2l-2 2V0zm0 4l4-4h2l-6 6V4zm0 4l8-8h2L40 10V8zm0 4L52 0h2L40 14v-2zm0 4L56 0h2L40 18v-2zm0 4L60 0h2L40 22v-2zm0 4L64 0h2L40 26v-2zm0 4L68 0h2L40 30v-2zm0 4L72 0h2L40 34v-2zm0 4L76 0h2L40 38v-2zm0 4L80 0v2L42 40h-2zm4 0L80 4v2L46 40h-2zm4 0L80 8v2L50 40h-2zm4 0l28-28v2L54 40h-2zm4 0l24-24v2L58 40h-2zm4 0l20-20v2L62 40h-2zm4 0l16-16v2L66 40h-2zm4 0l12-12v2L70 40h-2zm4 0l8-8v2l-6 6h-2zm4 0l4-4v2l-2 2h-2z'/%3E%3C/g%3E%3C/svg%3E");
}

.wiggle {
	transition-duration: 2s;
    background-color: #dbbef9;
    background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ff7c7c' fill-opacity='1'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.bars {
	transition-duration: 2s;
    background-color: #ffe67c;
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%238fe1e7' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
}

.bubbles {
	transition-duration: 2s;
    background-color: #ff7058;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23e6afff' fill-opacity='1' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ticTac {
	transition-duration: 2s;
    background-color: #ffefaa;
    background-image: url("data:image/svg+xml,%3Csvg width='76' height='76' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%23ffadad' fill-opacity='0.84' fill-rule='evenodd'/%3E%3C/svg%3E");  
}

.zigZag {
	transition-duration: 2s;
    background-color: #00dac3;
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='12' viewBox='0 0 40 12' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 6.172L6.172 0h5.656L0 11.828V6.172zm40 5.656L28.172 0h5.656L40 6.172v5.656zM6.172 12l12-12h3.656l12 12h-5.656L20 3.828 11.828 12H6.172zm12 0L20 10.172 21.828 12h-3.656z' fill='%23008386' fill-opacity='0.7' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.stripes {
	transition-duration: 2s;
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg width='25' height='1' viewBox='0 0 40 1' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h20v1H0z' fill='%23d09af3' fill-opacity='0.54' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.clouds {
	transition-duration: 2s;
    background-color: #959bb5;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56 28' width='56' height='28'%3E%3Cpath fill='%23f0d519' fill-opacity='0.89' d='M56 26v2h-7.75c2.3-1.27 4.94-2 7.75-2zm-26 2a2 2 0 1 0-4 0h-4.09A25.98 25.98 0 0 0 0 16v-2c.67 0 1.34.02 2 .07V14a2 2 0 0 0-2-2v-2a4 4 0 0 1 3.98 3.6 28.09 28.09 0 0 1 2.8-3.86A8 8 0 0 0 0 6V4a9.99 9.99 0 0 1 8.17 4.23c.94-.95 1.96-1.83 3.03-2.63A13.98 13.98 0 0 0 0 0h7.75c2 1.1 3.73 2.63 5.1 4.45 1.12-.72 2.3-1.37 3.53-1.93A20.1 20.1 0 0 0 14.28 0h2.7c.45.56.88 1.14 1.29 1.74 1.3-.48 2.63-.87 4-1.15-.11-.2-.23-.4-.36-.59H26v.07a28.4 28.4 0 0 1 4 0V0h4.09l-.37.59c1.38.28 2.72.67 4.01 1.15.4-.6.84-1.18 1.3-1.74h2.69a20.1 20.1 0 0 0-2.1 2.52c1.23.56 2.41 1.2 3.54 1.93A16.08 16.08 0 0 1 48.25 0H56c-4.58 0-8.65 2.2-11.2 5.6 1.07.8 2.09 1.68 3.03 2.63A9.99 9.99 0 0 1 56 4v2a8 8 0 0 0-6.77 3.74c1.03 1.2 1.97 2.5 2.79 3.86A4 4 0 0 1 56 10v2a2 2 0 0 0-2 2.07 28.4 28.4 0 0 1 2-.07v2c-9.2 0-17.3 4.78-21.91 12H30zM7.75 28H0v-2c2.81 0 5.46.73 7.75 2zM56 20v2c-5.6 0-10.65 2.3-14.28 6h-2.7c4.04-4.89 10.15-8 16.98-8zm-39.03 8h-2.69C10.65 24.3 5.6 22 0 22v-2c6.83 0 12.94 3.11 16.97 8zm15.01-.4a28.09 28.09 0 0 1 2.8-3.86 8 8 0 0 0-13.55 0c1.03 1.2 1.97 2.5 2.79 3.86a4 4 0 0 1 7.96 0zm14.29-11.86c1.3-.48 2.63-.87 4-1.15a25.99 25.99 0 0 0-44.55 0c1.38.28 2.72.67 4.01 1.15a21.98 21.98 0 0 1 36.54 0zm-5.43 2.71c1.13-.72 2.3-1.37 3.54-1.93a19.98 19.98 0 0 0-32.76 0c1.23.56 2.41 1.2 3.54 1.93a15.98 15.98 0 0 1 25.68 0zm-4.67 3.78c.94-.95 1.96-1.83 3.03-2.63a13.98 13.98 0 0 0-22.4 0c1.07.8 2.09 1.68 3.03 2.63a9.99 9.99 0 0 1 16.34 0z'%3E%3C/path%3E%3C/svg%3E");
}

.aztec {
	transition-duration: 2s;
    background-color: #d59242;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='20' viewBox='0 0 100 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M21.184 20c.357-.13.72-.264 1.088-.402l1.768-.661C33.64 15.347 39.647 14 50 14c10.271 0 15.362 1.222 24.629 4.928.955.383 1.869.74 2.75 1.072h6.225c-2.51-.73-5.139-1.691-8.233-2.928C65.888 13.278 60.562 12 50 12c-10.626 0-16.855 1.397-26.66 5.063l-1.767.662c-2.475.923-4.66 1.674-6.724 2.275h6.335zm0-20C13.258 2.892 8.077 4 0 4V2c5.744 0 9.951-.574 14.85-2h6.334zM77.38 0C85.239 2.966 90.502 4 100 4V2c-6.842 0-11.386-.542-16.396-2h-6.225zM0 14c8.44 0 13.718-1.21 22.272-4.402l1.768-.661C33.64 5.347 39.647 4 50 4c10.271 0 15.362 1.222 24.629 4.928C84.112 12.722 89.438 14 100 14v-2c-10.271 0-15.362-1.222-24.629-4.928C65.888 3.278 60.562 2 50 2 39.374 2 33.145 3.397 23.34 7.063l-1.767.662C13.223 10.84 8.163 12 0 12v2z' fill='%230d37c2' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.circuit {
	transition-duration: 2s;
    background-color: #00b497;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='150' height='150'%3E%3Cpath fill='%23333333' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
}

.dots {
	transition-duration: 2s;
    background-color: #ffcb05;
    background-image: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%2300a99d' fill-opacity='0.71' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
}

.lines {
	transition-duration: 2s;
    background-color: #efefef;
    background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9 0h2v20H9V0zm25.134.84l1.732 1-10 17.32-1.732-1 10-17.32zm-20 20l1.732 1-10 17.32-1.732-1 10-17.32zM58.16 4.134l1 1.732-17.32 10-1-1.732 17.32-10zm-40 40l1 1.732-17.32 10-1-1.732 17.32-10zM80 9v2H60V9h20zM20 69v2H0v-2h20zm79.32-55l-1 1.732-17.32-10L82 4l17.32 10zm-80 80l-1 1.732-17.32-10L2 84l17.32 10zm96.546-75.84l-1.732 1-10-17.32 1.732-1 10 17.32zm-100 100l-1.732 1-10-17.32 1.732-1 10 17.32zM38.16 24.134l1 1.732-17.32 10-1-1.732 17.32-10zM60 29v2H40v-2h20zm19.32 5l-1 1.732-17.32-10L62 24l17.32 10zm16.546 4.16l-1.732 1-10-17.32 1.732-1 10 17.32zM111 40h-2V20h2v20zm3.134.84l1.732 1-10 17.32-1.732-1 10-17.32zM40 49v2H20v-2h20zm19.32 5l-1 1.732-17.32-10L42 44l17.32 10zm16.546 4.16l-1.732 1-10-17.32 1.732-1 10 17.32zM91 60h-2V40h2v20zm3.134.84l1.732 1-10 17.32-1.732-1 10-17.32zm24.026 3.294l1 1.732-17.32 10-1-1.732 17.32-10zM39.32 74l-1 1.732-17.32-10L22 64l17.32 10zm16.546 4.16l-1.732 1-10-17.32 1.732-1 10 17.32zM71 80h-2V60h2v20zm3.134.84l1.732 1-10 17.32-1.732-1 10-17.32zm24.026 3.294l1 1.732-17.32 10-1-1.732 17.32-10zM120 89v2h-20v-2h20zm-84.134 9.16l-1.732 1-10-17.32 1.732-1 10 17.32zM51 100h-2V80h2v20zm3.134.84l1.732 1-10 17.32-1.732-1 10-17.32zm24.026 3.294l1 1.732-17.32 10-1-1.732 17.32-10zM100 109v2H80v-2h20zm19.32 5l-1 1.732-17.32-10 1-1.732 17.32 10zM31 120h-2v-20h2v20z' fill='%23efb4a3' fill-opacity='0.84' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.leaf {
    background-color: #b5ccbf;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 40' width='60' height='30'%3E%3Cpath fill='%2340584a' fill-opacity='0.47' d='M0 40a19.96 19.96 0 0 1 5.9-14.11 20.17 20.17 0 0 1 19.44-5.2A20 20 0 0 1 20.2 40H0zM65.32.75A20.02 20.02 0 0 1 40.8 25.26 20.02 20.02 0 0 1 65.32.76zM.07 0h20.1l-.08.07A20.02 20.02 0 0 1 .75 5.25 20.08 20.08 0 0 1 .07 0zm1.94 40h2.53l4.26-4.24v-9.78A17.96 17.96 0 0 0 2 40zm5.38 0h9.8a17.98 17.98 0 0 0 6.67-16.42L7.4 40zm3.43-15.42v9.17l11.62-11.59c-3.97-.5-8.08.3-11.62 2.42zm32.86-.78A18 18 0 0 0 63.85 3.63L43.68 23.8zm7.2-19.17v9.15L62.43 2.22c-3.96-.5-8.05.3-11.57 2.4zm-3.49 2.72c-4.1 4.1-5.81 9.69-5.13 15.03l6.61-6.6V6.02c-.51.41-1 .85-1.48 1.33zM17.18 0H7.42L3.64 3.78A18 18 0 0 0 17.18 0zM2.08 0c-.01.8.04 1.58.14 2.37L4.59 0H2.07z'%3E%3C/path%3E%3C/svg%3E");
}

.overlap {
	transition-duration: 2s;
    background-color: #ffadff;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232e78ff' fill-opacity='0.82'%3E%3Cpath d='M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10s-10-4.477-10-10 4.477-10 10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10S0 25.523 0 20s4.477-10 10-10zm10 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm40 40c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.clickgif{-webkit-animation: glowing 500ms infinite;
		  -moz-animation: glowing 500ms infinite;
		  -o-animation: glowing 500ms infinite;
		  animation: glowing 500ms infinite;cursor:pointer}
		  
@-webkit-keyframes glowing {
  0% { background-color: #004A7F; -webkit-box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; -webkit-box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; -webkit-box-shadow: 0 0 3px #004A7F; }
}
 
@-moz-keyframes glowing {
  0% { background-color: #004A7F; -moz-box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; -moz-box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; -moz-box-shadow: 0 0 3px #004A7F; }
}
 
@-o-keyframes glowing {
  0% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
}
 
@keyframes  glowing {
  0% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
}
@media  screen and (max-width: 500px) {
    .progress {
        width: 200px;
        height: 30px;
        margin: auto;margin-bottom:10px;margin-top:10px
    }
	.saleoff{
		top: 5px!important;
	}
	#saleoffpass{width: 155px!important;}
}
</style> 
  <style>

.pyro > .before, .pyro > .after {
  position: absolute;
  width: 7px;
  height: 7px;
  pointer-events: none;
  z-index: 99999999;
  border-radius: 50%;
  box-shadow: -120px -218.66667px blue, 248px -16.66667px #00ff84, 190px 16.33333px #002bff, -113px -308.66667px #ff009d, -109px -287.66667px #ffb300, -50px -313.66667px #ff006e, 226px -31.66667px #ff4000, 180px -351.66667px #ff00d0, -12px -338.66667px #00f6ff, 220px -388.66667px #99ff00, -69px -27.66667px #ff0400, -111px -339.66667px #6200ff, 155px -237.66667px #00ddff, -152px -380.66667px #00ffd0, -50px -37.66667px #00ffdd, -95px -175.66667px #a6ff00, -88px 10.33333px #0d00ff, 112px -309.66667px #005eff, 69px -415.66667px #ff00a6, 168px -100.66667px #ff004c, -244px 24.33333px #ff6600, 97px -325.66667px #ff0066, -211px -182.66667px #00ffa2, 236px -126.66667px #b700ff, 140px -196.66667px #9000ff, 125px -175.66667px #00bbff, 118px -381.66667px #ff002f, 144px -111.66667px #ffae00, 36px -78.66667px #f600ff, -63px -196.66667px #c800ff, -218px -227.66667px #d4ff00, -134px -377.66667px #ea00ff, -36px -412.66667px #ff00d4, 209px -106.66667px #00fff2, 91px -278.66667px #000dff, -22px -191.66667px #9dff00, 139px -392.66667px #a6ff00, 56px -2.66667px #0099ff, -156px -276.66667px #ea00ff, -163px -233.66667px #00fffb, -238px -346.66667px #00ff73, 62px -363.66667px #0088ff, 244px -170.66667px #0062ff, 224px -142.66667px #b300ff, 141px -208.66667px #9000ff, 211px -285.66667px #ff6600, 181px -128.66667px #1e00ff, 90px -123.66667px #c800ff, 189px 70.33333px #00ffc8, -18px -383.66667px #00ff33, 100px -6.66667px #ff008c;
  -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards; }

.pyro > .after {
  -moz-animation-delay: 1.25s, 1.25s, 1.25s;
  -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
  -o-animation-delay: 1.25s, 1.25s, 1.25s;
  -ms-animation-delay: 1.25s, 1.25s, 1.25s;
  animation-delay: 1.25s, 1.25s, 1.25s;
  -moz-animation-duration: 1.25s, 1.25s, 6.25s;
  -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
  -o-animation-duration: 1.25s, 1.25s, 6.25s;
  -ms-animation-duration: 1.25s, 1.25s, 6.25s;
  animation-duration: 1.25s, 1.25s, 6.25s; }

@-webkit-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-moz-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-o-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-ms-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@keyframes  bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-webkit-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-moz-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-o-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-ms-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@keyframes  gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-webkit-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@-moz-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@-o-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@-ms-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@keyframes  position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
::placeholder {
		  color: white;
		  opacity: 1; /* Firefox */
		}

	:-ms-input-placeholder { /* Internet Explorer 10-11 */
		 color: white;
		}

	::-ms-input-placeholder { /* Microsoft Edge */
		 color: white;
		}
</style> 
  <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true"> 
   <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
     <div class="modal-header"> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
      <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báoo</h4> 
     </div> 
     <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;"> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
                                    </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        #start-played1{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
        }
    </style>
<script src="/assets/Scripts/client_0x2165x1.js"></script>

    <input type="hidden" id="numgift" value="8">
<script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate').stopRotate();
        $('#rotate').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:3000, // tốc độ quay tay
            callback:function (){
               var awar = txt;

		swal("Thành công!", awar, type);
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#start').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/vongquaykimcuong', 
        data: {
        	csrf: $('#csrf').val()
        }, 
        success: function (json) {

        	if(json.status == 3) {
	 swal("Lỗi!", "Vui lòng đăng nhập để Quay!", "error");    		
        	}else if(json.status == 4) {
	 swal("Lỗi!", "Bạn Không Đủ Tiền!", "error");  
        	}else if(json.status == 1) {
        		if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
	swal("Lỗi!", "Lỗi hệ thống!", "error"); 
}

        	}else {
	 swal("Lỗi!", "Lỗi hệ thống!", "error");         		
        	}

	}
});

    });

});
</script> 
  <!-- button wheel --> 
  <style type="text/css">
        #buttonplay{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
        }
    </style> 
  <input type="hidden" id="numgift" value="8"> 
  <script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate').stopRotate();
        $('#rotate').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:3000, // tốc độ quay tay
            callback:function (){
               var awar = txt;

		swal("Thành công!", awar, type);
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#buttonplay').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/vongquaykimcuong', 
        data: {
        	csrf: $('#csrf').val()
        }, 
        success: function (json) {

        	if(json.status == 3) {
	 swal("Lỗi!", "Vui lòng đăng nhập để Quay!", "error");    		
        	}else if(json.status == 4) {
	 swal("Lỗi!", "Bạn Không Đủ Tiền!", "error");  
        	}else if(json.status == 1) {
        		if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
	swal("Lỗi!", "Lỗi hệ thống!", "error"); 
}

        	}else {
	 swal("Lỗi!", "Lỗi hệ thống!", "error");         		
        	}

	}
});

    });

});
</script> 
  <!-- button wheel --> 
  <style type="text/css">
        #starttest{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
        }
    </style> 
  <input type="hidden" id="numgift" value="8"> 
  <script type="text/javascript">
$( document ).ready(function() {

    var bRotate = false;

   function rotateFn(angles, txt, type){
        bRotate = !bRotate;
        $('#rotate').stopRotate();
        $('#rotate').rotate({
            angle:0,
            animateTo:angles+1800,
            duration:3000, // tốc độ quay tay
            callback:function (){
               var awar = txt;

		swal("Chúc mừng!", awar, type);
            reload_money(); 
                bRotate = !bRotate;
            }
        })
    }



    $('#starttest').click(function (){

        if(bRotate)return;



  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/model/vongquaykimcuong/xulytest.php', 
        data: {
        	csrf: $('#csrf').val()
        }, 
        success: function (json) {

        	if(json.status == 3) {
	 swal("Lỗi!", "Hãy Đăng Nhập Để Quay Thử!", "error");    		
        	}else if(json.status == 4) {
	 swal("Lỗi!", "Bạn Không Đủ Tiền!", "error");  
        	}else if(json.status == 1) {
        		if(json.item > 0 && json.item < 9) {
   rotateFn(json.location, json.msg, "success");    
}else {
	swal("Lỗi!", "Lỗi hệ thống!", "error"); 
}

        	}else {
	 swal("Lỗi!", "Lỗi hệ thống!", "error");         		
        	}

	}
});

    });

});
</script>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
