<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted values
    $productName = $_POST['addProductName'];
    $productPrice = $_POST['addProductPrice'];
    $productImage = $_POST['addProductImage']; 

    // Move the uploaded image to a desired location
    $targetDir = '../images/';
    $targetFile = $targetDir . $productImage;
    move_uploaded_file ($productImage, $targetFile);

    // Generate the new box with the submitted values
    echo '<div class="box">';
    echo '<div class="image">';
    echo '<img src="' . $targetFile . '" alt="No imGs" class="flagship-products">';
    echo '</div>';
    echo '<div class="content">';
    echo '<h3>' . $productName . '</h3>';
    echo '<div class="price">' . $productPrice . '</div>';
    echo '<div class="stars">';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star"></i>';
    echo '<i class="fas fa-star-half-alt"></i>';
    echo '</div>';
    echo '<i class="fas fa-shopping-cart"></i>';
    echo '</div>';
    echo '</div>';
}
?>