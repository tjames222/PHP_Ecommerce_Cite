<?php

require_once 'header.php';
require_once 'autoLoader.php';

$attemptedLoginName = $_POST["username"];
$attemptedPassword = $_POST["password"];

$service = new UserDataService();

$loggedIn = $service->Login($attemptedLoginName, $attemptedPassword);

if ($loggedIn)
{
    $_SESSION["principal"] = true;
    include 'loginSuccess.php';
}
else 
{
    echo "you attempted to login with " . $attemptedLoginName . " and " . $attemptedPassword . "<br>";
    $_SESSION["principal"] = false;
    include "loginFailed.php";
}