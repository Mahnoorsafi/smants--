<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smants";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];

    // Fetch cart items for the user
    $cartSql = "SELECT product_id, quantity FROM cart_item WHERE customer_id = $userId";
    $cartResult = $conn->query($cartSql);

    // Begin a transaction to ensure atomicity
    $conn->begin_transaction();

    try {
        // Update product stock quantities
        while ($row = $cartResult->fetch_assoc()) {
            $productId = $row['product_id'];
            $quantity = $row['quantity'];

            $updateSql = "UPDATE product SET stock_quantity = stock_quantity - $quantity WHERE product_id = $productId";
            if ($conn->query($updateSql) === FALSE) {
                throw new Exception("Error updating product stock: " . $conn->error);
            }
        }

        // Commit the transaction
        $conn->commit();

        // Return a success response
        echo json_encode(['status' => 'success']);
    } catch (Exception $e) {
        // Roll back the transaction on error
        $conn->rollback();

        // Return an error response
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}

$conn->close();
?>
