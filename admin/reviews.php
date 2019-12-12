<?php
session_start();
include("includes/header.php");
include("model/reviews.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {  
    if($_POST['action_type'] == "deleteReview"){
        include("model/database.php");
        $ratingId = $_POST['review_id'];
        $deleteQuery = "DELETE FROM RATING WHERE Rating_ID=$ratingId";
        $deleteResult = mysqli_query($connection, $deleteQuery);
        //if($deleteResult){echo "success!";} else{echo "failure";}
    }
}

$reviews = getReviews();
?>
<main class="col-md-10">
<?php
if(is_array($reviews)) {
    echo "<table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th>Rating Id</th>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Customer Id</th>
            <th>Customer First Name</th>
            <th>Customer Last Name</th>
            <th>Rating Score</th>
            <th>Rating Review</th>
            <th>Edit</th> 
        </tr>
    </thead>

    <tbody>";

    foreach($reviews as $review){
        echo "<tr><td>".$review['Rating_ID']."</td>";
        echo "<td>".$review['Product_ID']."</td>";
        echo "<td>".$review['product_name']."</td>";
        echo "<td>".$review['Customer_ID']."</td>";
        echo "<td>".$review['Customer_First_Name']."</td>";
        echo "<td>".$review['Customer_Last_Name']."</td>";
        echo "<td>".$review['Rating_Score']."</td>";
        echo "<td>".$review['Rating_Review']."</td>";
        echo '<form action="review.php" method="POST">
              <input type="hidden" name="review_id" value="' . $review['Rating_ID'] . '">
              <input type="hidden" name="action_type" value="editReview">
              <td><input type="submit" value="Edit"></td>
              </form>';

        // echo '<form action="reviews.php" method="POST">
        //       <input type="hidden" name="review_id" value="' . $review['Rating_ID'] . '">
        //       <input type="hidden" name="action_type" value="deleteReview">
        //       <td><input type="submit" value="Delete"></td>
        //       </form>';

        //tsuser does not have delete privilages
        /*echo '<form action="reviews.php" method="POST">
              <input type="hidden" name="review_id" value="' . $review['Rating_ID'] . '">
              <input type="hidden" name="action_type" value="deleteReview">
              <td><input type="submit" value="Delete"></td>
              </form>';*/
                        
    }
    echo "</tbody></table>";
} else {
    echo $products;
}
?>

</main>

<?php include("includes/footer.php"); ?>