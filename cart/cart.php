<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FlowerVisa | Cart</title>
    <link rel="stylesheet" type="text/css" href="../css/cart.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <script src="../js/cart.js"></script>
  </head>
  <body>
    <header>
      <h1>YOURE A BUSY SHOPPER! CLICK TO VIEW YOUR ITEMS!</h1>
    </header>
    <main>
      <section class="cart-items">
        <div class="item">
          <img src="../images/product1.jfif" alt="Product 1" />
          <div class="item-details">
            <h3>Diavici Leather Luxe Cardigan</h3>
            <p>R210</p>
            <button class="delete-btn" onclick="deleteItem(this)">
              DELETE
            </button>
          </div>
        </div>
        <div class="item">
          <img src="../images/product2.jpg" alt="Product 2" />
          <div class="item-details">
            <h3>Diamond Luxe Swiss Dress</h3>
            <p>R300.99</p>
            <button class="delete-btn" onclick="deleteItem(this)">
              DELETE
            </button>
          </div>
        </div>
        <div class="item">
          <img src="../images/product3.jfif" alt="Product 3" />
          <div class="item-details">
            <h3>Porlatti Vintage Leather Coat</h3>
            <p>R421.99</p>
            <button class="delete-btn" onclick="deleteItem(this)">
              DELETE
            </button>
          </div>
        </div>
      </section>
      <a href="../home.php#shop" class="checkout-btn">CONTINUE SHOPPING</a>
      <section class="totals">
        <h2>TOTAL:</h2>
        <p>SUBTOTAL: R732</p>
        <p>SHIPPING AND TAX: R100</p>
        <h3>Total: R832</h3>
        <a href="../payments/payments.php" class="checkout-btn">CHECKOUT</a>

      </section>
    </main>
  </body>
</html>
