<?php 
// Start a session
session_start();

// Check if the user is already logged in
// If they are, redirect to welcome.php
// if(isset($_SESSION['email'])){
//     header('Location: welcome.php');
//     exit;
// }
// Add header
include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Connect to database
    include('model/database.php');

    // Grab values from the form inputs
    $errors = [];
    $first_name = ($_POST["first_name"]);
    $last_name = ($_POST["last_name"]);
    $email = ($_POST["email"]);
    $phoneNumber = ($_POST["phoneNumber"]);
    $address = ($_POST["address"]);
    $city = ($_POST["city"]);
    $state = ($_POST["state"]);
    $zip = ($_POST["zip"]);
    $password = ($_POST["password"]);
    $confirm_password = ($_POST["confirm_password"]);

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
    if(empty($phoneNumber)){
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
        echo "<p> Enter a password</p>";
    }
    if (empty($confirm_password)) {
        echo "<p> Confirm the password</p>";
    }

    if( !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && $confirm_password === $password) {
        echo "<p> You have successfully registered. Your registration details:</p>";
        echo "First name: " . $first_name . "<br>";
        echo "Last name: " . $last_name . "<br>";
        echo "Email Address: " . $email . "<br>";
        header('Location: welcome.php');
        exit;
    } else {
        echo "<p>The Passwords Do Not Match.</p>";
        echo "<a href='register.php'>Go Back</a>";
    }

    // QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
   
    // Create your query. The query has to match the names in the phpMYADMIN
        $query = "INSERT INTO CUSTOMER (Customer_First_Name, Customer_Last_Name, Customer_Email, Customer_Phone, Customer_Address, Customer_City, Customer_State, Customer_Zip, Customer_Password) VALUES ('$first_name','$last_name','$email','$phoneNumber','$address','$city','$state','$zip','$password')";

    // Run your query
        $result = mysqli_query($connection, $query);
}

       
?>

    <main class="container">

        <h1>Register Today</h1>
        <hr>

        <form action="register.php" method="POST">

            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $first_name; ?>" required><br>

            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $last_name; ?>" required><br>

            <label for="email">Email Address:</label><br>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required><br>

            <label for="phoneNumber">Phone Number:</label><br>
            <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo $phoneNumber; ?>" required><br>

            <label for="address">Street Address:</label><br>
            <input type="text" name="address" class="form-control" id="address" value="<?php echo $address; ?>" required><br>

            <label for="city">City:</label><br>
            <input type="text" name="city" class="form-control" id="city" value="<?php echo $city; ?>" required><br>

            <label for="state">State:</label><br>
            <input type="text" name="state" class="form-control" id="state" value="<?php echo $state; ?>" required><br>

            <label for="zipcode">Zipcode:</label><br>
            <input type="number" name="zip" class="form-control" id="zip" value="<?php echo $zip; ?>" required><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" class="form-control" id="password" value="<?php echo $password; ?>" required><br>

            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" value="<?php echo $confirm_password; ?>" required><br>

            <button class="btn btn--green" type="submit">Register!</button>
        </form>

    </main>

 <?php include('includes/footer.php');?>