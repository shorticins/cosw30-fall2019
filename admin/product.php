<?php include("includes/header.php")?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>New Product Form</h1>
        <p class="font-weight-bold">All fields are required.</p>
    </div>

    <form method="POST" action="product_form.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control form-control-lg" id="product_name" name="product_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="product_price">Product Price</label>
                <input type="number" min="0" class="form-control form-control-lg" id="product_price" name="product_price" required>
            </div>
        </div>

        <div class="form-group">
            <label for="product_description">Product Description</label>
            <textarea class="form-control form-control-lg" id="product_description" name="product_description" maxlength="144" required placeholder="144 characters max"></textarea>
        </div>

        <div class="form-group">
            <label for="product_image">Product Image URL</label>
            <input type="text" class="form-control form-control-lg" id="product_image" name="product_image" required>
        </div>

        <div class="form-group">
            <label for="serial_no">Serial Number</label>
            <input type="number" min="0" class="form-control form-control-lg" id="serial_no" name="serial_no" required>
        </div>

        <div class="form-group">
            <label for="product_category">Product Category</label>
            <select multiple id="product_category" name="product_category" class="form-control form-control-lg">
                <option value="food">Food</option>
                <option value="accessories">Accessories</option>
                <option value="treats">Treats</option>
                <option value="clothing">Clothing</option>
            </select>
        </div>

        <div class="text-center">
            <button class="btn-success" type="submit">Submit</button>
        </div>
    </form>
</main>

<?php include("includes/footer.php");?>
