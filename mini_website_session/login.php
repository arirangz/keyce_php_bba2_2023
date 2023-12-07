<?php require_once "header.php";

$error = "";

if (isset($_POST["submitLogin"])) {
    if ($_POST["email"] === "admin@test.com" && $_POST["password"] === "test") {
        // We save data in the session
        $_SESSION["user_email"] = $_POST["email"];
        // We redirect the user to the homepage
        header("Location: index.php");
    } else {
        $error = "incorrect email or password";
    }
}

?>
<h1>Login</h1>

<form action="" method="post">
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <input type="submit" value="Login" name="submitLogin">
    </p>
    <?=$error ?>

</form>


<?php require_once "footer.php" ?>