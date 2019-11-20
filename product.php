<?php include 'includes/header.php'; ?>
<?php include 'model/database.php'; ?>

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




$avg_rating_query = "SELECT AVG(Rating_Review) 
                FROM RATING
                WHERE Product_ID = $id";

$avg_rating_result = mysqli_query($connection, $avg_rating_query);    

if ($avg_rating_result) {
    $avg_rating_fetch = mysqli_fetch_assoc($avg_rating_result); 
    $average_rating = $avg_rating_fetch[0];
} else {
    echo "<h3 class=\"error--h\">Opps! Something went wrong... Try Again Later</h3>";
}




$total_reviews_query = "SELECT COUNT(*) 
                FROM RATING 
                WHERE Product_ID = $id";  

$total_reviews_result = mysqli_query($connection, $total_reviews_query);   

if ($total_reviews_result) {
    $total_reviews_fetch = mysqli_fetch_assoc($total_reviews_result); 
    $total_reviews = $total_reviews_fetch[0];
} else {
    echo "<h3 class=\"error--h\">Opps! Something went wrong... Try Again Later</h3>";
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
            <p title="Ratings">
                <?php 
                $black_stars = 5 - $average_rating;
                for ($i = 0; $i < $average_rating; $i ++) {
                    echo '<i class="far fa-star u-color--green"></i>';
                }
                for ($i = 0; $i < $black_stars; $i ++) {
                    echo '<i class="far fa-star"></i>';
                }
                
                ?>
                <a href="#reviews">Reviews</a> (<?php $total_reviews; ?>)
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
        <div class="twelve columns">
            <h4>Customer Reviews</h4>
            <p>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star u-color--green" title="Ratings"></i>
                <i class="far fa-star" title="Ratings"></i>
            </p>
            <p>Bacon ipsum dolor amet pancetta doner filet mignon picanha salami cow.
            Rump shankle jerky tongue pancetta, flank venison spare ribs hamburger meatball pork chuck.
            Sirloin meatloaf pig, capicola biltong boudin drumstick jerky shoulder picanha pancetta
            ribeye beef ball tip. Shank beef ribs ham hock short loin spare ribs drumstick andouille
            shoulder prosciutto strip steak brisket leberkas. Tail bacon cow flank.</p>
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
                <a href="">
                    <img src="https://images.pexels.com/photos/913134/pexels-photo-913134.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:82px; height:86px" title="Pupcorn Cake" alt="Pupcorn Cake"/>
                </a>
                <figcaption>Pupcorn Cake</figcaption>
            </figure>
        </div>
        <div class="four columns">
            <figure class="img--centered">
                <a href="">
                    <img src="https://images.pexels.com/photos/2957897/pexels-photo-2957897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:82px; height:86px" title="Choco-buns" alt="Choco-buns"/>
                </a>
                <figcaption>Choco-buns</figcaption>
            </figure>
        </div>
        <div class="four columns">
            <figure class="img--centered">
                <a href="">
                    <img src="https://images.pexels.com/photos/2525682/pexels-photo-2525682.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:82px; height:86px" title="Berry Tart Cake" alt="Berry Tart Cake"/>
                </a>
                <figcaption>Berry Tart Cake</figcaption>
            </figure>
        </div>

    </div>
</div>
</main>

<?php include 'includes/footer.php'; ?>