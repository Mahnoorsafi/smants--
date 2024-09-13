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

// Fetch wishlist data
$userId = 1; // Replace with the actual user ID
$wishlistSql = "SELECT p.name, p.price, p.image, p.stock_quantity, p.product_id
FROM wishlist w
JOIN product p ON w.product_id = p.product_id";

$wishlistResult = $conn->query($wishlistSql);

$wishlistItems = array();

if ($wishlistResult->num_rows > 0) {
    while ($row = $wishlistResult->fetch_assoc()) {
        $wishlistItems[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wishlist Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-EOvVxqv06abkl0mOSt1jOeDZn-lWHeQWAA&s') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #9DB6CF;
    }

    .heart-icon {
      position: absolute;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
    }

    .wishlist-heading {
      text-align: center;
      color: #fff;
    }

    .product-image {
      max-width: 100px;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.9);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="heart-icon">
    <i class="far fa-heart fa-2x text-danger"></i> <!-- Changed to an empty heart icon -->
  </div>
  <h1 class="wishlist-heading">My Wishlist</h1>
  <div id="wishlistItems">
    <table class="table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
          <th>Add to Cart</th>
        </tr>
      </thead>
      <tbody>
        <!-- Wishlist items will be dynamically added here -->
        <?php
        foreach ($wishlistItems as $item) {
          echo '<tr class="wishlist-item">';
          echo '  <td><img src="' . $item["image"] . '" class="product-image"></td>';
          echo '  <td>' . $item["name"] . '</td>';
          echo '  <td>$' . $item["price"] . '</td>';
          echo '  <td><input type="number" class="form-control quantity" value="' . $item["stock_quantity"] . '" data-product-id="' . $item["product_id"] . '"></td>';
          echo '  <td><button type="button" class="btn btn-danger remove-item" data-product-id="' . $item["product_id"] . '"><i class="fas fa-trash"></i></button></td>';
          echo '  <td><button type="button" class="btn btn-success add-to-cart" data-product-id="' . $item["product_id"] . '"><i class="fas fa-cart-plus"></i></button></td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  // Remove item from wishlist
  $('.remove-item').click(function() {
    var productId = $(this).data('product-id');
    $.post('cart.php', { product_id: productId })
      .done(function(data) {
        alert(data); // Display success message
        window.location.reload(); // Reload the page to update the wishlist
      });
  });

  // Add item to cart
  $('.add-to-cart').click(function() {
    var productId = $(this).data('product-id');
    $.post('wishlist_to_cart.php', { product_id: productId })
      .done(function(data) {
        // Display success message
       
        window.location.href = "addtocart.php";
        // Reload the page to update the wishlist and cart
      });
  });
});
</script>

</body>
</html>