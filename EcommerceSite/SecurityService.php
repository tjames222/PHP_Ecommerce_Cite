<?php

class SecurityService
{
    private $username = "";
    private $password = "";
    
    public function __construct($user, $pass)
    {
        $this->username = $user;
        $this->password = $pass;
    }
    
    public function authenticate()
    {
        if ($this->username == "" || $this->password == "")
        {
            return FALSE;
        }
        if ($this->username == "tjames" && $this->password == "1234")
        {
            return true;
        }
        else 
        {
            return FALSE;
        }
    }
}

