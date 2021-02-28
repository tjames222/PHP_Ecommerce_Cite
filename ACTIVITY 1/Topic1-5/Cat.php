<?php

require_once 'Animal.php';

class Cat extends Animal
{
    public function talk()
    {
        echo "Meow <br>";
    }
    public function doTrick()
    {
        echo "No thanks, I don't do tricks. <br>";
    }

    
}


