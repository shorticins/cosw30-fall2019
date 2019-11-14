<?php
function getCategory($Category_id) {
    include('database.php');

    $query = "SELECT * FROM CATEGORY;
        WHERE Category_ID = $Category_id";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error";
    }
}

function getCategorys() {
    include('database.php');

    $query = "SELECT * FROM CATEGORY";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error";
    }
}


?>