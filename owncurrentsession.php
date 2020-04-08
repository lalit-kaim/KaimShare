<?php
    session_start();
    if(isset($_SESSION['temp'])){
        $_SESSION['lk']=$_SESSION['temp'];
    }
?>