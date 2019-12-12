<?php 
session_start();

// Check if the user is already logged in
// If they are, redirect to welcome.php
if(isset($_SESSION['Customer_ID'])){
    header('Location: welcome.php');
    exit;
}

include('includes/header.php');


$first_name = "";
$last_name = "";
$email = "";
$password = "";
$confirm_password = "";
$phone = "";
$address = "";
$city = "";
$state = "";
$zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
}
?>


    <main class="container">

        <h1>Register Today</h1>
        <hr>

        <form action="/register.php" method="POST">
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" required><br>

            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" required><br>

            <label for="email">Email Address:</label><br>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br>

            <label for="phone">Phone Number:</label><br>
            <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" required><br>

            <label for="address">Address:</label><br>
            <input type="text" name="address" id="address" value="<?php echo $address; ?>" required><br>

            <label for="city">City:</label><br>
            <input type="text" name="city" id="city" value="<?php echo $city; ?>" required><br>

            <label for="state">State:</label><br>
            <input type="text" name="state" id="state" value="<?php echo $state; ?>" required><br>

            <label for="zip">Zipcode:</label><br>
            <input type="number" name="zip" id="zip" value="<?php echo $zip; ?>" required><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" value="<?php echo $password; ?>" required><br>

            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirm_password; ?>" required><br>

            <button>Register!</button>
        </form>

    </main>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    //form validation
    if(empty($first_name)){
        echo "<p> First name is required</p>";
    }
    if(empty($last_name)){
        echo "<p> Last name is required</p>";
    }
    if(empty($email)){
        echo "<p> Email is required</p>";
    }
    if(empty($phone)){
        echo "<p> Phone Number is required</p>";
    }
    if(empty($address)){
        echo "<p> Address is required</p>";
    }
    if(empty($city)){
        echo "<p> City is required</p>";
    }
    if(empty($state)){
        echo "<p> State is required</p>";
    }
    if(empty($zip)){
        echo "<p> Zipcode is required</p>";
    }
    if(empty($password)){
        echo "<p> Password is required</p>";
    }
    if (empty($confirm_password)) {
        echo "<p> Confirm the password</p>";
    }

    if( !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && $confirm_password === $password) {
        echo"<p> You have successfully registered. Your registration details:</p>";
        echo "First name: " . $first_name . "<br>";
        echo  "Last name: " . $last_name . "<br>";
        echo "Email Address: " . $email . "<br>";
    } else {
        echo "<p>The Passwords Do Not Match.</p>";
    }
}

// QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
    
     // Create your query. The query has to match the names in the MySQL / phpMYADMIN
        $query = "INSERT INTO CUSTOMER (Customer_First_Name, Customer_Last_Name, Customer_Email, Customer_Phone, Customer_Address, Customer_City, Customer_State, Customer_Zip, Customer_Password)
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$state', '$zip', '$password')";

     // Run your query
        $result = mysqli_query($connection, $query);

     // Check if the database returned anything
        if($result) {
            $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            echo 'Query successful';
        } else {
        // Output an error
            echo '
                <h1>System Error!</h1>
                <p class="error">There was an error! Did not connect to database!</p>';
            
        }
?>

 <?php include('includes/footer.php');?>