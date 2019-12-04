<?php 
session_start();
include("includes/header.php");
include("model/category.php");
include("model/product.php");

$product_id = $_GET['id'];

// If there is no id in the URL, redirect to product list
if(!isset($product_id)) {
    header("Location: /admin/products.php");
    exit;
}


$product = getProduct($product_id);

$product_name = $product['product_name'];
$product_desc = $product['product_desc'];
$product_ingredients = $product['Product_Ingredients'];
$product_price = $product['Product_Price'];
$product_image = $product['Product_Image'];

$categories = getCategories();
?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>New Product Form</h1>
        <p class="font-weight-bold">All fields are required.</p>
    </div>

    <form method="POST" action="product.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control form-control-lg" id="product_name" name="product_name" value="<?php echo $product_name; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="product_price">Product Price</label>
                <input type="number" min="0" class="form-control form-control-lg" id="product_price" name="product_price" value="<?php echo $product_price; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="product_description">Product Description</label>
            <textarea class="form-control form-control-lg" id="product_description" name="product_description" maxlength="144" required><?php echo $product_desc; ?></textarea>
        </div>

        <div class="form-group">
            <label for="product_image">Product Image URL</label>
            <input type="text" class="form-control form-control-lg" id="product_image" name="product_image" value="<?php echo $product_image; ?>" required>
        </div>

        <div class="form-group">
            <label for="product_category">Product Category</label>
            <select multiple id="product_category" name="product_category" class="form-control form-control-lg">
            <?php foreach($categories as $category) {
                echo '<option value="'.$category['Category_ID'].'">'.$category['Category_Name'].'</option>';
            } ?>
            </select>
        </div>

        <div class="text-center">
            <button class="btn-success" type="submit">Submit</button>
        </div>
    </form>
</main>

<?php include("includes/footer.php");?>
