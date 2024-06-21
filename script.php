<?php

//product_ID, product_title, product_brand, product_prijs, product_desc, product_img, product_category, product_color

// echo $row["product_ID"].   $row["product_title"]. $row["product_brand"].  $row["product_prijs"].
//      $row["product_desc"]. $row["product_img"]. $row["product_category"]. $row["product_color"]     

include_once("../source/database.php");

$connection = database_connect();
    
    $sql = "SELECT * FROM product";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "id: " . $row["product_ID"]. "<br><br> - Titel: " . $row["product_title"]. "<br> - Merk: ". $row["product_brand"]. "<br> - Prijs: € " 
                    . $row["product_prijs"]. "<br><br> - Beschrijving: " . $row["product_desc"] . "<br><br> - Afbeeldingen: ". $row["product_img"]
                    . "<br> - Categorie: ". $row["product_category"]. "<br> - Kleur: ". $row["product_color"]. "<br><br>";
        }
    } else {
        echo "0 results";
        }
    $connection->close();

    
    


//print_r($result->fetch_all());

