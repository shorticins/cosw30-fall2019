<?php
include("includes/header.php");
include("model/product.php");

$products = getProducts();
?>
<main class="col-md-10">
<?php
if(is_array($products)) {
    echo "<table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Product Vendor</th>
            <th>Product Image URL</th>
            <th>Edit / Delete</th>
        </tr>
    </thead>

    <tbody>";

    foreach($products as $product){
        echo "<tr><td>".$product['product_id']."</td>";
        echo "<td>".$product['product_name']."</td>";
        echo "<td>".$product['product_desc']."</td>";
        echo "<td>".$product['product_price']."</td>";
        echo "<td>".$product['product_vendor']."</td>";
        echo "<td>".$product['product_img_url']."
        <a href='/admin/product.php?id=".$product['product_id']."> Edit </a> 
         </td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo $products;
}
?>

</main>

<?php include("includes/footer.php"); ?>


