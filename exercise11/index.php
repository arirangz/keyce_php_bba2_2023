<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercise 11</h1>

    <form action="" method="post">
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="Login">
    </form>
    <?php
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        if ($_POST["email"] === "test@gmail.com" && $_POST["password"] === "ABC123") {
            echo "you are allowed";
        } else {
            echo "you are not allowed";
        }
    }
    ?>
</body>

</html>