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
        <img class="logo__img" src="#   ">
    </div>

    <div class="nav__wrapper">
        <ul class="navigation">     
            <li class="navigation__item"><a class="navigation__link <?= isActive("index");?>" href="index.php">Home</a></li>    
            <li class="navigation__item"><a class="navigation__link <?= isActive("aboutme");?>" href="aboutme.php">categorieën</a></li>    
        </ul>
    </div>

    <div class="search__wrapper">
        <input type="text" class="search__bar">
    </div>

    <div class="login__wrapper">
        <a>
            <span>Inloggen</span>
        </a>
    </div>
</div>

