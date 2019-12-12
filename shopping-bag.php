<?php 
session_start();
include('includes/header.php'); 
?>

<main class="container">
    <h1>Shopping Bag</h1>
    
        <image>
            <a href="image pulled from database"></a>
        </image>

    <div class="row">
        <div class="two columns">fdasf</div>
        <div class="five columns">
            <p>Product Name</p>
            <p>Size</p>
            <div>
                <a href="">Remove product</a>
                <a href="">Save for Later</a>
            </div>
        </div>
        <div class="three columns">fdasfdas</div>
        <div class="two columns">fdsafdsa</div>
    </div>

    <section>
        <div class="container">
            <div class="box">
                <p>Label of Product</p>
                <p>Qualities or type</p>
                <svg="delivery truck icon"></svg>
                <p>Delivery<span>Est Delivery Date</span></p>
            </div>
                <div class="box">
                    <label class="">
                        <select class="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="box">
                <p>price</p>
                </div>
        </section>

        <div class="lower-box">
                    <button>Remove</button>
                    <button>Save for Later</button>
                </div>

    <section id="totals">
        <table>
            <thead>
                <tr>
                    <th colspan="4">Order Summary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Subtotal</td>
                    <td><span>Cost</span></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td><span>Amount</span></td>
                </tr>
                <tr>
                    <td>Estimated Tax</td>
                    <td><span>Amount</span></td>
                </tr>
                <tr>
                    <td>Estimated Total</td>
                    <td><span>Amount</span></td>
                </tr>
            </tbody>
        </table>

        <button>Checkout</button>
    </section>

    <section id="questions">
                    <p>Have any question? Please Call </p>
    </section>
<!-- optional <button>Empty Cart</button>  -->

        <h4>Grand Total: $21.99</h4>

        <p>Payment Information</p>
            <form method="POST" action='process.php'>
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

                <p><label>Num:</label>
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

<main class="container shopping-bag">
    <h1>Shopping Bag</h1>
    
    <?php
    if(isset($_SESSION['bag'])) {
        include('model/product.php');
        // Output all of the products in the bag
        // $_SESSION["bag"][] = $_REQUEST["id"];
        // $_SESSION["bag"][] = $_REQUEST["quantity"];

        foreach($_SESSION['bag'] as $product_id) {
            $row = getProduct($product_id);

            if(is_array($row)) {
                $product_image  = $row['Product_Image'];
                $product_name   = $row['product_name'];
                $product_desc   = $row['product_desc'];
                $product_price  = $row['Product_Price'];

                echo "<div class='row'>
                        <div class='two columns'>
                            <img src='img/$product_image' width='100'>
                        </div>
            
                        <div class='five columns'>
                            <p>$product_name</p>
                            <p>$product_desc</p>
                            
                            <img src='img/delivery_truck.png'>
                            <a href=''>Remove product</a>
                        </div>

                        <div class='three columns'>
                            <p>Quantity</p>
                            <label></label>
                        </div>
            
                        <div class='two columns'>
                            <p>price</p>
                            <p>$product_price</p>
                        </div>
                    </div>";
            } else {
                echo "<p>No products added to bag";
            }
        }
    } else {
        echo "<p>No products added to bag";
    }
    ?>
    
    

    <div class="row">
        <div class="nine columns">
            <p>Have any question? Please Call </p>
        </div>
        <div class="three columns">
                    <p>Subtotal: 
                    <?php 
                    $subtotal = 0;
                    $arrayCount = count($_SESSION["bag"]);
                    for ($i = 0; $i <= $arrayCount; $i += 2){
                        $subtotal += ($row["Product_Price"] * $_SESSION["bag"][$i+1]);
                    }
                    echo '$' . number_format($subtotal,2,".",",");
                    ?></p>
            <button>Checkout</button>
        </div>
    </div>


</main>

<?php include('includes/footer.php'); ?>