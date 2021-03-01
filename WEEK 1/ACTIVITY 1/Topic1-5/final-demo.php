<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Person.php';
require_once 'Student.php';

$newGuy = new Person();
$newGuy2 = new Student();

$newGuy->growOlderBy(2);
$newGuy2->growOlderBy(2);

echo "The age of person 1: " . $newGuy->age . " <br>";
echo "The age of person 2: " . $newGuy2->age . "<br>";