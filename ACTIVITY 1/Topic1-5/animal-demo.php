<?php

require_once 'Dog.php';
require_once 'Cat.php';

$cat = new Cat("Bowser", "Brown");
$dog = new Dog("Fido", "Grey");

$cat->talk();
$dog->talk();

$cat->doTrick();
$dog->doTrick();