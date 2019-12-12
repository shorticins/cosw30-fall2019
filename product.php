<?php 
session_start();
include 'includes/header.php'; ?>
<?php include 'model/database.php'; ?>
<?php include 'model/product.php'; ?>

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: plp.php');
    exit;
}


//Acquire all product information for this product
$product = getProduct($id);
    $product_name         = $product['product_name'];
    $product_desc         = $product['product_desc'];
    $Product_Ingredients  = $product['Product_Ingredients'];
    $Product_Price        = $product['Product_Price'];
    $Product_Image        = $product['Product_Image'];
    $Product_Rating       = $product['Product_Rating'];


//Acquire all rating information for this product
$rating = getRating($id);
    $Rating_ID      = $rating['Rating_ID'];
    $Rating_Score   = $rating['Rating_Score'];
    $Rating_Review  = $rating['Rating_Review '];
    // $Product_ID     = $rating['Product_ID'];
    // $Customer_ID    = $rating['Customer_ID'];

//Acquire total number of reviews for this product
$total_reviews = getProductReviews($id);

//Acquire average rating for this product
$average_rating = getAvgRating($id);

//Product Reviews
$custReviews = getReviews($id);
    $totalRows = 0;
    foreach ($custReviews as $row){
        $totalRows++;
    }


//Output Appropriate star reviews
function stars($rating){
    $rating = floor($rating);
    $black_stars = 5 - $rating;
    for ($i = 0; $i < $rating; $i ++) {
        echo '<i class="far fa-star u-color--green"></i>';
    }
    for ($i = 0; $i < $black_stars; $i ++) {
        echo '<i class="far fa-star"></i>';
    }
}

//Product Reviews
$custReviews = getReviews($id);
    $totalRows = 0;
    foreach ($custReviews as $row){
        $totalRows++;
    }

//Product Recommendations  
$recProducts = recdProduct(3);


?>



