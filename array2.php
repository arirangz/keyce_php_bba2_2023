<?php
$france = ["name" => "France", "capital" => "Paris", "population" => 67];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
    <h1>Associative array</h1>
    <h2><?=$france["name"]?></h2>
    <h3>Information</h3>
    <ul>
        <li>Capital: <?=$france["capital"] ?></li>
        <li>Population: <?=$france["population"] ?></li>
    </ul>
</body>
</html>