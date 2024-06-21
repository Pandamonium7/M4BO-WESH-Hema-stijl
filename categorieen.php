<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KICKS Categorieën</title>    
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo-kicks.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    
    <script src="script/main.js" defer></script>   
</head>
<body>

<!--    Navigatie Menu   -->
    <?php include("subview/header/header.php");?>

    <main class="category--main">
        <article class="offers__wrapper">
            <figure class="offers__figurewrapper">
                <img src="img/category-heren.jpg" alt="">
            </figure>
            <div class="offers__action--wrapper">
                <h3 class="offers__section--titel">Heren</h3>
                <p class="offers__section--parag"></p>
                <a href="heren.php" class="offers__sectionbtn--link">
                    &#10140;
                </a>
            </div>

        </article>

        <article class="offers__wrapper">
            <figure class="offers__figurewrapper">  
                <img src="img/category-dames.jpg" alt="">
            </figure>
            <div class="offers__action--wrapper">
                <h3 class="offers__section--titel">Dames</h3>
                <p class="offers__section--parag"></p>
                <a href="#" class="offers__sectionbtn--link">
                    &#10140;
                </a>
            </div>
        </article>
    </main>

<!--    Footer      -->
    <?php include("subview/footer/footer.php");?>
</body>
</html>

