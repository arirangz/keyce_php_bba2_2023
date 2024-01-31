<?php

require_once "Car.php";


$car1 = new Car();
$car1->brand = "Toyota";
$car1->maxSpeed = 255;

//echo "The car 1 is : ".$car1->brand;

$car1->displayBrand();

echo $car1->getMaxSpeedKm();

$car2 = new Car();
$car2->brand = "Peugeot";
$car2->maxSpeed = 240;

var_dump($car2);