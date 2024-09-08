<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
?>
<div class="c-layout-page">
  <style>
    .btn+.btn {
        margin-left: 0 !important;
    }

    .btn-right .btn {
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

    .btn-right .btn:hover {
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }

    .square {
        width: 100%;
    }

    #squaredesktop .box {
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/

        padding: 10px;
    }

    #squaremobile .box {
        padding: 5px;
    }

    .box img.active {
        box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #49fff7, 0 0 35px #49fff7
    }

    .outer-btn {
        width: 100%
    }

    .outer-btn:hover {
        opacity: 0.7
    }

    .list-roll-inner {
        width: 105%;
        margin-top: 30px;
        max-height: 500px;
        overflow-y: scroll;
        margin: 0 auto;
    }

    #squaremobile .outer-btn {
        margin-bottom: -50px;
    }

    .nopadding {
        padding: 0;
    }

    a {
        color: #283593;
        text-decoration: none;
    }

    h3 {
        margin-top: 12px;
    }

    * {
        margin: 0px;
    }

    .game-list {
        width: 580px;
        margin: 0 auto;
    }

@media    screen and (max-width: 580px) {
	.fct{bottom: 35px!important;padding:0!important}
	.saleoff{height: 25px!important;left: -15px!important;}
	.saleoff input{padding: 6px 10px!important;font-size:14px!important;}
	.progress{bottom: -35px!important;height: 29px!important;width: 140px!important;right: -0px!important;}
	.persion_ppt{line-height: 25px!important;}
	.btn-right{margin-top:100px}
	.pltry{position:relative;z-index:100;position: absolute;bottom: -135px;left: 90px;}
	.dropdownlist{position: absolute;left: -16px;bottom: -53px;width: 100%;padding: 0!important;text-align: center;}
	#numrolllop{width:80%!important}
    .game-list{
        width: 320px;
    }
    #slot1, #slot2, #slot3{
        margin-left: 68px!important;
    }
	main{
			background: unset!important;
			border-radius: 5px!important;
			margin-top: 50px!important;
			padding-top: 0!important;
			padding-bottom: 0px!important;
			padding-left: unset!important;
			width: 100%!important;
		}
	section#Slots{background:unset!important;position: relative;top: 118px;margin-left: 54px !important;margin-right: 50px !important;}
	.game-list {
		width: 320px !important;
		height: 320px !important;
        background: url(https://quanlyshop.vip//upload/doanhmuc/test/khung.png) no-repeat;
		position: relative !important;
		background-size: contain !important;
	}
	.wheeling{
		
	}
	#slot1, #slot2, #slot3{
			margin-top: -110px!important;
			margin-bottom:10px!important;
			margin-left: -30px!important;
			margin-right: 0px!important;
			background-size: 62px 60px!important;
			width: 290px!important;
			height: 100px!important;position: relative;border-radius: 3px;}
			#slot1{top:1px}
			#slot2{top:1px}
			#slot3{top:1px;margin-right:0!important}
	section#Gira{
	    position: relative;
	    top: 111px;
	}
	#Gira {
			position: absolute;
			width: 170px;
			height: 70px;
			background: url("/assets/frontend/play.png") no-repeat;
				background-color: rgba(0, 0, 0, 0);
				background-size: auto;
			background-size: 170px 70px;
			margin:auto
		}
}
    @media  screen and (max-width: 580px){
        section#Slots {
            top: 130px;
        }
    }
    main {
        background: transparent;
        border-radius: 5px;
        margin-top: 50px;
        padding-top: 324px;
        padding-bottom: 20px;
        padding-left: 185px;
        width: 100%;
    }

    section#Slots {
        border-radius: 15px;
        background-color: #FAFAFA;
    }

    section#Gira {
        margin-top: 25px;
        padding-top: 25px;
        padding-bottom: 25px;
        border-radius: 5px;
        text-align: center;
        background-color: #00000;
        color: #ef5350;
        font-size: 25px;
        cursor: pointer;
    }
    #try{
        cursor: pointer;
    }

    section#Gira:hover {
        background-color: #0000;
    }

    .noticeModal .modal-body {
        color: #000
    }

    section#info {
        background-color: #616161;
        padding-left: 12px;
        padding-bottom: 12px;
        border-radius: 5px;
        overflow: hidden;
        animation-duration: 1s;
        color: #BDBDBD;
        margin-top: 50px;
        margin-left: 30%;
        margin-right: 30%;
        display: none;
    }

    #slot1,
    #slot2,
    #slot3 {
        display: inline-block;
        margin-top: 5px;
        margin-left: 15px;
        margin-right: 15px;
        background-size: 150px 150px;
        width: 150px;
        height: 150px;
    }
   
      

    @media  screen and (min-width: 580px) {
        .game-list {
            width: 659px;
            height: 568px;
            background: url(https://quanlyshop.vip//upload/doanhmuc/test/khung.png) no-repeat;
            background-size: contain;
            position: relative;
        }

        main {
            background: transparent;
            border-radius: 5px;
            margin-top: 30px;
            padding-top: 246px;
            padding-bottom: 20px;
            padding-left: 111px;
            width: 100%;
        }

        #Slots {
            background: transparent !important;
        }

        #Gira{
        position: absolute;
		width: 136px;
		height: 36px;
		background: url(https://shopnttpheff.com/assets/frontend/play.png) no-repeat;
			background-color: rgba(0, 0, 0, 0);
			background-size: auto;
		background-size: 70px 35px;
		left: 230px;
		bottom: 70px;
		padding: 0 !important;      
        }

        #slot1,
        #slot2,
        #slot3 {
            display: inline-block;
            margin-top: -240px;
            margin-left: -100px;
            margin-right: 0px;
            background-size: 129px 118px;
            width: 550px;
            height: 118px;
            border-radius: 6px;
        }

        .scrollauto {
            overflow: auto !important
        }

        .dropdownlist {
            position: absolute;
            left: 0;
            bottom: 120px;
            width: 100%;
            padding: 0 70px;
            text-align: center;
        }

        .pltry {
            position: relative;
            z-index: 100;
            position: absolute;
            bottom: -20px;
            left: 290px
        }
    }
