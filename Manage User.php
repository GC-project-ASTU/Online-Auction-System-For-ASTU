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

	<title>OASA Manage User</title>
	
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
		<a href="Page-admin.php" class="logo">
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
					<a class="waves-effect" href="Registration.php">
						<i class="menu-icon mdi mdi-account-card-details"></i>
						<span>Registration</span>
					</a>
				</li>
                <li>
                    <a class="waves-effect" href="RegisteredList.php">
                        <i class="menu-icon fa fa-list"></i>
                        <span>Registered List</span>
                    </a>
                </li>	
                <li class="current">
					<a class="waves-effect" href="Manage User.php">
						<i class="menu-icon mdi mdi-account-settings-variant"></i>
						<span>Manage user</span>
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
		<h1 class="page-title">Manage User</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<!-- search tab -->
		<a href="#" class="ico-item mdi mdi-account "></a>
		<Span> Hello <?php
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
		<div class="container">
		<div class="row justify-content-center">
			<div class="col-xs-12 col-sm-11  col-md-11  col-lg-11 col-xl-11">

				<div class="box-content card white ">
					<h4 class="box-title"><i class="fa fa-cogs"></i>  Permission</h4>
					<div class="card-content form-group">	
					    <div class="form-group">
							<label class="col-md-2 control-label" for="User_type" class=" form-control-label">User Type</label>
							<div class="col-md-4">
								<select class="form-control col-md-4" id="User_type">
									<option>Adminster</option>
									<option>Advertiser</option>
									<option>Central Procurment Team</option>
									<option>Purchase and Property Adminster Directorate</option>
									<option>Requistioner</option>
									<option>Quality inspector</option>		
								</select>
							</div>
						</div>
						
						<table id="example" 
							class="table  table-responsive-sm display table-condensed" 
							style="width:100%">
							<thead>
								<tr>
									<th></th>
									<th>Creat</th>
									<th>Update</th>	
									<th>View</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Advertisment</td>
									<td>
										<div class="checkbox">	
											<label for="checkbox-1"></label>
											<input type="checkbox" 
										</div>
									</td>
									<td>
										<div class="checkbox">	
										  <label for="checkbox-1"></label>
										   <input type="checkbox" >
									    </div>
								    </td>	
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
								
								</tr>
								<tr>
									<td>Quality-inspection</td>
									<td>
										<div class="checkbox">	
											<label for="checkbox-1"></label>
											<input type="checkbox" >
										</div>
									</td>
									<td>
										<div class="checkbox">	
										  <label for="checkbox-1"></label>
										   <input type="checkbox" >
									    </div>
								    </td>	
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									
								</tr>
								<tr>
									<td>Profile</td>
									<td>
										<div class="checkbox">	
											<label for="checkbox-1"></label>
											<input type="checkbox" >
										</div>
									</td>
									<td>
										<div class="checkbox">	
										  <label for="checkbox-1"></label>
										   <input type="checkbox" >
									    </div>
								    </td>	
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									
								</tr>
								<tr>
									<td>Make Advert</td>
									<td>
										<div class="checkbox">	
											<label for="checkbox-1"></label>
											<input type="checkbox" >
										</div>
									</td>
									<td>
										<div class="checkbox">	
										  <label for="checkbox-1"></label>
										   <input type="checkbox" >
									    </div>
								    </td>	
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									
								</tr>
								<tr>
									<td>Purchase Request</td>
									<td>
										<div class="checkbox">	
											<label for="checkbox-1"></label>
											<input type="checkbox" >
										</div>
									</td>
									<td>
										<div class="checkbox">	
										  <label for="checkbox-1"></label>
										   <input type="checkbox" >
									    </div>
								    </td>	
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									
								</tr>
								<tr>
									<td>Approval Status</td>
									<td>
										<div class="checkbox">	
											<label for="checkbox-1"></label>
											<input type="checkbox" >
										</div>
									</td>
									<td>
										<div class="checkbox">	
										  <label for="checkbox-1"></label>
										   <input type="checkbox" >
									    </div>
								    </td>	
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									<td>
										  <div class="checkbox">	
											<label for="checkbox-1"></label>
											 <input type="checkbox" >
										  </div>
									</td>
									
								</tr>
							</tbody>
						</table>
						<button class="btn btn-success" id="SaveChange"><i class="fa fa-save"></i> save change</button>
						<a href="MianPage.html"><button class="btn btn-primary">Back</button></a>
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
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="dashBoared/plugin/nprogress/nprogress.js"></script>
	<script src="dashBoared/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="dashBoared/plugin/waves/waves.min.js"></script>
    <script>
		 $("#SaveChange").click(function()
			{
				swal("Succesful!", "Saved Succesfully !", "success")
		    });
	</script>
	<!-- Sparkline Chart -->
	<script src="dashBoared/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="dashBoared/scripts/chart.sparkline.init.min.js"></script>
	<script src="dashBoared/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="dashBoared/scripts/main.min.js"></script>

</body>
</html>