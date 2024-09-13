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

    $sql = "DELETE FROM wishlist WHERE product_id = $product_id";
    if ($conn->query($sql) === TRUE) {
        echo "Product removed from wishlist successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>