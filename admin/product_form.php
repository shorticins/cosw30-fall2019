<html>

<form>

<h1>Insert New Product Information:</h1>

        <form method="POST" action="product_form.php">

        <label>Product Name</label>
            <input type="text" name="product_name" required><br>

        <label>Product Description</label>
            <input type="text" name="product_description" required> <br>

        <label>Product Price</label>
            <input type="number" name="product_price" required> <br>

        <label>Product Image URL</label>
            <input type="text" name="product_image" required> <br>

        <label>Serial Number</label>
            <input type="number" name="product_serial_number" required> <br>

        <label>Product Category</label>
            <select name="category" required> <br>
                <option value="food">Food</option> <br>
                <option value="accessories">Accessories</option> <br>
                <option value="treats">Treats</option> <br>
                <option value="clothing">Clothing</option> <br>
            </select><br>
</form>

</html>


<?php

?>