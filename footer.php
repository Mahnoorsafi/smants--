<!DOCTYPE html>
<html lang="en">
 
<body>
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

  .footer {
    padding: 60px 0;
    background-color: #9db6cf; 
    color: #ffffff; 
  }
  
  .footer h5 {
    margin-bottom: 20px;
    font-size: 18px;
  }
  
  .footer p {
    font-size: 16px;
    line-height: 26px;
  }
  
  .footer ul.list-unstyled li {
    font-size: 16px;
    margin-bottom: 10px;
  }
  
  .footer ul.list-unstyled li i {
    margin-right: 10px;
  }
  
  .footer hr {
    border-top-color: #dbd2cf; 
    margin-top: 30px;
    margin-bottom: 30px;
  }
  
  .footer ul.list-inline li {
    display: inline-block;
    margin-right: 15px;
  }
  
  .footer ul.list-inline li a {
    color: #ffffff; /* White text */
    font-size: 28px;
  }
  
  .footer ul.list-inline li a:hover {
    color: #b6cade; 
  }
  
  
  .subscribe-form .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    background-color:#d4e4ed;
  }
  
  .subscribe-form .btn:hover {
    background-color: #dbd2cf; 
  }
  
  .subscribe-form .btn:focus {
    box-shadow: none;
  }
  </style>
  
  <footer class="footer  text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>About Us</h5>
          <p>Welcome to SMANTS. We specialize in stylish apparel and accessories, curated for every occasion. Our goal is simple: to provide you with fashionable options that inspire confidence and elevate your style effortlessly.</p>
        </div>
        <div class="col-md-3">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Contact Us</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-map-marker-alt"></i> Islamic University Fatima Block Basement,Islamabad</li>
            <li><i class="fas fa-phone-alt"></i> +1 234 567 890</li>
            <li><i class="fas fa-envelope"></i> @smants.com</li>
          </ul>
        </div>
      </div>
      <hr>
      
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mx-auto">
        <h6 class="text-uppercase font-weight-bold mb-4">Subscribe to our Newsletter</h6>
        <form class="subscribe-form">
            <div class="input-group">
                <input type="email" class="form-control rounded-0" placeholder="Enter your email address" required>
                <div class="input-group-append">
                    <button class="btn text-light rounded-0" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4 text-md-end mx-auto">
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
      <div class="row">
        <div class="col-md-4 mx-auto"><br><br>
          <p>&copy; 2024 Your SMANTS. All rights reserved.</p>
        </div> 
        
        
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <script src="scripts.js"></script></body>
</html>