<?php
$countries = [
    ["name" => "France", "population" => 66.9],
    ["name" => "Japan", "population" => 125],
    ["name" => "Ethiopia", "population" => 123],
    ["name" => "Sri Lanka", "population" => 22.8],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Workshop</h1>
    <h2>Countries list</h2>
    <ul>
        <?php 
            $biggestCountry = null;
            $smallestCountry = null;
        ?>
        <?php foreach ($countries as $country) {  
            /* If there is no biggestCountry 
                or if the current is bigger then biggestCountry
            */
            if ($biggestCountry === null || $country['population'] > $biggestCountry['population']) {
                $biggestCountry = $country;
            }

            if ($smallestCountry === null || $country['population'] < $smallestCountry['population']) {
                $smallestCountry = $country;
            }

            ?>
            <li><?=$country["name"]; ?>, population: <?=$country["population"]; ?></li>
        <?php } ?>
    </ul>

    <h2>Biggest country:</h2>
    <p><?=$biggestCountry["name"] ?> with a popultion of <?=$biggestCountry["population"] ?>M</p>
    
    <h2>Smallest country:</h2>
    <p><?=$smallestCountry["name"] ?> with a popultion of <?=$smallestCountry["population"] ?>M</p>
    
</body>

</html>