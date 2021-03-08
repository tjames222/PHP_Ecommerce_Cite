<?php

class SecurityService
{
    ////////// Properties
    private $Username;
    private $Password;
    
    ////////// Constructor
    public function __construct($user, $pass)
    {
        $this->Username = $user;
        $this->Password = $pass;
    }
    
    ////////// Login authenticator function
    public function Login()
    {
        if ($this->Username == null || $this->Password == null)
        {
            //echo "null results"; // error checking
            return FALSE;
        }
        if ($this->Username == "tjames" && $this->Password == "1234")
        {
            //echo " results"; // error checking
            return true;
        }
        else
        {
            //echo "bad results"; // error checking
            return FALSE;
        }
    }
}

