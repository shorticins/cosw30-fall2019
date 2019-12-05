<?php include 'includes/header.php'; ?>
<?php include 'model/database.php'; ?>
<?php include 'model/product.php'; ?>

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: plp.php');
    exit;
}

$select_query = "SELECT * FROM PRODUCT WHERE product_id = $id";

$result = mysqli_query($connection, $select_query);

if ($result) {
    $product = mysqli_fetch_assoc($result);
    //print_r($user);
    $product_name         = $product['product_name'];
    $product_desc         = $product['product_desc'];
    $Product_Ingredients  = $product['Product_Ingredients'];
    $Product_Price        = $product['Product_Price'];
    $Product_Image        = $product['Product_Image'];
    $Product_Rating       = $product['Product_Rating'];
} else {
    echo "<h3 class=\"error--h\">Opps! Something went wrong... Try Again Later</h3>";
}



$rating_query = "SELECT * FROM RATING WHERE Product_ID = $id";

$rating_result = mysqli_query($connection, $rating_query);

if ($rating_result) {
    $rating = mysqli_fetch_assoc($rating_result); 

    $Rating_ID      = $rating['Rating_ID'];
    $Product_ID     = $rating['Product_ID'];
    $Customer_ID    = $rating['Customer_ID'];
    $Rating_Score   = $rating['Rating_Score'];
    $Rating_Review  = $rating['Rating_Review '];
} else {
    echo "<h3 class=\"error--h\">Opps! Something went wrong... Try Again Later</h3>";
}




$avg_rating_query = "SELECT AVG(Rating_Score)
                AS AVERAGE
                FROM RATING
                WHERE Product_ID = $id";

$avg_rating_result = mysqli_query($connection, $avg_rating_query);    

if ($avg_rating_result) {
    $avg_rating_fetch = mysqli_fetch_assoc($avg_rating_result); 
    $average_rating = $avg_rating_fetch['AVERAGE'];   
} else {
    echo "<h3 class=\"error--h\">Opps! Something went wrong... Try Again Later</h3>";
}




$total_reviews_query = "SELECT COUNT(*)
                AS REVIEWS
                FROM RATING 
                WHERE Product_ID = $id";  

$total_reviews_result = mysqli_query($connection, $total_reviews_query);   

if ($total_reviews_result) {
    $total_reviews_fetch = mysqli_fetch_assoc($total_reviews_result); 
    $total_reviews = $total_reviews_fetch['REVIEWS'];
} else {
    echo "<h3 class=\"error--h\">Opps! Something went wrong... Try Again Later</h3>";
}



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




//Product Recommendations  
$recProd1 = recdProduct();
    $rec_id1     = $recProd1[0]['product_id'];
    $rec_name1   = $recProd1[0]['product_name'];
    $rec_img1    = $recProd1[0]['Product_Image'];
$recProd2 = recdProduct();
    $rec_id2     = $recProd2[0]['product_id'];
    $rec_name2   = $recProd2[0]['product_name'];
    $rec_img2    = $recProd2[0]['Product_Image'];
$recProd3 = recdProduct();
    $rec_id3     = $recProd3[0]['product_id'];
    $rec_name3   = $recProd3[0]['product_name'];
    $rec_img3    = $recProd3[0]['Product_Image'];

?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
             $first_name = $_POST['first_name'];
             $last_name = $_POST['last_name'];
             $email = $_POST['email'];
             $password = $_POST['password'];    
        
             $insertQuery = "INSERT INTO USER_MORALES (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";
                    
             $insertResult = mysqli_query($connection, $insertQuery);
}

?>

<main class="container">
<!--Internal Product Navigation Links-->
<div class="ten columns offset-by-one">
    <div class="row">
        <div class="twelve columns">
            <nav>
                <ul class="breadcrumb" >
                    <li><a href="">Home</a></li>
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
                <img class="img__main" src="<?php echo $Product_Image; ?>" title="<?php echo $product_name; ?>" alt="<?php echo $product_name; ?>">
            </figure>
            <!--Thumbnail Images-->
            <div class="img__small img--centered">
                <a href=""><i class="fas fa-circle fa-lg u-color--black"></i></a>
                <a href=""><i class="far fa-circle fa-lg u-color--black"></i></a>
                <a href=""><i class="far fa-circle fa-lg u-color--black"></i></a>
            </div>
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
                <label for="fname">First Name: </label>
                    <input class="u-full-width" type="text" name="fname" id="fname" value="">
                <label for="lname">Last Name: </label>
                    <input class="u-full-width" type="text" name="lname" id="lname" value=""> <br>
                <label for="custRev">Customer Review: </label>
                    <textarea class="u-full-width" name="custRev" id="custRev" value=""
                         placeholder="Write your review here..." max="500"></textarea>
                <a class="btn btn--green btn--small btn--block" href="">Submit</a>
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
                    $custReviews[$i]['Customer_First_Name'],
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
        <div class="four columns">
            <figure class="img--centered">
                <a href="product.php?id=<?php echo $rec_id1; ?>">
                    <img src="<?php echo $rec_img1; ?>" style="width:82px; height:86px" title="<?php echo $rec_name1; ?>" alt="<?php echo $rec_name1; ?>"/>
                </a>
                <figcaption><?php echo $rec_name1; ?></figcaption>
            </figure>
        </div>
        <div class="four columns">
            <figure class="img--centered">
                <a href="product.php?id=<?php echo $rec_id2; ?>">
                    <img src="<?php echo $rec_img2; ?>" style="width:82px; height:86px" title="<?php echo $rec_name2; ?>" alt="<?php echo $rec_name2; ?>"/>
                </a>
                <figcaption><?php echo $rec_name2; ?></figcaption>
            </figure>
        </div>
        <div class="four columns">
            <figure class="img--centered">
                <a href="product.php?id=<?php echo $rec_id3; ?>">
                    <img src="<?php echo $rec_img3; ?>" style="width:82px; height:86px" title="<?php echo $rec_name3; ?>" alt="<?php echo $rec_name3; ?>"/>
                </a>
                <figcaption><?php echo $rec_name3; ?></figcaption>
            </figure>
        </div>

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