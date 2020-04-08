<?php
    session_start();
    if(isset($_SESSION['lk'])){
        mkdir("warehouse/{$_SESSION['lk']}");
        foreach ($_FILES['file']['name'] as $i => $name) {
            move_uploaded_file($_FILES['file']['tmp_name'][$i], "warehouse/{$_SESSION['lk']}/".$name);
        }
    }
?>