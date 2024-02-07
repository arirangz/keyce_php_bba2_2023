<?php

require_once "Ticket.php";

$ticket1 = new Ticket();
$ticket1->quantity = 2;
$ticket1->unit_price = 12.5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Quantity: <?=$ticket1->quantity?></p>
    <p>Unit Price: <?=$ticket1->unit_price?></p>
    <p>Total: <?=$ticket1->getTotal()?></p>
</body>
</html>