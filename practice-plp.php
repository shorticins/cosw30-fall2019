<?php include 'model/product.php';

// Get a parameter from the URL called 'page'
// You're going to pass the value of page to the getProductPag() function
$page_number = $_GET['page'];
$products = getProductPag($page_number); 

// Loop through all of the returned products and output their
// names and descriptions (whatevers in the DB)
foreach($products as $product) {
    // Output the product
}

?>