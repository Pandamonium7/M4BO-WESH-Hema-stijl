<?php
 function isActive($name){
    $page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    if($page == $name){
            return "active";
        }
        return "";
    }
?>
<div class="mainmenu__wrapper">

    <div class="logo__wrapper">
        <a href="index.php" class="logo__link"><img class="logo__img" src="img/logo-kicks.webp"></a>
    </div>

    <div class="nav__wrapper">
        <ul class="navigation">     
            <li class="navigation__item"><a class="navigation__link <?= isActive("index");?>" href="index.php">home</a></li>    
            <li class="navigation__item"><a class="navigation__link <?= isActive("categorieën");?>" href="categorieën.php">categorieën</a></li>   
            <li class="navigation__item"><a class="navigation__link <?= isActive("productinfo");?>" href="productinfo.php">productinfo</a></li>  
        </ul>
    </div>

    <div class="search__wrapper">
        <input type="text" class="search__bar" placeholder="waar ben je naar op zoek?">
        <img id="searchicon" class="svg__icon search--svg" src="img/icon-search.svg" alt="search-icon"/>
    </div>

    <div class="menubtn__wrapper">
        <ul class="menubtn__list">
            <li class="menubtn__item"> 
                <a class="menubtn__link" href="#">
                    <img class="svg__icon user--svg" src="img/icon-user.png" alt="user-icon"/>
                    <span>
                        inloggen
                    </span>
                </a>
            </li>

            <li class="menubtn__item item--heart">
                <a class="menubtn__link">
                    <img class="svg__icon heart--svg" src="img/icon-heart.svg" alt="heart-icon"/>
                </a>
            </li>

            <li class="menubtn__item item--shopcart">
                <a class="menubtn__link" href="winkelwagen.php">
                   <img class="svg__icon shopcart--svg"  src="img/icon-shoppingbag.svg" alt="shoppingbag-icon">
                </a>
            </li>
        </ul>
    </div>
</div>