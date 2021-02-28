<?php

require 'Person.php';

$person1 = new Person("Donald");
$person2 = new Person("Gary");

$person1->walk();
$person2->sayHello();
$person1->login("Tim", "1");