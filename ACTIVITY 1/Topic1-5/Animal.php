<?php

abstract class Animal
{
    public $name;
    public $color;
    
    public function __construct($nam, $col)
    {
        $this->name = $nam;
        $this->color = $col;
    }
    
    abstract function talk();
    abstract function doTrick();
}

