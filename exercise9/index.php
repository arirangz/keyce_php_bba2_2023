<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
        if (isset($_GET['name'])) {
            echo "The name {$_GET['name']} is the best name in the world!";
        } else {
            echo "name missing in the url";
        }
        ?>
    </h1>
</body>
</html>