<!DOCTYPE html>
<html lang="en" dir="ltr">
<head >
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
        embed{
            border: 2px solid black;
            margin-top: 30px;
        }
        .div1{
            margin-left: 170px;
        }
    </style>
</head>
<body>
<div class="div1">

    <?php
    include 'db.php';
    header('Content-Disposition: inline ');
    $sql="SELECT image from fileup";
    $query=mysqli_query($conn,$sql);
    while ($info=mysqli_fetch_array($query)) {

        ?>
        <a href="C:\xampp\htdocs\oasa\loginone\loginone\images\<?php echo $info['image'] ; ?>">pdf</a>
        <embed   type="application/pdf"  src="images/<?php echo $info['image'] ; ?>" width="900" height="500">
        <?php
    }

    ?>

</div>

</body>
</html>