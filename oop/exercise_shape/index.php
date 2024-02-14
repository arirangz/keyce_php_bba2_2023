<?php

require_once "Rectangle.php";
require_once "Circle.php";

$kitchen = new Rectangle(3,2,"white");
$bedroom = new Rectangle(3,3,"blue");

$circle1 = new Circle(10, "red");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise shape</title>
</head>
<body>
    <h2>Kitchen</h2>
    <p>Length: <?=$kitchen->length; ?></p>
    <p>Width: <?=$kitchen->width; ?></p>
    <p>Color: <?=$kitchen->color; ?></p>
    <p>Area: <?=$kitchen->calculateArea(); ?></p>
    <h2>Bedroom</h2>
    <p>Length: <?=$bedroom->length; ?></p>
    <p>Width: <?=$bedroom->width; ?></p>
    <p>Color: <?=$bedroom->color; ?></p>
    <p>Area: <?=$bedroom->calculateArea(); ?></p>

    <h2>Circle</h2>
    <p>Color: <?=$circle1->color?></p>
    <p>Area: <?=$circle1->calculateArea()?></p>
</body>
</html>