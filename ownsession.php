<?php
    session_start();
    $_SESSION['lk']=$_POST['ownid'];
    $_SESSION['temp']=$_SESSION['lk'];
    $con=mysqli_connect("localhost","root","","lalit");
    $q="insert into data1 values('{$_SESSION['lk']}')";
    $res=mysqli_query($con,$q);
?>