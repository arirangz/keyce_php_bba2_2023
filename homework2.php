<?php
$movies = [
    ["title" => "Titanic", "year" => 1990],
    ["title" => "Jawan", "year" => 2023],
    ["title" => "Leo", "year" => 2023],
    ["title" => "The Dark Knight", "year" => 2008],
    ["title" => "Sardar", "year" => 1993],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework2</title>
</head>

<body>
    <h1>Homework2</h1>
    <h2>Movies</h2>
    <ul>
        <?php
            $oldestMovie = null; 
        ?>
        <?php foreach ($movies as $movie) { 
            if ($oldestMovie === null || $movie['year'] < $oldestMovie['year']) {
                $oldestMovie = $movie;
            }
            ?>
            <li><?= $movie['title'] ?> - Year: <?= $movie['year'] ?></li>
        <?php } ?>
    </ul>
    <h2>Oldest movie</h2>
    <p><?=$oldestMovie['title'] ?> - Year: <?= $oldestMovie['year'] ?></p>
</body>

</html>