<?php include('includes/header.php'); ?>
<main class="container shopping-bag">
    <h1>Shopping Bag</h1>
    
    <div class="row">
        <div class="two columns">
             <image>
                <a href="image pulled from database"></a>
            </image>
        </div>
        
        <div class="five columns">
                <p>Label of Product</p>
                <p>Description</p>
                <p>Size</p>
                <svg="truck icon"></svg>
                <a href="">Remove product</a>
                <a href="">Save for Later</a>
        </div>
        <div class="three columns">
            <p>Quantity</p>
            <label class="">
                <select class=""><?php
                    for ($i = 0; $i < 36; $i++) {
                        echo "<option value='$i'>$i</option>";
                    } ?>
                </select>
            </label>
        </div>
        
        <div class="two columns">
            <p>price</p>
        </div>
    </div>

    <div class="row">
        <div class="nine columns">
            <p>Have any question? Please Call </p>
        </div>
        <div class="three columns">
                    <p>Subtotal</p>
                    <p><span>Cost</span></p>
                
                    <p>Shipping</p>
                    <p><span>Amount</span></p>
               
                    <p>Estimated Tax</p>
                    <p><span>Amount</span></p>
                
                    <p>Estimated Total</p>
                    <p><span>Amount</span></p>
            <button>Checkout</button>
        </div>
    </div>

<!-- optional <button>Empty Cart</button>  -->
</main>

<?php include('includes/footer.php'); ?>
