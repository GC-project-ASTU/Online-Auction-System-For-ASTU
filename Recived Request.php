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

	<title>OASA Recived Request</title>

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
				
				
				<li class="current">
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
				<li>
					<a class="waves-effect" href="Bid report.php">
						<i class="menu-icon mdi mdi-buffer"></i>
						<span>Bid Report</span>
					</a>
				</li>
				
				
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
		<h1 class="page-title">Recived Request</h1>
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
					<div  style="display: none;" id="Al" class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong> Done!</strong> Request Approve !!
					</div>

					<div  style="display: none;" id="All" class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong> Done!</strong> Request Dis-Approve !!
					</div>
<?php
$user='root';
$pass='';
$dbname='oasa';
$db= mysqli_connect("localhost", $user, $pass, $dbname);
if($db){
    $query=mysqli_query($db, "select * from purchase_request");
if($query){
    while($row = mysqli_fetch_assoc($query)){
        $purchase_id=$row["purchase_id"];
        $purchase_type=$row["purchase_type"];
        $purchase_description=$row["purchase_description"];
        $issued_date=$row["issued_date"];
        $dir_name=$row["dir_name"];
        $title=$row["title"];
        print "<div class=\"review-list\">
									<div class=\"review-item\">
										<div class=\"top\">
											<div class=\"name\"><b>Purchase Title: $title </b></div>
											<!-- /.name -->
											<div class=\"date\"> issued Date: $issued_date</div>
											<!-- /.date -->

											
										</div>
										<div>Purchase Id:  $purchase_id	</div>
										<div>Purchase Type: $purchase_type	</div>
										<div>Directory Name: $dir_name</div>
										

										<div >
										<button type=”button” ><a href=\"../Online Auction System for ASTU/upload/$purchase_description \"  target=”_blank”/> Open/Read PDF</button>
											
										</div>
										<form method=\"post\" action=\"accept.php\" >
                                                   <input type=\"hidden\" name=\"purchase_description\" id=\"purchase_description\" value=\"$purchase_description\" />
                                                   <input type=\"hidden\" name=\"id\" id=\"id\" value=\"$purchase_id\" />
                                                   <input type=\"hidden\" name=\"type\" id=\"type\" value=\"$purchase_type\" />
                                                   <input type=\"hidden\" name=\"idate\" id=\"idate\" value=\"$issued_date\" />
                                                   <input type=\"hidden\" name=\"dname\" id=\"dname\" value=\"$dir_name\" />
                                                  <input type=\"hidden\" name=\"title\" id=\"title\" value=\"$title\" />
                                                   <input type=\"submit\" name=\"accept\" class=\"btn btn-success\" value=\"Approve\" />
                                                   <input type=\"submit\" name=\"disapprove\" class=\"btn btn-danger\" value=\"Disapprove\" />
                                                   </form>
										<!-- /.desc -->
									</div>

								</div>";
    }
} else{
    print "<div class='entry'>
                       <strong>no Request found</strong>
                                        </div>";
}
}

?>

								<!-- /.review-list -->
				</div>
					<!-- /.box-content -->
				</div>
			   </div>	
			 </div>
			</div>
		</div>
	</div>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->


<div class="modal fade" id="Approval" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Approva Status</h4>
			</div>
			<div class="modal-body">

				<select class=" form-control" id="Status" name="Status">
					<option value="Approve">Approve</option>
					<option value="Dis Approve">Dis Approve</option>
			    </select>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
				<button id="ForStatus" type="button" data-dismiss="modal" class="btn btn-primary btn-sm waves-effect waves-light">Ok</button>
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
	<script src="dashboared/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="dashBoared/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="dashBoared/plugin/nprogress/nprogress.js"></script>
	<script src="dashBoared/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="dashBoared/plugin/waves/waves.min.js"></script>

	<script>
		document.querySelector('#ForStatus').addEventListener('click',function()
		        {
					var com=document.querySelector('#Status').value;
					if( com == "Approve")
                           {
							document.getElementById("Al").style.display="block";
							document.getElementById("All").style.display="none";
						   }
					else
					       {
							document.getElementById("All").style.display="block"; 
							document.getElementById("Al").style.display="none";
						   }
				});	 

    </script>

	<!-- Sparkline Chart -->
	<script src="dashBoared/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="dashBoared/scripts/chart.sparkline.init.min.js"></script>

	<script src="dashBoared/scripts/main.min.js"></script>

</body>
</html>