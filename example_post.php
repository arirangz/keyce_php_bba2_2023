<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p>
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name">
        </p>
        <input type="submit" value="Subscribe" name="submitSubscribe">
    </form>
    <?php if (isset($_POST["last_name"])) { ?>
        <?php if ($_POST["last_name"] != "") { ?>
            <h2>Thank you for your subscription</h2>
        <?php } else { ?>
            <p>The last name is required</p>
        <?php } ?>
    <?php } ?>
</body>

</html>