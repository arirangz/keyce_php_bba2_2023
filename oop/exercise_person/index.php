<?php
require_once "Person.php";
require_once "Employee.php";

$johnDoe = new Person("John", "Doe", 31);
$markSpencer = new Person("Mark", "Spencer", 33);

$janeEmployee = new Employee("Jane", "Break", 31, "Google", "Developer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List</h1>
    <h2><?=$johnDoe->getFullName(); ?></h2>
    <p>Age: <?=$johnDoe->getAge() ?></p>

    <h2><?=$markSpencer->getFullName(); ?></h2>
    <p>Age: <?=$markSpencer->getAge() ?></p>

    <h2><?=$janeEmployee->getFullName() ?></h2>
    <p><?=$janeEmployee->getPosition()?> at <?=$janeEmployee->getCompany()?></p>
</body>
</html>