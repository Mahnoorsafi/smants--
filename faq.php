<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="faq.css" rel="stylesheet">
    <style>
      
  
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
  
body{
    background-color: #d4e4ed;
    width: 100%;
    height: 100%;
  }
  .header-image {
    width: 100%;
    height: 350px;
  }
  .about-us-label {
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%, -50%);
    /* background-color: rgba(255, 255, 255, 0.8); */
    padding: 10px 20px;
    border-radius: 5px;
    /* color: white; */
  }
  .about-us-label h1{
   color: black;
  }
  
.main{
    background-color: #9db6cf;
}
.pink-background {
    background-color: #9db6cf;
    padding: 20px;
    border-radius: 5px;
    cursor: pointer;
}
.pink-background.h4{
    color: white;
}
.icon-large {
    font-size: 36px;
    margin-bottom: 20px;
}
.topRow #trackingInput {
width: 100%; /* Full width on smaller screens */
max-width: 300px; /* Maximum width on larger screens */
}

@media (min-width: 768px) { /* For medium and larger screens */
.topRow #trackingInput {
max-width: 400px; /* Slightly larger width for medium screens and up */
}
}

.row {
    margin: 0% 10% 3% 10%;
}
.bg-pink {
    background-color: #9db6cf;
}
.topRow {
    padding: 0% 5%;
    margin: 2% 0%;
}
.btn{
    margin-left: 0px;
    background-color: #9db6cf;
    color: white;
   
    
}
.btn:hover{
    background-color:#dbd2cf;
}

.btn-link {
width: 100%; /* Ensures the button stretches to full container width */
text-align: left; /* Aligns the text to the left */
color:white; /* Ensures the text color is black for visibility */
font-weight: bold; /* Optional: makes the font bold */
}

.btn-link .fa {
float: right; /* Positions the icon to the right */
margin-left: 10px; /* Adds space between the text and the icon */
}

.btn-link[aria-expanded="true"] .fa {
transform: rotate(180deg);
}

.btn-link[aria-expanded="false"] .fa {
transform: rotate(0deg);
}
.fa
{
    color: white;
}
h4,#l1,h1,p,h5{
    color: white;
}
.modal-header,.modal-content{
    background-color: #d4e4ed;
}
.card-body{
    background-color:#dbd2cf;
    color: white;
}
.modal {
    margin-top: 150px;
    margin-left: 380px;
    margin-right: 150px;
    width: 50%; /* or any desired width */
}

    </style>
    <script>
        $(document).ready(function() {
            $('.collapse').on('show.bs.collapse', function() {
                $(this).parent().find('.fa').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            }).on('hide.bs.collapse', function() {
                $(this).parent().find('.fa').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            });
        });
        </script>
    
</head>
<body>
  
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
                            <a class="dropdown-item" href="product.php">women clothing</a>
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
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQFhCPEgn16SQGSYVINNe6jdONLX_55dc4wgykRjV6rA&s" alt="Header Image" class="header-image"
            height="120px">
            
    </header> 
    
    <section>
    <div class="main">
    <div class="container">
        <!-- FAQ Section -->
        <div class="row mb-4-custom">
            <div class="col-md-12 text-center">
                <h1 >FAQ! Need help?</h1>
                <p>We have got you covered.</p>
            </div>
        </div>

    </section>
    <br/>
      <!-- Top Row for Search -->
      <section>
<div class="row justify-content-center bg-pink">
    <div class="col-md-12 text-center topRow">
        <form class="form-inline justify-content-center">
            <label for="trackingInput" id="l1" class="mr-4">Track Your Order</label>
            <input type="text" id="trackingInput" class="form-control form-control-lg mr-3" size="30"> <!-- Input field sized for 30 characters -->
            <button type="submit" class="btn btn-primary btn-lg">Track</button>
        </form>
    </div>
</div>
</section>
<br/>

