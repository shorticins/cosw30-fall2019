<?php include('includes/header.php');?>
<div id="page-container">

    <div id="content-wrap">

        <form action="" method="POST">

<?php
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

    <form action="<?php echo ($_SERVER["login"]);?>" method="POST">

                <h1>Login Form</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label = "email">Email Address:</label><br>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>">

                <br><label = "password">Password:</label><br>
                <input type= "password" name="password" id="password" >

                <p>By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button name="Cancel">Cancel</button>
                    <button name="Login in">Log in!</button>
                </div>

    </form>

</main>

      <?php
echo "<h2>Your Input:</h2>";

echo $email;
echo "<br>";
echo $password;

?>

    <?php include('includes/footer.php');?>
    </div>
    </div>
</div>
<?php include('includes/footer.php');?>
