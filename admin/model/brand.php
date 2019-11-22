<?php
include('database.php');
// Returns all products in the PRODUCTS table
// as a multi-dimensional associative array
function getBrands() {
    include('database.php');

    $query = 'SELECT * FROM BRAND';
   $result = mysqli_query($connection, $query);

    if($result) {
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return "Error: getBrands()";
    }
}
/*

*/
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
function updateDB(){

include('database.php');/*
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
} 
//else {
    // redirect to crud.php
   // header('Location: brands.php');
    //exit;
//}
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand_name = $_POST['brand_name'];
    $brand_description  = $_POST['brand_description'];

    // Validate the inputs (check if they're empty)!!!!
    if(empty($brand_name) || empty($brand_description)) {
        echo '<p class="error">Error! One or more fields were left empty.</p>';
    } 
    else {
        // If they aren't empty, create and run your query
        //WHERE condition is user id = $_GET id
        // single quotes needed for SQL for strings only!
        $update_query = "UPDATE BRAND
                         SET Brand_Name = '$brand_name',
                            Brand_Desc = '$brand_description',
                        WHERE user_id = $id";
        $result = mysqli_query($connection, $update_query);
    }
        if($result) {
            echo '<p class="success">Brand information has been updated.</p>';
            header('Location: brand.php');
            exit;
        } 
        else {
            echo '<p class="error">Error updating brand information.</p>';
        }
    }

/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
$id = $_GET['id'];
$query = "SELECT * FROM BRAND WHERE user_id = $id";
// Run your query
$result = mysqli_query($connection, $query);
//PRINT_R($RESULT);
if($result) {
    
    $brands = mysqli_fetch_assoc($result);
    $brand_name = $brand['Brand_Name'];
    $brand_description  = $brand['Brand_Desc'];
} 
  else {
    echo "<p class=\"error\">Could not access database.</p>";
}
}