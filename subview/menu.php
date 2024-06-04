<?php
 function isActive($name){
    $page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

    if($page == $name){
            return "active";
        }
        return "";
    }
?>

<ul class="navigation">    
    <li class="navigation__item"><a class="navigation__link <?= isActive("index");?>" href="index.php">Home</a></li>
    <li class="navigation__item"><a class="navigation__link <?= isActive("aboutme");?>" href="aboutme.php">About Me</a></li>    
</ul>

