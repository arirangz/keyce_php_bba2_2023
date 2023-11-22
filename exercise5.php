<?php

$games = [
    ["name" => "COD", "type" => "FPS", "editor" => "Activision"],
    ["name" => "GTP", "type" => "Action", "editor" => "Rockstar"],
    ["name" => "PUBG", "type" => "Batte Royal", "editor" => "Tencent"],
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
    <ul>
        <?php foreach ($games as $game) {  ?>
            <li>
                <h2><?= $game["name"]; ?></h2>
                <p>Type: <?= $game["type"]; ?></p>
                <p>Editor: <?= $game["editor"]; ?></p>
            </li>
        <?php } ?>
    </ul>
</body>

</html>