<?php

require_once 'SuperHero.php';

class SuperMan extends SuperHero
{
    public function __construct()
    {
        new SuperHero("Superman", rand(1, 1000));
    }
}

