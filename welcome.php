<?php
session_start();

if(!isset($_SESSION['Customer_ID'])) {
    header('Location: login.php');
    exit;
}


include('includes/header.php');
include('includes/database.php');

?>


 <h1>Welcome <?php echo $_SESSION['Customer_First_Name'] . " " . $_SESSION['Customer_Last_Name'] ?> </h1>



<?php
include('includes/footer.php');
?>