<section>
        <!-- Six Separate Pink Divs for Modals -->
        <div class="row">
            <!-- Orders -->
            <div id="r" class="col-md-4 mb-4" onclick="$('#ordersModal').modal('show');">
                <div class="pink-background">
                    <i class="fa fa-shopping-cart icon-large"></i>
                    <h4>Orders</h4>
                </div>
            </div>
            <!-- Delivery -->
            <div id="r" class="col-md-4 mb-4" onclick="$('#deliveryModal').modal('show');">
                <div class="pink-background">
                    <i class="fa fa-truck icon-large"></i>
                    <h4>Delivery</h4>
                </div>
            </div>
            <!-- Returns & Funds -->
            <div id="r" class="col-md-4 mb-4" onclick="$('#returnsModal').modal('show');">
                <div class="pink-background">
                    <i class="fa fa-undo icon-large"></i>
                    <h4>Returns & Funds</h4>
                </div>
            </div>
            
            <!-- Promotion -->
            <div id="r" class="col-md-4 mb-4" onclick="$('#promotionModal').modal('show');">
                <div class="pink-background">
                    <i class="fa fa-tags icon-large"></i>
                    <h4>Promotion</h4>
                </div>
            </div>
            
            <!-- Product & Stock -->
            <div id="r" class="col-md-4 mb-4" onclick="$('#productModal').modal('show');">
                <div class="pink-background">
                    <i class="fa fa-cubes icon-large"></i>
                    <h4>Product & Stock</h4>
                </div>
            </div>
            
            <!-- Technical -->
            <div id="r" class="col-md-4 mb-4" onclick="$('#technicalModal').modal('show');">
                <div class="pink-background">
                    <i class="fa fa-cog icon-large"></i>
                    <h4>Technical</h4>
                </div>
            </div>
            
        </div>
    </section>
        <!-- Modals -->
<!-- Orders Modal -->
<div class="modal fade" id="ordersModal" tabindex="-1" aria-labelledby="ordersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ordersModalLabel">Orders FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="ordersFaqAccordion">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How can I track my order? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#ordersFaqAccordion">
                            <div class="card-body">
                                You can track your order by entering your order ID on our website under the "Track My Order" section.
                            </div>
                        </div>
                    </div>
                   
                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are your delivery charges? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#ordersFaqAccordion">
                            <div class="card-body">
                                Delivery charges vary depending on the size of your order and your delivery location. Detailed information can be found on our Shipping Policy page.
                            </div>
                        </div>
                    </div>
                   
                    <!-- Question 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I modify my order after placing it? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#ordersFaqAccordion">
                            <div class="card-body">
                                Order modifications are possible only within the first 24 hours after placing an order or before it has been shipped, whichever is earlier.
                            </div>
                        </div>
                    </div>
                    <br/>
                    <!-- Question 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is your return policy? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#ordersFaqAccordion">
                            <div class="card-body">
                                We accept returns within 30 days of receipt provided the items are unused and in original packaging. Return procedures can be found on our Returns page.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How do I cancel my order? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <br/>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#ordersFaqAccordion">
                            <div class="card-body">
                                You can cancel your order directly from your account dashboard if it has not yet been processed for shipping. For further assistance, contact customer support.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Optional footer if needed -->
            </div>
        </div>
    </div>
</div>

       <!-- Returns and Funds Modal -->
<div class="modal fade" id="returnsModal" tabindex="-1" aria-labelledby="returnsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="returnsModalLabel">Returns & Funds FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="returnsFaqAccordion">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#returnOne" aria-expanded="false" aria-controls="returnOne">
                                    How do I return an item I purchased? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="returnOne" class="collapse" aria-labelledby="headingOne" data-parent="#returnsFaqAccordion">
                            <div class="card-body">
                                To return an item, please visit our Returns Center where you can process a return based on our guidelines and obtain a shipping label.
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#returnTwo" aria-expanded="false" aria-controls="returnTwo">
                                    What is the timeframe for receiving a refund? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="returnTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#returnsFaqAccordion">
                            <div class="card-body">
                                Refunds typically take 7-10 business days to process once we have received the returned item(s).
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#returnThree" aria-expanded="false" aria-controls="returnThree">
                                    Are there items that cannot be returned? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="returnThree" class="collapse" aria-labelledby="headingThree" data-parent="#returnsFaqAccordion">
                            <div class="card-body">
                                Yes, certain items such as personalized goods, perishable products, or health and personal care items are not eligible for return.
                            </div>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#returnFour" aria-expanded="false" aria-controls="returnFour">
                                    What should I do if my refund is incorrect? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="returnFour" class="collapse" aria-labelledby="headingFour" data-parent="#returnsFaqAccordion">
                            <div class="card-body">
                                If you believe there has been an error in your refund, please contact our customer service department immediately to resolve the issue.
                            </div>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#returnFive" aria-expanded="false" aria-controls="returnFive">
                                    How are returns processed for damaged or incorrect items? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="returnFive" class="collapse" aria-labelledby="headingFive" data-parent="#returnsFaqAccordion">
                            <div class="card-body">
                                For damaged or incorrect items, we offer a full refund or exchange without additional shipping charges. Please report these issues within 48 hours of delivery.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Optional footer if needed -->
            </div>
        </div>
    </div>
