<?php

    session_start();
    if(isset($_SESSION['IS_LOGIN'])){
        unset($_SESSION['IS_LOGIN']);
        unset($_SESSION['ROLE']);
        header('location:login.php');
        die();
    }else{
        header('location:login.php');
        die();
    }

?>