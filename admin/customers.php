<?php
    include("includes/header.php");
    include("model/customer.php");

    $customers = getCustomers();
?>

<main class="col-md-10">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Customer ID</th>
                <th>Customer First Name</th>
                <th>Customer Last Name</th>
                <th>Customer Email</th>
                <th>Customer Phone</th>
                <th>Customer Address</th>
                <th>Customer City</th>
                <th>Customer State</th>
                <th>Customer Zip</th>
                <th>Customer Password</th>
                <th>Edit</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($customers as $customer) {
                echo '<tr>
                    <td>' .$customer['Customer_ID']. '</td>
                    <td>' .$customer['Customer_First_Name']. '</td>
                    <td>' .$customer['Customer_Last_Name']. '</td>
                    <td>' .$customer['Customer_Email']. '</td>
                    <td>' .$customer['Customer_Phone']. '</td>
                    <td>' .$customer['Customer_Address']. '</td>
                    <td>' .$customer['Customer_City']. '</td>
                    <td>' .$customer['Customer_State']. '</td>
                    <td>' .$customer['Customer_Zip']. '</td>
                    <td>' .$customer['Customer_Password']. '</td>
                    <td><a href="customer.php?id=' . $customer['Customer_ID'] . '">Edit</a></td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>

</main>
<?php include("includes/footer.php"); ?>