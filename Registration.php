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

	<title>OASA Registration</title>


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
				
				
                <li class="current">
					<a class="waves-effect" href="Registration.php">
						<i class="menu-icon mdi mdi-account-card-details"></i>
						<span>Registration</span>
					</a>
				</li>
                <li>
                    <a class="waves-effect" href="RegisteredList.php">
                        <i class="menu-icon fa fa-list"></i>
                        <span>Employee List</span>
                    </a>
                </li>
				<li>
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
		<h1 class="page-title">Registration</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
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

			<div class="col-xs-12 col-sm-10  col-md-10  col-lg-10 col-xl-10">

				<div class="box-content card white ">
					<h4 class="box-title"><i class=" mdi mdi-account-card-details"></i> Users Registration</h4>

					<div class="card-content ">	
						
						<form id="sub" class="form-horizontal"  Method="POST" enctype="multipart/form-data" action="addem.php"  >

							<div style="display: none;" id="Al" class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Well done!</strong> You successfully register the user !!
							</div>

							<div class="form-group " >
								<label  class="col-md-2  control-label" for="First_name">First Name</label>
								<div class="col-md-10 ">
								   <input  type="text" class="form-control"  id="First_name" placeholder="Enter First Name" name="fnamee" required>
							    </div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label" for="Last_name">Last Name</label>
								<div class="col-md-10">
								   <input type="text" class="form-control" id="Last_name" placeholder="Enter Last Name" name="lname" required>
							    </div>
							</div>

							<div class="form-group">
								<label  class="col-md-2 control-label" for="E_mail">E-Mail</label>
								<div class="col-md-10">
								    <input type="email" class="form-control" id="E-Mail" placeholder="Enter E-mail" name="email" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label" for="Phone Phone_number">Phone Number</label>
								<div class="col-md-10">
								   <input type="text" class="form-control" id="Phone_number" placeholder="Enter Phone number" name="pnum" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label" for="Address">Address</label>
								<div class="col-md-10">
								   <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="address" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label" for="User_type" class=" form-control-label">User Type</label>
								<div class="col-md-10">
									<select class="form-control" id="User_type" name="user_type">
										<option value="Adminster">Adminster</option>
										<option value="Advertiser">Advertiser</option>
										<option value="Central Procurment Team">Central Procurment Team</option>
										<option value="Purchase and Property Adminster Directorate">Purchase and Property Adminster Directorate</option>
										<option value="Quality inspector">Quality inspector</option>
                                        <option value="Computer Science and Engineering"> Computer Science and Engineering</option>
                                        <option name="Electronics and Communication Engineering"> Electronics and Communication Engineering</option>
                                        <option name="Power and Control Engineering"> Power and Control Engineering</option>
                                        <option name="Chemical Engineering"> Chemical Engineering</option>
                                        <option name="Material Engineering"> Material Engineering</option>
                                        <option name="Mechanical Engineering"> Mechanical Engineering</option>
                                        <option name="Water Engineering"> Water Engineering</option>
                                        <option name="Architectural Engineering"> Architectural Engineering</option>
                                        <option name="Civil Engineering"> Civil Engineering</option>
                                        <option name="Firest Year Department"> First Year Department</option>
                                        <option name="Applied Bilogy"> Applied Biology</option>
                                        <option name="Applied chemistry"> Applied chemistry</option>
                                        <option name="Applied Giology"> Applied Giology</option>
                                        <option name="Applied Physics"> Applied Physics</option>
                                        <option name="Applied Math"> Applied Math</option>
                                        <option name="Cafe"> Cafe</option>
                                        <option name="Garage"> Garage</option>
                                        <option name="Humaniterian Department"> Humaniterian Department</option>
                                    </select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Access</label>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label" for="User_name">User Name</label>
								<div class="col-md-10">
								   <input type="text" class="form-control" id="User_name" placeholder="Enter User Name" name="user_name" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label" for="exampleInputPassword1">Password</label>
								<div class="col-md-10">
								   <input type="password" class="form-control" id="Password" placeholder="Enter your password" name="password" required>
								</div>
							</div>
							
						
							<div class="form-group text-right">
								<button type="submit"
										class="btn btn-success btn-lg margin-bottom-10 waves-effect waves-light"
										id="FormSubmit" name="register">
										register
					           </button>
							</div>	
						</form>		
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->

<div  class="modal fade" id="boostrapModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Department</h4>
			</div>

			<div class="modal-body">
				<h4>Choice Requestioner Name</h4>
				<select class=" form-control" id="Department" name="req_type">
					<option>Computer Science and Enginnering</option>
					<option>Electronics and Communication Enginnering</option>
					<option>Power and Control Enginnering</option>
					<option>Chemical Engineering</option>
					<option>Material Enginnering</option>
					<option>Mechanical Engineering</option>
					<option>Water Engineering</option>
					<option>Architectural Engineering</option>
					<option>Civil Engineering</option>
					<option>First Year Department</option>
					<option>Appled Bilogy</option>
					<option>Appled chemistry</option>
					<option>Appled Giology</option>
					<option>Appled Physics</option>
					<option>Appled Math</option>
					<option>Cafe</option>
					<option>Garaje</option>
					<option>Humaniterian Department</option>
			</select>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="button" onclick="show_hide()" class="btn btn-primary btn-sm waves-effect waves-light " data-dismiss="modal" name="submit" value="submit" >Register</button>
			</div>
		</div>
	</div>
</div>

<footer class="footer">
	<div class="copy-right">
		<p>&copy;Copyright 2021 Online Auction System for ASTU | Design By 
			<a href="https://themezhub.com/">MikiyasLeul</a></p>
	   </div>
</footer>
 
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="dashBoared/scripts/jquery.min.js"></script>
	<script src="dashBoared/scripts/modernizr.min.js"></script>
	<script src="dashBoared/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="dashBoared/plugin/nprogress/nprogress.js"></script>
	<script src="dashBoared/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="dashBoared/plugin/waves/waves.min.js"></script>



	<script>
		var a;
		function show_hide()
			{	
			 document.getElementById("Al").style.display="block";
			}
    </script>
	
	<!-- Sparkline Chart -->
	<script src="dashBoared/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="dashBoared/scripts/chart.sparkline.init.min.js"></script>
  
    
	<script src="dashBoared/scripts/main.min.js"></script>
		
	<!-- Remodal -->
	<script src="dashBoared/plugin/modal/remodal/remodal.min.js"></script>

</body>
</html>