</style> 
  <meta name="csrf-token" content="ukzEkN9kXqbUFz4UWIc8UqvyOe4JsLlF4lNOlOEk"> 
  <div class="container content-black"> 
   <link href="assets/frontend/vongquay/css/components.css" id="style_components" rel="stylesheet" type="text/css"> 
   <link href="assets/frontend/vongquay/css/style.css" rel="stylesheet" type="text/css"> 
   <div class="c-content-title-1 pd50"> 
    <h3 style="color:white" class="c-center c-font-uppercase c-font-bold">TRIỆU HỒI RỒNG THẦN</h3> 
    <div class="c-line-center c-theme-bg"></div> 
   </div> 
   <style>
    #rotate-play{
        width: 100%;
        max-width: 100%;
        opacity: 1;
        background: url(https://quanlyshop.vip/upload/doanhmuc/test/r%E1%BB%93ng-%C4%91%C3%B3ng.gif) no-repeat center center;
        background-size: contain;
    }
</style>    
   <script type="text/javascript">
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if( isMobile.any() ) {
        $('#squaredesktop').remove();
        $('#boxfull').addClass('nopadding');
    }else{
        $('#squaremobile').remove();
    }
</script>    
   <div id="boxfull" class="col-lg-6 col-md-12"> 
    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl"> 
     <div class="row-flex-safari game-list" style="margin-bottom: 40px"> 
      <main> 
       <section id="status"></section> 
       <section id="Slots"> 
        <div id="slot1" class="a1"> 
         <img id="role_1" style="width: 100%;" src="https://quanlyshop.vip/upload/doanhmuc/test/r%E1%BB%93ng-%C4%91%C3%B3ng.gif"> 
        </div> 
       </section>         
       <section id="Gira"> 
        <br>
        <br>
        <br> 
        <br>
        <a class="sl-btnod hover-btn" style="background: url(https://quanlyshop.vip/upload/settings/162092291995607148.png); background-size: 136px 36px;" id="quay"></a>
       </section> 
       <div class="clearfix"></div> 
      </main> 
     </div> 
    </div> 
   </div>    
   <style type="text/css">
    .list-roll-inner {
    width: 85%;
    margin-top: 30px;
    max-height: 380px;
    overflow-y: scroll;
    margin: 0 auto;
}
</style> 
   <div class="col-lg-1 col-md-hidden"></div> 
   <div class="col-lg-3 col-md-12 col-sm-12 btn-right" style="margin-top: 20px;"> 
    <!-- <div class="btn-top"> --> 
    <a class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Thể Lệ</span> </span> </a> 
    <a href="/user/lichsugiaodich" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill"> <span> <i class="la la-cloud-upload"></i> <span>Lịch sử quay</span> </span> </a> 
