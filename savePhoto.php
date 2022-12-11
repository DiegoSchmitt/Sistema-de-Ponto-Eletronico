<?php

require "parts/header.php";

$img = $_POST['photo'];

$img = substr($img, 22);

header("content-type: imagem/png");

$data = base64_decode($img);
$rand = rand(0, 99999);
$file = __DIR__."\assets\img\imagem".$rand.".png";

$_SESSION['photo'] = $file; 

file_put_contents($file, $data);

header("location: addBd.php");
