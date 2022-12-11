<?php
require "parts/header.php";

$user = new Users;

if(isset($_POST['reg']) && !empty($_POST['reg'])){
    $reg = addslashes($_POST['reg']);

    $info = $user->getRegistration($reg);
    
    $_SESSION['name'] = $info['first_name'];
    $_SESSION['id_user'] = $info['id'];

    if($info == false){
        header("location: index.php");
    }else{
       if($info['level'] === 0){
            header("location: register.php");
       }else{
            header("location: admin.php");
       }
    }
}
else{
    header("location: index.php");
}


