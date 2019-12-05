<?php include("includes/header.php");
      include("model/database.php");
      include("model/brand.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
            if(empty($_POST['Brand_ID'])) {
                //Ele what do we do
            } else {
                $Brand_ID = trim($_POST['Brand_ID']);
            }      
        
            if(empty($_POST['Brand_Name'])) {
                $error_msg[1] = 'Brand Name field cannot be empty.';
            } else {
                $Brand_Name = trim($_POST['Brand_Name']);
            }
            
            if(empty($_POST['Brand_Desc'])) {
                $error_msg[2] = 'Brand Description field cannot be empty.';
            } else {
                $Brand_Desc = trim($_POST['Brand_Desc']);
            } 

        switch($_POST['submit']) {
            case "addBrand":
                $add_msg = [];
                if(empty($error_msg)) {
                    $addBrand = "INSERT INTO BRAND (Brand_Name, Brand_Desc) 
                                 VALUES ('$Brand_Name','$Brand_Desc')";     
                    if($result = mysqli_query($connection, $addBrand)) {
                        $add_msg[0] = 'Brand has been added to the database.';
                         header('Location: brands.php');
                        exit;
                    } else {
                        $add_msg[1] = 'There was an error adding brand to the database, please try again.';
                    }
                }
            ;
            case "update":
                $update_msg = [];
                if(empty($error_msg)) {
                    $updateBrand = "UPDATE BRAND
                                     SET Brand_Name = '$Brand_Name',
                                         Brand_Desc = '$Brand_Desc'
                                     WHERE Brand_ID = $Brand_ID";
                     // Run your query
                    
                    if($result = mysqli_query($connection, $updateBrand)) {
                        $update_msg[0] = 'Brand has been updated.';
                        header('Location: brands.php');
                        exit;
                    } else {
                        $update_msg[1] = 'There was an error updating brand, please try again.';
                    }
                }  
            ;
            case "delete":
                exit;
            ;
        }

    }
elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
    //QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
    //print $_GET["id"];
    $get_id = $_GET["id"];
    // Create your query
    $query = "SELECT * FROM BRAND 
              WHERE Brand_ID = $get_id";
    //print $query;
    // Run your query
    $result_update = mysqli_query($connection, $query);

    // Check if the database returned anything
    if($result_update) {
        $brands = mysqli_fetch_all($result_update, MYSQLI_ASSOC);    
        foreach ($brands as $brand){            
            $Brand_ID = $brand['Brand_ID'];
            $Brand_Name = $brand['Brand_Name'];
            $Brand_Desc = $brand['Brand_Desc'];
        }
    } 
     // else {
        // Output an error
        //echo "<p>GET server request Error</p>";
    //;}
}    

?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Brand Information</h1>
        <p class="font-weight-bold">Please enter Brand Information.</p>
    </div>

    <form method="POST" action="brand.php">
        <input type="hidden" id="Brand_ID" name="Brand_ID" value="<?php echo $Brand_ID; ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Brand_Name">Brand Name</label>
                <input type="text" class="form-control form-control-lg" id="Brand_Name" name="Brand_Name" value="<?php echo $Brand_Name; ?>">
                <?php if(isset($error_msg[1])) { echo '<p class="text-danger">' . $error_msg[1] . '</p>'; } ?>
            </div>
        </div>

        <div class="form-group">
            <label for="Brand_Desc">Brand Description</label>
            <input type="text" class="form-control form-control-lg" id="Brand_Desc" name="Brand_Desc" value="<?php echo $Brand_Desc; ?>">
            <?php if(isset($error_msg[2])) { echo '<p class="text-danger">' . $error_msg[2] . '</p>'; } ?>
        </div>

        <div class="text-center">
            <button class="btn-success" name="submit" value="addBrand" type="submit">Add</button>
        </div>

        <div class="text-center">
            <button class="btn-success" name="submit" value="update" type="submit">Update</button>
        </div>
        
        <div class="text-center">
            <button class="danger" name="submit" value="delete" type="submit">Delete</button>
        </div>
    </form>

</main>

<?php include("includes/footer.php"); ?>
