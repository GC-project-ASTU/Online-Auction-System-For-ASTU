

<?php
session_start();
$user='root';
$pass='';
$dbname='oasa';
$db= mysqli_connect("localhost", $user, $pass, $dbname);
if($db){
    if((null !== $_POST['username']) && (null !== $_POST['pass'])){
        $uname = $_POST['username'];
        $password = $_POST['pass'];
        $sql="select * from user where username ='$uname'";
        $query = mysqli_query($db, $sql);
        $row=mysqli_fetch_assoc($query);
        $pas=$row['password'];
        if ($password==password_verify($password,$pas)){
            $_SESSION['username']=$row['username'];
            $sql2="select user_type from user where username ='$uname'";
            $query2 = mysqli_query($db, $sql2);
            $row2=mysqli_fetch_assoc($query2);
            $usertype=$row2['user_type'];
            echo $usertype;
            switch ($usertype) {
                case "Advertiser":
                    $_SESSION['user'] = $uname;
                    $sessionvar=$_SESSION['user'];
                    header('Location:../adavertisment/Advertiser-pages.php');
                    break;
                case "cpt":
                    echo "You are cpt";
                    $_SESSION['user'] = $uname;
                    $sessionvar=$_SESSION['user'];
                    echo $sessionvar;
                    break;
                case "Purchase and Property Adminster Directorate":
                    $_SESSION['user'] = $uname;
                    $sessionvar=$_SESSION['user'];
                   header('Location:../ppad-SIDE/PPAD-page.php');
                    break;
                case "quality_inspector":
                    $_SESSION['user'] = $uname;
                    $sessionvar=$_SESSION['user'];
                    echo "You are quality_inspector";
                  echo $sessionvar;
                    break;

                case "Adminster":
                    $_SESSION['user'] = $uname;
                    $sessionvar=$_SESSION['user'];
                    header('Location:../Online Auction System for ASTU admin/Page-admin.php');
                    break;
                default:
                    $_SESSION['user'] = $uname;
                    $sessionvar=$_SESSION['user'];
                    header('Location:../online Auction System for ASTU/Page-Requester.php');

            }
           // header('Location:../online Auction System for ASTU/advertisment.html');

        }
        else{
            echo 'password incorect' ;
        }

    }

}


?>