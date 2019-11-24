<?php include("includes/header.php");
      include('model/database.php');
      include('model/brand.php');

      
//QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE

// Create your query
$query = 'SELECT * FROM BRAND';

// Run your query
$result = mysqli_query($connection, $query);

// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($rows);
} else {
    // Output an error
    echo "<p>Error</p>";
}

updateDB();

?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Brand Information</h1>
        <p class="font-weight-bold">Please enter Brand Information.</p>
    </div>

    <form method="POST" action="brand.php">
     <div class="form-group">
            <label for="brand_id">Brand ID</label>
            <input type="number" min="0" class="form-control form-control-sm" id="brand_id" name="brand_id" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="brand_name">Brand Name</label>
                <input type="text" class="form-control form-control-lg" id="brand_name" name="brand_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="brand_description">Brand Description</label>
                <input type="text" class="form-control form-control-lg" id="brand_description" name="brand_description" required>
            </div>
        </div>

        <div class="text-center">
            <button class="btn-success" name="update" type="submit">Update</button>
        </div>
    </form>

<p><a href='brands.php'>Return to Brand list.</a></p>

</main>

<?php include("includes/footer.php");?>