</div>

<!-- Delivery Modal -->
<div class="modal fade" id="deliveryModal" tabindex="-1" aria-labelledby="deliveryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deliveryModalLabel">Delivery FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="deliveryFaqAccordion">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#deliveryOne" aria-expanded="false" aria-controls="deliveryOne">
                                    What are the delivery options available? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="deliveryOne" class="collapse" aria-labelledby="headingOne" data-parent="#deliveryFaqAccordion">
                            <div class="card-body">
                                We offer standard, expedited, and overnight delivery options. Availability may vary based on your location.
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#deliveryTwo" aria-expanded="false" aria-controls="deliveryTwo">
                                    How can I track my shipment? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="deliveryTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#deliveryFaqAccordion">
                            <div class="card-body">
                                You can track your shipment using the tracking number provided in your shipment confirmation email or directly in your account on our website.
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#deliveryThree" aria-expanded="false" aria-controls="deliveryThree">
                                    What is the estimated delivery time? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="deliveryThree" class="collapse" aria-labelledby="headingThree" data-parent="#deliveryFaqAccordion">
                            <div class="card-body">
                                Estimated delivery times are typically 3-5 business days for standard shipping, 1-3 business days for expedited shipping, and 1 business day for overnight shipping.
                            </div>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#deliveryFour" aria-expanded="false" aria-controls="deliveryFour">
                                    What happens if I am not home during delivery? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="deliveryFour" class="collapse" aria-labelledby="headingFour" data-parent="#deliveryFaqAccordion">
                            <div class="card-body">
                                If you're not home during delivery, most carriers will leave a notice card and try to redeliver the next day. Alternatively, you can pick it up from a local depot if that's more convenient.
                            </div>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#deliveryFive" aria-expanded="false" aria-controls="deliveryFive">
                                    Can I change the delivery address after my order has been shipped? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="deliveryFive" class="collapse" aria-labelledby="headingFive" data-parent="#deliveryFaqAccordion">
                            <div class="card-body">
                                Once an order has shipped, we are unable to change the delivery address. Please ensure your address is correct at the time of checkout.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Removed close button as per previous instruction -->
            </div>
        </div>
    </div>
</div>

<!-- Product and Stock Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Product & Stock FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="productFaqAccordion">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#productOne" aria-expanded="false" aria-controls="productOne">
                                    How can I find out if a product is in stock? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="productOne" class="collapse" aria-labelledby="headingOne" data-parent="#productFaqAccordion">
                            <div class="card-body">
                                You can check the stock status on each product page, which is updated in real-time to reflect available quantities.
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#productTwo" aria-expanded="false" aria-controls="productTwo">
                                    What should I do if a product is out of stock? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="productTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#productFaqAccordion">
                            <div class="card-body">
                                If a product is out of stock, you can often sign up for notifications on the product page to be alerted when it becomes available again.
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#productThree" aria-expanded="false" aria-controls="productThree">
                                    How often do you restock items? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="productThree" class="collapse" aria-labelledby="headingThree" data-parent="#productFaqAccordion">
                            <div class="card-body">
                                Restocking depends on the supplier and product demand. Typically, popular items are restocked more frequently, usually within 1-2 weeks.
                            </div>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#productFour" aria-expanded="false" aria-controls="productFour">
                                    Can I be notified when a product is back in stock? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="productFour" class="collapse" aria-labelledby="headingFour" data-parent="#productFaqAccordion">
                            <div class="card-body">
                                Yes, on the product page, you can subscribe to our stock notification service by entering your email. You'll receive an alert as soon as the item is restocked.
                            </div>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#productFive" aria-expanded="false" aria-controls="productFive">
                                    Are there any limitations on the quantity of products I can purchase? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="productFive" the "collapse" aria-labelledby="headingFive" data-parent="#productFaqAccordion">
                            <div class="card-body">
                                Yes, some high-demand products may have purchase limits to ensure equitable distribution. Check the product details for specific purchase limits.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Optional footer if needed -->
            </div>
        </div>
    </div>
</div>

