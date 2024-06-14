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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    
    <script src="script/main.js" defer></script>   
</head>
<body>
    <?php include("subview/header/header.php");?>
    <main>
        <div class="main__heroimg--wrapper">
            <img src="img/shoes-heromain.webp" alt="hero" class="hero__img">
        <div>

    </main>

    <?php include("subview/footer/footer.php");?>
</body>
</html>

