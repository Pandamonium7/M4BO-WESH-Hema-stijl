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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicks</title>    
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo-kicks.webp">
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

