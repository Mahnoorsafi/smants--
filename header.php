<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
/* Custom CSS */
body {
    padding-top: 56px; /* Adjust based on navbar height */
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
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="product.html" id="navbarDropdownProducts" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                            <a class="dropdown-item" href="#category1">women clothing</a>
                            <a class="dropdown-item" href="#category2"> Men Clothing</a>
                            <a class="dropdown-item" href="#category3">kids Clothing</a>
                            <a class="dropdown-item" href="#">Accessories</a>
                            <a class="dropdown-item" href="#">Shoes</a>
                            <a class="dropdown-item" href="#">Bags</a>
                            <a class="dropdown-item" href="#">Perfumes</a>
                            <!-- Add more categories as needed -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="addtocart.html"><i class="fa fa-shopping-cart"></i></a>
                  </li> <li class="nav-item">
                    <a class="nav-link" href="wishlist.html"><i class="fa fa-heart"></i></a>
                </li>
                  <li class="nav-item">
                      <a class="nav-link btn  rounded-pill" href="login.html">Login</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<script src="scripts.js"></script>
</body></html>