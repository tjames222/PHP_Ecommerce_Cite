<?php

class RaceCar
{
    ////////// Properties
    private $model;
    private $engine;
    private $tires;
    private $psi;
    private $speed;
    
    ////////// Constructor
    public function __construct($mod, $tire)
    {
        $this->model = $mod;
        $this->engine = false;
        $this->tires = $tire;
        $this->psi = 0;
        $this->speed = 0;
        
        echo "Brand new " . $this->model . " created. <br>" .
            "Number of Tires: " . strval($this->tires) . " with " . strval($this->psi) . "psi in each.<br><br>";
    }
    
    ////////// Methods
    public function fillTires($air) 
    {
        $this->psi = $air;
        
        echo "The tires on your " . $this->model . " have been filled to: " . strval($this->psi) . "psi. <br>";
    }
    
    public function engineStart() 
    {
        if ($this->psi == 32)
        {
            if ($this->engine == true)
            {
                echo $this->model . " engine is already on. <br>";
            }
            else 
            {
            $this->engine = true;
            echo "Vrumumumum! " . $this->model . " engine started.<br>" ;
            }
        }
        else
        {
            $this->engine = false;
            echo $this->model . ": You need to have 32psi in your tires before it can start.<br>";
        }
    }
    
    public function engineOff()
    {
        if ($this->speed > 0)
        {
            echo $this->model . ": Stop the car before you turn off the engine.<br>";
        }
        elseif ($this->engine == false)
        {
            echo $this->model . " engine is already off.<br>";
        }
        else
        {
            $this->engine = false;
            echo $this->model . ": beauwoo. The engine is off.<br>";
        }
    }
    
    public function drive($spd)
    {
        if ($spd > 60 || $spd < 1)
        {
            echo $this->model . ": Your car can only drive at speeds between 1 and 60.<br>";
        }
        else 
        {
            if ($this->engine == true)
            {
                $this->speed = $spd;
                echo "Vroooooooom <br>" . $this->model . " spedometer reads: " . strval($this->speed) . "<br>";
            }
            else 
            {
                echo $this->model . ": Turn on the engine first. <br>";
            }
        }
    }
}

