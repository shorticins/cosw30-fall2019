<?php 
session_start();
include('model/database.php');
include('includes/header.php'); ?>
<main class="container">
    <h1>Checkout</h1>
 <form method="POST" action='process.php'>
                <h4>Payment Information</h4>
                <p><label>Fullname:</label>
                    <input type='text' placeholder='First Last Name'>
                </p>
                <p><label>Credit Card Selection:</label>
                    <select>
                        <option value="mastercard">Mastercard</option>
                        <option value="visa">Visa</option>
                        <option value="american express">American Express</option>
                    </select>
                </p>

                <p><label>Card Number:</label>
                    <input type='numeric' placeholder='000-1234-5678-9012'>
                </p>

                <p><label>Expiration Date:</label>
                    <input type='text' placeholder='MM/YYYY'>
                </p>

                <p><label>SSV</label>
                    <input type='numeric' placeholder='123'>
                </p>
            </form>

        <h4>Shipping/Billing Info</h4>
            <form method="POST" action="process.php">
                <p><label>First Name:</label>
                    <input type="text">
                </p>
                <p><label>Last Name:</label>
                    <input type="text">
                </p>
                <p><label>Address:</label>
                    <input type='text' placeholder='123 Pineneedle Lane'>
                </p>
                <p><label>City:</label>
                    <input type='text' placeholder='Long Beach'>
                </p>
                <p><label>State:</label>
                    <select id='state'>
                       <?php
                        $query = "SELECT * FROM STATES";
                        $result = mysqli_query($connection, $query) ;

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='". $row["Code"]."'>". $row["State"]."</option>\n\t\t\t\t\t\t";
                         }
                        } else {
                         echo "0 results";
                        }
                        ?>
                        
                    </select>
                </p>
                <p><label>Email:</label>
                    <input type='email'	placeholder='email@address.com'	>
                </p>
                <p><label>Phone Number:</label>
                    <input tpe='tel' placeholder='345-562-2211'>
                </p>
            </form>	

            <button>Complete transaction or checkout</button>
<!-- optional <button>Save for Later</button> -->
</main>
<?php include('includes/footer.php'); ?>
