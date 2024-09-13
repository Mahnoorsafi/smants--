<?php
require_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])) {
        // Get user input
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // Start transaction for atomicity
        $conn->begin_transaction();

        // Assuming you have a session or user ID available
        $userId = 1; // Replace with the actual user ID

        // Insert order into orders table
        $orderInsertSql = "INSERT INTO orders (user_id, name, email, address) VALUES ($userId, '$name', '$email', '$address')";
        if ($conn->query($orderInsertSql) === TRUE) {
            $orderId = $conn->insert_id;

            // Update product stock quantity and create order items
            $updateProductSql = "UPDATE product p
                                 JOIN cart_item c ON p.product_id = c.product_id
                                 SET p.stock_quantity = p.stock_quantity - c.quantity
                                 WHERE c.user_id = $userId";
            if ($conn->query($updateProductSql) === TRUE) {
                // Move cart items to order items table
                $moveCartItemsSql = "INSERT INTO order (order_id, product_id, quantity)
                                     SELECT $orderId, product_id, quantity FROM cart_item WHERE user_id = $userId";
                if ($conn->query($moveCartItemsSql) === TRUE) {
                    // Clear cart for the user
                    $clearCartSql = "DELETE FROM cart_item WHERE user_id = $userId";
                    if ($conn->query($clearCartSql) === TRUE) {
                        // Commit transaction if all steps succeed
                        $conn->commit();
                        echo "Checkout successful!";
                    } else {
                        $conn->rollback();
                        echo "Error clearing cart: " . $conn->error;
                    }
                } else {
                    $conn->rollback();
                    echo "Error moving cart items to order items: " . $conn->error;
                }
            } else {
                $conn->rollback();
                echo "Error updating product stock: " . $conn->error;
            }
        } else {
            echo "Error inserting order: " . $conn->error;
        }
    } else {
        echo "Please fill out all fields.";
    }
}

$conn->close();
?>