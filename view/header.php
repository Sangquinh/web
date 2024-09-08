 <!--    
					Bản Quyền Thuộc Về
		------------------------------------
		HIEUVIP22  ( Xukak )
        MÃ NGUỒN ĐƯỢC VIẾT BỞI HIEUVIP22 
        https://www.facebook.com/hieuvip22pr
        https://zalo.me/0968507339
		 -->
<!-- HIEUVIP22 - NẾU BẠN MUỐN SỞ HỮU 1 WEBSITE TƯƠNG TỰ, LIÊN HỆ : facebook.com/hieuvip22pr -->
<!-- HIEUVIP22 - IF YOU WANT TO HAVE A WEBSITE SIMILAR, CONTACT : facebook.com/hieuvip22pr -->	
<?php 
    if($_SESSION['token'] != $user['token']) {
        session_destroy();
        header("Location: /");
        exit();
    }
?>
 <!DOCTYPE html>
<html lang="vi">
<head>
 

        <meta charset="utf-8"/>
<title><?php echo $title;?></title>
<link rel="shortcut icon" href="<?php echo $_admin['facebook'];?>" type="image/x-icon">
<!--- SEO TOP -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <!-- Từ Khóa -->
    <meta name="keywords" content="AS Mobile, Garena free fire vietnam , Polo free fire, Manhtg free fire, TVT - Free Fire, Gao Bạc Free Fire, Huyền Thoại Sinh Tồn - Free Fire Esports, Anh Hảo Free Fire, ViruSs Free Fire, GilGaming TV, Meow DGame, Phong Zhou Free Fire, Gill Free Fire, ShadowHP Free Fire, Bảo Hân TV, Conan Gaming, HUNGAKIRA MOBILE, NTN Gaming, Game Củ Tạ, Cô Ngân Tv, GAO BẠC TV, ANH FORD, Kelly Gaming TV, Nam Lầy, Meow DGame Streamer, SlenderMan, Hải Đăng Gamer, Lão Gió, hà Mon, BUSS Gaming, Rikaki Gaming, Black Ghost, Lưu Trung TV, Game One, TrollKid, Thành Mốc, NHN Troll, Na Gây Mê, C4 Gaming, Chipi Gaming, Cow TV, Thịnh LT Mobile, Sỹ Kẹo, Sĩ Toàn Gaming, iGAMING TV, Hà Anh TV, Bé Gấu TV, NamTe Gaming, Học Mõm, ThanhTran Polo, TheBeo TV, Mino TV, Thành Gaming TV, Nu Gaming, Khang Quỷ Dữ, Hoàng Zin, Tây Thành Dũng, Hoàng Bi, garena free fire vietnam, tvt free fire, gao bac free fire, huyen thoai sinh ton free fire esports, anh hao free fire, bao han tv, game cu ta, co ngan tv, gao bac tv, nam lay, hai dang gamer, lao gio, ha mon, luu trung tv, thanh moc, na gay me, thinh lt mobile, sy keo, si toan gaming, ha anh tv, be gau tv, hoc mom, thanh gaming tv, khang quy du, hoang zin, tay thanh dung, hoang bi, free fire, shop free fire, shop nick free fire, shop acc free fire, bán kim cương free fire, bán kc free fire, thử may free fire, bán nick free uy tín, bán nick free giá rẻ, acc free fire giá rẻ, vòng quay 9k free fire, shop acc ff, shop ff giá rẻ, shop nick ff, thử may ff 9k, thử may ff giá rẻ, thử may ff uy tín, ban kim cuong free fire, ban kc free fire, thu may free fire, ban nick free uy tin, ban nick free gia re, acc free fire gia re, vong quay 9k free fire, shop ff gia re, thu may ff 9k, thu may ff gia re, thu may ff uy tin,">
    		<link rel="shortcut icon" href="https://i.imgur.com/vojrvxW.png" type="image/x-icon">

    <script src="/assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
    <SCRIPT src="/assets/Style/jquery.min.js" type="text/javascript"></SCRIPT>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="/assets/frontend/theme/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/font-awesome/css/font-awesome.min.css"/>
    <link href="/assets/frontend/theme/assets/plugins/font-awesome/css/fontawesome.css"/>
    <link href="/assets/frontend/theme/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
      	<!-- END: PAGE STYLES -->
  	<!-- BEGIN THEME STYLES -->
    <link href="/assets/frontend/home/css/style.css?v=1" rel="stylesheet" type="text/css"> 
  <link href="/assets/frontend/theme/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"> 
  <link href="/assets/frontend/theme/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"> 
  <link href="/assets/frontend/theme/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"> 
  <link href="/assets/frontend/theme/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css">
  <link href="/assets/Scripts/sweetalert/sweetalert.css" rel="stylesheet" />
