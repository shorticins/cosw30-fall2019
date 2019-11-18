<?php include('includes/header.php');

$email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<main class="container">

    <h1>Login Form</h1>
    <p>Please fill in this form to login.</p>
    <p>If you do not have an account please click here to create one: <a href="/register.php">Create Account</a></p>
    <hr>

    <form action="/login.php" method="POST">
        <label for="email">Email Address:</label><br>
        <input type="email" name="email" id="email" value=""><br>

        <label for="password">Password:</label><br>
        <input type= "password" name="password" id="password">

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button name="Cancel">Cancel</button>
            <button name="Login in">Log in!</button>
        </div>
    </form>

</main>

<?php include('includes/footer.php');?>
