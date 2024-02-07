<?php

require_once "Product.php";

$product1 = new Product("Dell Inspiron 15", 1000, 20);
/*
$product1->name = "Dell Inspiron 15";
$product1->price = 1000;
$product1->vat = 20;
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$product1->name ?></h1>
    <p>Price: <?=$product1->price ?> €</p>
    <p>Price with VAT: <?=$product1->getPriceWithVat() ?> €</p>
</body>
</html>