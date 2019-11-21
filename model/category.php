<?php
function getCategory($Category_id) {
    include('database.php');

    $query = "SELECT * FROM CATEGORY
        WHERE Category_ID = $Category_id";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_assoc($result);
    } else {
        return "Error for id";
    }
}

function getCategories() {
    include('database.php');

    $query = "SELECT * FROM CATEGORY";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error for all";
    }
}


?>