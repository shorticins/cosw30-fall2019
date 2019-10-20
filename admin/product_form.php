<?php include("includes/header.php")?>
 <div class="col offset-3" id="productform-content" style="height:100vh;">
<div class="text-center">
<h1>New Product Information Form</h1>
<h2>All fields are required.</h2>
</div>
        <form id="product_form" method="POST" action="product_form.php">
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" name="product_name" required><br>
        </div>
        <div class="form-group">
             <label for="product_description">Product Description</label>
            <input type="text" class="form-control"name="product_description" required> <br>
        </div>
        <div class="form-group">
            <label for="product_price">Product Price</label>
            <input type="number" class="form-control" name="product_price" required> <br>
        </div>
        <div class="form-group">
            <label for="product_img">Product Image URL</label>
            <input type="text" class="form-control"name="product_image" required> <br>
        </div>
        <div class="form-group">
            <label for="serial_no">Serial Number</label>
            <input type="number" class="form-control" name="product_serial_number" required> <br>
        </div>
        <div class="form-group">
        <label for="product_category">Product Category</label>
            <select multiple class="form-control" name="category" required> <br>
                <option value="food">Food</option> <br>
                <option value="accessories">Accessories</option> <br>
                <option value="treats">Treats</option> <br>
                <option value="clothing">Clothing</option> <br>
            </select><br>

        <button class="button-primary text-center" id="product_form_button" type="submit">Submit</button>
</form>
</div>

<?php include("includes/footer.php");?>
