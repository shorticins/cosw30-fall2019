<?php
    include("includes/header.php");
    include("model/brand.php");

    $brands = getBrands();
?>

<main class="col-md-10">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Brand ID</th>
                <th>Brand Name</th>
                <th>Brand Description</th>
                <th>Edit / Delete</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($brands as $brand) {
                echo '<tr>
                    <td>' .$brand['Brand_ID']. '</td>
                    <td>' .$brand['Brand_Name']. '</td>
                    <td>' .$brand['Brand_Desc']. '</td> 
                    <td><a href="brand.php?id=' . $brand['Brand_ID'] . '">Edit</a></td></tr>';
            }
        ?>
        </tbody>
    </table>

</main>
<?php include("includes/footer.php"); ?>