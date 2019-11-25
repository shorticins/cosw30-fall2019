<?php ?>

<h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="">
    </div>
    <div class="product-details">
      <div class="product-title"></div>
      <p class="product-description"></p>
    </div>
    <div class="product-price"></div>
    <div class="product-quantity">
      <input type="number" value="" min="">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price"></div>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="">
    </div>
    <div class="product-details">
      <div class="product-title"></div>
      <p class="product-description"></p>
    </div>
    <div class="product-price"></div>
    <div class="product-quantity">
      <input type="number" value="" min="">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price"></div>
  </div>

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"></div>
    </div>
    <div class="totals-item">
      <label>Tax (10.25%)</label>
      <div class="totals-value" id="cart-tax"></div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">/div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"></div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>

