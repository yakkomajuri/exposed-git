<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
        header('location: ../error.php');
        exit;
    }
    define('DB_USER', 'admin');
    define('DB_PASSWORD', 'password');
?>