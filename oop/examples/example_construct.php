<?php

require_once "Boat.php";

$boat1 = new Boat(2, 60);
$boat1->maxSpeed = 70;

var_dump($boat1);

$boat2 = new Boat(1, 40);

var_dump($boat2);