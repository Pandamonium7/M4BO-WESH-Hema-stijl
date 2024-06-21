<?php

include_once("../source/database.php");

$connection = database_connect();

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  } else {
    
    $sql = "SELECT product_ID, product_title, product_brand, product_prijs, product_desc FROM product";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "id: " . $row["product_ID"]. " - Titel: " . $row["product_title"]. " - Merk: ". $row["product_brand"]. " - Prijs: € " . $row["product_prijs"]. "<br>" 
            . "Beschrijving: " . $row["product_desc"] . "<br><br><br>";
        }
    } else {
        echo "0 results";
        }
    $connection->close();
    }
    
    
//$result = $connection->query("SELECT * FROM product");


//print_r($result->fetch_all());
?>
