<?php include('includes/header.php'); ?>
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
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
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