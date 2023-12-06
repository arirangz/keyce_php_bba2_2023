<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET["age"])) {
        if ($_GET["age"] >= 18) { ?>
            <h1>You are allowed</h1>
        <?php } else { ?>
            <h1>You are not allowed</h1>
        <?php }
    } else {
        echo "There is no age in URL";
    }
    ?>
</body>

</html>