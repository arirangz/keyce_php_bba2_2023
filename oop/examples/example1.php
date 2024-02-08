<?php

require_once "Car.php";
require_once "Boat.php";


$car1 = new Car(4, 200, "Toyota");


var_dump($car1);

$boat1 = new Boat(2, 50, "Yamaha");

var_dump($boat1);