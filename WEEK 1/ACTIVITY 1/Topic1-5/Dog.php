<?php

require_once 'Animal.php';
class Dog extends Animal
{
    public function talk()
    {
        echo "Woof woof <br>";
    }
    public function doTrick()
    {
        echo "fetch <br>";
    }


}

