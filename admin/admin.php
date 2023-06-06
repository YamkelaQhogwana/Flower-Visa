<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
  <title>Admin Dashboard</title>
  <link rel="icon" href="../images/icon.png" /> 
</head>

<body>
  <div class="container">
    <header>
      <h1>Admin Dashboard</h1>
    </header>
    <main>
      <section id="update-product">
        <h2>Update Product</h2>
        <form>
          <label for="updateProductName">Product Name</label>
          <input type="text" id="updateProductName" name="updateProductName">
          <label for="updateProductPrice">Price</label>
          <input type="text" id="updateProductPrice" name="updateProductPrice">
          <label for="updateProductImage">Image</label>
          <input type="file" id="updateProductImage" name="updateProductImage">
          <button type="submit">Update</button>
        </form>
      </section>
      <section>
        <h2>Delete Product</h2>
        <form>
          <label for="deleteProductName">Product Name</label>
          <input type="text" id="deleteProductName" name="deleteProductName">
          <button type="submit">Delete</button>
        </form>
      </section>
      <section>
        <h2>Add Product</h2>
        <form action="addProduct.php" method ="post">
          <label for="addProductName">Product Name</label>
          <input type="text" id="addProductName" name="addProductName">
          <label for="addProductPrice">Price</label>
          <input type="text" id="addProductPrice" name="addProductPrice">
          <label for="addProductImage">Image</label>
          <input type="file" id="addProductImage" name="addProductImage">
          <button type="submit">Add</button>
        </form>
        <h2>Update Discount Product</h2>
        <form>
          <label for="updateDiscountProductName">Product Name</label>
          <input type="text" id="updateDiscountProductName" name="updateDiscountProductName">
          <label for="updateDiscountProductPrice">Original Price</label>
          <input type="number" id="updateDiscountValue" name="updateDiscountValue">
          <label for="updateDiscountValue">New Price</label>
          <input type="text" id="updateDiscountValue" name="updateDiscountValue">
          <label for="updateDiscountProductImage">Image</label>
          <input type="file" id="updateDiscountProductImage" name="updateDiscountProductImage">
          <button type="submit">Update</button>
        </form>
      </section>
      <section>
        <h2>Delete Discount Product</h2>
        <form>
          <label for="deleteDiscountProductName">Product Name</label>
          <input type="text" id="deleteDiscountProductName" name="deleteDiscountProductName">
          <button type="submit">Delete</button>
        </form>
      </section>
      <section>
        <h2>Add Discount Product</h2>
        <form>
          <label for="addDiscountProductName">Product Name</label>
          <input type="text" id="addDiscountProductName" name="addDiscountProductName">
          <label for="addDiscountProductPrice">Original Price</label>
          <input type="text" id="addDiscountProductPrice" name="addDiscountProductPrice">
          <label for="updateDiscountValue">New Price</label>
          <input type="text" id="updateDiscountValue" name="updateDiscountValue">
          <label for="addDiscountProductImage">Image</label>
          <input type="file" id="addDiscountProductImage" name="addDiscountProductImage">
          <button type="submit">Add</button>
        </form>
      </section>
      <section>
        <h2>UPDATE BLOG, THERE MUST SRTLICLY BE 3 BLOGS ON THE SITE AT ALL TIMES</h2>
        <form>
          <label for="updateBlogName">Blog Name</label>
          <input type="text" id="updateBlogName" name="updateBlogName">
          <label for="updateBlogDescription">Description</label>
          <textarea id="updateBlogDescription" name="updateBlogDescription"></textarea>
          <label for="updateBlogDate">Date</label>
          <input type="date" id="updateBlogDate" name="updateBlogDate">
          <button type="submit">Update</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Flower Visa Admin Dashboard. All rights reserved.</p>
    </footer>
  </div>
</body>

</html>


