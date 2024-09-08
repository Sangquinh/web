<?php 
if($kun->is_mobile()) $h = '514'; else $h = '460';

?>


		    		        <div class="sa-banner"> 
    <div class="container" style="padding: 0"> 
     <div class="sa-bntab clearfix"> 
          <div class="sa-bncol2">
            <div class="swiper-container sabner">

			    
                
                
                                <div class="swiper-slide" data-swiper-autoplay="2000">
                  <img src="<?php echo $_banner['url'];?>" alt="">


                


                
		</div>

</div>
          </div>
         <div class="sa-bncol1">
            <div class="sa-bntbox">
              <ul class="sa-bnnav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#topnap" role="tab" data-toggle="tab">Nạp thẻ</a>
                </li>

                
                
                    </ul>
                    <div class="sa-bntcbox tab-content">
                        <div role="tabpanel" class="tab-pane" id="thuong">
                            <div class="sa-bntabbox">
                                <ul class="sa-topthe">
                                          <?php 
$meow = mysqli_query($kun->connect_db(), "SELECT * FROM `users` ORDER BY `money_nap` DESC LIMIT 0,5");
$i = 1;
while ($eow = mysqli_fetch_array($meow)) { ?>
                                                                     
                                    <li>
                                        <i><?php echo $i;?></i>
                                        <span><?php echo $eow['username'];?></span>
                                        <label><?php echo number_format($eow['money_nap']);?><sup>đ</sup>
                                        </label>
                                    </li>
                                    <?php
$i++;
 } ?>
 </ul>
                                                                                                 </ul>
                            </div>
                        
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="topnap">
                            <div class="c-layout-sidebar-content ">



       <style type="text/css">
    .sa-bntbox .form-control {
            height: 41px;
            color: #ffffff;
            background: #1f2228;
            border: 1px solid #30343c;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .sa-bntbox input[type="text"]{
            color: #fff !important;
        }

        .sa-bntbox .btn-submit{
            border-color: none!important;
            outline: !important;
            width: 100%!important;
            text-align: center;
            font-weight: 700!important;
            font-size: 18px!important;
            color: #000000!important;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            background: linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -moz-linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -o-linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -ms-linear-gradient(to top, #FFE900 0%, #F2AC00 100%)!important;
            background: -webkit-linear-gradient(bottom, #938cff 0%, #d9ff05 100%)!important;
        }
        .sa-bntbox .btn-submit:hover{
            color: #000;
        }

        .sa-bntbox .alert{
            margin-bottom: 5px;
        }

        .sa-bntbox .alert-dismissable, .alert-dismissible{
            padding-top: 0px;
            padding-bottom: 0px;
        }
    </style>

<form method="POST" action="" accept-charset="UTF-8">
<div class="form-group">
<select class="form-control"  name="type" id="type">
<option value="">Chọn Loại Thẻ</option>
                        <option value="VIETTEL">Viettel (100%)</option>
                        <option value="MOBIFONE">Mobifone (100%)</option>
                        <option value="VINAPHONE">Vinaphone (100%)</option>
<option value="VIETNAMOBILE">Vietnamobile (100%)</option>
<option value="ZING">Zing (100%)</option>

</select>
</div>
<div class="form-group">
<select name="amount" id="amount" class="form-control">
<option value="">-- Chọn đúng mệnh giá. Sai mất thẻ --</option>
<option value="10000">10,000 VND</option>
<option value="20000">20,000 VND</option>
<option value="30000">30,000 VND</option>

<option value="50000">50,000 VND</option>
<option value="100000">100,000 VND</option>
<option value="200000">200,000 VND</option>
<option value="300000">300,000 VND</option>
<option value="500000">500,000 VND</option>
<option value="1000000">1,000,000 VND</option>

</select>
</div>
<div class="form-group">
<input type="text" class="form-control" name="pin" maxlength="16" required="" placeholder="Mã số thẻ" >
</div>
<div class="form-group">
<input type="text" class="form-control" name="serial" maxlength="16" required="" placeholder="Mã serial" >
</div>
<button type="submit" name="submit" class="btn btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block"  style="display:inline-block; width: 100%;" data-loading-text="<i class='fa fa-spinner fa-spin '></i>">NẠP THẺ
            </button>
            
    <div class="clearfix"></div>
    <!-- END: PAGE CONTENT -->
</div>


<script type="text/javascript">
        $("form").submit(function(e) {
    e.preventDefault();
    var form = this;
    var cont = $('#result');

    var type = $('select[name=type]').val();
    var amount = $('select[name=amount]').val();
    var serial = $('input[name=serial]').val();
    var pin = $('input[name=pin]').val();

    if(!type) {
        cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
    }else if(!amount) {
        cont.html('<div class="alert alert-danger"> Lỗi hệ thống!</div>');
    }else if(!serial) {
        cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Seri!</div>');
    }else if(!pin) {
        cont.html('<div class="alert alert-danger"> Bạn chưa nhập mã Pin!</div>');
    }else {
        cont.html('');
        $('button[name=submit]').attr("disabled", true);
        //$('button[name=submit]').removeAttr("disabled");
        $('button[name=submit]').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý');
                $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/model/account/napthe.php', 
                        data: {
                            type: type,
                            amount: amount,
                            serial: serial,
                            pin: pin,
                            token: '<?php echo $user['token'];?>'
                        }, 
                        success: function (json) {
                            if(json.status == false) {
                                swal("Lỗi!", json.msg, "error");
                                cont.html('<div class="alert alert-danger">Lỗi: '+json.msg+'</div>');
                            }else if(json.status == true) {
                                swal("Thành Công!", json.msg, "success");
                                cont.html('<div class="alert alert-success">Thành Công: '+json.msg+'</div>');
                            }else {
                                swal("Lỗi!", "Lỗi hệ thống!", "error");
                            }
                                $('button[name=submit]').html('NẠP THẺ');
                                $('button[name=submit]').removeAttr("disabled");
                    }
                });

    }

});
</script>



</div>
<div role="tabpanel" class="tab-pane " id="phanqua">
                    <div class="sa-bntabbox">
    <ul class="sa-topthe">
         <li>
                
<p style="text-align: center;"><strong>NHẬN NGAY QUÀ CỰC KHỦNG</strong></p>
<p style="text-align: center;"><strong>TOP 1: 25.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP 2: 20.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP 3: 15.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP 4: 10.000 KIM CƯƠNG</strong></p>
<p style="text-align: center;"><strong>TOP5: 5.000 KIM CƯƠNG</strong></p>

			</ul>
</div>

                </div>
              </div>

        
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



	</header>

