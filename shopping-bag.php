<?php 
session_start();
//session_unset();
include('includes/database1.php');
include('includes/header.php'); 

$_SESSION["bag"][] = $_REQUEST["id"];
$_SESSION["bag"][] = $_REQUEST["quantity"];

/* $date = date(DATE_W3C);
$sql = "INSERT INTO CUSTOMER_ORDER (Customer_ID, Product_ID, Product_Quantity, Order_Date)
VALUES (1, 8, 3, '$date')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
?>
<main class="container">
    <h1>Shopping Bag</h1>
    
    <div class="row">
        <div class="two columns">
             <image>
               <?php
                 $query = "SELECT * FROM PRODUCT
                            WHERE product_id=" . $_REQUEST["id"];
                 $result = mysqli_query($connection, $query);

                 //mysqli_num_rows($result)
                 $row = mysqli_fetch_assoc($result);
                echo "<img src='img/" . $row["Product_Image"] . "' width='100'>"
 
                 ?>
                
            </image>
        </div>
        
        <div class="five columns">
                <p><?php echo $row["product_name"] ?></p>
                <p><?php echo $row["product_desc"] ?></p>
                
                <img src="img/delivery_truck.png">
                <a href="">Remove product</a>
                
        </div>
        <div class="three columns">
            <p>Quantity</p>
            <label class="">
             <p><?php echo $_REQUEST["quantity"]?></p>  <!--<select class=""><?php
                    /*for ($i = 0; $i < 36; $i++) {
                        echo "<option value='$i'>$i</option>";
                    } */ ?>
                </select>-->
            </label>
        </div>
        
        <div class="two columns">
            <p>price</p>
            <p><?php echo "$" . $row["Product_Price"] ?></p>
        </div>
    </div>

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
                
                   <!-- <p>Shipping</p>
                    <p>Free if over $35; othetwise applied during checkout</p>
               
                    <p>Estimated Tax</p>
                    <p><span>Amount</span></p>
                
                    <p>Estimated Total</p>
                    <p><span>Amount</span></p>-->
            <button>Checkout</button>
        </div>
    </div>

<!-- optional <button>Empty Cart</button>  -->
</main>

<?php include('includes/footer.php'); ?>
