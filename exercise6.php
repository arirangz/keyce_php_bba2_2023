<?php
$first_name = "Jane";
$last_name = "Doe";

function displayFullName(string $first_name, string $last_name)
{
    return $first_name . " " . $last_name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 6</h1>
    <p><?=displayFullName($first_name, $last_name); ?></p>
    <p><?=displayFullName("Martin", "Spencer"); ?></p>
</body>
</html>