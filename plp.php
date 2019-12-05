<?php include 'includes/header.php'; ?>
<?php include 'model/product.php'; ?>

<?php

$rows = getProducts();

$totalRows = 0;
foreach ($rows as $row){
    $totalRows++;
}


?>

<main class="container">

<?php
$i = 0;

while($i < $totalRows){
echo '
<!--Product List-->
     <div class="row"><!--First row-->
        <div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i]['product_id'].'">
                    <img src="img/' . $rows[$i]['Product_Image'] . '" title="' . $rows[$i]['product_name'] .'" alt="' . $rows[$i]['product_name'] .'" />
                </a>
            </div>
            <h4>' . $rows[$i]['product_name'] .'</h4>
            <p>' . $rows[$i]['product_desc'] .'</p>
            <p>Reviews ' . $rows[$i]['Product_Rating'] . '</p>
            <a class="button" href="/product.php?id='.$rows[$i]['product_id'].'">Add to Cart!</a>
        </div>

        <div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i + 1]['product_id'].'">
                    <img src="img/' . $rows[$i + 1]['Product_Image'] . '"  title="' . $rows[$i + 1]['product_name'] .'" alt="' . $rows[$i + 1]['product_name'] .'" />
                </a>
            </div>
            <h4>' . $rows[$i + 1]['product_name'] .'</h4>
            <p>' . $rows[$i + 1]['product_desc'] .'</p>
            <p>Reviews' . $rows[$i + 1]['Product_Rating'] . '</p>
            <a class="button" href="/product.php?id='.$rows[$i + 1]['product_id'].'">Add to Cart!</a>
        </div>

        <div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i + 2]['product_id'].'">
                    <img src="img/' . $rows[$i + 2]['Product_Image'] . '" title="' . $rows[$i + 2]['product_name'] .'" alt="' . $rows[$i + 2]['product_name'] .'" />
                </a>
            </div>
            <h4>' . $rows[$i + 2]['product_name'] .'</h4>
            <p>' . $rows[$i + 2]['product_desc'] .'</p>
            <p>Reviews' . $rows[$i + 2]['Product_Rating'] . '</p>
            <a class="button" href="/product.php?id='.$rows[$i + 2]['product_id'].'">Add to Cart!</a>
        </div>
</div>
';
$i = $i + 3;
}
?>

</main>



<?php include 'includes/footer.php'; ?>