<!-- 
   -->
  <script src="/assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
  <script src="/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
  <link href="/assets/frontend/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/home/css/custom.css">
    <link href="/assets/frontend/home/css/swiper.css" rel="stylesheet">
    <script src="/assets/frontend/home/sweetalert.min.js"></script>

    <link rel="stylesheet" href="/assets/frontend/home/sweetalert.css">
    <script src="/assets/frontend/home/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/home/js/swiper.js"></script>
    <script src="/assets/frontend/home/js/boot.js"></script>
    <script src="/assets/frontend/home/functions.js"></script>
    <script type="text/javascript" src="/assets/Scripts/rotate.js"></script>
    <script src="/assets/Scripts/sweetalert/sweetalert.min.js"></script>
  <!-- END THEME STYLES -->
   
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108816638524251");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
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
    <style>
    body{
        font-weight: 400 !important;color:#666;
    }
    .table > tbody + tbody{border-top: unset;}
        #imgcaptcha{
            max-width: initial;
        }
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

        @media  screen and (min-width: 768px) {
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

        @media  screen and (max-width: 767px) {
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

        .sa-header{
            /*position: relative;*/
        }
    </style>

    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>  

<?php if($user['username']) { ?>
    <!-- PUSHER LIB BY KUNKEY -->
    <script type="text/javascript" src="/assets/Scripts/pusher.js"></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>

        <script type="text/javascript">
            var pusher = new Pusher('10d5ea7e7b632db09c72', {
                encrypted: true
            });
            var channel = pusher.subscribe('<?php echo $user['username'];?>');
            channel.bind('realtime', function (data) {
                    console.log(data.message);
                    if(data.message) {
                        if(data.type == 'success') {
                            reload_money();
                        }
                            swal(data.title, data.message, data.type);
                    }
                });
        </script>

<?php } ?>
<style type="text/css">
    input {
    color: #000000 !important;
}
input[type="text"] {
    color: #000000 !important;
}
</style>
</head>



<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">   
    <style type="text/css">
        body{
            background: #000;
            background: url("https://upanh.cf/jq5or0fnro.png ");
              background-attachment: fixed;
              color: #dadada !important;
              background-size: 100%
        }
    </style>
                  

<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <style type="text/css">
#cfacebook {
    position: fixed;
    bottom: 0px;
    right: 10px;
    z-index: 999999999999999;
    width: 250px;
    height: 40px;
    box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    overflow: hidden;
    background-color:#3a5795;
    line-height:40px;
    padding-left:50px;
}


#cfacebook .fchat {
    float: left;
    width: 100%;
    height: 350px;
    overflow: hidden;
    display: none;
    background-color: #fff;
}

    #cfacebook .fchat .fb-page {
        float: left;
    }

#cfacebook a.chat_fb {
    background: #3a5795 url() 225px 15px no-repeat;
    float: left;
    width: 250px;
    height: 40px;
    color: #fff;
    text-decoration: none;
    line-height: 40px;
    text-shadow: 0 1px 0 rgba(0,0,0,0.1);
    border: 0;
    border-bottom: 1px solid #133783;
    z-index: 9999999;
    font-size: 13px;
    text-align: center;
    text-transform: uppercase;
    padding:50px;
    padding-left:100px;
}

    #cfacebook a.chat_fb img {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    #cfacebook a.chat_fb:hover {
        color: yellow;
        text-decoration: none;
    }
a.float-btn {
    background: #000;
    width: 180px;
    height: 41px;
    display: block;
    border: 2px solid #000;
    font-size: 17px;
    line-height: 34px;
    text-align: center;
    color: #fff;
    margin: 0 0 1px 0;
}
.float-menu {
    width: 179px;
    position: fixed;
    right: 0;
    top: 40%;
    z-index: 999;
    transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
}
.sa-header{
			position: relative;
}

</style> 
     </style> 
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">

<div class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">

    <div class="sa-header">
        <div class="container">
            <span class="sa-imn"><i class="fa fa-bars" aria-hidden="true"></i></span>
            <a  class="sa-logo" href="/" title=""><img style="margin-top: 15%;" src="<?php echo $_logo['url'];?>" alt="" ></a>
            <ul class="sa-menu clearfix">

                    <ul class="nav navbar-nav c-theme-nav">
                       
                        <li><a rel="" href="/user/napthe" class=""><b>NẠP THẺ</b></a>
                        </li>
                        <li><a rel="" href="/user/rutkc" class=""><b>RÚT KIM CƯƠNG</b></a>
                        </li>
                       <li class=" "><a  rel=""  href="#"  class=""><b>Vòng Quay</b><span class="caret"></span></a>
<ul id="children-of-733" class="dropdown-menu c-menu-type-classic c-pull-left " >

<?php 
	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` ORDER BY `id` DESC");
	while ($row = mysqli_fetch_array($res)) {
		if($row['status'] == 'true') {
	 ?>
<li class="c-menu-type-classic"><a  rel="" href="/html/quay/
								<?php echo $row['id'];?>" title="
								<?php echo $row['name'];?>" class=""><?php echo $row['name'];?></a></li><?php } } ?>

</ul>
</li>


                </ul>
</ul>
                     <style>
                         element.style {
}
.container, .container-fluid {
    padding: 15px;
}
.container {
    position: relative;
}
                     </style>
<?php if(!$user['fbid']){ ?>
                          <ul class="sa-login clearfix" style="margin-left: 10px">
                <li>
                    <a href="<?php echo $href_reg;?>" title="<?php echo $btn_reg;?>"><?php echo $btn_reg;?></a></li>
                
            </ul>
<ul class="sa-login clearfix">
                <li>
                    <a href="<?php echo $href_login;?>" title="<?php echo $btn_login;?>"><?php echo $btn_login;?></a></li>
                
            </ul>
<?php }else{ ?>
           <ul class="sa-login clearfix" style="margin-left: 10px">
                <li>
                    <a href="<?php echo $href_reg;?>" title="<?php echo $btn_reg;?>"><?php echo $btn_reg;?></a></li>
                
            </ul>
<ul class="sa-login clearfix">
                <li>
                    <a href="<?php echo $href_login;?>" title="<?php echo $btn_fbid;?>"><?php echo $btn_fbid;?></a></li>
                
            </ul>
                   <!-- <button class="btn-search">Tìm kiếm</button> -->
                   <?php }?>
        </div>
    </div>
    <style>
.embed-container { position: relative; padding-bottom: 45.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    </style>
</header>

<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: PAGE CONTAINER -->