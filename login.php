<?php
  // start a seesion
session_start();
// Check if the user is already logged in
// If they are, redirect to welcome.php
if(isset($_SESSION['Customer_ID'])){
    header('Location: welcome.php');
    exit;
}
include('includes/header.php');
include('includes/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Grab values from the form inputs
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Validate the form data
    // Check if the user's email and password are in the database
    $query = "SELECT Customer_ID, Customer_First_Name
                FROM CUSTOMER
                WHERE email = '$email'
                AND password = '$password'";
    $result = mysqli_query($connection, $query);
    // If they are, log them in
    if($result) {
        $user = mysqli_fetch_assoc($result);
        // Add their user id to the $_SESSION
        $_SESSION['Customer_ID']= $user['Customer_ID'];
        $_SESSION['Customer_First_Name']= $user['Customer_First_Name'];
        print_r($Customer);
        print_r($_SESSION);
        // Redirect to the welcome.php page
        header('Location:welcome.php');
        exit;
    // If they aren't, show the log in form with an error
    } else { 
    }
} // END of $_SERVER['REQUEST_METHOD']
?>

<main class="container">

<div class="card bg-light mb-3 m-auto">
    <div class="card-header">Login Form</div>
    <div class="card-body">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div> 

</main>

<?php include('includes/footer.php'); ?>
