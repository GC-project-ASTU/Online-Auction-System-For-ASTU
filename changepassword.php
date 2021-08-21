<?php
session_start();



$user='root';
$pass='';
$dbname='oasa';
$db= mysqli_connect("localhost", $user, $pass, $dbname);
if($db){
    $current = $_POST['current'];
        $new= $_POST['new'];
        $confirm= $_POST['confirm'];
        $user1= $_SESSION['user'];
   // $password = $_POST['current'];
    $sql="select password from user where username='$user1'";

    $query = mysqli_query($db, $sql);

         $row=mysqli_fetch_assoc($query);
        $pas=$row['password'];
       // header("$user1");
    //header("Location: index.php?message=$user1");

    if ($current==password_verify($current,$pas)){

        if($new==$confirm){
            $confirm=password_hash($confirm,PASSWORD_DEFAULT);
            $sql = "UPDATE `user` SET password='$confirm'WHERE username='$user1'";
            $query2=mysqli_query($db,$sql);
            if($query2){
                header("Location: profile.php?message=You have successfully changed your password");
            }
        }else{

            header("Location: profile.php?error=the confirmed and the new password doesnot match");
        }


    }else{

        header("Location: profile.php?error=the current password you entered is not correct");
    }


}else{
    header("Location: profile.php?error=connection was not successful");

}

?>