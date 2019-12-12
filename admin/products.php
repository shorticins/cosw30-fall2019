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
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>";

        foreach($products as $product){
            $product_id = $product['product_id'];
            $product_name = $product['product_name'];
            $product_desc = $product['product_desc'];
            $product_price = $product['Product_Price'];
            $product_vendor = $product['product_vendor'];
            $product_image = $product['Product_Image'];

            echo "<tr>";
            echo "<td>$product_id</td>";
            echo "<td>$product_name</td>";
            echo "<td>$product_desc</td>";
            echo "<td>$$product_price</td>";
            echo "<td>$product_vendor</td>";
            echo "<td>$product_image</td>";
            echo "<td><a href='product.php?id=$product_id'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
        
} else {
    echo $products;
}
?>

</main>

<?php include("includes/footer.php"); ?> 