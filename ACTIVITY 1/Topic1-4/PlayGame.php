<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'SuperHero.php';

$superMan = new SuperHero("Superman", rand(1, 100));
$batMan = new SuperHero("Batman", rand(1, 100));

$superMan->isDead();

while ($superMan->isDead() == FALSE && $batMan->isDead() == FALSE)
{  
    $superMan->attack($batMan);
    $batMan->attack($superMan);
    echo "<hr>";
}


if ($superMan->isDead())
{
    echo "Superman is now dead. Batman wins! <br>";
}
elseif ($batMan->isDead())
{
    echo "Batman is now dead. Superman wins! <br>";
}

