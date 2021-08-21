<?php
$user='root';
$pass='';
$dbname='oasa';
$db= mysqli_connect("localhost", $user, $pass, $dbname);
if($db){
    if(isset($_POST['accept'])){
        $purchase_description=$_POST['purchase_description'];
        $purchase_id=$_POST['id'];
        $purchase_type=$_POST['type'];
        $issued_date=$_POST['idate'];
        $dir_name=$_POST['dname'];
        $title=$_POST['title'];
        $cdateTime = date('Y-m-d H:i:s');
        $sql = "INSERT into  approved_purchase_request(`purchase_id`,`title`,`purchase_type`,`purchase_description`,`dir_name`,`issued_date`,`approved_date`) VALUES('$purchase_id','$title','$purchase_type','$purchase_description','$dir_name','$issued_date','$cdateTime')";

        $query = mysqli_query($db,$sql);
        if($query){
            $query1 = mysqli_query($db, "delete from purchase_request where purchase_description='$purchase_description'");
            if($query1){
                header("Location: Recived Request.php?message=successfully approved the bid. Thank you.");
            }else{
                header("Location: Recived Request.php?message=approved the bid but didnt delete from advertisment. Thank you.");
            }
        }else{
            echo"unss";
            //header("Location: Recived Request.php?error= approval of the bid was unseccessful. sorry.");
        }
    }else if(isset($_POST['disapprove'])) {
        $purchase_description=$_POST['purchase_description'];

       //$query = mysqli_query($db, "insert into purchase_request(service_name,servicedesc,seeker_name) values('$bname','$bdesc','$bid')");

            $query2 = mysqli_query($db, "delete from purchase_request where purchase_description='$purchase_description'");
            if ($query2) {
                header("Location: Recived Request.php?message=successfully disapproved the request. Thank you.");
            } else {
                header("Location: Recived Request.php?message= disapproved the requested was not deleted from issued request. sorry.");
            }

    }
}

?>