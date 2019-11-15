<?php

// Accepts the product_id
// Returns a single product as an associative array
function getProduct($product_id) {
    include('database.php');

    $query = "SELECT * FROM PRODUCT
              WHERE product_id = $product_id";
    $result = mysqli_query($connection, $query);

    

    if($result) {
        return mysqli_fetch_assoc($result);
    } else {
        return "Error: getProduct()";
    }
}

// Returns all products in the PRODUCTS table
// as a multi-dimensional associative array
function getProducts() {
    include('database.php');

    $query = 'SELECT * FROM PRODUCT';
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getProducts()";
    }
}

// allow a developer to get products in groups of X products
// Input: Page #, # of Products you want to display
function getProductPag($page_number) {
    include('database.php');
    // $offset = number of products that we've already passed
    // Page 1 - 0
    /*
    SELECT * FROM PRODUCT
            LIMIT 12
            OFFSET 0
    */
    // Page 2 - 12
    /*
    SELECT * FROM PRODUCT
            LIMIT 12
            OFFSET 12
    */
    // Page 3 - 24

    // 1 - 0
    // 2 - 12
    // 3 - 24
    $limit_products = 12;

    $calculated_offset = ($page_number - 1) * $limit_products;
    // ($number_of_pages - 1) * $limit_of_products
    // 1 - 1 = 0 * 12 = 0
    // 2 - 1 = 1 * 12 = 12
    // 3 - 1 = 2 * 12 = 24
    $query = "SELECT * FROM PRODUCT
            LIMIT $limit_products
            OFFSET $calculated_offset";
            
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getProductPag()";
    }
}


// Page 1 of Products
/*
Show products #1 - 12
Starting at Product #1
*/

// Page 2 of Products
/*
Show products #13 - 24
Starting at Product #13
*/

// Page 3 of Products
/*
Show products #25 - ?
Starting at Product #25
*/

?>