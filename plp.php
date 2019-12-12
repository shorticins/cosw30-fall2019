<?php include 'includes/header.php'; ?>
<?php include 'model/product.php'; ?>

<?php

//fetch products table from server
if(isset($_GET['category_id'])){	
    $rows = getProductsByCategory($_GET['category_id']);	
} else {	
    $rows = getProducts();	
}

//count number of rows in products table
$totalRows = 0;
foreach ($rows as $row){
    $totalRows++;
}

//fetch product review count table from server
$reviewQueryArray = getQueryProductReviewCount();

?>

<main class="container">

<?php
//outer for loop produces rows
$currentRow = 0;

for ($i = 0; $i < $totalRows; $i+= 3){

echo '<div class="row">';

//innner for loop produces columns
for ($j = 0; $j <= 2; $j++){
    $currentRow++;
    if($currentRow <= $totalRows){ //fencepost fix prevents out of index columns
    echo '<div class="four columns">
            <div class="product-list__img">
                <a href="product.php?id='.$rows[$i + $j]['product_id'].'">
                    <img src="img/' . $rows[$i + $j]['Product_Image'] . '" title="' . $rows[$i + $j]['product_name'] .'" alt="' . $rows[$i + $j]['product_name'] .'" />
                </a>
            </div>
            <h4>' . $rows[$i + $j]['product_name'] .'</h4>
            <p>' . $rows[$i + $j]['product_desc'] .'</p>';
    echo '<p>Reviews (' . fetchProductReviewCount($rows[$i + $j]['product_id'], $reviewQueryArray) . ')</p>';
    echo '<a class="button" href="/product.php?id='.$rows[$i + $j]['product_id'].'">Add to Cart!</a>
        </div>';
    }
}

echo '</div>';
}
?>

</main>



<?php include 'includes/footer.php'; ?>
