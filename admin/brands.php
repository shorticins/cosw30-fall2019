<?php
    include("includes/header.php");
    include("model/database.php");
    include("model/brand.php");
    session_start();

    $brands = getBrands();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
        $add_msg = [];
 
        if(empty($_POST['Brand_Name'])) {
            $error_msg[0] = 'Brand Name field cannot be empty.';
        } else {
            $Brand_Name = trim($_POST['Brand_Name']);
        }
        
        if(empty($_POST['Brand_Desc'])) {
            $error_msg[1] = 'Brand Description field cannot be empty.';
        } else {
            $Brand_Desc = trim($_POST['Brand_Desc']);
        } 
                
        if(empty($error_msg)) {
            $addBrand = "INSERT INTO BRAND (Brand_Name, Brand_Desc, Archive) 
                                VALUES ('$Brand_Name','$Brand_Desc', '$Archive')";     
            $add_msg[0] = $Brand_Name . ' has been added to the database.';
        } else {
            $add_msg[1] = 'There was an error adding brand to the database, please try again.';
        }
    }
?>

<main class="col-sm-12 col-md-10">
    <div class="col align-content-center text-center">
        <h1>Brand Information</h1>
    </div>

        <?php 
            if(isset($add_msg[0])) {
                echo '<p class="alert alert-success text-center" role="alert">' . $add_msg[0] . '</p>'; 
            } elseif(isset($add_msg[1])) {
                echo '<p class="alert alert-danger text-center" role="alert">' . $add_msg[1] . '</p>';
            } 

            if (isset($_GET['success']) == 1) {
                echo '<p class="alert alert-success text-center" role="alert">' . $_SESSION['Brand_Name'] .'</p>';
            } elseif (isset($_GET['success']) == 2) {
                echo '<p class="alert alert-success text-center" role="alert">' . $_SESSION['Brand_Name'] .'</p>';
            }

        ?>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <p class="mb-0">
                    <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" 
                    aria-controls="collapseOne">
                        + Add New Brand
                    </button>
                </p>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p class="font-weight-bold text-center">Complete the form and press the <span class="text-success">
                    Add</span> button to add a new brand.</p>

                    <form method="POST" action="brands.php">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-6">
                                <label for="Brand_Name">Brand Name</label>
                                <input type="text" class="form-control form-control-lg" id="Brand_Name" name="Brand_Name" value="<?php echo $Brand_Name; ?>">
                                <?php if(isset($error_msg[0])) { echo '<p class="text-danger">' . $error_msg[0] . '</p>'; } ?>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="form-group col-6">
                                <label for="Brand_Desc">Brand Description</label>
                                <input type="text" class="form-control form-control-lg" id="Brand_Desc" name="Brand_Desc" value="<?php echo $Brand_Desc; ?>">
                                <?php if(isset($error_msg[1])) { echo '<p class="text-danger">' . $error_msg[1] . '</p>'; } ?>
                            </div>
                        </div>

                        <input type="hidden" id="Archive" name="Archive" value="0">

                        <div class="text-center">
                            <button class="btn-success" name="submit" value="addBrand" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Brand ID</th>
                <th>Brand Name</th>
                <th>Brand Description</th>
                <th>Modify</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($brands as $brand) {
                echo '<tr>
                    <td>' .$brand['Brand_ID']. '</td>
                    <td>' .$brand['Brand_Name']. '</td>
                    <td>' .$brand['Brand_Desc']. '</td> 
                    <td><a href="brand.php?id=' . $brand['Brand_ID'] . '"><i class="fas fa-edit"></i></a></td></tr>';
            }
        ?>
        </tbody>
    </table>

</main>
<?php 
    unset($_SESSION['Brand_Name']);
    include("includes/footer.php"); 
?>