<!-- Technical Modal -->
<div class="modal fade" id="technicalModal" tabindex="-1" aria-labelledby="technicalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="technicalModalLabel">Technical Support FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="technicalFaqAccordion">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#techOne" aria-expanded="false" aria-controls="techOne">
                                    How can I troubleshoot login issues? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="techOne" class="collapse" aria-labelledby="headingOne" data-parent="#technicalFaqAccordion">
                            <div class="card-body">
                                If you're experiencing login issues, ensure that you are using the correct username and password. Also, check to see if your account is active and not locked due to too many unsuccessful login attempts.
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#techTwo" aria-expanded="false" aria-controls="techTwo">
                                    What should I do if I encounter an error during checkout? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="techTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#technicalFaqAccordion">
                            <div class="card-body">
                                If you encounter an error during checkout, try refreshing the page or clearing your browser cache. If the problem persists, please contact our technical support for assistance.
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#techThree" aria-expanded="false" aria-controls="techThree">
                                    Are there any system requirements for using your website? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="techThree" class="collapse" aria-labelledby="headingThree" data-parent="#technicalFaqAccordion">
                            <div class="card-body">
                                Our website is optimized for modern web browsers such as Chrome, Firefox, Safari, and Edge. We recommend using the latest version of your browser for the best experience.
                            </div>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#techFour" aria-expanded="false" aria-controls="techFour">
                                    How do I update my account information? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="techFour" class="collapse" aria-labelledby="headingFour" data-parent="#technicalFaqAccordion">
                            <div class="card-body">
                                You can update your account information by logging into your account and navigating to the account settings page where you can edit your details.
                            </div>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#techFive" aria-expanded="false" aria-controls="techFive">
                                    Who can I contact if I need further technical assistance? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="techFive" the "collapse" aria-labelledby="headingFive" data-parent="#technicalFaqAccordion">
                            <div class="card-body">
                                For further technical assistance, you can reach out to our support team via the contact us page, or you can directly call our support hotline provided on our website.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Optional footer can be included if necessary -->
            </div>
        </div>
    </div>
</div>

<!-- Promotions Modal -->
<div class="modal fade" id="promotionModal" tabindex="-1" aria-labelledby="promotionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="promotionModalLabel">Promotions FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="promotionFaqAccordion">
                    <!-- Question 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#promoOne" aria-expanded="false" aria-controls="promoOne">
                                    How can I find out about upcoming promotions? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="promoOne" class="collapse" aria-labelledby="headingOne" data-parent="#promotionFaqAccordion">
                            <div class="card-body">
                                Sign up for our newsletter to receive updates about new promotions, or check the 'Promotions' section on our website regularly.
                            </div>
                        </div>
                    </div>
                    <!-- Question 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#promoTwo" aria-expanded="false" aria-controls="promoTwo">
                                    What are the terms and conditions of the current offers? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="promoTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#promotionFaqAccordion">
                            <div class="card-body">
                                The terms and conditions of each promotion can be found on the specific offer details page. Please read them carefully before participating.
                            </div>
                        </div>
                    </div>
                    <!-- Question 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#promoThree" aria-expanded="false" aria-controls="promoThree">
                                    Can I combine different promotions on a single order? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="promoThree" class="collapse" aria-labelledby="headingThree" data-parent="#promotionFaqAccordion">
                            <div class="card-body">
                                Generally, promotions cannot be combined. Only one discount code can be used per order unless otherwise specified.
                            </div>
                        </div>
                    </div>
                    <!-- Question 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#promoFour" aria-expanded="false" aria-controls="promoFour">
                                    Do promotions apply to all items? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="promoFour" the "collapse" aria-labelledby="headingFour" data-parent="#promotionFaqAccordion">
                            <div class="card-body">
                                Promotions generally apply to most of our products, however, some items may be excluded due to brand restrictions or existing discounts.
                            </div>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#promoFive" aria-expanded="false" aria-controls="promoFive">
                                    What should I do if a promotion code isn’t working? <i class="fa fa-chevron-down float-right"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="promoFive" the "collapse" aria-labelledby="headingFive" data-parent="#promotionFaqAccordion">
                            <div class="card-body">
                                If a promotion code isn't working, check the code's validity dates and terms. If it should be active and applicable, please contact our customer support for assistance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Optional footer if needed -->
            </div>
        </div>
    </div>
</div>




        <!-- Copy and adapt the above modal structure for other sections: Delivery, Returns & Funds, Promotion, Product & Stock, Technical -->
        <!-- Replace 'ordersModal' with 'deliveryModal', 'returnsModal', etc. in each modal and customize the content as needed -->

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>