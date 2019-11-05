<?php
// Returns all single brand by ID from BRANDS table
// as a multi-dimensional associative array
function getBrand($brand_id) {
    include('database.php');

    $query = "SELECT * FROM BRAND;
        WHERE Brand_ID = $brand_id";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getBrand()";
    }
}

// Returns all brands from BRANDS table
// as a multi-dimensional associative array
function getBrands() {
    include('database.php');

    $query = "SELECT * FROM BRAND";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getBrands()";
    }
}


?>