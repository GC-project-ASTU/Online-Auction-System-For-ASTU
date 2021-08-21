<?php
include("dbconfig.php");
if(isset($_POST['Unrequest'])) {
    $purchase_description = $_POST['uno'];
    if ($purchase_description == "") {
        echo '<script>alert("NO description");</script>';
    } else {
        $sqldd = ("select * from purchase_request where purchase_description='$purchase_description' ");
        $querrydd = mysqli_query($con, $sqldd);
        while ($row = mysqli_fetch_array($querrydd)) {

        }
        $sqlddd = ("delete from purchase_request where purchase_description='$purchase_description'");
        $querryddd = mysqli_query($con, $sqlddd);
        if(mysqli_query($con,$sqlddd)){
            header("Location: requeststatus.php?message= The Blood is Discarded succuessfully.");
        }


    }


}else{
    echo "no button touched" ;
}



    ?>