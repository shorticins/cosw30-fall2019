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
    $brands = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($brands);
} else {
    // Output an error
    echo "<p>Error</p>";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
//add brand information to db
if(isset($_POST['add'])) {    
    $brand_name = $_POST['brand_name'];
    $brand_description = $_POST['brand_description'];
        
    // check empty fields
    if(empty($brand_name) || empty($brand_description)) {                
        if(empty($brand_name)) {
            echo "<font color='red'>Brand name field is empty.</font><br/>";
        }
        
        if(empty($brand_description)) {
            echo "<font color='red'>Brand description field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='brands.php'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $add_query = "INSERT INTO BRAND(Brand_Name, Brand_Desc) VALUES('$brand_name','$brand_description'";
        $add_result = mysqli_query($connection, $add_query);
        $brands = mysqli_fetch_all($add_result, MYSQLI_ASSOC);
        print_r($result);
        //redirect to brands list
        // header("Location: brands.php");
    }
}
//update brand information in db
elseif(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $brand_id = $_POST['brand_id'];
    $brand_name=$_POST['brand_name'];
    $brand_description=$_POST['brand_description'];    
    
    // Check for empty fields
    if(empty($brand_id) || empty($brand_name) || empty($brand_description)) {            
        if(empty($brand_name)) {
            echo "<font color='red'>Brand name field is empty.</font><br/>";
        }
        
        if(empty($brand_description)) {
            echo "<font color='red'>Brand description field is empty.</font><br/>";
        }
            
    } else {    
        //Update Query
        $update_query = "UPDATE BRAND SET Brand_ID='$brand_id', Brand_Name='$brand_name', Brand_Desc='$brand_description' WHERE id=$id";
        $update_result = mysqli_query($connection, $update_query);
         $brands = mysqli_fetch_all($update_result, MYSQLI_ASSOC);
        print_r($result);
        
        
        //redirecting to brands list
        //header("Location: brands.php");
    }
}
}
else{
$id = $_GET['id'];
 $query = "SELECT * FROM BRAND WHERE id=$id";
//selecting data associated with this particular id
$get_result = mysqli_query($connection, $query);
 //print_r($result);
while($res = mysqli_fetch_array($get_result))
{
    $brand_name = $res['Brand_Name'];
    $brand_description = $res['Brand_Desc'];
}
}
?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Brand Information</h1>
        <p class="font-weight-bold">Please enter Brand Information.</p>
    </div>

    <form method="POST" action="brand.php">
     <div class="form-group">
            <label for="brand_id">Brand ID</label>
            <input type="number" min="0" class="form-control form-control-sm" id="brand_id" name="brand_id" value="<?php echo $id;?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="brand_name">Brand Name</label>
                <input type="text" class="form-control form-control-lg" id="brand_name" name="brand_name" value="<?php echo $brand_name;?>">
            </div>
            <div class="form-group col-md-6">
                <label for="brand_description">Brand Description</label>
                <input type="text" class="form-control form-control-lg" id="brand_description" name="brand_description" value="<?php echo $brand_description;?>">
            </div>
        </div>
        <div class="center">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        </div>
        <div class="text-center">
            <button class="btn-success" name="add" value="add" type="submit">Add</button>
        </div>

        <div class="text-center">
            <button class="btn-primary" name="update" value="update" type="submit">Update</button>
        </div>
        
        <div class="text-center">
            <button class="danger" name="delete" value="delete" type="submit">Delete</button>
        </div>
    </form>

</main>

<?php include("includes/footer.php");?>
