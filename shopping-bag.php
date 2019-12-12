<?php 
session_start();
include('includes/header.php'); 
?>
<main class="container">

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
