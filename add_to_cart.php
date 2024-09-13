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

// Insert the product into the cart table
$insertSql = "INSERT INTO cart_item (product_id) VALUES ($productId)";

if ($conn->query($insertSql) === TRUE) {
    echo "Product added to cart successfully";
} else {
    echo "Error adding product to cart: " . $conn->error;
}

$conn->close();
?>




