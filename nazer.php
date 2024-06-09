<?php
$name=$_POST['UserName'];
$text=$_POST['Text'];
$con=mysqli_connect("localhost","root","","login");
$ins="insert into nazar(id,text)values ('$name','$text')";
echo $ins;
if(mysqli_query($con,$ins)) {
    echo "ثبت موفق" . "</br>";
}