<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FlowerVisa | Login</title>
    <link rel="icon" href="../images/icon.png" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
  </head>
  <body>
    <form method="post" action="login.php">
      <h2>WELCOME BACK!</h2>
      <input
        type="email"
        id="email"
        placeholder="Email"
        name="email"
        required
      />

      <input
        type="password"
        id="password"
        placeholder="Password"
        name="password"
        required
      />

      <a href="../cart/cart.php"  class="button">LOGIN</a>

      <div class="options">
        <a href="forgotPassword.php">FORGOT PASSWORD?</a>
      </div>
    </form>
  </body>
</html>
