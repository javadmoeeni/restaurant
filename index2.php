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
       
            $nam=$_POST['n'];
        $ema=$_POST['p'];
       
    $ins="INSERT Into kharid(nam,nazar) values('$nam','$ema')";
    $con=mysqli_connect("localhost","root","","baran");
    if(mysqli_query($con,$ins)){
        echo "ثبت موفق"."</br>";
    }
        else{
            echo "insert not done"."</br>";
    }
       

        ?>
    </body>
</html>
