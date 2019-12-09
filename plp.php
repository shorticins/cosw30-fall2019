<?php include 'includes/header.php'; ?>
<?php include 'model/product.php'; ?>

<?php
if(isset($_GET['category_id'])){
    $rows = getProductsByCategory($_GET['category_id']);
} else {
    $rows = getProducts();
}

$totalRows = 0;
foreach ($rows as $row){
    $totalRows++;
}
?>

<main class="container">

<?php
$i = 0;
while($i < $totalRows){
    //Acquire total number of reviews for this product
    $total_reviewsi = getProductReviews($rows[$i]['product_id']);
    $total_reviewsi1 = getProductReviews($rows[$i +1]['product_id']);
    $total_reviewsi2 = getProductReviews($rows[$i + 2]['product_id']);

echo '
<!--Product List-->
     <div class="row"><!--First row-->
        <div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i]['product_id'].'">
                    <img src="img/' . $rows[$i]['Product_Image'] . '" title="' . $rows[$i]['product_name'] .'" alt="' . $rows[$i]['product_name'] .'" />
                </a>
            </div>
            <h4> <a href="product.php?id='.$rows[$i]['product_id'].'">' . $rows[$i]['product_name'] .'</h4> </a>
            <p>' . $rows[$i]['product_desc'] .'</p>
            <p>Reviews (' . $total_reviewsi . ')</p>
            <a class="button" href="/product.php?id='.$rows[$i]['product_id'].'">Add to Cart!</a>
        </div>
        <div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i + 1]['product_id'].'">
                    <img src="img/' . $rows[$i + 1]['Product_Image'] . '"  title="' . $rows[$i + 1]['product_name'] .'" alt="' . $rows[$i + 1]['product_name'] .'" />
                </a>
            </div>
            <h4><a href="product.php?id='.$rows[$i + 1]['product_id'].'">' . $rows[$i + 1]['product_name'] .'</h4> </a>
            <p>' . $rows[$i + 1]['product_desc'] .'</p>
            <p>Reviews (' . $total_reviewsi1 . ')</p>
            <a class="button" href="/product.php?id='.$rows[$i + 1]['product_id'].'">Add to Cart!</a>
        </div>
        <div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i + 2]['product_id'].'">
                    <img src="img/' . $rows[$i + 2]['Product_Image'] . '" title="' . $rows[$i + 2]['product_name'] .'" alt="' . $rows[$i + 2]['product_name'] .'" />
                </a>
            </div>
            <h4><a href="product.php?id='.$rows[$i + 2]['product_id'].'">' . $rows[$i + 2]['product_name'] .'</h4> </a>
            <p>' . $rows[$i + 2]['product_desc'] .'</p>
            <p>Reviews (' . $total_reviewsi2 . ')</p>
            <a class="button" href="/product.php?id='.$rows[$i + 2]['product_id'].'">Add to Cart!</a>
        </div>
</div>
';
$i = $i + 3;
}
?>

</main>



<?php include 'includes/footer.php'; ?>
