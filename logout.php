<?php
session_start();
// Unset the session
session_unset();
// Destroy the session
session_destroy();
// Redirect to the homepage
header("Location: index.php");
exit;
<<<<<<< HEAD
=======
include('includes/header.php');
?>
<h1>You have successfully logged out <?php echo $_SESSION['Customer_First_Name'] . " " . $_SESSION['Customer_Last_Name'] ?> </h1>

<?php
include('includes/footer.php');
>>>>>>> 61483aad389d8ea5003e5ba21061d00e77cf3768
?>