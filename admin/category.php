<?php 
session_start();
include("includes/header.php");
include("model/category.php");
include("model/product.php");

$category_id = $_GET['id'];
if(!isset($category_id)) {
    header("Location: /admin/categories.php");
    exit;
}

$category = getCategory($category_id);

$category_name = $category['category_name'];
$category_desc = $category['category_desc'];

$categories = getCategories();
?>

<main class="col-lg-8 m-1 col-md-12">
    <div class="col align-content-center text-center">
        <h1>Category Form</h1>
        <p class="font-weight-bold">All fields are required.</p>
    </div>

    <form method="POST" action="category_form.php">
        <div class="form-row">
            <div class="form-group col-md-6">

                <label for="category_name">Category Name</label>
                <input type="text" class="form-control form-control-lg" id="category_name" name="category_name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="category_description">Category Description</label>
                <textarea class="form-control form-control-lg" id="category_description" name="category_description" maxlength="255" required placeholder="255 characters max"></textarea>
            </div>
        </div>

        
        <div class="text-center">
            <button class="btn-success" type="submit">Submit</button>
        </div>
    </form>
</main>

<?php include("includes/footer.php");?>
