<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <?php if (isset($_SESSION["user_email"])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <?php if (isset($_SESSION["user_email"])) { ?>
        <section>
            You are connected with: <?=$_SESSION["user_email"] ?>
        </section>
    <?php } ?>

    <main>