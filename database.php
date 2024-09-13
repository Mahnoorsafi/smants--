<?php
// Establish connection to your database
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

// Fetch products from the database
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

// Prepare an array to store product data
$products = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Close the database connection
$conn->close();

// Encode the products array as JSON and send it to the frontend
header('Content-Type: application/json');
echo json_encode($products);
?>
