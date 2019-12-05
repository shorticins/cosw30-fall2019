<?php include("includes/header.php");
      include("model/database.php");
      include("model/category.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
        if(empty($_POST['Category_ID'])) {
                $error_msg[0] = 'Category ID field cannot be empty.';
            } else {
                $Category_ID = trim($_POST['Category_ID']);
            }

            if(empty($_POST['Category_Name'])) {
                $error_msg[1] = 'Category Name field cannot be empty.';
            } else {
                $Category_Name = trim($_POST['Category_Name']);
            }
            
            if(empty($_POST['Category_Desc'])) {
                $error_msg[2] = 'Category Description field cannot be empty.';
            } else {
                $Category_Desc = trim($_POST['Category_Desc']);
            } 

        switch($_POST['submit']) {
            case "addCategory":
                $add_msg = [];
                if(empty($error_msg)) {
                    $addBrand = "INSERT INTO Category (Category_ID, Category_Name, Category_Desc) 
                                 VALUES ('$Category_ID','$Category_Name','$Category_Desc')";
                    if($result = mysqli_query($connection, $addCategory)) {
                        $add_msg[0] = 'Category has been added to the database.';
                    } else {
                        $add_msg[1] = 'There was an error adding category to the database, please try again.';
                    }
                }
            ;
            case "update":
                $update_msg = [];
                if(empty($error_msg)) {
                    $updateCategory = "UPDATE Category
                                     SET Category_ID = '$Category_ID',
                                         Category_Name = '$Category_Name',
                                         Category_Desc = '$Category_Desc',
                                     WHERE id = $id";
                    if($result = mysqli_query($connection, $updateCategory)) {
                        $update_msg[0] = 'Category has been updated.';
                        header('Location: category.php');
                        exit;
                    } else {
                        $update_msg[1] = 'There was an error updating category, please try again.';
                    }
                }  
            ;
            case "delete":
            ;
        }
    }

$query = 'SELECT * FROM Category';

$result = mysqli_query($connection, $query);

?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Category Information</h1>
        <p class="font-weight-bold">Please enter Category Information.</p>
    </div>

    <form method="POST" action="category.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Category_ID">Category ID</label>
                <input type="number" min="0" class="form-control form-control-lg" id="Category_ID" name="Category_ID" value="<?php echo $Category_ID; ?>">
                <?php if(isset($error_msg[0])) { echo '<p class="text-danger">' . $error_msg[0] . '</p>'; } ?>
            </div>
            <div class="form-group col-md-6">
                <label for="Category_Name">Category Name</label>
                <input type="text" class="form-control form-control-lg" id="Category_Name" name="Category_Name" value="<?php echo $Category_Name; ?>">
                <?php if(isset($error_msg[1])) { echo '<p class="text-danger">' . $error_msg[1] . '</p>'; } ?>
            </div>
        </div>

        <div class="form-group">
            <label for="Category_Desc">Category Description</label>
            <input type="text" class="form-control form-control-lg" id="Category_Desc" name="Category_Desc" value="<?php echo $Category_Desc; ?>">
            <?php if(isset($error_msg[2])) { echo '<p class="text-danger">' . $error_msg[2] . '</p>'; } ?>
        </div>

        <div class="text-center">
            <button class="btn-success" name="submit" value="addCategory" type="submit">Add</button>
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
