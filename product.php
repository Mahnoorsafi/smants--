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

// Fetch unique categories from the database
$categorySql = "SELECT DISTINCT category_id FROM product";
$categoryResult = $conn->query($categorySql);

$categories = array();

if ($categoryResult->num_rows > 0) {
    while($row = $categoryResult->fetch_assoc()) {
        $categories[] = $row["category_id"];
    }
}

// Fetch products from the database
$productSql = "SELECT * FROM product";
$productResult = $conn->query($productSql);

$products = array();

if ($productResult->num_rows > 0) {
    while($row = $productResult->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close(); // Close the connection after fetching data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Product Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom CSS */
        body {
            padding-top: 60px;
            background: #d4e4ed;
        }
        .product-card {
            border: 1px solid #9db6cf;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            background-color: #9db6cf;
        }
        .product-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            max-width: 100%;
            height: auto;
        }
        .sidebar {
            border: 1px solid #9db6cf;
            border-radius: 8px;
            background-color: #9db6cf;
            padding: 20px;
            margin-bottom: 20px;
        }
        .sidebar h4 {
            margin-bottom: 20px;
        }
        .sidebar .list-group-item {
            cursor: pointer;
            background-color: #9db6cf;
            transition: all 0.3s ease;
        }
        .sidebar .list-group-item:hover {
            background-color: #dbd2db;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .btn-custom {
            background-color: #9db6cf;
            color: white;
        }
        .btn-custom:hover {
            background-color: #dbd2cf;
        }
        .modal-dialog {
            margin: 100px auto;
        }
        .icon-btn {
            background: none;
            border: none;
            color: #000;
            cursor: pointer;
            font-size: 1.5em;
            margin: 0 5px;
            transition: color 0.3s ease;
        }
        .icon-btn:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Search Bar -->
    <div class="input-group mb-3 container">
        <input type="text" class="form-control" placeholder="Search by product or category" id="searchInput">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="searchButton">Search</button>
        </div>
    </div>

    <!-- Product Grid with Sidebar -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2">
                <div class="sidebar">
                    <h4>Categories</h4>
                    <ul class="list-group" id="categoryList">
                        <li class="list-group-item" data-category="All">All</li>
                        <li class="list-group-item" data-category="Category 1">Women</li>
                        <li class="list-group-item" data-category="Category 2">Men</li>
                        <li class="list-group-item" data-category="Category 3">Kids</li>
                        <?php
                        foreach ($categories as $category) {
                            echo '<li class="list-group-item" data-category="' . $category . '">' . $category . '</li>';
                        }
                        ?>
                    </ul>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.ebayimg.com/images/g/b3kAAOSwJnthL8OL/s-l1600.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i5.walmartimages.com/asr/791e13bf-dfef-49ad-afc5-bbbfcc94c485.7fe16cd720ac96691a6879d07ac8cd1e.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwRnTY1sKLWmEfJtwQCqu7tj_RXiLb8SNfWXVFFoWURIfJC94srX5uCjbht7r2O4GGKfM&usqp=CAU" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
            </div>

            <div class="col-md-9">
        <h2 class="text-center mb-4">NEW Products</h2>
        <div id="productCarousel" class="carousel slide mb-4" data-ride="carousel">
          <div class="carousel-inner">
            <!-- Product 1 Carousel Item -->
            <div class="carousel-item active">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvS8XRlRIzQ_lvu0EZy88MrE-UkMYfDTPjYQ&usqp=CAU" class="d-block w-100" alt="Product 1">
            </div>
            <!-- Product 2 Carousel Item -->
            <div class="carousel-item">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRezkhZEGyU-SbkR5X1RGxo8OxQFLfKonocyg&usqp=CAU" class="d-block w-100" alt="Product 2">
            </div>
            <!-- Product 3 Carousel Item -->
            <div class="carousel-item">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7zz2asm15b0_oyxlYKuP68nn6Vs7vu_tCOw&usqp=CAU" class="d-block w-100" alt="Product 3">
            </div>
            <!-- Add more product images here -->
          </div>
          <!-- Previous and Next Buttons -->
          <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
                <!-- Product List -->
                <h2 class="text-center mb-4">Trending Products</h2>
                <div class="row" id="productList">
                    <?php
                    foreach ($products as $product) {
                        echo '<div class="col-md-4">';
                        echo '  <div class="product-card bg-light">';
                        echo '    <img src="' . $product["image"] . '" alt="' . $product["name"] . '" class="product-image">';
                        echo '    <h5 class="mt-2">' . $product["name"] . '</h5>';
                        echo '    <p class="text-muted">Price: $' . $product["price"] . '</p>';
                        echo '    <div class="d-flex justify-content-between align-items-center">';
                        echo '      <button class="icon-btn" onclick="addToWishlist(' . $product["product_id"] . ')"><i class="fas fa-heart"></i></button>';
                        echo '      <button class="icon-btn" onclick="addToCart(' . $product["product_id"] . ')"><i class="fas fa-shopping-cart"></i></button>';
                        echo '    </div>';
                        echo '    <button class="btn btn-secondary mt-2" onclick="showProductModal(\'' . $product["name"] . '\', ' . $product["price"] . ', \'' . $product["image"] . '\')">Product Details</button>';
                        echo '  </div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" id="modalProductImage" class="img-fluid mb-3" alt="Product Image">
                    <h5 id="modalProductName"></h5>
                    <p class="text-muted" id="modalProductPrice"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom" id="modalAddToCartButton">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Function to add product to wishlist
        function addToWishlist(productId) {
            $.ajax({
                url: 'add_to_wishlist.php',
                type: 'POST',
                data: { product_id: productId },
                success: function(response) {
                  window.location.href = 'wishlist.php';
                },
                error: function() {
                    alert('Error adding product to wishlist');
                }
            });
        }

        // Function to add product to cart
        function addToCart(productId) {
            $.ajax({
                url: 'add_to_cart.php',
                type: 'POST',
                data: { product_id: productId },
                success: function(response) {
                  window.location.href = 'addtocart.php';
                },
                error: function() {
                    alert('Error adding product to cart');
                }
            });
        }

        // Function to display products based on category
        function displayProducts(category) {
            $('#productList').empty();
            var filteredProducts = <?php echo json_encode($products); ?>.filter(function(product) {
                return category === 'All' || product.category_id === category;
            });
            filteredProducts.forEach(function(product) {
                var card = $(
                    '<div class="col-md-4">' +
                        '<div class="product-card bg-light">' +
                            '<img src="' + product.image + '" alt="' + product.name + '" class="product-image">' +
                            '<h5 class="mt-2">' + product.name + '</h5>' +
                            '<p class="text-muted">Price: $' + product.price + '</p>' +
                            '<div class="d-flex justify-content-between align-items-center">' +
                                '<button class="icon-btn" onclick="addToWishlist(' + product.product_id + ')"><i class="fas fa-heart"></i></button>' +
                                '<button class="icon-btn" onclick="addToCart(' + product.product_id + ')"><i class="fas fa-shopping-cart"></i></button>' +
                            '</div>' +
                            '<button class="btn btn-secondary mt-2" onclick="showProductModal(\'' + product.name + '\', ' + product.price + ', \'' + product.image + '\')">Product Details</button>' +
                        '</div>' +
                    '</div>'
                );
                $('#productList').append(card);
            });
        }

        // Initial display of all products
        displayProducts('All');

        // Category filter functionality
        $('#categoryList .list-group-item').on('click', function() {
            var category = $(this).data('category');
            displayProducts(category);
        });

        // Search functionality
        $('#searchButton').on('click', function() {
            var query = $('#searchInput').val().toLowerCase();
            var category = $('#categoryList .list-group-item.active').data('category');
            displayProducts(category, query);
        });

        // Trigger search when input changes
        $('#searchInput').on('input', function() {
            var query = $(this).val().toLowerCase();
            var category = $('#categoryList .list-group-item.active').data('category');
            displayProducts(category, query);
        });

        // Add 'active' class to selected category
        $('#categoryList .list-group-item').on('click', function() {
            $('#categoryList .list-group-item').removeClass('active');
            $(this).addClass('active');
        });

        // Function to show product modal with details
        function showProductModal(name, price, image) {
            $('#modalProductImage').attr('src', image);
            $('#modalProductName').text(name);
            $('#modalProductPrice').text('Price: $' + price);
            $('#modalAddToCartButton').off('click').on('click', function() {
                addToCart(name);
                $('#productModal').modal('hide');
            });
            $('#productModal').modal('show');
        }
    </script>

</body>
</html>
