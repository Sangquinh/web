<?php 
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_latthe2`"));
?>
	<style>
.embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style> 
  <div class="c-layout-page" style="background-color: rgba(0,0,0,0.8);"> 
   <style type="text/css">
img.shake-image:hover {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shake 1s; 

  /* When the animation is finished, start again */
  animation-iteration-count: infinite; 
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

</style> 
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
    margin-left: 15px;
    margin-right: 15px;
    padding: 6px 20px;
}
.btn-top span{
    font-size: 25px;
}
@media    screen and (max-width: 640px) {
    .btn-top span{
        font-size: 17px;
    }
}

.flipimg img{
    opacity: 1;
}

.c-content-client-logos-slider-1 .item img{
    opacity: 1;
}

.modal-body{
    color: #333
}

.flipimg:hover {
  animation-name: spaceboots;
    animation-duration: .8s;
    transform-origin: 50% 50%;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    cursor: pointer;
}


@keyframes  spaceboots {
    0% {
        transform: translate(2px, 1px) rotate(0deg);
    }

    10% {
        transform: translate(-1px, -2px) rotate(-1deg);
    }

    20% {
        transform: translate(-3px) rotate(1deg);
    }

    30% {
        transform: translateY(2px) rotate(0deg);
    }

    40% {
        transform: translate(1px, -1px) rotate(1deg);
    }

    50% {
        transform: translate(-1px, 2px) rotate(-1deg);
    }

    60% {
        transform: translate(-3px, 1px) rotate(0deg);
    }

    70% {
        transform: translate(2px, 1px) rotate(-1deg);
    }

    80% {
        transform: translate(-1px, -1px) rotate(1deg);
    }

    90% {
        transform: translate(2px, 2px) rotate(0deg);
    }

    100% {
        transform: translate(1px, -2px) rotate(-1deg);
    }
}



.btn + .btn{
    margin-left: 0!important;
}

.btn-right .btn{
    float: left;
    width: 100%;
    background: #fb236a;
    font-size: 13px;
    color: #ffffff;
    text-align: center;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    border: 2px solid #fb236a;
    padding: 11px 0;
    margin-top: 10px;
    font-size: 20px;
    font-weight: bold;
}

.btn-right .btn:hover{
    background-color: #ff8db2;
    border: 2px solid #ff8db2;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box-inner-flip {
  transform: rotateY(180deg);
}

.flip-box-front{
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  top: 0;
  left: 0;
}

.transparent{
    opacity: 0!important;
}

</style> 
   
   <meta name="csrf-token" content="1BwwFmSzcIP0N7gwtVYxRqHGI8j1byQU8EkA0p7z"> 
   
    <div class="c-content-title-1 pd50"> 
     <h1 style="color:white" class="c-center c-font-uppercase c-font-bold">LẬT THẺ Joker Và Những Người Bạn</h1> 
     <div class="c-line-center c-theme-bg"></div> 
    </div> 
    <div class="col-lg-2 col-md-hidden"></div> 
    <div class="col-lg-5 col-md-12"> 
     <div class="c-content-box c-size-md"> 
      <!-- <div class="container"> --> 
      <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl"> 
       <div class="row row-flex-safari game-list" style="display: flex; flex-wrap: wrap"> 
        <div class="item item-left"> 
         <section class="rotation"> 
          <div class="col-lg-12 boxflip" id="okmain"> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift1"> 
            <img id="img1" class="shake-image" src="/assets/img/latthe2/1.png"> 
            <img onclick="umbalaxibua('gift1', 'imgnen1')" id="imgnen1" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift2"> 
            <img id="img2" class="shake-image" src="/assets/img/latthe2/2.png"> 
            <img onclick="umbalaxibua('gift2', 'imgnen2')" id="imgnen2" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift3"> 
            <img id="img3" class="shake-image" src="/assets/img/latthe2/3.png"> 
            <img onclick="umbalaxibua('gift3', 'imgnen3')" id="imgnen3" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift4"> 
            <img id="img4" class="shake-image" src="/assets/img/latthe2/4.png"> 
            <img onclick="umbalaxibua('gift4', 'imgnen4')" id="imgnen4" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift5"> 
            <img id="img5" class="shake-image" src="/assets/img/latthe2/5.png"> 
            <img onclick="umbalaxibua('gift5', 'imgnen5')" id="imgnen5" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift6"> 
            <img id="img6" class="shake-image" src="/assets/img/latthe2/6.png"> 
            <img onclick="umbalaxibua('gift6', 'imgnen6')" id="imgnen6" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <!-- 7 --> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift7"> 
            <img id="img7" class="shake-image" src="/assets/img/latthe2/7.png"> 
            <img onclick="umbalaxibua('gift7', 'imgnen7')" id="imgnen7" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <!-- 8 --> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift8"> 
            <img id="img8" class="shake-image" src="/assets/img/latthe2/8.png"> 
            <img onclick="umbalaxibua('gift8', 'imgnen8')" id="imgnen8" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
           <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6" id="gift9"> 
            <img id="img9" class="shake-image" src="/assets/img/latthe2/9.png"> 
            <img onclick="umbalaxibua('gift9', 'imgnen9')" id="imgnen9" class="shake-image" src="/assets/img/latthe2/upthe.png" style="display: none;"> 
           </div> 
          </div> 
          <div class="clearfix"></div> 
           <div class="col-sm-12 btn-right" style="margin-bottom: 0px;">
                                <a style="cursor: pointer; background: url(https://quanlyshop.vip/upload/settings/162092240584017857.gif); background-size: 220px 36px;width: 220px;" class="play sl-btnod hover-btn" id="chehinh"></a>
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
    <div class="col-lg-1 col-md-hidden"></div> 
    <div class="col-lg-2 col-md-12 col-sm-12 btn-right"> 
     <!-- <div class="btn-top"> --> 
     <div class="text-center"> 
<h3 class="num-play" style="color:white">Giá: 20,000đ / 1 lượt lật hình.</h3>
     </div> 
     <a href="#" class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Thể Lệ</span> </span> </a> 
    
     <a href="/html/lichsuquay" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Lịch sử lật</span> </span> </a> 
     <div class="text-center">
       &nbsp;
     </div> 
     <!-- </div> --> 
    </div> 
    <div class="col-lg-2 col-md-hidden"></div> 
    <div class="modal fade" id="theleModal" role="dialog" aria-hidden="true"> 
     <div class="modal-dialog" role="document"> 
      <div class="modal-content"> 
       <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4> 
       </div> 
       <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                <p style="text-align:center"><span style="color:#f1c40f"><strong>&nbsp;LẬT HÌNH 20k&nbsp;- KHI BẠN CÓ ĐỦ 20K&nbsp;BẠN CHỈ CẦN NHẤP ÚP THẺ RỒI LỰA CHỌN CÁC LÁ BÀI</strong></span></p>

<p style="text-align:center"><span style="color:#f1c40f"><strong>KHI LẬT VÀO THẺ BÀI CÓ GIÁ TRỊ BAO NHIÊU THÌ BẠN SẼ NHẬN ĐƯỢC TƯƠNG ỨNG VỚI SỐ KC ĐÓ</strong></span></p>

<p style="text-align:center"><span style="color:#f1c40f"><strong>Giải Thưởng Trị Giá Cao&nbsp;5000KC,12000KC,15000KC,20000KC,25000KC</strong></span></p>
            </div> 
       <div class="modal-footer"> 
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
       </div> 
      </div> 
     </div> 
    </div> 
    <script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
        $(".luotquay").on("click", function(){
            $("#luotquayModal").modal('show');
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
       </div> 
       <div class="modal-footer"> 
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="modal fade" id="luotquayModal" role="dialog" aria-hidden="true"> 
     <div class="modal-dialog" role="document"> 
      <div class="modal-content"> 
       <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
       
       <div class="modal-footer"> 
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
       </div> 
      </div> 
     </div> 
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
<th><b class="text-danger"><?php echo $row['mota'];?></th>
<th><b class="text-danger"><?php echo date('H:i d/m', $row['time']);?></th>
</tr>    
<?php } ?>


</tbody>
   </table> 
     </div> 
    <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true"> 
     <div class="modal-dialog" role="document"> 
      <div class="modal-content"> 
       <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4> 
       </div> 
       <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
         ## 
       </div> 
       <div class="modal-footer"> 
        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button> 
       </div> 
      </div> 
     </div> 
    </div> 
    </div> 
      </div> 
     </div> 
    <input type="hidden" id="numgift" value="8"> 
    <script type="text/javascript">
    $(document).ready(function(){

        hide_all_select();

        $('#chehinh').click(function() {
            hide_all_gift();
            show_all_select();
        });

    }); 

    function umbalaxibua(selector, card) {
        roll = document.getElementById(card);
        roll.src = "";
        roll.src = '/assets/img/latthe2/upthe.png';

          $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/latthe2', 
        data: {}, 
        success: function (json) {

          if(json.status == 3) {
   swal("Lỗi!", "Vui lòng đăng nhập lật thẻ!", "error");        
          }else if(json.status == 4) {
   swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
          }else if(json.status == 1) {
            document.getElementById("okmain").style['pointer-events'] = 'none';
                    roll = document.getElementById(card);
                    roll.src = "";
                    roll.src = json.img;

                setTimeout(function(){
                     swal('Chúc Mừng!', json.msg, 'success');
                     reload_money();
                }, 1000);
          }else {
   swal("Lỗi!", "Lỗi hệ thống!", "error");            
          }

  }
});

    }



    function hide_all_select() {
        for(var i=1;i<=9;i++) {
          $('#imgnen'+i).hide();
        }
    }

    function hide_all_gift() {
        for(var i=1;i<=9;i++) {
          $('#img'+i).hide();
        }
    }

    function show_all_select() {
        for(var i=1;i<=9;i++) {
          $('#imgnen'+i).fadeIn(3000);
        }
    }



</script> 