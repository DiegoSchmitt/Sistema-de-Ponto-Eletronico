<?php 
    require "parts/header.php";
    
    $ip = $_SERVER['REMOTE_ADDR'];

    $records = new Records;

    $records->save(
        $_SESSION['id_user'],
        $_SESSION['date'], 
        $_SESSION['hour'], 
        $_SESSION['latitude'], 
        $_SESSION['longitude'], 
        $ip, 
        $_SESSION['photo']
    );

    $_SESSION = array();

    header("location: confirm.php");