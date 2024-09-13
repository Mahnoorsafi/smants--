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

// Fetch cart data based on user ID
$userId = 1; // Replace with the actual user ID
$cartSql = "SELECT p.name, p.price, p.image,p.stock_quantity,p.product_id
FROM cart_item c
JOIN product p ON c.product_id = p.product_id";

$cartResult = $conn->query($cartSql);

$cartItems = array();

if ($cartResult->num_rows > 0) {
    while ($row = $cartResult->fetch_assoc()) {
        $cartItems[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="shopping-cart.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* Your existing CSS styles */

        
        body {
            padding-top: 20px; /* Adjust padding to push the content down */
            background-color: #d4e4ed;; /* Background color for the body */
        }
        .container {
            background-color:#dbd2cf;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .shopping-cart-heading {
            text-align: center;
            font-weight: bold; /* Makes the text bold */
            margin-top: 20px; /* Top margin */
            margin-bottom: 20px;
            color:white ;/* Bottom margin */
            background-color: #9db6cf;
        }
        .thead{
            background-color: #9db6cf;
        }
        .col-md-10 {
            float: none;
            margin: 0 auto; /* Center the column */
        }
        .btn .glyphicon {
        margin-right: 5px; /* Adds spacing between the icon and the text */
    }
    .btn-danger {
        color:#d9534f ; /* Ensures text is white */
        background-color: #d9534f; /* Standard Bootstrap red */
        border-color: #d43f3a; /* Darker border to match */
    }
    .btn-danger:hover {
        background-color: #c9302c; /* Darker red on hover */
        border-color: #d43f3a;/* Dark border on hover */
    }
    .container1 {
        
            display: flex;
            justify-content: space-around; /* Improved spacing management */
            padding: 20px;
            max-width: 900px; /* Reduced width */
            margin: auto; /* Center aligning the container */
        }
        .mini-cart {
           
            flex-basis: 45%; /* Flex basis for each section */
            padding: 20px;
            margin: 10px;
           
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .promotions {
           
           flex-basis: 45%; /* Flex basis for each section */
           padding: 20px;
           margin: 20px;
          
           box-shadow: 0 2px 4px rgba(0,0,0,0.1);
           border-radius: 5px;
       }
        .promotions{
            background-color:#dbd2cf;
        }
        .mini-cart{
            background-color:#dbd2cf;
        }
        .table {
            margin-top: 20px;
            width: 100%;
        }
        td,th,label,.cart-total{
            color: white;
        }
        .table th, .table td {
            border: 1px solid #9db6cf;
        }
        .text-right { text-align: right; }
        h5, h3 { margin: 0; }
        .btn-block {
            width: 40%; /* Optional: for full width button */
            margin-top: 10px;
            text-align: center;
            background-color: #9db6cf;
        }
        .btn-block:hover{
            background-color:#dbd2cf;
        }
        .btn{
            background-color: #9db6cf;
            border-color: #9db6cf ;
        }
        .btn:hover{
            background-color:#dbd2cf;
            border-color: #dbd2cf;
        }
        #billingModal {
    margin-top: 200px;
    margin-left: 150px;
    margin-right: 200px;
    width: 50%; /* or any desired width */
}
.modal-footer,.modal-header{
    background-color: #dbd2cf;
}
.modal-body{
    background-color:#dbd2cf; 
}
.navbar {
    background-color: #9db6cf; /* Dark purple */
  }
  
  .navbar-brand,
  .navbar-nav .nav-link {
    color: #ffffff; /* White text */
  }
  
  .nav-link.btn ,.nav-link:hover,.nav-link.btn:hover{
    margin-left: 10px; /* Add space between buttons */
    background-color: #d4e4ed;
  }
  .nav-link.btn {
    border-radius: 50px; 
    padding: 10px 25px; 
    font-size: 14px; 
    background-color: #dbd2cf; /* Customize primary button background color */
    
  }
  
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="landing.html"><img src="https://cdn-icons-png.freepik.com/256/15268/15268872.png" alt="SMANTS" width="30" height="30">
              SMANTS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdownProducts" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                            <a class="dropdown-item" href="#category1">women clothing</a>
                            <a class="dropdown-item" href="#category2"> Men Clothing</a>
                            <a class="dropdown-item" href="#category3">kids Clothing</a>
                            <a class="dropdown-item" href="product.php">Accessories</a>
                            <a class="dropdown-item" href="#">Shoes</a>
                            <a class="dropdown-item" href="#">Bags</a>
                            <a class="dropdown-item" href="#">Perfumes</a>
                            <!-- Add more categories as needed -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="addtocart.php"><i class="fa fa-shopping-cart"></i></a>
                  </li> <li class="nav-item">
                    <a class="nav-link" href="wishlist.php"><i class="fa fa-heart"></i></a>
                </li>
                  <li class="nav-item">
                      <a class="nav-link btn  rounded-pill" href="login.php">Login</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <h1 class="shopping-cart-heading"><b>Shopping Cart</b></h1>
    <div class="container">
        <!-- Your existing cart table and summary -->
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead class="thead">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="cartItems">
                        <?php
                        
                        foreach ($cartItems as $item) {
                            echo '<tr class="cart-item">';
                            echo '  <td class="col-sm-8 col-md-6">';
                            echo '      <div class="media">';
                            echo '          <a class="thumbnail pull-left" href="#">';
                            echo '              <img class="media-object" src="' . $item["image"] . '" style="width: 72px; height: 72px;">';
                            echo '          </a>';
                            echo '          <div class="media-body">';
                            echo '              <h4 class="media-heading"><a href="#">' . $item["name"] . '</a></h4>';
                            echo '              <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>';
                            echo '          </div>';
                            echo '      </div>';
                            echo '  </td>';
                            echo '  <td class="col-sm-1 col-md-1" style="text-align: center">';
                            echo '      <input type="number" class="form-control quantity" value="' . $item["stock_quantity"] . '" data-product-id="' . $item["product_id"] . '">';
                            echo '  </td>';
                            echo '  <td class="col-sm-1 col-md-1 text-center price"><strong>$' . $item["price"] . '</strong></td>';
                            echo '  <td class="col-sm-1 col-md-1 text-center total-price"><strong>$' . ($item["price"] * $item["stock_quantity"]) . '</strong></td>';
                            echo '  <td class="col-sm-1 col-md-1">';
                            echo '      <button type="button" class="btn btn-danger remove-item" data-product-id="' . $item["product_id"] . '" title="Remove">';
                            echo '          <i class="fas fa-trash"></i>';
                            echo '      </button>';
                            echo '  </td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container1">
        <!-- Your existing promotions and mini-cart -->

        <div class="promotions">
            <label for="promoCode"><b>Promotion Code</b></label>
            <input type="text" id="promoCode" class="form-control" placeholder="Enter your code">
            <button type="button" class="btn btn-primary btn-block">Apply Coupon</button>
        </div>
        <div class="mini-cart">
            <div class="cart-total"><strong><b>Cart Total</b></strong></div>
            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-right"><strong>Subtotal:</strong></td>
                        <td class="text-right"><strong id="subtotal">$0.00</strong></td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Estimated Shipping:</strong></td>
                        <td class="text-right"><strong id="estimatedShipping">$6.94</strong></td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Total:</strong></td>
                        <td class="text-right"><strong id="total">$0.00</strong></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#billingModal">
                Checkout <span class="glyphicon glyphicon-play"></span>
            </button>
        </div>

    </div>
    <div class="modal fade" id="billingModal" tabindex="-1" role="dialog" aria-labelledby="billingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="billingModalLabel">Billing Summary</h5>
                </div>
                <div class="modal-body">
                    <p>Subtotal: <span id="modalSubtotal">$0.00</span></p>
                    <p>Estimated Shipping: <span id="modalEstimatedShipping">$6.94</span></p>
                    <p>Total: <span id="modalTotal">$0.00</span></p>
                    <form id="checkoutForm">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                        </div>
                        <div class="form-group">
                            <label for="payment">Payment Method:</label>
                            <select class="form-control" id="payment" name="payment" required>
                                <option>Credit Card</option>
                                <option>PayPal</option>
                                <option>Stripe</option>
                            </select>
                        </div>
                        
                    
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-success">Submit Order</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        // Function to update cart total
        function updateCartTotal() {
            var subtotal = 0;
            $('.cart-item').each(function() {
                var quantity = parseInt($(this).find('.quantity').val());
                var price = parseFloat($(this).find('.price').text().replace('$', ''));
                var total = quantity * price;
                $(this).find('.total-price').html('<strong>$' + total.toFixed(2) + '</strong>');
                subtotal += total;
            });
            var shipping = 6.94; // Example shipping cost
            var total = subtotal + shipping;
            $('#subtotal').text('$' + subtotal.toFixed(2));
            $('#total').text('$' + total.toFixed(2));
            $('#modalSubtotal').text('$' + subtotal.toFixed(2));
            $('#modalTotal').text('$' + total.toFixed(2));
            $('#modalEstimatedShipping').text('$' + shipping.toFixed(2));
        }
    
        updateCartTotal();

        // Update cart total whenever the quantity changes
        $('.quantity').on('change', function() {
            updateCartTotal();
        });

        // Remove item from cart
        $('.remove-item').click(function() {
            var productId = $(this).data('product-id');
            $.post('remove_item.php', { product_id: productId })
                .done(function(data) {
                    window.location.reload(true); // Reload page after successful removal
                });
        });
        
    $('#checkoutForm').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize(); // Serialize form data

        // Send an AJAX request
        $.ajax({
    type: 'POST',
    url: 'checkout.php',
    data: formData,
    dataType: 'json',
    success: function(response) {
        if (response.status === 'success') {
            alert('Order placed successfully!');
        } else {
            alert(response.message);
        }
    },
    error: function(xhr, status, error) {
        console.error(xhr.responseText);
        alert('There was an error placing your order. Please try again.');
    }
});
    });
});


function updateProductData() {
    // Send an AJAX request to update the product data in the database
    $.ajax({
        type: 'POST',
        url: 'checkoutfinal.php', // PHP script to update product data
        data: { userId: <?php echo $userId; ?> }, // Pass the user ID to the script
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                console.log('Product data updated successfully.');
            } else {
                console.error('Error updating product data:', response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error updating product data:', xhr.responseText);
        }
    });
} 
</script>

</body>
</html>
