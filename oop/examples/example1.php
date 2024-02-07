<?php

require_once "Car.php";


$car1 = new Car();
$car1->setBrand("Toyota");
$car1->setMaxSpeed(50);

$car1->displayBrand();

echo $car1->getMaxSpeedKm();
