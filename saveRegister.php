<?php 
    require "parts/header.php";

    $_SESSION['date'] = addslashes($_POST['date']);
    $_SESSION['hour'] = addslashes($_POST['hour']);

    header("Location:localization.php");