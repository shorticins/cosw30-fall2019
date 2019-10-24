<?php include('includes/header.php');?>
<div id="page-container">

    <div id="content-wrap">
<?php

<<<<<<< HEAD:register.php
$first_name = $last_name = $email = $password = $confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = test_input($_POST["first_name"]);
  $last_name = test_input($_POST["last_name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $confirm_password = test_input($_POST["password"]);

}
else
{
    echo '<h1>Sorry try again</h1>';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

=======
>>>>>>> aa9c5fa8fbec1aff6a215e44665e3defc5885bcb:registration.php
        <div class="container">

            <h1>Register Today</h1>
            <hr>

<<<<<<< HEAD:register.php
            <form action="<?php echo htmlspecialchars($_SERVER["register1"]);?>" method="POST">
=======
            <form action="" method="POST">
>>>>>>> aa9c5fa8fbec1aff6a215e44665e3defc5885bcb:registration.php

                <label>First Name:</label><br>
                <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" >

                <br><label>Last Name:</label><br>
                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" >

                <br><label>Email Address:</label><br>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" >

                <br><label>Password:</label><br>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>" >

                <br><label>Confirm Password:</label><br>
                <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirm_password; ?>" >


                <br><button>Register!</button>
            </form>
        </div>
        <?php
echo "<h2>Your Registration Details:</h2>";
echo $first_name;
echo "<br>";
echo $last_name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;

?>

    </div>

</div>
 <?php include('includes/footer.php');?>