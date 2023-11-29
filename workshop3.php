<?php
$students = [
    ["name" => "John", "value"=> 75],
    ["name" => "Martin", "value"=> 45],
    ["name" => "Jane", "value"=> 84],
];
$cities = [
    ["name" => "Paris", "value" =>20],
    ["name" => "Tokyo", "value" =>15],
    ["name" => "Colombo", "value" =>30],
];

function getMax(array $list)
{
    $maxItem = null;
    foreach ($list as $item) {
        if ($maxItem === null || $item['value'] > $maxItem['value']) {
            $maxItem = $item;
        }
    }
    return $maxItem;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Workshop 3</h1>
    <h2>Max city:</h2>
    <?php 
        $maxCity = getMax($cities); 
        echo $maxCity["name"]." with a temperature of ".$maxCity["value"];
    ?>
        <h2>Max studdent:</h2>
    <?php 
        $maxStuddent = getMax($students); 
        echo $maxStuddent["name"]." with a temperature of ".$maxStuddent["value"];
    ?>
</body>
</html>