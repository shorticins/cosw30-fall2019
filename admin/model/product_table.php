<?php
include("../includes/header.php");
?>

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

$products = getProducts();
 include('database.php');

    if(is_array($products)) {
        echo "
        <main class='col-md-8 m-1 col-sm-12'>
    <div class='col align-content-center'>
        <table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col'> Product Id </th>
            <th scope='col'> Product Name </th>
            <th scope='col'> Product Description </th>
            <th scope='col'> Product Price </th>
            <th scope='col'> Product Vendor </th>
            <th scope='col'> Product Image URL </th>
            <th scope='col'> Edit/Delete </th>
        </tr>
    </thead>

    <tbody>";
        foreach($products as $product){
            echo "<tr><td>".$product['product_id']."</td>";
            echo "<td>".$product['product_name']."</td>";
            echo "<td>".$product['product_desc']."</td>";
            echo "<td>".$product['product_price']."</td>";
            echo "<td>".$product['product_vendor']."</td>";
            echo "<td>".$product['product_img_url']."<button> Edit </button> <button> Delete </button> </td></tr>";

        }
        echo "</tbody></table></div></main>";
    } else {
        echo $products;
    }
?>


<?php
include("../includes/footer.php");
?>


