<?php include('../includes/header.php'); ?>
<?php include('../includes/cus_nav_bar.php'); ?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Review Form</h1>
        <p class="font-weight-bold">All fields are required.</p>
    </div>

    <form method="POST" action="">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control form-control-lg" id="first_name" name="first_name"" required>
            </div>
            <div class="form-group col-md-4">
                <label for="last_name">Last Name</label>
                <input type="text" min="0" class="form-control form-control-lg" id="last_name" name="last_name" required>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" min="0" class="form-control form-control-lg" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control form-control-lg" id="phone_number" name="phone_number">
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <textarea type="test" class="form-control form-control-lg" id="comments" name="comments" required></textarea>
        </div>
        <div class="text-center">
            <button class="btn-success" type="submit">Submit</button>
        </div>
    </form>
</main>

<?php include('../includes/footer.php'); ?>