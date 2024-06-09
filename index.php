<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
              include_once 'home.html';?>
               <?php
       
            $nam=$_POST['UserName'];
        $ema=$_POST['Passwor'];
    $ins="INSERT Into login(id,pas) values('$nam','$ema')";
    $con=mysqli_connect("localhost","root","","login");
    if(mysqli_query($con,$ins)){
        echo "ثبت موفق"."</br>";
        setcookie("users",$nam,time()+1200000,"/");
    }
        else{
            echo "insert not done"."</br>";
    }
       

        ?>
    </body>
</html>
