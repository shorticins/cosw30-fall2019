<?php

// Returns all reviews in the RATING table
// as a multi-dimensional associative array
function getReviews() {
   include('database.php');
   $query = 'SELECT * FROM RATING';
   $result = mysqli_query($connection, $query);

    if($result) {
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getReviews()";
    }
}
?>