<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawsome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="img/wave.png" alt="" class="wave">
    <div class="container">
        <div class="img">
            <img class="bg"src="img/bg.svg" alt="">
        </div>
        <div class="login-container">      <?php
                if(isset($_GET['error'])){
                    $er = $_GET['error'];
                    print "<p>$er</p>";
            }
            if(isset($_GET['message'])){
            $er = $_GET['message'];
            print "<p>$er</p>";
            }

            ?>
            <form action="dbconnection.php" method="post">
            <img class="avater" src="img/avatar.svg" alt="">
            <h2>Welcome</h2>
            <div class="input-div one ">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                    <h5>Username</h5>
                    <input type="text" class="input" name="username" required>
                </div>
            </div>
            <div class="input-div two ">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="i" data-validate = "Password is required">
                    <h5>Password</h5>
                    <input type="password" class="input" name="pass" required>
                </div>
            </div>
            <a href="#">Forgot Password?</a>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/b02b9693b1.js" crossorigin="anonymous"></script>
    
</body>
</html>