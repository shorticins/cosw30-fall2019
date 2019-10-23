<?php include('includes/header.php');?>
<div id="page-container">

    <div id="content-wrap">

        <form action="" method="POST">

            <div class="container">

                <h1>Login Form</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label>Email Address:</label><br>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>">

                <br><label>Password:</label><br>
                <input type="password" name="password" id="password" >

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button name="Cancel" class="cancelbutton">Cancel</button>
                    <button name="Login in" class="loginbutton">Log in!</button>
                </div>
            </div>
        </form>

    </div>
</div>
<?php include('includes/footer.php');?>