<?php

require 'RaceCar.php';

$car1 = new RaceCar("Bently", 4);
$car1->engineStart();
$car1->fillTires(32);
$car1->drive(62);
$car1->drive(60);
$car1->engineOff();
$car1->engineStart();
$car1->drive(54);
