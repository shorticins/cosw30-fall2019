<?php

// Returns all reviews in the RATING table
// as a multi-dimensional associative array
function getReviews() {
   include('database.php');

   $query = 'SELECT
                r.Rating_ID, r.Product_ID,
                p.product_name, r.Customer_ID,
                c.Customer_First_Name, c.Customer_Last_Name,
                r.Rating_Score, r.Rating_Review
            FROM RATING r
            INNER JOIN PRODUCT p
                on r.Product_ID = p.product_id
            INNER JOIN CUSTOMER c
                on r.Customer_ID = c.Customer_ID';

   $result = mysqli_query($connection, $query);

    if($result) {
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getReviews()";
    }
}

?>