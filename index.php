<?php
include('includes/header.php');
include('model/product.php');
?>

<main class="container">
    <h1>This will be the homepage of the class project website</h1>

    <p><a href="./styleguide">Temporary link to the styleguide</a></p>

    <h3>Example of Creating a List Using Database Data</h3>
    <?php
    // Example of how to use a database function found in the model folder
    $products = getProducts();

    if(is_array($products)) {
        echo "<ul>";
        foreach($products as $product) {
            echo "<li>".$product['product_name']."</li>";
        }
        echo "</ul>";
    } else {
        echo $products;
    }
    ?>
</main>

<?php include('includes/footer.php'); ?>