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
            <li class="navigation__item"><a class="navigation__link <?= isActive("aboutme");?>" href="aboutme.php">categorieën</a></li>    
        </ul>
    </div>

    <div class="search__wrapper">
        <input type="text" class="search__bar" placeholder="waar ben je naar op zoek?">
      <svg class="search-icon" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
        </svg> 
    </div>

    <div class="menubtn__wrapper">
        <ul class="menubtn__list">
            <li class="menubtn__item"> 
                <a class="menubtn__link" href="#">
                    <img id="user-icon" src="data:image/png;base64,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">
                
                    <span>
                        inloggen
                    </span>
                </a>
            </li>

            <li class="menubtn__item">
                <a class="menubtn__link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 471.701 471.701" xml:space="preserve">
                        <g>
	                        <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1   c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3   l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4   C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3   s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4   c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3   C444.801,187.101,434.001,213.101,414.401,232.701z"/>
                        </g>
                    </svg>
                </a>
            </li>

            <li class="menubtn__item">
                <a class="menubtn__link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489 489" xml:space="preserve">
                        <g>
	                        <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3   c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1   C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462   H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41   c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>

