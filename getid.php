<?php
    session_start();
    session_unset();
    $con=mysqli_connect("localhost","root","","lalit");
    $q="select max(id) maxid from data";
    $res=mysqli_query($con,$q);
    $a=mysqli_fetch_array($res);
    echo "".$a['maxid'];
    $_SESSION['lk']=(int)$a['maxid']+1;
    $q1="insert into data values('{$_SESSION['lk']}')";
    mysqli_query($con,$q1);
?>