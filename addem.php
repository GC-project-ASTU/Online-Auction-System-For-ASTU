<?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "oasa";  #database name

#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if (isset($_POST["register"]))
{ $fname=$_POST['fnamee'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $pnum=$_POST['pnum'];
    $address=$_POST['address'];
    $type=$_POST['user_type'];
    $user=$_POST['user_name'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    //$req=$_POST['req_type'];


        $sql = "INSERT into  user(`fname`,`lname`,`email`,`p_number`,`address`,`user_type`,`username`,`password`) VALUES('$fname','$lname','$email','$pnum','$address','$type','$user','$password')";
        if(mysqli_query($conn,$sql)){
            header("Location: registration.php?message= The employee is successfully registered.");
            echo "Sucessfully registered";
        }
        else{
            echo "Error";
        }
        echo"";
    #sql query to insert into database



}


?>