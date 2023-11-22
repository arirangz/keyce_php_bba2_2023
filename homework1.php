<?php
$games = ["Clash Royal", "Rocket League", "Mario", "COD", "PUBG", "Pinball"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>

<body>
    <h1>Games wishlist</h1>

    <ul>
        <?php foreach ($games as  $game) { ?>
            <li><?= $game ?></li>
        <?php } ?>
    </ul>

</body>

</html>