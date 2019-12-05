<?php 
include 'model/product.php';
function getProductPag($page_number) {
    require('database.php');
   
    $limit_products = 12;
    $calculated_offset = ($page_number - 1) * $limit_products;
       $query = "SELECT * FROM PRODUCT
            LIMIT $limit_products
            OFFSET $calculated_offset";
            
    $result = mysqli_query($connection, $query);
    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error";//: $query";//getProductPag()";
    }
}
$page_number = $_GET['page'];

$products = getProductPag($page_number);
foreach($products as $product)
    echo "<a href='product.php?pid=" . $product['product_id'] . "'>\n
                <h2>" . $product['product_name']. "</h2>\n
                <img src='img/" . $product['Product_Image'] . "' /></a><br />\n
                <h2>Product Description</h2>\n
                <p>" . $product['product_desc'] . "</p>\n
                <h2>Product Ingredients</h2>\n
                <p>" . $product['Product_Ingredients'] . "</p>\n";
     



    
   