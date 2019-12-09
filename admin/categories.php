<?php
    include("includes/header.php");
    include("model/category.php");

    $categories = getCategories();
?>

<main class="col-md-10">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Edit</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($categories as $category) {
                echo '<tr>
                    <td>' .$category['Category_ID']. '</td>
                    <td>' .$category['Category_Name']. '</td>
                    <td>' .$category['Category_Desc']. '</td> 
                    <td><a href="category.php?id=' . $category['Category_ID'] . '">Edit</a></td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>

</main>
<?php include("includes/footer.php"); ?>