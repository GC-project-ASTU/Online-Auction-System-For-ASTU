<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>OASA Request-Form</title>

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
		<a href="Page-Requester.php" class="logo">
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
		<h1 class="page-title">Request Form</h1>
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
                    <form method="post" enctype="multipart/form-data">

					<h4 class="box-title">Request</h4>

					<div class="card-content form-group">

							<div style="display: none;" id="Al" class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Well done!</strong> You sent the request successfully !!
							</div>

                            <div class="form-group">
								<h2 for="Date" style="color:rgb(119, 96, 96); font-size: 17px;" >
									Date:
									<script>
										var today = new Date();
										var dd = String(today.getDate()).padStart(2, '0');
										var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
										var yyyy = today.getFullYear();
										today = mm + '-' + dd + '-' + yyyy;
										 document.write(today);
									</script>
								</h2>
							</div>
							<div class="form-group">
								<label for="Department" class=" form-control-label">Department</label>
									<select class="form-control" id="Department" name="department">
											<option>Computer Science and Engineering</option>
											<option>Electronics and Communication Engineering</option>
											<option>Power and Control Engineering</option>
											<option>Chemical Engineering</option>
											<option>Material Engineering</option>
											<option>Mechanical Engineering</option>
											<option>Water Engineering</option>
											<option>Architectural Engineering</option>
											<option>Civil Engineering</option>
											<option>Firest Year Department</option>
											<option>Applied Bilogy</option>
											<option>Applied chemistry</option>
											<option>Applied Giology</option>
											<option>Applied Physics</option>
											<option>Applied Math</option>
											<option>Cafe</option>
											<option>Garage</option>
											<option>Humaniterian Department</option>
									</select>

							</div>

							<div class="form-group">
								<label for="Department" class=" form-control-label">Request For</label>
									<select class="form-control" id="Department" name="requestfor">
											<option>Stationery Materials</option>
											<option>Garage Materials</option>
											<option>Electronic Equipment</option>
											<option>Liberary Materials</option>
											<option>Teaching Materials</option>
											<option>Computer Accesesories</option>
											<option>Other</option>
									</select>
							</div>

                            <div class="form-group ">
								<label  class=" control-label" for="First_name">Title</label>
								<div >
								   <input name="title1" type="text" class="form-control" required id="First_name" placeholder="Enter title for request item type">
							    </div>
							</div>

							<div class="form-group">
								<label class="form-control-label" for="exampleInputFile">File input</label>
							    <input type="File"  id="exampleInputFile" name="file">
                                <label>purchase id</label>
                                <input type="text" name="title" >
							</div>

							<div class="form-group ">
								<button type="submit" onclick="show_hide()" id="Request" class="btn btn-success" name="submit" value="submit" >Submit</button>
							</div>

					</div>
                    </form>
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
	<script src="dashBoared/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="dashBoared/plugin/nprogress/nprogress.js"></script>
	<script src="dashBoared/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="dashBoared/plugin/waves/waves.min.js"></script>
    <script>
		 $("#Request").click(function()
			{

				swal("Requst Sent!", "You sent Succesfully !", "success");

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

</body>
</html>
<?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "oasa";  #database name

#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if (isset($_POST["submit"]))
{ $department=$_POST['department'];
    $bnt= $_POST['title1'];
    $requestfor= $_POST['requestfor'];
    $dateTime = date('Y-m-d H:i:s');
    #retrieve file title
    $title = $_POST["title"];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'upload';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    #sql query to insert into database
    $sql = "INSERT into  purchase_request(`dir_name`,`purchase_type`,`title`,purchase_id,purchase_description,issued_date) VALUES('$department','$requestfor','$bnt','$title','$pname','$dateTime')";

    if(mysqli_query($conn,$sql)){

        echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}


?>