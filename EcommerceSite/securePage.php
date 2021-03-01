<?php

require_once 'header.php';

// Checks to see if session was not set || session was set to null || session was
// set to wrong value
if (isset($_SESSION['principal']) == FALSE || $_SESSION['principal'] == null ||
    $_SESSION['principal'] == FALSE)
{
    header("Location: login.html");
}
