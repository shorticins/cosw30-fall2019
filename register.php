<?php include('includes/header.php');?>

<?php

$first_name = $last_name = $email = $password = $confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = ($_POST["first_name"]);
  $last_name = ($_POST["last_name"]);
  $email = ($_POST["email"]);
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
if(empty($password)){
    echo "<p> Enter a password</p>";
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
    echo "<a href='register.php'>Go Back</a>";
}

}

?>


        <main class="container">

            <h1>Register Today</h1>
            <hr>

            <form action="" method="POST">

                <label for="first_name">First Name:</label><br>
                <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" required>

                <br><label for="last_name">Last Name:</label><br>
                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" required>

                <br><label for="email">Email Address:</label><br>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>

                <br><label for="password">Password:</label><br>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>" required>

                <br><label for="confirm_password">Confirm Password:</label><br>
                <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirm_password; ?>" required>


                <br><button>Register!</button>
            </form>


        </div>

 <?php include('includes/footer.php');?>