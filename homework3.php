<?php
function checkMajority(int $age)
{
    if ($age >= 18) {
        echo "You are allowed to play this game";
    } else {
        echo "You are not allowed to play this game";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework3</title>
</head>
<body>
    <h1>Homework3</h1>
    <?php checkMajority(20); ?>
</body>
</html>