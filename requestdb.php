<?php

session_start();
$user='root';
$pass='';
$dbname='oasa';
$db= mysqli_connect("localhost", $user, $pass, $dbname);
if($db){

    if((null !== $_POST['title'])){
        $bnt= $_POST['title'];
        $query = mysqli_query($db, "INSERT INTO `purchase_request`(`dir_name`) VALUES ('$bnt')");
        if($query){

        }else{
        echo "not successful";
        }
    }
}


?>