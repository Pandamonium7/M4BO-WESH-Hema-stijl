<?php include("subview/header/header.php");?>
<!--    Navigatie Menu   -->

<!--    Hero Main        -->
    <div id="dialog-container">
        <dialog id="modal_example1">
            <span>Wil je naar Nachtmodus overschakelen?</span>

        <div id="dialog-btn-container">
            <button class="dialog-btn" onclick="modal_test('modal_example1')">Ja</button>
            <button class="dialog-btn" onclick="modal_test('modal_example1')">Nee</button>
        </div>
        </dialog>   
    </div>


    <main>
        <div class="main__heroimg--wrapper">         
            <img src="img/shoes-heromain.webp" alt="hero" class="hero__img">
        </div>

        <section class="hero__sectionwrapper">
            <h2 class="hero__section--titel">Retro Revival:</h2>
            <p class="hero__section--parag">Klassieke Sneakers voor de Moderne Stap</p>
            <div class=hero__section--btnwrapper>
                <a href="productinfo.php" class="hero__sectionbtn--link">
                    winkel  
                </a>
            </div>

        </section>
    </main>

<!--    Categorie Section -->
    <section class="offersheader__sectionwrapper">
        <h2 class="offers--titel">Nu in de Aanbieding</h2>

        <article class="offersheader__wrapper">
            <div class="offersheader__action--wrapper">
                <h3 class="offersheader__section--titel">KICKasS Deals</h3>
                <p class="offersheader__section--parag">Haal gigaveel korting bij inschrijving van onze nieuwsletter</p>
                <a href="#" class="offersheader__sectionbtn--link">
                    &#10140;
                </a>

            </div>
            <figure class="offersheader__figurewrapper">
                <img src="img/sale.jpg" alt="">
            </figure>
        </article>
    </section>

<!--    CardSections      -->    

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
    <div id="cookieModal" class="modal">
  <div class="modal-content">
    <span class="close">×</span>
    <p>Wij gebruiken cookies. Klik op accepteren als het ermee eens bent.</p>
    <button id="acceptCookies">Accept</button>
  </div>
    </div>



<!--    Footer      -->
<?php include("subview/footer/footer.php");?>



<script>

// Get the modal
var modal = document.getElementById("cookieModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the button that accepts cookies
var acceptButton = document.getElementById("acceptCookies");

// When the user clicks the button, open the modal 
window.onload = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks the accept button, close the modal and set a cookie
acceptButton.onclick = function() {
  document.cookie = "acceptedCookies=true; path=/";
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>