</span>
        </a>
        </div>
        <br>
                <br>
        <br>

        <div class="col-lg-1 col-md-hidden"></div>
    <div class="col-lg-41 col-md-12 col-sm-12 btn-right">
        <div class="c-content-title-1" style="margin: 0 auto">
            <h3 style="color:white" class="c-center c-font-uppercase c-font-bold">LƯỢT QUAY GẦN ĐÂY</h3>
        </div>
        <div class="list-roll-inner">

            <table class="table table-hover table-custom-res">
                <tbody>
                    <tr>
                        <th>Tài khoản</th>
                        <th>Giải thưởng</th>
                        <th>Thời gian</th>
                    </tr>
                </tbody>
                <tbody>
<?php 
$res = mysqli_query($kun->connect_db(), "SELECT * FROM `user_history_system` WHERE `action`='VÒNG QUAY BINGO TẾT TRUNG THU' AND `action_name`='VÒNG QUAY BINGO TẾT TRUNG THU' ORDER BY `time` DESC LIMIT 0, 10");
while ($row = mysqli_fetch_array($res)) {
    ?>
 <tr>
<td><?php echo $kun->compact_string($row['username'], 6, '***');?></td>
<th><?php echo $row['mota'];?></th>
<th><?php echo date('H:i d/m', $row['time']);?></th>
</tr>    
<?php } ?>


</tbody>
   </table> 
     </div> 
     </div>
     
     <script>
    <div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title"
                        style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ
                    </h4>
                </div>

                <div class="modal-body" style="font-family: helvetica, arial, sans-serif;color:#000">
                    <p style="color:black;"><strong><p><strong>1 Lần Quay 20k - KHI BẠN C&Oacute; ĐỦ 20K BẠN CHỈ CẦN NHẤP QUAY L&Agrave; N&Oacute; QUAY</strong></p>

<p><strong>KHI 3 &Ocirc; C&Ugrave;NG NHAU L&Agrave; BẠN Đ&Atilde; TR&Uacute;NG GIẢI , CH&Uacute;C C&Aacute;C BẠN MAY MẮN&nbsp;</strong></p></strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title"
                        style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo <span style="color:red;font-weight: bold;" id="name_product">Quay thử</span>
                    </h4>
                </div>

                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;color:#000">
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
   <script type="text/javascript">
        $(document).ready(function () {
            $(".thele").on("click", function () {
                $("#theleModal").modal('show');
            })
            $(".uytin").on("click", function () {
                $("#uytinModal").modal('show');
            })
            $(".luotquay").on("click", function () {
                $("#luotquayModal").modal('show');
            })
        });
    </script> 
   <img style="display: none;" src="/assets/img/bingovip/1.png">
   <img style="display: none;" src="/assets/img/bingovip/2.png">
   <img style="display: none;" src="/assets/img/bingovip/3.png">
   <img style="display: none;" src="/assets/img/bingovip/4.png">
   <img style="display: none;" src="/assets/img/bingovip/5.png">
   <img style="display: none;" src="/assets/img/bingovip/6.png">
   <img style="display: none;" src="/assets/img/bingovip/7.png">
   <img style="display: none;" src="/assets/img/bingovip/8.png">
    <script type="text/javascript">
$( document ).ready(function() {
});




    $('#quay').click(function (){

    document.getElementById("quay").disabled = true;
    document.getElementById("quay").innerHTML = "";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/model/game/bingovip/xuly.php', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "";
            }else if(json.status == 1) {

         document.getElementById("quay").disabled = true;
         document.getElementById("quay").innerHTML = "";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, msg) {

    var items = [1,2,3,4,5,6,7,8];  // name of img random images

    var stop_bingo_1 = 80; 

  


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*40 );}



setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "";   
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingovip/'+img_name+'.png';
}


</script> 
   <!--(code by khoakillall)--> 
   <style type="text/css">
    .sl-footer span{
        font-weight: inherit;
    }
</style> 
   <!-- END: PAGE CONTENT --> 
  </div> 
  <!-- Global site tag (gtag.js) - Google Analytics --> 
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45809844-6');
</script> 
  <!-- Load Facebook SDK for Javascript --> 
  <div id="fb-root" class=" fb_reset">
   <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
    <div></div>
   </div>
   <div class="fb-customerchat fb_invisible_flow fb_iframe_widget fb_iframe_widget_fluid" attribution="setup_tool" page_id="113293650538074" theme_color="#20cef5" logged_in_greeting="Chào bạn, Bạn cần hỗ trợ gì ạ ?" logged_out_greeting="Chào bạn, Bạn cần hỗ trợ gì ạ ?" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;locale=vi_VN&amp;logged_in_greeting=Ch%C3%A0o%20b%E1%BA%A1n%2C%20B%E1%BA%A1n%20c%E1%BA%A7n%20h%E1%BB%97%20tr%E1%BB%A3%20g%C3%AC%20%E1%BA%A1%20%3F&amp;logged_out_greeting=Ch%C3%A0o%20b%E1%BA%A1n%2C%20B%E1%BA%A1n%20c%E1%BA%A7n%20h%E1%BB%97%20tr%E1%BB%A3%20g%C3%AC%20%E1%BA%A1%20%3F&amp;page_id=113293650538074&amp;request_time=1628398212171&amp;sdk=joey&amp;theme_color=%2320cef5">
    <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f1642df7acd7e1" width="1000px" height="1000px" data-testid="fb:customerchat Facebook Social Plugin" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dff0164816d1614%26domain%3Dkhoakillall.com%26origin%3Dhttps%253A%252F%252Fkhoakillall.com%252Ff160bd92a0d5aa8%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;logged_in_greeting=Ch%C3%A0o%20b%E1%BA%A1n%2C%20B%E1%BA%A1n%20c%E1%BA%A7n%20h%E1%BB%97%20tr%E1%BB%A3%20g%C3%AC%20%E1%BA%A1%20%3F&amp;logged_out_greeting=Ch%C3%A0o%20b%E1%BA%A1n%2C%20B%E1%BA%A1n%20c%E1%BA%A7n%20h%E1%BB%97%20tr%E1%BB%A3%20g%C3%AC%20%E1%BA%A1%20%3F&amp;page_id=113293650538074&amp;request_time=1628398212171&amp;sdk=joey&amp;theme_color=%2320cef5" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
   </div>
   <div class="fb-customerchat fb_invisible_flow fb_iframe_widget fb_iframe_widget_fluid" attribution="biz_inbox" page_id="108003904770187" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;attribution=biz_inbox&amp;container_width=0&amp;locale=vi_VN&amp;page_id=108003904770187&amp;request_time=1628398212271&amp;sdk=joey">
    <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f36d94a17203d9c" width="1000px" height="1000px" data-testid="fb:customerchat Facebook Social Plugin" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v8.0/plugins/customerchat.php?app_id=&amp;attribution=biz_inbox&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df65e291166798c%26domain%3Dkhoakillall.com%26origin%3Dhttps%253A%252F%252Fkhoakillall.com%252Ff160bd92a0d5aa8%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;page_id=108003904770187&amp;request_time=1628398212271&amp;sdk=joey" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
   </div>
  </div> 
  <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script> 
  <!-- Your Chat Plugin code --> 
  <div class="sl-footer"> 
   <div class="container"> 
    <div class="row"> 
     <style type="text/css">
                    @media    only screen and (max-width: 580px) {
                        .pc {
                          display: none;
                        }
                    }
                    @media    only screen and (min-width: 580px) {
                        .mb {
                          display: none;
                        }
                    }
                
        </tr> 
       </tbody> 
      </table> 
      <p style="text-align:center">&nbsp;</p> 
      <div id="fb-root"></div> 
      <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script> 
      <div style="display: flex;justify-content: center" class="fb-page fb_iframe_widget fb_iframe_widget_fluid" data-href="" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=330&amp;height=270&amp;hide_cover=false&amp;href=&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"> 
       <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f3a02f4f1508dec" width="1000px" height="270px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v9.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2a0be05ccb9adc%26domain%3Dshopbacgau.com%26origin%3Dhttps%253A%252F%252Fshopbacgau.com%252Ff89c40ef0ccb34%26relation%3Dparent.parent&amp;container_width=330&amp;height=270&amp;hide_cover=false&amp;href=&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span> 
      </div> 
     </div> 
     <div class="col-md-3 colRight pc"> 
      <p><strong><span style="font-size:16px"><a href="http://shopas.vn"><span style="color:#f1c40f">MENU</span></a><span style="color:#f1c40f"> </span><a href="http://rikaki.vn"><span style="color:#f1c40f">SHOP GAME</span></a></span></strong></p> 
      <p><u><span style="font-size:14px"><strong><a href="https://shopbacgau.com/blog/shop-acc-bac-gau-co-gi-mua-nick-game-chat-cung-bac-gau-tai-shopbacgaucom" target="_blank"><span style="color:#27ae60">Giới</span></a><a href="https://gamecuoi.com/" target="_blank"><span style="color:#27ae60"> thiệu</span></a></strong></span></u></p> 
      <p><u><span style="font-size:14px"><strong><a href="https://shopbacgau.com/blog/huong-dan-nap-the-cao-tai-shopbacgaucom-mua-acc-game-cung-bac-gau" target="_blank"><span style="color:#27ae60">Nạp Thẻ Cào</span></a></strong></span></u></p> 
      <p><u><span style="font-size:14px"><strong><a href="https://shopbacgau.com/blog/huong-dan-mua-acc-game-tra-gop-don-gian-va-uu-dai-tai-shop-acc-bac-gau-shopbacgaucom" target="_blank"><span style="color:#27ae60">Mua Nick </span></a><a href="http://shopgamelade.com" target="_blank"><span style="color:#27ae60">Trả Góp</span></a></strong></span></u></p> 
      <p><u><a href="/vong-quay-may-man" target="_blank"><span style="color:#27ae60"><span style="font-size:14px"><strong>Các Mục Vòng Quay </strong></span></span></a><a href="http://shopfreefire.vn"><span style="color:#27ae60"><span style="font-size:14px"><strong>Đang Hot</strong></span></span></a></u></p> 
      <p><u><span style="font-size:14px"><strong><a href="https://shopbacgau.com/free-fire-gia-re"><span style="color:#2ecc71">Nick Free Fire Giá Rẻ&nbsp;</span></a><a href="http://shoptoantay.com" target="_blank"><span style="color:#2ecc71">SALE</span></a><a href="https://shopbacgau.com/free-fire-gia-re"><span style="color:#2ecc71">&nbsp;</span></a><span style="color:#27ae60"><img src="https://shopbacgau.com/upload/userfiles/images/hot(6).gif" style="height:15px; width:30px" alt="png-image"></span></strong></span></u></p> 
      <p><u><span style="font-size:14px"><strong><a href="https://shopbacgau.com/group-page-cong-dong" target="_blank"><span style="color:#27ae60">Cộng </span></a><a href="https://gamecuoi.com/" target="_blank"><span style="color:#27ae60">Đồng</span></a></strong></span></u><strong><span style="font-family:Georgia,serif"><span style="font-size:14px">&nbsp;</span></span></strong><br> <strong><a href="https://shopfreefire.vn/"><span style="color:#000000">shopfreefire.vn</span></a><span style="color:#000000">&nbsp;</span><br> <a href="http://rikaki.vn"><span style="color:#000000">rikaki.vn</span></a><br> <a href="http://shoptoantay.com"><span style="color:#000000">shoptoantay.com</span></a><br> <a href="http://shopsam.vn"><span style="color:#000000">shopsam.vn</span></a><br> <a href="http://shopas.vn"><span style="color:#000000">shopas.vn</span></a></strong><span style="color:#000000">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p> 
     </div> 
     <style>
                    .colLeft{padding: 15px;border: 1px solid #808080;background-color: #373535;border-radius: 5px;}
                    .colRight{padding:15px}
                    .colRight table{width:100%!important}
                    .colRight table tr{background-color:unset!important;color:#fff}
                    .colRight table tr td p{margin:0}

                </style> 
    </div> 
   </div> 
  </div> 
  <div class="c-layout-go2top" <div="">
   <i class="icon-arrow-up"></i> 
  </div>
  <!-- END: LAYOUT/FOOTERS/GO2TOP --> 
  <!-- BEGIN: LAYOUT/BASE/BOTTOM --> 
  <!-- BEGIN: CORE PLUGINS --> 
  <!--[if lt IE 9]>
     
    <![endif]--> 
  <!-- END: CORE PLUGINS --> 
  <!-- BEGIN: LAYOUT PLUGINS --> 
  <!-- END: LAYOUT PLUGINS --> 
  <!-- BEGIN: THEME scriptS --> 
  <link rel="stylesheet" href="/assets/Style/jquery-ui.min.css"> 
  <div id="modal_bigin"></div> 
  <script>
        $(document).ready(function () {

            $(".int").inputmask("integer", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });
            $(".dec").inputmask("decimal", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });

            function detectmob() {
                if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                    return true;
                } else { return false; }
            }
            var t = { delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button") };
            setTimeout(function () { $("div.fb-livechat").fadeIn() }, 8 * t.delay);
            if (!detectmob()) {
                $(".ctrlq").on("click", function (e) { e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({ bottom: 0, opacity: 0 }, 2 * t.delay, function () { $(this).hide("slow"), t.button.show() })) : t.button.fadeOut("medium", function () { t.widget.stop().show().animate({ bottom: "30px", opacity: 1 }, 2 * t.delay), t.overlay.fadeIn(t.delay) }) })
            }


        });

        function reload_money() {
                              $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/system/user', 
                        data: {
                            type: 'get-money',
                            token: ''
                        }, 
                        success: function (json) {
                            if(json.status == false) {
                     swal("Lỗi!", "Vui lòng đăng nhập lại!", "error");          
                            }else if(json.status == true) {
                            $("#head_money").numAnim({
                                endAt: json.money,
                                duration: 3
                            });
                              return json.money;
                            }else {
                     swal("Lỗi!", "Lỗi hệ thống!", "error");                
                            }
                    }
                });

        }