<main class="container">
<!--Internal Product Navigation Links-->
<div class="ten columns offset-by-one">
    <div class="row">
        <div class="twelve columns">
            <nav>
                <ul class="breadcrumb" >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Dogs</a></li>
                    <li><a href="">Food</a></li>
                    <li><a class="active" href="">Desserts</a></li>
                </ul>
            </nav>
        </div>
    </div>



    <!--Product Name-->
    <div class="row">
        <div class="twelve columns">
            <h2><?php echo $product_name; ?></h2>
        </div>
    </div>



    <!--Product Image and purchasing information-->
    <div class="row">
        <div class="seven columns">
            <figure class="img--centered">
                <img class="img__main" src="img/<?php echo $Product_Image; ?>" title="<?php echo $product_name; ?>" alt="<?php echo $product_name; ?>">
            </figure>
            <!--Thumbnail Images-->
            <!-- <div class="img__small img--centered">
                <a href=""><i class="fas fa-circle fa-lg u-color--black"></i></a>
                <a href=""><i class="far fa-circle fa-lg u-color--black"></i></a>
                <a href=""><i class="far fa-circle fa-lg u-color--black"></i></a>
            </div> -->
        </div>

        <div class="five columns div__main">
            <p title="<?php echo number_format($average_rating, 1) . " out of 5.0"; ?>">
                <?php 
                    stars($average_rating);
                ?>
                <a href="#reviews">Reviews</a> (<?php echo $total_reviews; ?>)
            </p>

            <p>Price: $<?php echo $Product_Price; ?></p>

            <form action="" method="POST">
                <label for="quantity">Quantity:

                    <select id="quantity" name="quantity" size="1" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </label>
                <a class="btn btn--green"><i class="fas fa-shopping-cart u-color--white icon__social"></i>Add to Cart</a>
            </form>

            <!--social media links-->
                <i class="fas fa-share-alt fa-lg u-color--green icon__social" title="Share"></i>
                <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter fa-lg u-color--green icon__social" title="Twitter"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-lg u-color--green icon__social" title="Facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-lg u-color--green icon__social" title="Instagram"></i></a>
       </div>
    </div>



    <!--Product Description-->
    <div class="row">
        <div class="twelve columns">
            <h4>Product Description</h4>
            <p><?php echo $product_desc; ?></p>
        </div>
    </div>



    <!--Product Ingredients-->
    <div class="row">
        <div class="twelve columns">
            <h4>Ingredients</h4>
            <p><?php echo $Product_Ingredients; ?></p>
        </div>
    </div>



    <!--Customer Reviews-->
    <div class="row" id="reviews">
        <div class="six columns">
            <h4>Customer Reviews</h4>
            <p class="fa-lg" title="<?php echo number_format($average_rating, 1) . " out of 5.0"; ?>">
                <?php stars($average_rating);?>
                <?php echo number_format($average_rating, 1) . " out of 5.0"; ?>
            </p>
            <p><?php echo $total_reviews; ?> customer review(s)</p>
        </div>

        <div class="six columns">
            <a class="btn btn--green" onclick="showRevForm()">Add a Review</a>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <form id="addRevForm" class="form__hide" action="product.php?id=<?php echo $id; ?>" method="POST">
                <label for="review_first_name">First Name: </label>
                    <input class="u-full-width" type="text" name="review_first_name" id="review_first_name">
                    
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['formName'] == "formValue") {
                                    if(empty($review_first_name)) {
                                        echo '<p class="alert--error alert-warning">First Name must be entered</p>';
                                    } 
                                }
                            } 
                        ?>

                <label for="review_last_name">Last Name: </label>
                    <input class="u-full-width" type="text" name="review_last_name" id="review_last_name">

                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['formName'] == "formValue") {
                                    if(empty($review_last_name)) {
                                        echo '<p class="alert--error alert-warning">Last Name must be entered</p>';
                                    } 
                                }
                            } 
                        ?>

                <label for="review_rating">Rating: </label>
                    <input class="u-full-width" type="number" name="review_rating" id="review_rating" min="1" max="5" 
                        placeholder="Rating score scale is 1 to 5"> 

                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['formName'] == "formValue") {
                                    if(empty($review_rating)) {
                                        echo '<p class="alert--error alert-warning">Rating must be selected</p>';
                                    } 
                                }
                            } 
                        ?>

                <label for="review_custRev">Customer Review: </label>
                    <textarea class="u-full-width" name="review_custRev" id="review_custRev"
                         placeholder="Write your review here..." max="500"></textarea>

                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if($_POST['formName'] == "formValue") {
                                    if(empty($review_custRev)) {
                                        echo '<p class="alert--error alert-warning">Review comment must be entered</p>';
                                    } 
                                }
                            } 
                        ?>

                <input type="hidden" name="formName" value="formValue"/>
                <button class="btn btn--green btn--small btn--block btn--post">SUBMIT</button>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="twelve columns">
            <?php
            $i = 0;
            while($i < $totalRows){
                echo '
                <p title=" '. number_format($custReviews[$i]['Rating_Score'], 1) .' out of 5.0"> '. 
                    stars($custReviews[$i]['Rating_Score']), 
                    $custReviews[$i]['Customer_First_Name'] . ' ',
                    $custReviews[$i]['Customer_Last_Name']
                        .' <br> &mdash; ' .
                    $custReviews[$i]['Rating_Review'] .'
                </p> ';
                $i++;
                }
            ?>
        </div>
    </div>

    


    <!--Product Recommendation title-->
    <div class="row">
        <div class="twelve columns">
            <h4>More Treats on this Street</h4>
        </div>
    </div>


    <!--Product Recommendation images and links-->
    <div class="row">
        <?php foreach($recProducts as $recProduct): ?>
        <div class="four columns">
            <figure class="img--centered">
                <a href="product.php?id=<?php echo $recProduct['product_id']; ?>">
                    <img src="img/<?php echo $recProduct['Product_Image']; ?>" style="width:82px; height:86px" alt="<?php echo $recProduct['product_name']; ?>"/>
                </a>
                <figcaption><?php echo $recProduct['product_name']; ?></figcaption>
            </figure>
        </div>
        <?php endforeach; ?>

    </div>
</div>
</main>

<script>
    var revForm = document.getElementById("addRevForm");
    
    //Function sets Review Form to Display form upon 
    //clicking "Add a Review" button
    function showRevForm() {
        revForm.style.display = "block";
    }
    
</script>

<?php include 'includes/footer.php'; ?>