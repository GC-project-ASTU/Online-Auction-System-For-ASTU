<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>OASA Bid Announcment</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="dashBoared/styles/style.min.css">
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="dashBoared/fonts/material-design/css/materialdesignicons.css">
	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">
	<!-- Sweet Alert -->
	<link rel="stylesheet" href="dashBoared/plugin/sweet-alert/sweetalert.css">
	

	<!-- Dark Themes 
	<link rel="stylesheet" href="dashBoared/styles/style-black.min.css">
    -->

</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="PPAD-page.php" class="logo">
			<i class="fa fa-university" aria-hidden="true"></i>
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
				
				
				<li>
					<a class="waves-effect" href="Recived Request.php">
						<i class="menu-icon fa fa-download"></i>
						<span>Requests Recived</span>
						<span class="notice notice-blue">New</span>
					</a>
				</li>
				<li>
					<a class="waves-effect" href="Approve request.php">
						<i class="menu-icon fa fa-check-square-o"></i>
						<span>Approved Requests</span>
						<span class="notice notice-blue">New</span>
					</a>
				</li>
				
			</ul>

			<h5 class="title">Extra</h5>

			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="Bid report.php">
						<i class="menu-icon mdi mdi-buffer"></i>
						<span>Bid Report</span>
					</a>
				</li>
				
				
					<li >
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
		<h1 class="page-title">Bid report</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<a href="#" class="ico-item mdi mdi-account "></a>
		<Span> <Span> Hello <?php
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
                ?></Span></Span>
		<a href="#" class="ico-item mdi mdi-logout js__logout"></a><!-- Log-out -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- fixed-navbar -->
<div id="wrapper">	
	<div class="main-content">
		<div class="container">
		<div class="row justify-content-center">
			<div class="col-xs-12 col-sm-10  col-md-10  col-lg-10 col-xl-10">

				<div class="box-content card white ">	

                <div class="invoice-box">
					<table>
						<tr class="top">
							<td colspan="2">
								<table>
									<tr>
										<td class="title">
											<a href="#" class="logo">Adama<span>University</span></a>
										</td>
										
										<td>
											Bid-Id #: 123<br>
											Start Date: July 28, 2021<br>
											Open date: August 15, 2021
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<tr class="information">
							<td colspan="2">
								<table>
									<tr>
										<td>
											Ethiopia.<br>
											Kebele 14 Adama, Ethiopia<br>
											P.O.Box: 1888 Adama, Ethiopia
										</td>
										
										<td>
											Phone: +251-221-110400.<br>
                                            E-mail: info@astu.edu.et.<br>
                                            Fax: +251-221-100038<br>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								Winners Name
							</td>
							
							<td>
								Rank #
							</td>
						</tr>
						
						<tr class="details">
							<td>
								    1. Vintage Technoology PLC<br>
                                    2. Icog Lab<br>
                                    3. Riftvally Pappers<br>
							</td>
							
							<td>
                                <span class="notice notice-blue">First</span>
							</td>
						</tr>
						
						<tr class="heading">
							<td>
								Winning Price
							</td>
							
							<td>
								Price
							</td>
						</tr>
						
						<tr class="item">
							<td>
								1
							</td>
							
							<td>
								48000 ETB
							</td>
						</tr>
						
						<tr class="item">
							<td>
								2
							</td>
							
							<td>
								50000 ETB
							</td>
						</tr>
						
						<tr class="item last">
							<td>
								3
							</td>
							
							<td>
								43700 ETB
							</td>
						</tr>
						
						<tr class="total">
							<td></td>
							
							<td></td>
						</tr>
					</table>
					<div class="text-right margin-top-20">
						<ul class="list-inline">
							<li><button type="button" class="btn btn-default waves-effect waves-light"><i class='fa fa-print'></i> Print</button></li>
							
						</ul>
					</div>
				</div>
				<!-- /.invoice-box -->
			</div>
				</div>
			   </div>	
			 </div>
			</div>
		</div>
	</div>
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
	<script src="dashboared/plugin/bootstrap/js/bootstrap.min.js"></script>
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