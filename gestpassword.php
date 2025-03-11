<?php
$userPassword = "mm"; //di solito presa con il $_POST['pass']
$hashedPassword=password_hash($userPassword, PASSWORD_DEFAULT);
echo $hashedPassword;

if(password_verify($userPassword, $hashedPassword)){
    echo 'passwordOK';
}