(function($){
    $.fn.extend({
        numAnim: function(options) {
            if ( ! this.length)
                return false;

            this.defaults = {
                endAt: 2560,
                numClass: 'autogen-num',
                duration: 5,   // seconds
                interval: 90  // ms
            };
            var settings = $.extend({}, this.defaults, options);

            var $num = $('<span/>', {
                'class': settings.numClass 
            });

            return this.each(function() {
                var $this = $(this);

                // Wrap each number in a tag.
                var frag = document.createDocumentFragment(),
                    numLen = settings.endAt.toString().length;
                for (x = 0; x < numLen; x++) {
                    var rand_num = Math.floor( Math.random() * 10 );
                    frag.appendChild( $num.clone().text(rand_num)[0] )
                }
                $this.empty().append(frag);

                var get_next_num = function(num) {
                    ++num;
                    if (num > 9) return 0;
                    return num;
                };

                // Iterate each number.
                $this.find('.' + settings.numClass).each(function() {
                    var $num = $(this),
                        num = parseInt( $num.text() );

                    var interval = setInterval( function() {
                        num = get_next_num(num);
                        $num.text(num);
                    }, settings.interval);

                    setTimeout( function() {
                        clearInterval(interval);
                    }, settings.duration * 1000 - settings.interval);
                });

                setTimeout( function() {
                    $this.text( settings.endAt.toString() );
                }, settings.duration * 1000);
            });
        }
    });
})(jQuery);

    </script> 
  <!-- Messenger Plugin chat Code --> 
  <div id="fb-root"></div> 
  <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script> 
  <!-- Your Plugin chat code --> 
 </body>
</html>
