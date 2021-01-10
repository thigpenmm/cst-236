<?php
session_start();
require_once 'header.php';
require_once 'Autoloader.php';

$attemptedLoginName = $_POST['username'];
$attemptedPassword = $_POST['password'];

echo "You tried to login with " . $attemptedLoginName . " and " . $attemptedPassword;

$service = new SecurityService($attemptedLoginName, $attemptedPassword);

$loggedIn = $service->authenticate();

if($loggedIn){
    echo " Logged in successfully";
    $_SESSION['principal'] = TRUE;
    include "loginPassed.php";
}
else{
    $_SESSION['principal'] = FALSE;
      echo " Login failed, try again.";
      include "loginFailed.php";
}
    