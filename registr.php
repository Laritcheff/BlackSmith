<?php
require_once'app_config.php';
$user_name=trim($_POST['user_name']);
$password=trim($_POST['password']);
if($user_name=="admin" && $password=="admin"){
header("Location:edit.php");}
else{
echo "Хрен по всей морде!";}