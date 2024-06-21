<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KICKS</title>    
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

    <main>
        <div class="main__heroimg--wrapper">         
            <img src="img/shoes-heromain.webp" alt="hero" class="hero__img">
        </div>

        <section class="hero__sectionwrapper">
            <h2 class="hero__section--titel">Retro Revival:</h2>
            <p class="hero__section--parag">Klassieke Sneakers voor de Moderne Stap</p>
            <div class=hero__section--btnwrapper>
                <a href="categorieen.php" class="hero__sectionbtn--link">
                    winkel  
                </a>
            </div>

        </section>
    </main>
    
    <section class="offers__sectionwrapper">
        <h2 class="offers--titel">nu bij KICKS</h2>

        <article class="offers__wrapper">
            <figure class="offers__figurewrapper">
                <img src="img/offers-1.jpg" alt="">
            </figure>
            <div class="offers__action--wrapper">
                <h3 class="offers__section--titel">Nieuwe Collectie: Stap Stijlvol de Toekomst in!</h3>
                <p class="offers__section--parag">Ontdek de perfecte mix van comfort en stijl met onze nieuwste collectie schoenen. Of je nu op zoek bent naar de ultieme sportschoen of de meest elegante hakken, onze selectie heeft voor ieder wat wils.</p>
                <a href="#" class="offers__sectionbtn--link">
                    &#10140;
                </a>
            </div>

        </article>

        <article class="offers__wrapper">
            <figure class="offers__figurewrapper">
                <img src="img/offers-2.jpg" alt="">
            </figure>
            <div class="offers__action--wrapper">
                <h3 class="offers__section--titel">Binnenkort Beschikbaar: Onze Schoenencollectie!</h3>
                <p class="offers__section--parag">Wees de eerste om de nieuwste trends in schoenmode te ervaren. Onze aanstaande collectie combineert innovatief design met ongeëvenaard comfort, speciaal voor jou samengesteld.</p>
                <a href="#" class="offers__sectionbtn--link">
                    &#10140;
                </a>
            </div>

        </article>

        <article class="offers__wrapper">
            <figure class="offers__figurewrapper">  
                <img src="img/offers-3.jpg" alt="">
            </figure>
            <div class="offers__action--wrapper">
                <h3 class="offers__section--titel">Klassieke Sneakers: Retro Stijl, Moderne Twist</h3>
                <p class="offers__section--parag">Ontdek onze exclusieve lijn van klassieke sneakers die de iconische stijlen van het verleden herinterpreteren voor de modebewuste van nu. Deze collectie is een ode aan de tijdloze designs die generaties hebben geïnspireerd.</p>
                <a href="#" class="offers__sectionbtn--link">
                    &#10140;
                </a>
            </div>

        </article>

    </section>
<!--    Footer      -->
    <?php include("subview/footer/footer.php");?>
</body>
</html>

