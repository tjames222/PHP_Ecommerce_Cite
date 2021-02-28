<?php

class SuperHero
{
    ////////// Properties
    protected $name;
    protected $health;
    protected $isDead;
    
    ////////// Constructor
    public function __construct($nameIn, $healthIn)
    {
        $this->name = $nameIn;
        $this->health = $healthIn;
        $this->isDead = false;
        
        echo $this->name . " has been created with " . strval($this->health) . " health points. <br><br>";
    }
    
    ////////// Methods
    public function attack(SuperHero $opponent)
    {
        $damage = rand(1, 10);
        echo $this->name . " attacks " . $opponent->name . " with " . strval($damage) . " damage points. <br>";
        $opponent->determineHealth($damage);
        echo $opponent->name . " health: " . strval($opponent->health) . "<br>";
    }
    
    public function determineHealth($dam)
    {
        $this->health = $this->health - $dam;
        if ($this->health <= 0)
        {
            $this->health = 0;
            $this->isDead = true;
        }
    }
    
    public function isDead() 
    {
        if ($this->isDead)
        {
           // echo $this->name . " is dead. <br>";
        }
        else 
        {
            //echo $this->name . " is alive with " . strval($this->health) . " health points. <br>";
        }
        return $this->isDead;
    }
    
    ////////// Getters and Setters
    public function getName()
    {
        return $this->name;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getIsDead()
    {
        return $this->isDead;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function setIsDead($isDead)
    {
        $this->isDead = $isDead;
    }
    
}

