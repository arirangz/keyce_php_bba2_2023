<?php
$user = ["first_name" => "John", "last_name" => "Doe", "email" => "john@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 4</h1>
    <h2>Name: <?=$user["first_name"] . " " . $user["last_name"] ?></h2>
    <h2>Name: <?=$user["first_name"] ?> <?=$user["last_name"] ?></h2>
    <p>Email: <?=$user["email"] ?> </p>
</body>
</html>