<?php
require_once "User.php";
require_once "Admin.php";

$user1 = new User("John", "Doe", "test@gmail.com", "abc123");

$admin1 = new Admin("John", "Doe", "test@gmail.com", "abc123", 1);
var_dump($admin1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise User</h1>
    <h2>User 1</h2>
    <p><?=$user1->getFullName()?></p>
</body>
</html>