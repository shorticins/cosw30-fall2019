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



// Accepts the product_id
// Returns rating information as an associative array
function getRating($product_id) {
    include('database.php');

    $query = "SELECT * FROM RATING WHERE Product_ID = $product_id";

    $result = mysqli_query($connection, $query);

    
    if($result) {
        return mysqli_fetch_assoc($result);
    } else {
        return "Error: getRating()";
    }
}



// Accepts the product_id
// Returns average rating for the product
function getAvgRating($product_id) {
    include('database.php');

    $query = "SELECT AVG(Rating_Score)
                AS AVERAGE
                FROM RATING
                WHERE Product_ID = $product_id";

    $result = mysqli_query($connection, $query);

    
    if($result) {
        $avg_rating_fetch = mysqli_fetch_assoc($result); 
        return $avg_rating_fetch['AVERAGE'];   
    } else {
        return "Error: getAvgRating()";
    }
}

//Gets Product Review Total Count Table
function getQueryProductReviewCount(){
    include('database.php');

    $query = "SELECT Product_ID, COUNT(*) AS Count FROM RATING GROUP BY Product_ID";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: Error connecting to database";
    }
}

//Compares a Product ID against Product Review Total Table, gets count or returns 0
function fetchProductReviewCount($productId, $array){
    $rows = $array;
    foreach ($rows as $row){
        if($row['Product_ID'] == $productId){
            return $row['Count'];
        }
    }
    return 0;
}

// Accepts the product_id
// Returns number of reviews for the product 
function getProductReviews($product_id) {
    include('database.php');

    $query = "SELECT COUNT(*)
                AS REVIEWS
                FROM RATING 
                WHERE Product_ID = $product_id";

    $result = mysqli_query($connection, $query);

    
    if($result) {
        $total_reviews_fetch = mysqli_fetch_assoc($result);
        return $total_reviews_fetch['REVIEWS'];   
    } else {
        return "Error: getProductReviews()";
    }
}

// Accepts the product_id
// Returns reviews associated to product_id
//as a multi-dimensional array
function getReviews($product_id) {
    include ('database.php');

    $query = "SELECT RATING.Rating_ID,
                     RATING.Product_ID,
                     RATING.Customer_ID,
                     RATING.Rating_Score,
                     RATING.Rating_Review, 
                     CUSTOMER.Customer_First_Name, 
                     CUSTOMER.Customer_Last_Name
	          FROM RATING 
	          INNER JOIN CUSTOMER
	          ON RATING.Customer_ID = CUSTOMER.Customer_ID
              WHERE RATING.Product_ID = $product_id
              ORDER BY Rating_Score DESC";
    $result = mysqli_query($connection, $query);

    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return 'Error: getReviews()';
    }
}


//Use random generator to select a product ID 
//These products will be recommended at the bottom of each PDP page
// Returns a single product as an associative array
function recdProduct($num_of_products) {
    include('database.php');

    $query = "SELECT * FROM PRODUCT 
              ORDER BY RAND() 
              LIMIT $num_of_products";
    $result = mysqli_query($connection, $query);
    
    
    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: recdProduct()";
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