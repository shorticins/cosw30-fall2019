<?php include('includes/header.php');?>
<div id="page-container">

    <div id="content-wrap">

        <div class="container">

            <h1>Register Today</h1>
            <hr>

            <form action="" method="POST">

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

    </div>

</div>
 <?php include('includes/footer.php');?>