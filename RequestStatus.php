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

	<title>OASA Request status</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
				<li >
				   <a class="waves-effect" href="Request.php">
                        <i class="menu-icon mdi mdi mdi-file-send"></i>
                        <span>Purchase Request</span>
                    </a>
				</li>

				<li class="current">
                    <a class="waves-effect" href="RequestStatus.php">
                        <i class="menu-icon fa fa-check-square-o"></i>
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
		<h1 class="page-title">Request Status</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
	
		<a href="#" class="ico-item mdi mdi-account "></a>
		<Span> Hello
            <?php
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
            ?>
        </Span>
		<a href="#" class="ico-item mdi mdi-logout js__logout"></a><!-- Log-out -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- fixed-navbar -->
<div id="wrapper">	
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
                                            <th>purchase id</th>
                                            <th>title</th>
                                            <th>Department</th>
                                            <th>Request Item</th>
                                            <th>Description file</th>
                                            <th>Request Date</th>
                                            <th>accepted Date</th>
                                            <th>Status</th>
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
                                        $sql="select user_type from user where username ='$sessionvar'";
                                        $query = mysqli_query($db, $sql);
                                        $row=mysqli_fetch_assoc($query);
                                        $userto=$row['user_type'];
                                    }
                                    $sql="select * from purchase_request where dir_name='$userto' ";
                                    $re=mysqli_query($con,$sql);
                                    $count=mysqli_num_rows($re);
                                    $i=1;
                                    while($row=mysqli_fetch_array($re))
                                    {

                                        $purchase_id = $row['purchase_id'];
                                        $title=$row['title'];
                                        $purchase_type = $row['purchase_type'];
                                        $purchase_description =$row['purchase_description'];
                                        $issued_date=$row['issued_date'];
                                        $dir_name=$row['dir_name'];
                                        $title=$row['title'];
                                        echo '<tr class="default">';
                                        echo '<td style="text-align:center">'.$purchase_id.'</td>';
                                        echo '<td>'.$title.'</td>';
                                        echo '<td>'.$dir_name.'</td>';
                                        echo '<td>'.$purchase_type.'</td>';
                                        echo '<td>'.$purchase_description.'</td>';
                                        echo '<td>'.$issued_date.'</td>';
                                        echo '<td>'."not known yet".'</td>';
                                        echo '<td>'."Pending".'</td>';
                                        echo '<td><form method="post" action="unrequest.php" >
                                                   <input type="hidden" name="uno" id="uno" value="'.$purchase_description.'" />
                                                   <input type="submit" name="Unrequest" class="btn btn-success" value="Delete"/>
                                                   </form></td>';


                                        $i++;

                                    }
                                    ?>
                                    <?php

                                    include("dbconfig.php");
                                    $sessionvar2=$_SESSION['user'];
                                    $user='root';
                                    $pass='';
                                    $dbname='oasa';
                                    $db= mysqli_connect("localhost", $user, $pass, $dbname);
                                    if($db){
                                        $sql="select user_type from user where username ='$sessionvar'";
                                        $query = mysqli_query($db, $sql);
                                        $row=mysqli_fetch_assoc($query);
                                        $userto=$row['user_type'];
                                    }
                                    $sql="select * from approved_purchase_request where dir_name='$userto'  ";
                                    $re=mysqli_query($con,$sql);
                                    $count=mysqli_num_rows($re);
                                    $i=1;
                                    while($row=mysqli_fetch_array($re))
                                    {

                                        $purchase_id = $row['purchase_id'];
                                        $title=$row['title'];
                                        $purchase_type = $row['purchase_type'];
                                        $purchase_description =$row['purchase_description'];
                                        $issued_date=$row['issued_date'];
                                        $approved_date = $row['	approved_date'];
                                        $dir_name=$row['dir_name'];
                                        $title=$row['title'];


                                        echo '<tr class="default">';
                                        echo '<td style="text-align:center">'.$purchase_id.'</td>';
                                        echo '<td>'.$title.'</td>';
                                        echo '<td>'.$dir_name.'</td>';
                                        echo '<td>'.$purchase_type.'</td>';
                                        echo '<td>'.$purchase_description.'</td>';
                                        echo '<td>'.$issued_date.'</td>';
                                        echo '<td>'.$approved_date.'</td>';
                                        echo '<td>'."Accepted".'</td>';
                                        echo '<td> </td>';


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
        const formEl= document.querySelector("form");
        const tbodyEl=document.querySelector("tbody");
        const tableEl=document.querySelector("table");
        function onAddWebsite(e)
            {
                e.preventDefault();
                alert("GOOD Work");
                const Department=document.getElementById("Department").value;
                const RequestItem=document.getElementById("RequestItem").value;
                const RequestDate=document.getElementById("RequestDate").value;
                const Status=document.getElementById("Status").value;
                tbodyEl.innerHTML +=
                     `
                        <tr>
                            <td>${Department}</td> 
                            <td>${RequestItem}</td> 
                            <td>${RequestDate}</td> 
                            <td>${Status}</td> 
                            <td><button class="btn btn-danger deleteBtn" >delete</button></td> 
                        </tr>
                    `
                       ;
            }
        function onDeleteRow(e)
            {
                if(!e.target.classList.contains("deleteBtn"))
                  {
                      return;
                  }
               const btn=e.target;
               btn.closest("tr").remove();
            }

            sub.addEventListener("click",onAddWebsite);
            tableEl.addEventListener("click",onDeleteRow);
    </script>

    <script>
		 $("#delteRequest").click(function()
			{
				swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this request!",
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
                                    swal("Deleted!", "Your request is removed !", "success");
                                     } 
                                else {
                                    swal("Cancelled", "Your request file is still there :)", "error");
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

</body>
</html>