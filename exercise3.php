<?php
$user_name="Gamer454";
$age = 19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($age < 18) {
            echo "not allowed";
        } else {
            echo "allowed";
        }
    ?>

    <?php if ($age < 18) { ?>
        <h2>Warning:</h2>
        <p>Our game in not suitable for players under the age of 18</p>
    <?php } else { ?>
        <h2>Allowed!</h2>
        <p>Welcome to our website <?=$user_name ?> </p>
    <?php } ?>

</body>
</html>