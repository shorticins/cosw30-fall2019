<?php
include("includes/header.php");
include("model/category.php");

$getCategories = getCategories();
?>
<main class="col-md-10">
<?php
if(is_array($getCategories)) {
    echo "<table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Edit / Delete</th>
        </tr>
    </thead>

    <tbody>";

    foreach($getCategories as $getCategory){
        echo '<tr>
                <td>'.$getCategory['category_id'].'</td>
                <td>'.$getCategory['category_name'].'</td>
                <td>'.$getCategory['category_desc'].'</td>
                <td><a href="admin/product.php?id='.$getCategory['category_id'].'"> Edit </a></td>
            </tr>';
    }
    echo "</tbody></table>";
} else {
    echo $getCategories;
}
?>

</main>

<?php include("includes/footer.php"); ?>

