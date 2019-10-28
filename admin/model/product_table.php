<?php
include("../includes/header.php");
    ?>
    <?php
// Accepts the product_id
// Returns a single product as an associative array
 /*function getProduct($product_id) {
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
    */?>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col"> Product Id </th>
            <th scope="col"> Product Name </th>
            <th scope="col"> Product Description </th>
            <th scope="col"> Product Price </th>
            <th scope="col"> Product Vendor </th>
            <th scope="col"> Product Image URL </th>

        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
        </tr>
        <tr>
            <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
        </tr>
        <tr>
            <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
         </tr>
     </tbody>


</table>

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
        echo "<tr>";
        foreach($products as $product){
            echo "<td>".$product['product_name']."</td>";
        }
        echo "</tr>";
    } else {
        echo $products;
    }
?>
<?php


include("includes/footer.php");
?>