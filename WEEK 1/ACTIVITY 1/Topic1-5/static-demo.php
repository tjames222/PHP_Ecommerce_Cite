<?php

require_once 'User.php';

$pw = "asdf";
$pw2 = "asdfasdf";

if (User::validatePassword($pw))
{
    echo "Password is long enough! <br>";
}
else 
{
    echo "Password must be at least 5 characters long. <br>";
}