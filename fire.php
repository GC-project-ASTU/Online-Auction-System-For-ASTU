<?php
include("dbconfig.php");
if(isset($_POST['fire'])) {
    $username = $_POST['uno'];
    if ($username == "") {
        echo '<script>alert("NO user clicked");</script>';
    } else {
        $sqldd = ("select * from user where username='$username' ");
        $querrydd = mysqli_query($con, $sqldd);
        while ($row = mysqli_fetch_array($querrydd)) {

        }
        $sqlddd = ("delete from user where username='$username'");
        $querryddd = mysqli_query($con, $sqlddd);
        if(mysqli_query($con,$sqlddd)){
            header("Location: registeredlist.php?message= The employee is unregistered from  database successfully.");
        }


    }


}else{
    echo "no button touched" ;
}



    ?>