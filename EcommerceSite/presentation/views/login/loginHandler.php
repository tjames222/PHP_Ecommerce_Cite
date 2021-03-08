<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
 
require_once '../header.php';
require_once 'C:/MAMP/htdocs/EcommerceSite/autoLoader.php';
//require_once 'C:/MAMP/htdocs/EcommerceSite/database/UserDataService.php';

$attemptedLoginName = $_POST["username"];
$attemptedPassword = $_POST["password"];

$service = new UserDataService();

$loggedIn = $service->Login($attemptedLoginName, $attemptedPassword);

if ($loggedIn)
{
    $_SESSION["principal"] = true;
    include 'C:/MAMP/htdocs/EcommerceSite/presentation/views/login/loginSuccess.php';
}
else 
{
    echo "you attempted to login with " . $attemptedLoginName . " and " . $attemptedPassword . "<br>";
    $_SESSION["principal"] = false;
    include "C:/MAMP/htdocs/EcommerceSite/presentation/views/login/loginFailed.php";
}