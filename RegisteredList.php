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

	<title>OASA Registered-List</title>
    
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
                <li class="current">
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
		<h1 class="page-title">Registered List</h1>
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
		<!-- search tab -->
		<a href="#" class="ico-item mdi mdi-logout js__logout"></a><!-- Log-out -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- fixed-navbar -->

div id="wrapper">
<div class="main-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-11  col-lg-11 col-xl-11">

                <div class="box-content card white ">
                    <h4 class="box-title">Request Status</h4>
                    <div style="display: none;" id="Al" class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Well done!</strong> Successfully Cancelled !!
                    </div>
                    <!-- <form>
                         <div class="input-row">
                            <label for="Department">Department</label>
                            <input type="Department" name="Department" id="Department">
                         </div>
                         <div class="input-row">
                            <label for="Request_item">Request item</label>
                            <input type="Request item" name="Request item" id="RequestItem">
                         </div>
                         <div class="input-row">
                            <label for="Request_date">Request date</label>
                            <input type="Request date" name="Request date" id="RequestDate">
                         </div>
                         <div class="input-row">
                            <label for="Status">Status</label>
                            <input type="Status" name="Status" id="Status">
                         </div>
                         <button class="btn btn-primary " id="sub">submit</button>

                        </form>
                   -->

                    <div class="card-content form-group">
                        <div class=" box form-group">
                            <table id="example" class="table table-responsive " style="width:100%">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>User Type</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                include("dbconfig.php");
                                $sessionvar2=$_SESSION['user'];

                                $user='root';
                                $pass='';
                                $dbname='oasa';
                                $db= mysqli_connect("localhost", $user, $pass, $dbname);
                                if($db){
                                    $sql="select * from user ";
                                    $query = mysqli_query($db, $sql);
                                    $row=mysqli_fetch_assoc($query);

                                }
                                $sql="select * from user ";
                                $re=mysqli_query($con,$sql);
                                $count=mysqli_num_rows($re);
                                $i=1;
                                while($row=mysqli_fetch_array($re))
                                {

                                    $fname=$row['fname'];
                                    $lname=$row['lname'];
                                    $email=$row['email'];
                                    $p_number=$row['p_number'];
                                    $address=$row['address'];
                                    $user_type=$row['user_type'];
                                    $username=$row['username'];
                                    $password=$row['password'];
                                    echo '<tr class="default">';
                                    echo '<td style="text-align:center">'.$fname.'</td>';
                                    echo '<td>'.$lname.'</td>';
                                    echo '<td>'.$email.'</td>';
                                    echo '<td>'.$p_number.'</td>';
                                    echo '<td>'.$address.'</td>';
                                    echo '<td>'.$user_type.'</td>';
                                    echo '<td>'.$username.'</td>';
                                    echo '<td ><form method="post" action="fire.php" >
                                                   <input type="hidden" name="uno" id="uno" value="'.$username.'" />
                                                   <input type="submit" name="fire" class="btn btn-success" value="Delete" />
                                                   </form></td>';

                                    $i++;

                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.main-content -->
</div><!--/#wrapper -->

<div class="modal fade" id="boostrapModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Update</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group ">
						<label  class="col-md-4  control-label" for="First_name">First Name</label>
						<div class="col-md-7 ">
						   <input  type="text" class="form-control" id="First_name" placeholder="Enter First Name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Last_name">Last Name</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="Last_name" placeholder="Enter Last Name">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-4 control-label" for="E_mail">E-Mail</label>
						<div class="col-md-7">
							<input type="email" class="form-control" id="E-Mail" placeholder="Enter E-mail">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Phone Phone_number">Phone Number</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="Phone_number" placeholder="Enter Phone number">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Address">Address</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="Address" placeholder="Enter Address">
						</div>
					</div>
					<div class="form-group">
						<label for="Department" class="col-md-4 control-label">Department</label>
							<select class="col-md-7 control-label" id="Department">
								<option>Computer Science and Enginnering</option>
								<option>Electronics and Communication Enginnering</option>
								<option>Power and Control Enginnering</option>
								<option>Chemical Engineering</option>
								<option>Material Enginnering</option>
								<option>Mechanical Engineering</option>
								<option>Water Engineering</option>
								<option>Architectural Engineering</option>
								<option>Civil Engineering</option>
								<option>Firest Year Department</option>
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
					<div class="form-group">
                       
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="User_name">User Name</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="User_name" placeholder="Enter User Name">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-4 control-label" for="exampleInputPassword1">Password</label>
						<div class="col-md-7">
						   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="button" onclick="show_hide()" class="btn btn-primary btn-sm waves-effect waves-light" data-dismiss="modal">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="boostrapModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Update</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group ">
						<label  class="col-md-4  control-label" for="First_name">First Name</label>
						<div class="col-md-7 ">
						   <input  type="text" class="form-control" id="First_name" placeholder="Enter First Name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Last_name">Last Name</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="Last_name" placeholder="Enter Last Name">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-4 control-label" for="E_mail">E-Mail</label>
						<div class="col-md-7">
							<input type="email" class="form-control" id="E-Mail" placeholder="Enter E-mail">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Phone Phone_number">Phone Number</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="Phone_number" placeholder="Enter Phone number">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Address">Address</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="Address" placeholder="Enter Address">
						</div>
					</div>
			
					<div class="form-group">
						<label class="col-md-4 control-label" for="User_type" class=" control-label">User Type</label>
						<div >
							<select class="col-md-7 control-lable" id="User_type">
								<option>Adminster</option>
								<option>Advertiser</option>
								<option>Central Procurment Team</option>
								<option>Purchase and Property Adminster Directorate</option>
								<option>Requistioner</option>
								<option>Quality inspector</option>		
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="User_name">User Name</label>
						<div class="col-md-7">
						   <input type="text" class="form-control" id="User_name" placeholder="Enter User Name">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-4 control-label" for="exampleInputPassword1">Password</label>
						<div class="col-md-7">
						   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="button" onclick="show_hide()" class="btn btn-primary btn-sm waves-effect waves-light" data-dismiss="modal">Save changes</button>
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
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="dashBoared/plugin/nprogress/nprogress.js"></script>
	<script src="dashBoared/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="dashBoared/plugin/waves/waves.min.js"></script>
	<script>
		$("#delteRequest").click(function()
		   {
			   swal({
					   title: "Are you sure?",
					   text: "You will not be able to recover !",
					   type: "warning",
					   showCancelButton: true,
					   confirmButtonClass: "btn-danger",
					   confirmButtonText: "Yes, delete it!",
					   cancelButtonText: "No, cancel plx!",
					   closeOnConfirm: false,
					   closeOnCancel: false
					   },
					   function(isConfirm) {
							   if (isConfirm) 
									{
								   swal("Deleted!", "Succesfully removed!", "success");
									} 
							   else {
								   swal("Cancelled", "Your registy is still there :)", "error");
									}
					   });
		   });
   </script>

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
	<script src="dashBoared/plugin/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>