
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png">
    <title>Admin Control</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/assets/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="/admin/assets/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/admin/assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/admin/assets/dist/css/style.min.css?i=<?php echo rand(0,564564);?>" rel="stylesheet">
    <link href="/admin/assets/assets/libs/switch-checkbox/style.css" rel="stylesheet">
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/admin/assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/admin/assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="/admin/assets/dist/js/app-style-switcher.js"></script>
    <script src="/admin/assets/dist/js/feather.min.js"></script>
    <script src="/admin/assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="/admin/assets/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/admin/assets/assets/extra-libs/c3/c3.min.js"></script>
    <script src="/admin/assets/assets/libs/chartist/dist/chartist.min.js"></script>
<!--    <script src="/admin/assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->
    <script src="/admin/assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/admin/assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<!--        <script src="/admin/assets/dist/js/pages/dashboards/dashboard1.min.js"></script> -->

<style type="text/css">
    body, a, input, li, div, button, span, h1,h2,h3,h4,h5, nav, ul {
        font-family: 'Josefin Sans', sans-serif;
        cursor: url('/admin/assets/custom/arrow.cur'), auto;
    }
</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="/admin/assets/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="/admin/assets/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="/admin/assets/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="/admin/assets/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="https://graph.facebook.com/picture?id=100041463755697&width=1000&height=1000" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="text-dark"><?php echo $user['name'];?></span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/signout.html"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Đăng Xuất</a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/?modun=vongquay_kimcuong&act=index"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Vòng quay may mắn
                                </span></a>
                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Dịch Vụ FreeFire</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"><a href="/admin/?modun=sieucap&act=index" class="sidebar-link"><span
                                            class="hide-menu">VÒNG QUAY GIẢI CỨU</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=homthinhbian&act=index" class="sidebar-link"><span
                                            class="hide-menu">Hòm Thính Bí Ẩn</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=kimcuong&act=index" class="sidebar-link"><span
                                            class="hide-menu">Rương thần Huyền Bí</span></a>                                
                                
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=bingovip&act=index" class="sidebar-link"><span
                                            class="hide-menu">RỒNG THẦN  </span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=bingo4&act=index" class="sidebar-link"><span
                                            class="hide-menu">BINGO CHIẾN BINH TỐI THƯỢNG  </span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=bingo&act=index" class="sidebar-link"><span
                                            class="hide-menu">BINGO TIỆC BÃI BIỂN </span></a>
                                </li>
                                 <li class="sidebar-item"><a href="/admin/?modun=latbai1&act=index" class="sidebar-link"><span
                                            class="hide-menu">Lật Thẻ Hoa Phượng</span></a>
                                </li>
 
 <li class="sidebar-item"><a href="/admin/?modun=latbai2&act=index" class="sidebar-link"><span
                                            class="hide-menu">Lật Thẻ Joker </span></a>
                                </li>

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">Bán Nick Freefire</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="/admin/?modun=accff&act=index" class="sidebar-link"><span
                                                    class="hide-menu">Đăng Bán Nick</span></a></li>
                                        <li class="sidebar-item"><a href="/admin/?modun=accff&act=list" class="sidebar-link"><span
                                                    class="hide-menu">Danh Sách Nick</span></a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>
                             <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Dịch Vụ Liên Quân</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">Bán Nick Liên Quân</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="/admin/?modun=lienquan&act=index" class="sidebar-link"><span
                                                    class="hide-menu">Đăng Bán Nick</span></a></li>
                                        <li class="sidebar-item"><a href="/admin/?modun=lienquan&act=list" class="sidebar-link"><span
                                                    class="hide-menu">Danh Sách Nick</span></a></li>
                                    </ul>
                                </li>
                                 <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false">
                                     <span class="hide-menu">Random Liên Quân</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="/admin/?modun=random_lienquan&act=add_nick" class="sidebar-link"><span
                                                    class="hide-menu">Đăng Bán Random</span></a></li>
                                        <li class="sidebar-item"><a href="/admin/?modun=random_lienquan&act=index"  class="sidebar-link"><span
                                                    class="hide-menu">Danh Sách Gói Random</span></a></li>
                                              <?php 
                                    $quas = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan`");
                                    while ($rose = mysqli_fetch_array($quas)) {
                                            ?>
                                        <li class="sidebar-item"><a href="/admin/list_acc_random_lq/<?php echo $rose['cname'];?>" class="sidebar-link"><span
                                            class="hide-menu"><?php echo $rose['name'];?></span></a>
                                </li>
                                    <?php
                                        }
                                    ?>           
                                                    
                                    </ul>
                                </li>

                            </ul>
                        </li>







                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Random Free Fire</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"><a href="/admin/?modun=random_freefire&act=add_nick" class="sidebar-link"><span
                                            class="hide-menu">Đăng Bán Random</span></a>
                                </li>

                                <li class="sidebar-item"><a href="/admin/?modun=random_freefire&act=index" class="sidebar-link"><span
                                            class="hide-menu">Danh Sách Gói Random</span></a>
                                </li>


                                    <?php 
                                    $quas = mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire`");
                                    while ($rose = mysqli_fetch_array($quas)) {
                                            ?>
                                        <li class="sidebar-item"><a href="/admin/list_acc_random/<?php echo $rose['cname'];?>" class="sidebar-link"><span
                                            class="hide-menu"><?php echo $rose['name'];?></span></a>
                                </li>
                                    <?php
                                        }
                                    ?>


                            </ul>
                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/?modun=giftcode&act=index"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">GiftCode Giảm Giá
                                </span></a>
                        </li>

<?php if(mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'")) > 0) $new = '<span class="btn btn-danger btn-sm">'.mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'")).'</span>'; ?>
                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/?modun=rut_kim_cuong&act=index"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Duyệt Kim Cương<?=$new;?>
                                </span></a>
                        </li>


<?php if(mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `status`='2'")) > 0) $new2 = '<span class="btn btn-danger btn-sm">'.mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `status`='2'")).'</span>'; ?>
                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/thenap"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Thẻ Nạp <?=$new2;?>
                                </span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/users"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Thành Viên</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Web Developer</span></li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">WebSite Setting</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=chung" class="sidebar-link"><span
                                            class="hide-menu">Cài Đặt Chung</span></a>
                                </li>
                             <!----   <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=danh_muc" class="sidebar-link"><span
                                            class="hide-menu">Hiển Thị Danh Mục</span></a>
                                </li>--->
                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=game_status" class="sidebar-link"><span
                                            class="hide-menu">Hiển Thị Game</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=game_images" class="sidebar-link"><span
                                            class="hide-menu">Cài Đặt Ảnh Game</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=update&act=update" class="sidebar-link"><span
                                            class="hide-menu">Cập Nhật Hệ Thống</span></a>
                                </li>                                
                                <li class="sidebar-item"><a href="javascript:void(cc())" class="sidebar-link"><span
                                            class="hide-menu">RESET TOP NẠP</span></a>
                                </li>
                            <script type="text/javascript">
                            function cc() {
                                if(confirm('Bạn Có Muốn Reset Top Nạp Không?') == true){
                                    if(confirm('Bạn Có Muốn Reset Top Nạp Không? Hỏi lần thứ 2') == true){
                                        if(confirm('Bạn Có Muốn Reset Top Nạp Không? Lần cuối?') == true){
                                            window.location.href = "/admin/reset_topnap.php";
                                        }
                                    }
                                }
                            }
                            </script>


                            </ul>
                        </li>





                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <!-- ============================================================== -->
<div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->    
            <div id="main-kunkey">