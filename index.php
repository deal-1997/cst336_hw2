<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
  <script type="text/Javascript" src="./js/script.js"></script>
  <title>Shopping Cart</title>
</head>

<body>
  <main>
    <div class="cart">
      <div class="cart-module">
        <p align:"text-center"></p>
    <font size="10">
    Adidas Store Checkout
    </font>
        <label for="promo-code">Enter A Promo Code To Save Some Money!</label>
        <input id="promo-code" type="text" name="promo-code" class="promo-code-field">
        <button class="promo-code">Apply</button>
      </div>
      <div class="cart-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <div class="cart-product">
        <div class="item">
          <div class="product-image">
            <img src="./img/adidasshirt.jpg" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">Adidas Medium Black Tee</strong>
              <br>
              <br>Product Description:</h1>
              Men's graphic tees and other casual t-shirts are made of soft cotton jersey 
              with the better Cotton Initiative and reduce the environmental impact of cotton 
              production to handle your everyday look.
          </div>
        </div>
        <div class="price">30.00</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">30.00</div>
        <div class="remove">
          <button>X</button>
        </div>
      </div>
      <div class="cart-product">
        <div class="item">
          <div class="product-image">
            <img src="./img/adidasshoes.jpg" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">NMD R1 The Mandalorian</strong>
            <br>
            <br>Product Description:</h1>
            A collaboration with Star Wars And Lucasflim that brings a one of a kind
            Mando inspired sneaker.
            </div>
        </div>
        <div class="price">140.00</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">140.00</div>
        <div class="remove">
          <button>X</button>
        </div>
      </div>
    </div>
    
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items In Your Shopping Cart</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="cart-subtotal">170.00</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="cart-promo"></div>
          </div>
        </div>
        <p>Select A Shipping Carrier Of Your Choice</p>
        <div class="summary-delivery">
          <select name="delivery-collection" id="delivery-selection">
            <option value="UPS" selected="selected">UPS</option>
            <option value="Fedex">Fedex</option>
            <option value="USPS">USPS</option>
          </select>
        </div>
        <div class="taxes-total">
          <div class="total-title">Taxes</div>
          <div class="total-value final-value" id="taxes">-</div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="cart-total">170.00</div>
        </div>
        <div class="summary-checkout">
          <a href="checkoutmessage.php">Checkout</a>
        </div>
      </div>
    </aside>
  </main>
</body>

</html>
