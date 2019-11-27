<?php include("includes/header.php");
      include("model/database.php");
      include("model/brand.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
        if(empty($_POST['Brand_ID'])) {
                $error_msg[0] = 'Brand ID field cannot be empty.';
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
                    $addBrand = "INSERT INTO BRAND (Brand_ID, Brand_Name, Brand_Desc) 
                                 VALUES ('$Brand_ID','$Brand_Name','$Brand_Desc')";
                    if($result = mysqli_query($connection, $addBrand)) {
                        $add_msg[0] = 'Brand has been added to the database.';
                    } else {
                        $add_msg[1] = 'There was an error adding brand to the database, please try again.';
                    }
                }
            ;
            case "update":
                $update_msg = [];
                if(empty($error_msg)) {
                    $updateBrand = "UPDATE BRAND
                                     SET Brand_ID = '$Brand_ID',
                                         Brand_Name = '$Brand_Name',
                                         Brand_Desc = '$Brand_Desc',
                                     WHERE id = $id";
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
            ;
        }
    }


//QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE

// Create your query
$query = 'SELECT * FROM BRAND';

// Run your query
$result = mysqli_query($connection, $query);

// // Check if the database returned anything
// if($result) {
//     $brands = mysqli_fetch_all($result, MYSQLI_ASSOC);
//     //print_r($rows);
// } else {
//     // Output an error
//     echo "<p>Error</p>";
// }

//add brand informtation to db
// if(isset($_POST['add'])) {    
//     $Brand_ID = $_POST['Brand_ID'];
//     $Brand_Name = $_POST['Brand_Name'];
//     $Brand_Desc = $_POST['Brand_Desc'];    
        
//     // check empty fields
//     if(empty($Brand_ID) || empty($Brand_Name) || empty($Brand_Desc)) {                
//         if(empty($Brand_ID)) {
//             echo "<font color='red'>ID field is empty.</font><br/>";
//         }
        
//         if(empty($Brand_Name)) {
//             echo "<font color='red'>Brand name field is empty.</font><br/>";
//         }
        
//         if(empty($Brand_Desc)) {
//             echo "<font color='red'>Brand description field is empty.</font><br/>";
//         }
        
//         //link to the previous page
//         echo "<br/><a href='brands.php'>Go Back</a>";
//     } else { 
//         // if all the fields are filled (not empty)             
//         //insert data to database
//         $result = mysqli_query($mysqli, "INSERT INTO BRAND(Brand_ID, Brand_Name, Brand_Desc) VALUES('$Brand_ID','$Brand_Name','$Brand_Desc')");
        
//         //redirect to brands list
//          header("Location: brands.php");
//     }
// }
// //update brand information in db
// if(isset($_POST['update']))
// {    
//     $id = $_POST['id'];
//     $Brand_ID = $_POST['Brand_ID'];
//     $Brand_Name = $_POST['Brand_Name'];
//     $Brand_Desc = $_POST['Brand_Desc'];    
    
//     // Check for empty fields
//     if(empty($Brand_ID) || empty($Brand_Name) || empty($Brand_Desc)) {            
//         if(empty($Brand_Name)) {
//             echo "<font color='red'>Brand name field is empty.</font><br/>";
//         }
        
//         if(empty($Brand_Desc)) {
//             echo "<font color='red'>Brand description field is empty.</font><br/>";
//         }
            
//     } else {    
//         //Update Query
//         $query = "UPDATE BRAND SET Brand_ID='$Brand_ID' Brand_Name='$Brand_Name', Brand_Desc='$Brand_Desc' WHERE id=$id";
//         $result = mysqli_query($connection, $query);
//        // print_r($result);
        
        
//         //redirecting to brands list
//         header("Location: brands.php");
//     }
// }
// $id = $_GET['id'];
 
// //selecting data associated with this particular id
// $result = mysqli_query($connection, "SELECT * FROM BRAND WHERE id=$id");
//  print_r($result);
// while($res = mysqli_fetch_array($result))
// {
//     $Brand_Name = $res['Brand_Name'];
//     $Brand_Desc = $res['Brand_Desc'];
// }

?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Brand Information</h1>
        <p class="font-weight-bold">Please enter Brand Information.</p>
    </div>

    <form method="POST" action="brand.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Brand_ID">Brand ID</label>
                <input type="number" min="0" class="form-control form-control-lg" id="Brand_ID" name="Brand_ID" value="<?php echo $Brand_ID; ?>">
                <?php if(isset($error_msg[0])) { echo '<p class="text-danger">' . $error_msg[0] . '</p>'; } ?>
            </div>
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
