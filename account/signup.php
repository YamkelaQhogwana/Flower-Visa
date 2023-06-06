<!DOCTYPE html>
<html>
  <head>
    <title>FLOWERVISA SIGNUP</title>
    <link rel="stylesheet" type="text/css" href="../css/signup.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Yamkela Qhogwana" />
    <link rel="icon" href="../images/icon.png" />
  </head>

  <body>
    <div class="container">
      <form method="post" action="signup.php">
        <h2>LET'S GET YOU STARTED! 👜</h2>
        <input type="text" id="firstName" placeholder="NAME" name="firstName" />

        <input
          type="text"
          id="lastName"
          placeholder="SURNAME"
          name="lastName"
        />

        <input type="email" id="email" placeholder="EMAIL" name="email" />

        <input
          type="password"
          id="password"
          placeholder="PASSWORD"
          name="password"
        />

        <input
          type="password"
          id="confirmPassword"
          placeholder="CONFIRM PASSWORD"
          name="password"
        />

        <input
          type="text"
          id="address1"
          placeholder="ADDRESS LINE 1"
          name="address1"
        />

        <input
          type="text"
          id="address2"
          placeholder="ADDRESS LINE 2"
          name="address2"
        />

        <input
          type="text"
          id="address3"
          placeholder="ADDRESS LINE 3"
          name="address3"
        />

        <input
          type="text"
          id="postalCode"
          placeholder="POSTAL CODE"
          name="postalCode"
        />

        <input type="text" id="country" placeholder="COUNTRY" name="country" />

        <a id="form-button" href="../cart/cart.php">SIGNUP</a>
      </form>
      <script src="../js/signup.js"></script>
      <p>
        Already have an account? <a href="login.php" class="login">LOGIN</a>
      </p>
    </div>
  </body>
</html>
