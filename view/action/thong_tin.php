<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<?php $row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `users` WHERE `username`='".$user['username']."'")) ?>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                   

              <div class="c-layout-sidebar-content ">

    <div class="col-md-12">
        <div class="text-center" >
            <center>
                <!-- <img class="img-responsive img-thumbnail hidden-xs" width="256" height="256" src="/assets/frontend/images/unknown-avatar.jpg" alt=""> -->
                <h2style="color: white;" class="c-font-bold c-font-28">UID: <?php echo $row['id'];?></h2> <br>
                <h2style="color: white;" class="c-font-bold c-font-28"><?php echo $user['username'];?></h2>
                <h2 style="color: white;"class="c-font-22"><?php echo $level;?></h2>
                <h2 style="color: white;"class="c-font-22"></h2>
                <h2style="color: white;" class="c-font-22 c-font-red"><?php echo number_format($row['money']);?>đ</h2>
            </center>

        </div>

    </div>
                    <div class="c-content-title-1">
                        <h3 style="color: white;" class="c-font-uppercase c-font-bold">Thông tin tài khoản</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <table class="table table-striped">
         <tbody>
                            
                            <tr>
                                <th scope="row">UID của bạn:</th>
                                <th><?php echo $row['id'];?>@facebook.com</th>
                            </tr>
                            <tr>
                                <th scope="row">Số dư tài khoản:</th>
                                <td><b class="text-danger"><?php echo number_format($row['money']);?>đ</b>
                                </td>
                            </tr>
                                                         <th scope="row">Số dư kim cương:</th>
                                <td><b class="text-danger"><?php echo number_format($row['kimcuong']);?></b>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Nhóm tài khoản:</th>
                                <td><?php echo $level;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Ngày tham gia:</th>
                                <td>
                                    <?php echo date('d/m/20y', $row['time']);?>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->
                </div>
                
                              <?php echo $btn_admin;?>
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
        <style>
            .c-layout-page{
                padding: 15px;
                background-color :rgba(0, 0, 0, 0.7);
            }
            input[type="submit"],button[type="submit"]{
                color:black;
                background-color: #f3f08c;
            }
        </style>
</div>



    </div>
            