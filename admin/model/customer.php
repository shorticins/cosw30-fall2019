<?php
function getCustomer($Customer_ID) {
    include('database.php');

    $query = "SELECT * FROM CUSTOMER
        WHERE Customer_ID = $Customer_ID";
    $result = mysqli_query($connection, $query);

    if($result) {
        return mysqli_fetch_assoc($result);
    } else {
        return "Error for id";
    }
}

function getCustomers() {
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