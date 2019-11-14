<?php include 'includes/header.php'; ?>
<?php include 'model/product.php'; ?>

<?php

$rows = getProducts();

$totalRows = 0;
foreach ($rows as $row){
    $totalRows++;
}

//echo $totalRows;

//echo $rows[0]['product_name'];

?>

<main class="container">

<?php
$i = 0;
while($i < $totalRows){
echo '
<!--Product List-->
    <div class="row"> <!--First row-->
        <div class="four columns">
                <a href="">
                    <img src="' . $rows[$i]['Product_Image'] . '" title="' . $rows[$i]['product_name'] .'" alt="' . $rows[$i]['product_name'] .'" height="350" width="350"/>
                </a>
                <h4>' . $rows[$i]['product_name'] .'</h4>
                <p>' . $rows[$i]['product_desc'] .'</p>
                <p>Reviews' . $rows[$i][Product_Rating] . '</p>
<button onclick="window.location.href = \'#\';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="' . $rows[$i + 1]['Product_Image'] . '"  title="' . $rows[$i + 1]['product_name'] .'" alt="' . $rows[$i + 1]['product_name'] .'" height="350" width="350"/>
                </a>
                <h4>' . $rows[$i + 1]['product_name'] .'</h4>
                <p>' . $rows[$i + 1]['product_desc'] .'</p>
                <p>Reviews' . $rows[$i + 1][Product_Rating] . '</p>
                <button onclick="window.location.href = \'#\';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="' . $rows[$i + 2]['Product_Image'] . '" title="' . $rows[$i + 2]['product_name'] .'" alt="' . $rows[$i + 2]['product_name'] .'" height="350" width="350"/>
                </a>
                <h4>' . $rows[$i + 2]['product_name'] .'</h4>
                <p>' . $rows[$i + 2]['product_desc'] .'</p>
                <p>Reviews' . $rows[$i + 2][Product_Rating] . '</p>
                <button onclick="window.location.href = \'#\';">Add to Cart!</button>
        </div>
</div>
';
$i = $i + 3;
}
?>

</main>

<?php /*
    <div class="row"> <!--Second row-->
        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg=" title="Beef & rice" alt="Beef & rice" height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
<button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg="  title="Beef & rice" alt="Beef & rice" height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
                <button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg=" title="Beef & rice" alt="Beef & rice" height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
                <button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>
</div>

    <div class="row"> <!--Third row-->
        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg=" title="Beef & rice" alt="Beef & rice" height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
<button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg="  title="Beef & rice" alt="Beef & rice"height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
                <button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg=" title="Beef & rice" alt="Beef & rice"height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
                <button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>
</div>

    <div class="row"> <!--Fourth row-->
        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg=" title="Beef & rice" alt="Beef & rice"height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
<button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg="  title="Beef & rice" alt="Beef & rice"height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
                <button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>

        <div class="four columns">
                <a href="">
                    <img src="https://media.istockphoto.com/photos/dog-food-in-the-bowl-and-bone-shaped-biscuits-picture-id678257014?k=6&m=678257014&s=612x612&w=0&h=Fw3Lnmn1BocKNEJQHbXQg4ch29Prt9ZAf3t26KpQtFg=" title="Beef & rice" alt="Beef & rice"height="350" width="350"/>
                </a>
                <h4>Beef & rice</h4>
                <p>Reviews</p>
                <button onclick="window.location.href = '#';">Add to Cart!</button>
        </div>
</div>

*/?>

<?php include 'includes/footer.php'; ?>
