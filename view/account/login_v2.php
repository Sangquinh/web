<?php
if($_SESSION['token']) {
    die('<meta http-equiv="refresh" content="0;URL=/home"/>');
}
?>

</style> 
    <link rel="stylesheet" href="/assets/Scripts/toastr/toastr.min.css"> 
   
    <div class="content-black">
    <div class="login-box container">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">Đăng nhập hệ thống</p>
            <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>
<o id="result"></o> 
   <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="username" value="" placeholder="Tài khoản của Web">
                    <span class="glyphicon form-control-feedback"><i class="fa fa-user" aria-hidden="true"></i></span>

                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                    <span class="glyphicon form-control-feedback"><i class="fa fa-lock" aria-hidden="true"></i></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label style="color: #fff">
                                <input type="checkbox" name="remember" id="remember"> Ghi nhớ
                            </label>
                        </div>
                    </div>

                </div>


  <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" id="submit" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Đăng nhập</button>
                    </div>
                </div>
            </form>

  <div class="social-auth-links text-center">
                <p style="margin-top: 5px">- HOẶC -</p>
                <a href="/reg.html" style="margin-top: 2px" class="p-2 btn btn-danger"><i class="fa fa-key"></i>Đăng kí tài khoản tại shop</a>
                 <a href="/vai.php" style="margin-top: 2px" class="p-2 btn btn-primary"><i class="fa fa-facebook"></i>Login FB</a> 
            </div>
        <!-- /.social-auth-links --> 
       </div> 
       <!-- /.login-box-body --> 
      </div> 
      <!-- /.login-box --> 
     </div> 
     <style>
 .login-box,
        .register-box {
            border: 1px solid #cccccc;
            color: #ef282b;
            margin: 20px auto;
        }
        
        .login-box .login-box-body,
        .register-box .login-box-body {
        
            margin: 2% auto;
        }
        
        @media (min-width: 767px) {
            .login-box,
            .register-box {
                width: 35%;
            }
        }
        
        .login-box-msg,
        .register-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px;
            text-align: center;
            font-size: 20px;
            ;
            font-weight: bold;
        }
    </style>
</div>


    </div>



<script src="/assets/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang đăng nhập";

    $.ajax({
        type: "POST",
        url: 'system/user',
        data: {
            type : 'login',
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Đăng nhập";

           $("#result").html(result);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#submit').click();
    }
});

</script>


<script>
    $(document).ready(function () {
        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };
    });
</script>

</body>

</html>
                 </script> 
  <style type="text/css">
    .sl-footer span{
        font-weight: inherit;
    }
    </style>

</body>

</html>