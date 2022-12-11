<?php 
    require "parts/header.php";

    $_SESSION['latitude'] = addslashes($_POST['lat']);
    $_SESSION['longitude'] = addslashes($_POST['long']);

    header("Location: selfie.php");