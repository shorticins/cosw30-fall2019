<?php include("includes/header.php")?>
<?php include('model/database.php'); ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if($_POST['action_type'] == "editReview"){

        $ratingId = $_POST['review_id'];

        $selectQuery = "SELECT * FROM RATING WHERE Rating_ID = $ratingId";
                    
        $selectResult = mysqli_query($connection, $selectQuery);

        //if($selectResult){ echo "TEST SUCCESS";} else{ echo "FAIL";}

        $reviewArray = mysqli_fetch_assoc($selectResult);

        $productId = $reviewArray['Product_ID'];
        $customerId = $reviewArray['Customer_ID'];
        $ratingScore = $reviewArray['Rating_Score'];
        $ratingReview = $reviewArray['Rating_Review'];
    }

    if($_POST['action_type'] == "submitReviewEdit"){
        $ratingId = $_POST['ratingId'];
        $productId = $_POST['productId'];
        $customerId = $_POST['customerId'];
        $ratingScore = $_POST['ratingScore'];    
        $ratingReview = $_POST['ratingReview'];

        $updateQuery = "UPDATE RATING SET
                                Product_ID = '$productId',
                                Customer_ID = '$customerId',
                                Rating_Score = '$ratingScore',
                                Rating_Review = '$ratingReview'
                                WHERE Rating_ID = $ratingId";
                    
        mysqli_query($connection, $updateQuery);
             
        header('Location: reviews.php');
        exit;
    }
}
else{
    header('Location: reviews.php');
    exit;
}

?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Review Form</h1>
        <p class="font-weight-bold">All fields are required.</p>
    </div>

    <form method="POST" action="review.php">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="product_name">Rating ID</label>
                <input type="text" class="form-control form-control-lg" id="ratingId" name="ratingId" value="<?php echo $ratingId ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="product_price">Product ID</label>
                <input type="text" min="0" class="form-control form-control-lg" id="productId" name="productId" value="<?php echo $productId ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="product_price">Customer ID</label>
                <input type="text" min="0" class="form-control form-control-lg" id="customerId" name="customerId" value="<?php echo $customerId ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="product_image">Rating Score</label>
            <input type="text" class="form-control form-control-lg" id="ratingScore" name="ratingScore" value="<?php echo $ratingScore ?>" required>
        </div>
        <div class="form-group">
            <label for="product_description">Rating Review</label>
            <input type="text" class="form-control form-control-lg" id="ratingReview" name="ratingReview" value="<?php echo $ratingReview ?>" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="action_type" value="submitReviewEdit">
        </div>
        <div class="text-center">
            <button class="btn-success" type="submit">Submit</button>
        </div>
    </form>
</main>

<?php include("includes/footer.php");?>
