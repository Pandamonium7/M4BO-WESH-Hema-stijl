<?php

include_once("../source/database.php");

$connection = database_connect();

$result = $connection->query("SELECT * FROM opdrachten");

//print_r($result->fetch_all());
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WESH BO4</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="script/main.js"></script>   
</head>
<body>
    <?php include("subview/header/header.php");?>
    <main>
        <img src="img/hero.webp" alt="hero" class="hero__img">
    </main>

    <?php include("subview/footer/footer.php");?>
</body>
</html>

