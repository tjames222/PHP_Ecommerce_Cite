<?php

class Person
{
    public $name;
    public $age;
    
    // Final keyword will not allow for overriding
    final public function growOlderBy($year)
    {
        $this->age = $this->age + $year;
    }
}

