<?php

class User
{
    public $username;
    public $password;
    
    public static $minPassLength = 5;
    
    public static function validatePassword($pass) 
    {
        if (strlen($pass) > self::$minPassLength)
        {
            return true;
        }
        else 
        {
            return FALSE;
        }
    }
}

