<?php
    session_start();
    $con=mysqli_connect("localhost","root","","lalit");
    $q="select * from data";
    $q1="select * from data1";
    $result=mysqli_query($con,$q);
    $result1=mysqli_query($con,$q1);
    $array=array();
    while($list=mysqli_fetch_array($result)){
        $array[]=$list;
    }
    while($list=mysqli_fetch_array($result1)){
        $array[]=$list;
    }
    echo json_encode($array);
?>