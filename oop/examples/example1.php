<?php


require_once "Car.php";
require_once "Boat.php";


$car1 = new Car(4, 200, "Toyota");

$car1->displayInfo();

$boat1 = new Boat(2, 50, "Yamaha");

$boat1->displayInfo();