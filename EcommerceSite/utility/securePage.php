<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../presentation/views/header.php';

// Checks to see if session was not set || session was set to null || session was
// set to wrong value
if (isset($_SESSION['principal']) == FALSE || $_SESSION['principal'] == null ||
    $_SESSION['principal'] == FALSE)
{
    header("Location: login.html");
}
