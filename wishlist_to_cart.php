<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smants";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve product ID from the AJAX request
$productId = $_POST['product_id'];

// Start transaction
$conn->begin_transaction();

try {
    // Check if the product exists in the wishlist
    $checkWishlistSql = "SELECT * FROM wishlist WHERE product_id = ?";
    $stmt = $conn->prepare($checkWishlistSql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product exists in the wishlist, proceed to remove it and add to cart

        // Remove the product from the wishlist
        $deleteWishlistSql = "DELETE FROM wishlist WHERE product_id = ?";
        $stmt = $conn->prepare($deleteWishlistSql);
        $stmt->bind_param("i", $productId);
        $stmt->execute();

        // Insert the product into the cart
        $insertCartSql = "INSERT INTO cart_item (product_id) VALUES (?)";
        $stmt = $conn->prepare($insertCartSql);
        $stmt->bind_param("i", $productId);
        $stmt->execute();

        // Commit transaction
        $conn->commit();
        echo "Product moved from wishlist to cart successfully";
    } else {
        // Product not found in the wishlist
        echo "Product not found in wishlist";
    }

    $stmt->close();
} catch (Exception $e) {
    // Rollback transaction in case of error
    $conn->rollback();
    echo "Error moving product from wishlist to cart: " . $e->getMessage();
}

$conn->close();
?>