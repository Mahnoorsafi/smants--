<?php
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

// Check if the product ID is set in the POST request
if(isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    
    // Delete the item from the cart based on the product ID
    $deleteSql = "DELETE FROM cart_item WHERE product_id = $productId";
    if ($conn->query($deleteSql) === TRUE) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => "Error removing item from cart: " . $conn->error]);
    }
}

$conn->close();
?>
