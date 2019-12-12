<?php include("includes/header.php");
      include("model/customer.php");


   $Customer_ID = $_GET['id'];

    if(!isset($Customer_ID)) {
        header("Location: /admin/customers.php");
        exit;
    }

    /// Function from (model/customer.php)
    $Customer = getCustomer($Customer_ID);


    $Customer_ID = $Customer['Customer_ID'];
    $Customer_First_Name = $Customer['Customer_First_Name'];
    $Customer_Last_Name = $Customer['Customer_Last_Name'];
    $Customer_Email = $Customer['Customer_Email'];
    $Customer_Phone = $Customer['Customer_Phone'];
    $Customer_Address = $Customer['Customer_Address'];
    $Customer_City = $Customer['Customer_City'];
    $Customer_State = $Customer['Customer_State'];
    $Customer_Zip = $Customer['Customer_Zip'];
    $Customer_Password = $Customer['Customer_Password'];


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
        if(empty($_POST['Customer_ID'])) {
                $error_msg[] = 'Customer ID field cannot be empty.';
            } else {
                $Customer_ID = trim($_POST['Customer_ID']);
            }

            if(empty($_POST['Customer_First_Name'])) {
                $error_msg[] = 'Customer First Name field cannot be empty.';
            } else {
                $Customer_First_Name = trim($_POST['Customer_First_Name']);
            }
            
            if(empty($_POST['Customer_Last_Name'])) {
                $error_msg[] = 'Customer Last Name Description field cannot be empty.';
            } else {
                $Customer_Last_Name = trim($_POST['Customer_Last_Name']);
            }

            if(empty($_POST['Customer_Email'])) {
                $error_msg[] = 'Customer First Name field cannot be empty.';
            } else {
                $Customer_Email = trim($_POST['Customer_Email']);
            }

            if(empty($_POST['Customer_Phone'])) {
                $error_msg[] = 'Customer Phone field cannot be empty.';
            } else {
                $Customer_Phone = trim($_POST['Customer_Phone']);
            }
            
            if(empty($_POST['Customer_Address'])) {
                $error_msg[] = 'Customer Address field cannot be empty.';
            } else {
                $Customer_Address = trim($_POST['Customer_Address']);
            }

            if(empty($_POST['Customer_City'])) {
                $error_msg[] = 'Customer City field cannot be empty.';
            } else {
                $Customer_City = trim($_POST['Customer_City']);
            }
            
            if(empty($_POST['Customer_State'])) {
                $error_msg[] = 'Customer State field cannot be empty.';
            } else {
                $Customer_State = trim($_POST['Customer_State']);
            }

            if(empty($_POST['Customer_Zip'])) {
                $error_msg[] = 'Customer Zip field cannot be empty.';
            } else {
                $Customer_Zip = trim($_POST['Customer_Zip']);
            }
            
            if(empty($_POST['Customer_Password'])) {
                $error_msg[] = 'Customer Password field cannot be empty.';
            } else {
                $Customer_Password = trim($_POST['Customer_Password']);
            }

        switch($_POST['submit']) {
            case "addCustomer":
                $add_msg = [];
                if(empty($error_msg)) {
                    $addCustomer = "INSERT INTO CUSTOMER (Customer_ID, Customer_First_Name, Customer_Last_Name, Customer_Email, Customer_Phone, Customer_Address, Customer_City, Customer_State, Customer_Zip, Customer_Password) 
                                 VALUES ('$Customer_ID','$Customer_First_Name','$Customer_Last_Name','$Customer_Email','$Customer_Phone','$Customer_Address','$Customer_City','$Customer_State','$Customer_Zip','$Customer_Password')";
                    if($result = mysqli_query($connection, $addCustomer)) {
                        $add_msg[] = 'Customer has been added to the database.';
                    } else {
                        $add_msg[] = 'There was an error adding customer to the database, please try again.';
                    }
                }
            ;
            case "update":
                $update_msg = [];
                if(empty($error_msg)) {
                    $updateCategory = "UPDATE CUSTOMER
                                     SET Customer_ID = '$Customer_ID',
                                         Customer_First_Name = '$Customer_First_Name',
                                         Customer_Last_Name = '$Customer_Last_Name',
                                         Customer_Email = '$Customer_Email',
                                         Customer_Phone = '$Customer_Phone',
                                         Customer_Address = '$Customer_Address',
                                         Customer_City = '$Customer_City',
                                         Customer_State = '$Customer_State',
                                         Customer_Zip = '$Customer_Zip',
                                         Customer_Password = '$Customer_Password',
                                     WHERE id = $id";
                    if($result = mysqli_query($connection, $updateCustomer)) {
                        $update_msg[] = 'Customer has been updated.';
                        header('Location: customer.php');
                        exit;
                    } else {
                        $update_msg[] = 'There was an error updating category, please try again.';
                    }
                }  
            ;
            case "delete":
            ;
        }
    }


?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Customer Information</h1>
        <p class="font-weight-bold">Please enter Customer Information.</p>
    </div>

    <form method="POST" action="customer.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Customer_ID">Customer ID</label>
                <input type="number" min="0" class="form-control form-control-lg" id="Customer_ID" name="Customer_ID" value="<?php echo $Category_ID; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
            <div class="form-group col-md-6">
                <label for="Customer_First_Name">Customer First Name</label>
                <input type="text" class="form-control form-control-lg" id="Customer_First_Name" name="Customer_First_Name" value="<?php echo $Customer_First_Name; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Customer_Last_Name">Customer Last Name</label>
                <input type="text" min="0" class="form-control form-control-lg" id="Customer_Last_Name" name="Customer_Last_Name" value="<?php echo $Customer_Last_Name; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
            <div class="form-group col-md-6">
                <label for="Customer_Email">Customer Email</label>
                <input type="email" class="form-control form-control-lg" id="Customer_Email" name="Customer_Email" value="<?php echo $Customer_Email; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Customer_Phone">Customer Phone</label>
                <input type="tel" min="0" class="form-control form-control-lg" id="Customer_Phone" name="Customer_Phone" value="<?php echo $Customer_Phone; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
            <div class="form-group col-md-6">
                <label for="Customer_Address">Customer Address</label>
                <input type="text" class="form-control form-control-lg" id="Customer_Address" name="Customer_Address" value="<?php echo $Customer_Address; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Customer_City">Customer City</label>
                <input type="text" min="0" class="form-control form-control-lg" id="Customer_City" name="Customer_City" value="<?php echo $Customer_City; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
            <div class="form-group col-md-6">
                <label for="Customer_State">Customer State</label>
                <input type="text" class="form-control form-control-lg" id="Category_Name" name="Category_Name" value="<?php echo $Category_Name; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Customer_Zip">Customer Zip</label>
                <input type="number" min="0" class="form-control form-control-lg" id="Customer_Zip" name="Customer_Zip" value="<?php echo $Customer_Zip; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
            <div class="form-group col-md-6">
                <label for="Customer_Password">Customer Password</label>
                <input type="text" class="form-control form-control-lg" id="Customer_Password" name="Customer_Password" value="<?php echo $Customer_Password; ?>">
                <?php if(isset($error_msg)) { echo '<p class="text-danger">' . $error_msg . '</p>'; } ?>
            </div>
        </div>

        <div class="text-center">
            <button class="btn-success" name="submit" value="addCustomer" type="submit">Add</button>
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
