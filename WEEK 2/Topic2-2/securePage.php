<?php

require_once 'header.php';

// Checks to see if session was not set || session was set to null || session was
// set to wrong value
if (isset($_SESSION["principle"]) == FALSE || $_SESSION["principle"] == null || $_SESSION["principle"] == FALSE)
{
    header("Location: login.html");
}
