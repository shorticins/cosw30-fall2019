<?php include("includes/header.php");
      include("model/database.php");
      include("model/brand.php");
      session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error_msg = [];
            if(empty($_POST['Brand_ID'])) {
                $error_msg[0] = 'This field cannot be empty.';
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
            case "update":
                if(empty($error_msg)) {
                    $updateBrand = "UPDATE BRAND
                                     SET Brand_Name = '$Brand_Name',
                                         Brand_Desc = '$Brand_Desc'
                                     WHERE Brand_ID = '$Brand_ID'";

                    if($result = mysqli_query($connection, $updateBrand)) {
                        $_SESSION['Brand_Name'] = $Brand_Name . ' has been updated.';
                        header('Location: brands.php?success=1');
                        exit;
                    } 
                } else {
                    $update_msg = 'There was an error updating ' . $Brand_Name . ', please try again.';
                }
            break;
            case "archive":
                if(empty($error_msg)) {
                    $archiveBrand = "UPDATE BRAND
                                     SET Archive = '1'
                                     WHERE Brand_ID = '$Brand_ID'";

                    if($result = mysqli_query($connection, $archiveBrand)) {
                        $_SESSION['Brand_Name'] = $Brand_Name . ' has been archived.';
                        header('Location: brands.php?success=2');
                        exit;
                    } 
                } else {
                    $archive_msg = 'There was an error archiving ' . $Brand_Name . ', please try again.';
                } 
            break;
        }
    }
elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
    //print $_GET["id"];
    $get_id = $_GET["id"];
    // Create your query
    $query = "SELECT * FROM BRAND 
              WHERE Brand_ID = $get_id
              AND Archive = '0'";
    //print $query;
    // Run your query
    $result_update = mysqli_query($connection, $query);

    if($result_update) {
        $brands = mysqli_fetch_all($result_update, MYSQLI_ASSOC);    
        foreach ($brands as $brand) {            
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
        <p class="font-weight-bold">To update brand information, complete the fields below and click the 
        <span class="text-success">Update</span> button.<br>
        To remove this brand from the table, click the <span class="text-danger">Archive</span> button. 
        Please be sure you are archiving the correct brand.</p>
    </div>

    <form method="POST" action="brand.php">
        <input type="hidden" id="Brand_ID" name="Brand_ID" value="<?php echo $Brand_ID; ?>">
        <input type="hidden" id="Archive" name="Archive" value="<?php echo $Archive; ?>">

        <?php 
            if(isset($archive_msg)) { 
                echo '<p class="alert alert-danger text-center" role="alert">' . $archive_msg . '</p>'; 
            } elseif(isset($update_msg)) {
                echo '<p class="alert alert-danger text-center" role="alert">' . $update_msg . '</p>'; 
            }
        ?>
        
        <div class="form-row justify-content-center">
            <div class="form-group col-md-6">
                <label for="Brand_Name">Brand Name</label>
                <input type="text" class="form-control form-control-lg" id="Brand_Name" name="Brand_Name" value="<?php echo $Brand_Name; ?>">
                <?php if(isset($error_msg[1])) { echo '<p class="text-danger">' . $error_msg[1] . '</p>'; } ?>
            </div>
        </div>

        <div class="form-row justify-content-center">
            <div class="form-group col-md-6">
                <label for="Brand_Desc">Brand Description</label>
                <input type="text" class="form-control form-control-lg" id="Brand_Desc" name="Brand_Desc" value="<?php echo $Brand_Desc; ?>">
                <?php if(isset($error_msg[2])) { echo '<p class="text-danger">' . $error_msg[2] . '</p>'; } ?>
            </div>
        </div>

        <div class="text-center">
            <button class="btn-success" name="submit" value="update" type="submit">Update</button>
        </div>
        
        <div class="text-center">
            <button class="btn-danger" name="submit" value="archive" type="submit">Archive</button>
        </div>

        <div class="text-center">
            <a href="/admin/brands.php">
            <button class="btn-outline-dark" type="button">Return</button></a>
        </div>
    </form>

</main>

<?php include("includes/footer.php"); ?>
