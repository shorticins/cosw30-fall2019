<?php include 'includes/header.php'; ?>
<?php include 'model/product.php'; ?>

<?php
<<<<<<< HEAD

//fetch products table from server
$rows = getProducts();
=======
if(isset($_GET['category_id'])){
    $rows = getProductsByCategory($_GET['category_id']);
} else {
    $rows = getProducts();
}
>>>>>>> c9bbd1537cfd592842bdc3c57d413e9c91d2e0b2

//count number of rows in products table
$totalRows = 0;
foreach ($rows as $row){
    $totalRows++;
}
<<<<<<< HEAD

//fetch product review count table from server
$reviewQueryArray = getQueryProductReviewCount();

=======
>>>>>>> c9bbd1537cfd592842bdc3c57d413e9c91d2e0b2
?>

<main class="container">

<?php
<<<<<<< HEAD

//outer for loop produces rows
$currentRow = 0;

for ($i = 0; $i < $totalRows; $i+= 3){

echo '<div class="row">';

//innner for loop produces columns
for ($j = 0; $j <= 2; $j++){
    $currentRow++;
    if($currentRow <= $totalRows){ //fencepost fix prevents out of index columns
    echo '<div class="four columns">
=======
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
>>>>>>> c9bbd1537cfd592842bdc3c57d413e9c91d2e0b2
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i + $j]['product_id'].'">
                    <img src="img/' . $rows[$i + $j]['Product_Image'] . '" title="' . $rows[$i + $j]['product_name'] .'" alt="' . $rows[$i + $j]['product_name'] .'" />
                </a>
            </div>
<<<<<<< HEAD
            <h4>' . $rows[$i + $j]['product_name'] .'</h4>
            <p>' . $rows[$i + $j]['product_desc'] .'</p>';
    echo '<p>Reviews (' . fetchProductReviewCount($rows[$i + $j]['product_id'], $reviewQueryArray) . ')</p>';
    echo '<a class="button" href="/product.php?id='.$rows[$i + $j]['product_id'].'">Add to Cart!</a>
        </div>';
    }
}

echo '</div>';

=======
            <h4><a href="product.php?id='.$rows[$i + 2]['product_id'].'">' . $rows[$i + 2]['product_name'] .'</h4> </a>
            <p>' . $rows[$i + 2]['product_desc'] .'</p>
            <p>Reviews (' . $total_reviewsi2 . ')</p>
            <a class="button" href="/product.php?id='.$rows[$i + 2]['product_id'].'">Add to Cart!</a>
        </div>
</div>
';
$i = $i + 3;
>>>>>>> c9bbd1537cfd592842bdc3c57d413e9c91d2e0b2
}
?>

</main>



<?php include 'includes/footer.php'; ?>
