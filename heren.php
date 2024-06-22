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




    <?php include("subview/header/header.php");?>
    <!--    Navigatie Menu   -->

    <h1><?php echo $self;?></h1>
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
