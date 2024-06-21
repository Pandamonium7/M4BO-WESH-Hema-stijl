<?php

include_once("../source/database.php");

$connection = database_connect();

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  } else {
    
    $sql = "SELECT * FROM product";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) 
 
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KICKS Herenpagina</title>    
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

    <main class="productpage--main">

        <?php   {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        // echo $row["product_ID"]. $row["product_title"]. $row["product_brand"].    $row["product_prijs"].
        //      $row["product_desc"]. $row["product_img"]. $row["product_category"]. $row["product_color"]              
            ?>
       
       
       <article class="product__wrapper">
                <figure class="product__figurewrapper">
                    <img src="<?php echo $row["product_img"] ?>"alt="<?php echo $row["product_title"]; ?>">
                </figure>
                <div class="product__action--wrapper">
                    <p class="product__section--titel"><?php echo $row["product_title"]; ?></p>
                    <p><?php echo $row["product_brand"]; ?></p>

            


                    <div class="product__bottom--wrapper">
                        <h3 class="product__section--prijs"><?php echo "€ ". $row["product_prijs"]; ?></h3>
                        
                        <a href="#" class="product__sectionbtn--link">
                           <img class="svg__icon" src="img/shopping-bag+.svg" alt="winkelwagen"/>
                        </a>
                    </div>
                </div>
        </article>
       
        <article class="product__wrapper">
                <figure class="product__figurewrapper">
                    <img src="<?php echo $row["product_img"] ?>"alt="<?php echo $row["product_title"]; ?>">
                </figure>
                <div class="product__action--wrapper">
                    <p class="product__section--titel"><?php echo $row["product_title"]; ?></p>
                    <p><?php echo $row["product_brand"]; ?></p>


                    <div class="product__bottom--wrapper">
                        <h3 class="product__section--prijs"><?php echo "€ ". $row["product_prijs"]; ?></h3>
                        
                        <a href="#" class="product__sectionbtn--link">
                           <img class="svg__icon" src="img/shopping-bag+.svg" alt="winkelwagen"/>
                        </a>
                    </div>
                </div>
        </article>

        <article class="product__wrapper">
                <figure class="product__figurewrapper">
                    <img src="<?php echo $row["product_img"] ?>"alt="<?php echo $row["product_title"]; ?>">
                </figure>
                <div class="product__action--wrapper">
                    <p class="product__section--titel"><?php echo $row["product_title"]; ?></p>
                    <p><?php echo $row["product_brand"]; ?></p>


                    <div class="product__bottom--wrapper">
                        <h3 class="product__section--prijs"><?php echo "€ ". $row["product_prijs"]; ?></h3>
                        
                        <a href="#" class="product__sectionbtn--link">
                           <img class="svg__icon" src="img/shopping-bag+.svg" alt="winkelwagen"/>
                        </a>
                    </div>
                </div>
        </article>



        <?php   }
                } 
                $connection->close();
                }
             ?>


    </main>

<!--    Footer      -->
    <?php include("subview/footer/footer.php");?>
</body>
</html>
