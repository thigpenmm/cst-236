<?php
//require_once "Autoloader.php"
require_once 'Car.php';

// Create an instance of a Person

$car = new Car("Cruz Ramirez");
$car->checkTires();
$car->engineCheck();
$car->checkPressure();
$car->startEngine("4", "32");
$car->mph("75");
$car->startEngine("3", "35");
$car->restartEngine("4", "33");
$car->mph("0");
$car->mph("55");


?>