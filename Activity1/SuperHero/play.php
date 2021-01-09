<?php
require_once 'SuperHero.php';


error_reporting(E_ALL);
ini_set('display errors', 1);


$superMan = new SuperHero("Superman");
$batMan = new SuperHero ("Batman");

while ($superMan->isHeDead() == "alive" && $batMan->isHeDead() == "alive") 
{
    $superMan->attack($batMan);
    echo $batMan->name . "  has " . $batMan->getHealth() . " health left <br>";
    
    $batMan->attack($superMan);
    echo $superMan->name . "  has " . $superMan->getHealth() . " health left <br>";
    echo "<hr>";
}

// game over tell us who won

if ($superMan->getHealth()> 0)
{
    echo "It looks like poor " . $batMan->getName() . "  lost <br>";
}
else 
{
    echo "It looks like " . $superMan->getName() . "  was defeated <br>";
}
