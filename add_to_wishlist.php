<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smants";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = intval($_POST["product_id"]);

    $sql = "INSERT INTO wishlist (product_id) VALUES ($product_id)";
    if ($conn->query($sql) === TRUE) {
        echo "Product added to wishlist successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>