<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
?>

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
        background: url(https://quanlyshop.vip/upload/doanhmuc/1620758833884696.png) no-repeat;
		position: relative !important;
		background-size: contain !important;
	}
	.wheeling{
		
	}
	#slot1, #slot2, #slot3{
			margin-top: -1px!important;
			margin-bottom:10px!important;
			margin-left: 0px!important;
			margin-right: 8px!important;
			background-size: 62px 60px!important;
			width: 62px!important;
			height: 60px!important;position: relative;border-radius: 3px;}
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
        .a1 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/1620758833805599.png");
    }
        .a2 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/162075883337972.png");
    }
        .a3 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/1620758833754773.png");
    }
        .a4 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/1620758833402254.png");
    }
        .a5 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/1620758833851359.png");
    }
        .a6 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/1620758833658488.png");
    }
        .a7 {
        background-image: url("https://quanlyshop.vip/upload/doanhmuc/1620758833951340.png");
    }
      

    @media  screen and (min-width: 580px) {
        .game-list {
            width: 659px;
            height: 568px;
            background: url(https://quanlyshop.vip/upload/doanhmuc/1620758833884696.png) no-repeat;
            background-size: 659px 405px;
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
		left: 260px;
		bottom: 70px;
		padding: 0 !important;      
        }

        #slot1,
        #slot2,
        #slot3 {
            display: inline-block;
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 19px;
            background-size: 129px 118px;
            width: 130px;
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

    <div class="c-content-title-1 pd50">
        <h3 style="color:white" class="c-center c-font-uppercase c-font-bold">Bingo Tiệc Bãi Biển</h3>
     <div class="c-line-center c-theme-bg"></div>
    </div>
    <div class="col-lg-1 col-md-hidden"></div> 
    <div id="boxfull" class="col-lg-6 col-md-12"> 
     <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl"> 
      <div class="row-flex-safari game-list" style="margin-bottom: 40px"> 
       <main> 
        <section id="status"></section> 
        <section id="Slots"> 
         <div id="slot1" class="a1">
          <img id="role_1" style="width: 100%;" src="/assets/img/bingo/7.png">
         </div> 
         <div id="slot2" class="a1">
          <img id="role_2" style="width: 100%;" src="/assets/img/bingo/7.png">
         </div> 
         <div id="slot3" class="a1">
          <img id="role_3" style="width: 100%;" src="/assets/img/bingo/7.png">
         </div> 
        </section> 
        <section id="Gira">
         <img src="https://quanlyshop.vip/upload/settings/162092291995607148.png" id="quay">
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
        <div class="text-center">
            <h3 class="num-play" style="color: #FFFFFF;">Bạn còn <span>0</span> lượt chơi.</h3>
        </div>
        <a class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Thể Lệ</span>
            </span>
        </a>
        <a href="/user/history/bingo" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Lịch sử quay</span>
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
        <?php
        for($i=1; $i <= 7; $i++) { 
echo '<img style="display: none;" src="/assets/img/bingo/'.$i.'.png">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#quay').click(function (){

    document.getElementById("quay").disabled = true;
    document.getElementById("quay").innerHTML = "Đang Kiểm Tra!";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/bingo', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay!";
            }else if(json.status == 1) {

         document.getElementById("quay").disabled = true;
         document.getElementById("quay").innerHTML = "Đang Quay";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, msg) {

    var items = [1,2,3,4,5,6,7];  // name of img random images

    var stop_bingo_1 = 30; // 5s
    var stop_bingo_2 = 50; // 5s
    var stop_bingo_3 = 70; // 5s
  


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*40 );}

// Bingo 2
for (let i=1; i<=stop_bingo_2; i++) {setTimeout( function timer(){
 var item_2 = items[Math.floor(Math.random() * items.length)];
 change_img("role_2", item_2);
  if(i == stop_bingo_2) {
  change_img("role_2", role_2); 
  return
 }
 }, i*40 );}

// Bingo 3
for (let i=1; i<=stop_bingo_3; i++) {setTimeout( function timer(){
 var item_3 = items[Math.floor(Math.random() * items.length)];
 change_img("role_3", item_3);
  if(i == stop_bingo_3) {
  change_img("role_3", role_3);
  return
 }
 }, i*40 );}



setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";   
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingo/'+img_name+'.png';
}



</script>