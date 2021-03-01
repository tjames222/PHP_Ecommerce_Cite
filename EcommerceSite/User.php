<?php

class User
{
    ////////// Properties
    private $firstName;
    private $lastName;
    private $userName;
    private $password;

    ////////// Constructor
    public function __construct($fName, $lName, $user, $pass)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->userName = $user;
        $this->password = $pass;
    }
    
    ////////// Getters and Setters
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function getUserName()
    {
        return $this->userName;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
}

