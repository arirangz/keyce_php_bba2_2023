<?php

require_once "pdo.php";

$user_id = $_GET['id'];

// Query to get the user
$query = $pdo->prepare("SELECT * FROM user WHERE id = :user_id");
$query->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

?>
<?php require_once "templates/header.php" ?>

<div class="container">

    <article class="blog-post">
        <p>Name: <?=$user['first_name']?> <?=$user['last_name']?></p>
        <p>Email: <?=$user['email']?></p>

    </article>

</div>

<?php require_once "templates/footer.php" ?>
