<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_POST["username"])) { ?>
        <?=$_POST['username'] ?>
        <h1>The form has been sent successfuly</h1>
    <?php } else {  ?>
        <h2>Data not sent</h2>
    <?php } ?>
</body>
</html>