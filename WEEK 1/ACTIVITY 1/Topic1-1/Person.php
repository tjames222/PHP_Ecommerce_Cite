<?php

class Person
{
    // Properties
    private $name;
    private $username;
    private $password;
    
    // Constructor 
    function __construct($name){
        echo "Hello my name is " .$name . "<br>";
        $this->name = $name;
        $this->username = "Tim";
        $this->password = "1";   
    }
    
    // Methods
    public function walk() {
        echo $this->name . " is walking" . "<br>";
    }
    
    public function sayHello() {
        echo "Hello " .$this->name . "<br>";
    }
    
    public function login($user, $pass) {
        if ($user == $this->username && $pass == $this->password){
            echo $this->name . " has been logged in.<br>";
        }
        else {
            echo "login failed.";
        }
    }
}
?>

