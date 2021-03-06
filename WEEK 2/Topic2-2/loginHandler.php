<?php

require_once 'header.php';
require_once 'autoLoader.php';

$user = $_POST["username"];
$pass = $_POST["password"];

$service = new SecurityService($user, $pass);

$loggedIn = $service->Login();

if ($loggedIn)
{
    
    $_SESSION["principle"] = true;
    include 'loginSuccess.php';
}
else
{
    echo "You attempted to login with " . $user . " and " . $pass . "<br>";
    $_SESSION["principle"] = FALSE;
    include "loginFailed.php";
}