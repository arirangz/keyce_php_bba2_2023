<?php
$users = [
    ["first_name" => "John", "last_name" => "Doe", "age" => 35],
    ["first_name" => "Jane", "last_name" => "Spencer", "age" => 35],
    ["first_name" => "Martin", "last_name" => "Dyll", "age" => 35],
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
        <?php foreach ($users as $user) {  ?>
            <li>Firstname: <?=$user["first_name"]; ?>, Lastname: <?=$user["last_name"]; ?></li>
        <?php } ?>
    </ul>
</body>

</html>