<?php
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
?>