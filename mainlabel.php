<?php
    session_start();
    if(isset($_SESSION['lk'])){
        echo 'Current ID:'.$_SESSION['lk'];
    }
?>