<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>
?>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> OASA Requestioner-side</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="dashBoared/styles/style.min.css">
    <!-- Material Design Icon -->
    <link rel="stylesheet" href="dashBoared/fonts/material-design/css/materialdesignicons.css">
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="dashBoared/plugin/sweet-alert/sweetalert.css">
    <!--
 <link rel="stylesheet" href="dashBoared/styles/style-black.min.css">
  -->

</head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="#" class="logo">
            <i class="ico fa fa-university" aria-hidden="true"></i>
            OASA-ASTU
        </a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>

        <div class="user">
            <a href="#" class="avatar">
                <img src="images/MainLogo_Icon_large.png" alt="">
            </a>
            <!-- /.name -->
        </div>
        <!-- organization icon -->

    </header>
    <!-- OASA-ASTU and logo on side bar top -->

    <div class="content">
        <div class="navigation">
            <h5 class="title">Navigation</h5>

            <ul class="menu js__accordion">
                <li >
                    <a class="waves-effect" href="Request.php">
                        <i class="menu-icon mdi mdi mdi-file-send"></i>
                        <span>Purchase Request</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect" href="RequestStatus.php">
                        <i class="menu-icon fa fa-check-square-o"> </i>
                        <span>Approval Status</span>
                    </a>
                </li>

            </ul>

            <h5 class="title">Extra</h5>

            <ul class="menu js__accordion">
                <li>
                    <a class="waves-effect" href="Profile.php">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <!-- /.sub-menu js__content -->
                </li>
                <!-- /.sub-menu js__content -->
                </li>
            </ul>
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- side bar all information -->
</div>

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button"
                class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile">
        </button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <a href="#" class="ico-item mdi mdi-account "></a>
        <Span>Hello  <?php
            $sessionvar=$_SESSION['user'];
            $user='root';
            $pass='';
            $dbname='oasa';
            $db= mysqli_connect("localhost", $user, $pass, $dbname);
            if($db){
                $sql="select fname from user where username ='$sessionvar'";
                $query = mysqli_query($db, $sql);
                $row=mysqli_fetch_assoc($query);
                $userto=$row['fname'];
                echo $userto;
            }
            ?></Span>
        <a href="#" class="ico-item mdi mdi-logout js__logout"></a><!-- Log-out -->
    </div>
    <!-- /.pull-right -->
</div>
<!-- fixed-navbar -->

<div id="wrapper">
    <div class="main-content">
        <div class="row ">

            <div class=" col-lg-4 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title text-info">Advertisment</h4>
                    <div class="content widget-stat">
                        <div  class="left-content margin-top-15">
                            <i class="fa fa-buysellads"></i>
                        </div>

                        <div class="right-content">
                            <h2 class="counter text-info">3</h2>
                            <p class="text text-info">New Advertisment post</p>
                            <a href="Advertisment.php" >More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-4 col-lg-4 col-xs-12 -->

            <div class="col-lg-4 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title text-info">Request</h4>
                    <div class="content widget-stat">
                        <div class="left-content margin-top-15">
                            <i class="menu-icon mdi mdi-file-send"></i>
                        </div>

                        <div class="right-content">
                            <p class="text text-info">Making Purchase request</p>
                            <a href="Request.php" >More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 col-xs-12 -->

            <div class="col-lg-4 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title text-info">Approval Status</h4>
                    <div class="content widget-stat">
                        <div class="left-content">
                            <i class="menu-icon fa fa-check-square-o"></i>
                        </div>

                        <div class="right-content">
                            <p class="text text-info">All Approved requests</p>
                            <a href="RequestStatus.php" >More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xs-12 text-center">
                <div class="box-content ">
                    <h3 class=" text-info">Adama Science and Technology University </h3>
                    <h4><span  class=" text-info"> Purchase and Property Adminster Directorate</span> </h4>

                </div>
            </div>
            <!-- /.col-lg-4 col-xs-12 -->

        </div>
        <!-- /.row -->


    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->

<footer class="footer">
    <div class="copy-right">
        <p>&copy;Copyright 2021 Online Auction System for ASTU | Design By
            <a href="https://themezhub.com/">MikiyasLeul</a></p>
    </div>
</footer>

<!-- Placed at the end of the document so the pages load faster -->
<script src="dashBoared/scripts/jquery.min.js"></script>
<script src="dashBoared/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="dashBoared/plugin/nprogress/nprogress.js"></script>
<script src="dashBoared/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="dashBoared/plugin/waves/waves.min.js"></script>

<!-- Sparkline Chart -->
<script src="dashBoared/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
<script src="dashBoared/scripts/chart.sparkline.init.min.js"></script>

<script src="dashBoared/scripts/main.min.js"></script>
</body>
</html>