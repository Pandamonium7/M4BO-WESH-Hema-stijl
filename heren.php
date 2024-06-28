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
    <section class="inputs">

    <!--Merk-->
    <div>
        <input id="checkbox--adidas" type="checkbox" class="filter">
        <label for="checkbox--adidas" class="label">Adidas</label>
    </div>
    <!--In aanbieding-->
    <div>
        <input id="checkbox--puma" type="checkbox" class="filter">
        <label for="checkbox--puma" class="label">Puma</label>
     </div>
    <!--Extra zool-->
    <div>
        <input id="checkbox--hoka" type="checkbox" class="filter">
        <label for="checkbox--hoka" class="label">Hoka</label>
     </div>

     <div>
        <input id="checkbox--jordan" type="checkbox" class="filter">
        <label for="checkbox--jordan" class="label">Jordan</label>
     </div>
    <!--Extra zool-->
    <div>
        <input id="checkbox--nike" type="checkbox" class="filter">
        <label for="checkbox--nike" class="label">Nike</label>
     </div>

</section>
    <main class="productpage--main ">

        <?php   {
        
        // output data of each row
        while($row = $result->fetch_assoc()) {
        // echo $row["product_ID"]. $row["product_title"]. $row["product_brand"].    $row["product_prijs"].
        //      $row["product_desc"]. $row["product_img"]. $row["product_category"]. $row["product_color"]              
            ?>
     
        <article data-merk="<?php echo $row["product_brand"]; ?>" class="product__wrapper game">
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
