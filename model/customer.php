<?php
function getCustomer($Customer_id) {
    include('database.php');

    $query = "SELECT * FROM CUSTOMER
        WHERE Customer_ID = $Customer_id";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_assoc($result);
    } else {
        return "Error for id";
    }
}

function getCustomer() {
    include('database.php');

    $query = "SELECT * FROM CUSTOMER";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error for all";
    }
}


?>