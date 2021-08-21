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

	<title>OASA Profile</title>

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
		<a href="#" class="logo">
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
					<a class="waves-effect" href="Profile.php">
						<i class="menu-icon mdi mdi-account"></i>
						<span>Profile</span>
					</a>
				</li>
				
			</ul>
				

			
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
		<h1 class="page-title">Profile</h1>
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
                    <div class="form-roup">
                        <h4 class="box-title col-lg-10"><i class="menu-icon mdi mdi-account"></i> Profile XXX</h4>
                        <a id="edit-button"><strong><i class="fa fa-edit"></i> Edit Profile</strong> </a>
                    </div>

					<div class="card-content form-group">	
		
                            <div class=" box form-group">
								<div class="box-body">
                                    <table class="table ">
                                        <tr>
                                            <th>First Name</th>
                                            <td><?php
                                                $sessionvar=$_SESSION['user'];
                                                $user='root';
                                                $pass='';
                                                $dbname='oasa';
                                                $db= mysqli_connect("localhost", $user, $pass, $dbname);
                                                if($db){
                                                    $sql="select * from user where username ='$sessionvar'";
                                                    $query = mysqli_query($db, $sql);
                                                    $row=mysqli_fetch_assoc($query);
                                                    $userto=$row['fname'];
                                                    $lname=$row['lname'];
                                                    $email=$row['email'];
                                                    $pnum=$row['p_number'];
                                                    $usernamee=$row['username'];
                                                    $utypee=$row['user_type'];

                                                    echo $userto;
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td><?php
                                                echo $lname;?></td>
                                        </tr>
                                        <tr>
                                            <th>E-mail</th>
                                            <td><?php
                                                echo $email;?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone-Number</th>
                                            <td><?php
                                                echo $pnum;?></td>
                                        </tr>
                                        <tr>
                                            <th>User Name</th>
                                            <td><?php
                                                echo $usernamee;?></td>
                                        </tr>
                                        <tr>
                                            <th>User-Type</th>
                                            <td >
                                                <span class="notice notice-blue"><?php
                                                    echo $utypee;?></span>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                  
                                </div>
							</div>
                        <form class="form-horizontal" method="POST" action="changepassword.php" enctype="multipart/form-data">

                            <div class="form-group" style="display: none;" id="CP">
                                <label class="col-md-3 control-label" for="Password">Current Password</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Current password" id="Password" name="current" required>
                                </div>
                            </div>

                            <div class="form-group" style="display: none;" id="NP">
                                <label class="col-md-3 control-label " for="Password">New Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Enter new password" id="Password" name="new" required>
                                </div>
                            </div>

                            <div class="form-group" style="display: none;" id="CMP">
                                <label class="col-md-3 control-label " for="Password">Comfirm Password </label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Comfirm password" id="Password" name="confirm"  required>
                                </div>
                            </div>

                            <div class="form-group text-end">
                                <button id="Password-Update"
                                        type="submit"
                                        class="btn btn-success margin-bottom-10 waves-effect waves-light"
                                        style="display: none;">
                                    Submit
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
    $("#edit-button").click(function()
    {
        document.getElementById("CP").style.display="block";
        document.getElementById("NP").style.display="block";
        document.getElementById("CMP").style.display="block";
        document.getElementById("Password-Update").style.display="block";
    });
</script>
    <script>
		 $("#Request").click(function()
			{
				swal("Requst Sent!", "You sent Succesfully !", "success")
		    });
	</script>
	<!-- Sparkline Chart -->
	<script src="dashBoared/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="dashBoared/scripts/chart.sparkline.init.min.js"></script>

	<script src="dashBoared/scripts/main.min.js"></script>

</body>
</html>