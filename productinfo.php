<?php
//PRODUCTINFO
include_once("../source/database.php");

$connection = database_connect();

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  } else {
    
    $sql = "SELECT * FROM product WHERE product_ID = 4;";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) 
 
?>


    <?php include("subview/header/header.php");?>
    <!--    Navigatie Menu   -->
    
    <h1>Product Info</h1>
    <main class="productpage--main">

        <?php   {
        
        // output data of each row
        while($row = $result->fetch_assoc()) {
        // echo $row["product_ID"]. $row["product_title"]. $row["product_brand"].    $row["product_prijs"].
        //      $row["product_desc"]. $row["product_img"]. $row["product_category"]. $row["product_color"]              
            ?>
     
        <article class="productinfo__wrapper">

            <figure class="productinfo__figurewrapper">
                <img src="<?php echo $row["product_img"] ?>"alt="<?php echo $row["product_title"]; ?>">
            </figure>

            <div class="productinfo__text--wrapper">
                <div class="productinfo__action--wrapper ">
                    <h2 class="productinfo__section--titel"><?php echo $row["product_title"]; ?></h2>
                    <p><?php echo $row["product_brand"]; ?></p>
                    <p><?php echo $row["product_color"]; ?></p>
                    <h3 class="productinfo__section--prijs"><?php echo "€ ". $row["product_prijs"]; ?></h3>
                </div>
                
            </div>
            
            <a href="#" class="productinfo__sectionbtn--link">Toevoegen aan winkelwagen
                <img class="svg__icon" src="img/shopping-bag+.svg" alt="winkelwagen"/>
            </a>

        </article>
        <section class="productinfo__desc--wrapper">
            <h2>Productbeschrijving</h2>
            <p class="productinfo__desc--p"><? echo $row["product_desc"]; ?></p>
            
        </section>


        <?php   }
                } 
                $connection->close();
                }
             ?>


    </main>

<!--    Footer      -->
    <?php include("subview/footer/footer.php");?>