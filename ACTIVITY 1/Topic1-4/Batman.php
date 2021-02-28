<?php

require_once 'SuperHero.php';;

class Batman extends SuperHero
{
    public function __construct()
    {
        new SuperHero("Batman", rand(1, 1000));
    }
}

