<!-- index.php -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Website</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    /* Custom CSS */
    body {
      padding-top: 56px;
      /* Adjust based on navbar height */
    }

    .navbar {
      background-color: #9db6cf;
      /* Dark purple */
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff;
      /* White text */
    }

    .nav-link.btn,
    .nav-link:hover,
    .nav-link.btn:hover {
      margin-left: 10px;
      /* Add space between buttons */
      background-color: #d4e4ed;
    }

    .nav-link.btn {
      border-radius: 50px;
      padding: 10px 25px;
      font-size: 14px;
      background-color: #dbd2cf;
      /* Customize primary button background color */

    }

    .jumbotron {
      background-image: url('https://i.pinimg.com/736x/d6/1f/dc/d61fdccb3b639bebc60f620388d7bbec.jpg');
      background-size: cover;
      color: #ffffff;
      /* White text */
      padding: 100px 0;
    }

    .jumbotron h1 {
      font-size: 3.5rem;
      font-weight: bold;
    }

    .jumbotron p {
      font-size: 1.5rem;
      font-weight: bold;
      color: #ffffff;
    }

    .category {
      padding: 30px 0;
      background-color: #d4e4ed;
      color: #ffffff;
    }

    .category .card {
      background-color: #b6cade;
    }

    .category .btn {
      background-color: #dbd2cf;
    }

    .category .btn:hover {
      background-color: #d4e4ed;
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
      color: #ffffff;
      /* White text */
      font-size: 28px;
    }

    .footer ul.list-inline li a:hover {
      color: #b6cade;
    }


    .subscribe-form .btn {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      background-color: #d4e4ed;
    }

    .subscribe-form .btn:hover {
      background-color: #dbd2cf;
    }

    .subscribe-form .btn:focus {
      box-shadow: none;
    }

    .modal-icon {
      font-size: 1.5em;
      /* Increase the size of the icons */
      margin-right: 15px;
      /* Add space between the icons */
    }

    .icon-container {
      display: flex;
      align-items: center;
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


  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Welcome to our SMANTS</h1>
      <p class="text-bold text-uppercase">Discover endless possibilities at SMANTS! Shop now for all your needs. Fast,
        easy, and secure shopping experience. Join us today!</p>
      <p>

        <a href="#" class="btn bg-info rounded-pill my-2" data-toggle="modal" data-target="#welcomeMessage">SMANTS</a>
      </p>
    </div>
  </section>
  <div id="welcomeMessage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Modal body content -->
          <h5>Welcome aboard! 🎉</h5>
          <p>" Dive into a world of endless options. Let's get started on your journey with us."</p>
          <p> "Fill out the form below to unlock exclusive deals and stay updated on the latest trends."</p>
          <p> "Your adventure begins here!" 🚀✨</p>
        </div>
      </div>
    </div>
  </div>
  <div id="category3" class="category">
    <div class="container mt-5 pt-5">
      <h2>WOMEN CLOTHING</h2>
      <div id="womenCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <!-- First Slide of Women's Clothing -->
              <div class="col-md-4">
                <div class="card">
                  <img src="https://i.ebayimg.com/images/g/b3kAAOSwJnthL8OL/s-l1600.jpg" alt="Product 1"
                    class="card-img-top rounded">
                  <div class="card-body">
                    <h5 class="card-title">Denim full dress</h5>
                    <button class="btn btn-primary"
                      onclick="showDetails('https://i.ebayimg.com/images/g/b3kAAOSwJnthL8OL/s-l1600.jpg', 'Denim Full Dress', 'Denim full dress with a classic look.')">View
                      details »</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://i.pinimg.com/736x/e5/62/f8/e562f8d29d63d1a55bd481db73737a31.jpg" alt="Product 2"
                    class="card-img-top rounded">
                  <div class="card-body">
                    <h5 class="card-title">Bright simple full-length frock</h5>
                    <button class="btn btn-primary"
                      onclick="showDetails('https://i.pinimg.com/736x/e5/62/f8/e562f8d29d63d1a55bd481db73737a31.jpg', 'Bright Simple Frock', 'Bright simple full-length frock for casual occasions.')">View
                      details »</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img
                    src="https://i5.walmartimages.com/asr/791e13bf-dfef-49ad-afc5-bbbfcc94c485.7fe16cd720ac96691a6879d07ac8cd1e.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF"
                    alt="Product 3" class="card-img-top rounded">
                  <div class="card-body">
                    <h5 class="card-title">Dark green embroidery dress</h5>
                    <button class="btn btn-primary"
                      onclick="showDetails('https://i5.walmartimages.com/asr/791e13bf-dfef-49ad-afc5-bbbfcc94c485.7fe16cd720ac96691a6879d07ac8cd1e.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF', 'Dark Green Dress', 'Dark green dressS.')">View
                      details »</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <!-- Second Slide of Women's Clothing -->
              <div class="col-md-4">
                <div class="card">
                  <img src="https://aestheticallychicbeauty.com/wp-content/uploads/2018/04/L_g0073904493.jpg"
                    alt="Product 4" class="card-img-top rounded">
                  <div class="card-body">
                    <h5 class="card-title">Dull pink crochet with skirt</h5>
                    <button class="btn btn-primary"
                      onclick="showDetails('https://aestheticallychicbeauty.com/wp-content/uploads/2018/04/L_g0073904493.jpg', 'Pink Crochet Skirt', 'Dull pink crochet top with a matching skirt, perfect for a summer day out.')">View
                      details »</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="https://img.joomcdn.net/8bbcef85de05fd6f0153ea26c05bf55bfc63a730_original.jpeg"
                    alt="Product 4" class="card-img-top rounded">
                  <div class="card-body">
                    <h5 class="card-title">Dull pink crochet with skirt</h5>
                    <button class="btn btn-primary"
                      onclick="showDetails('https://img.joomcdn.net/8bbcef85de05fd6f0153ea26c05bf55bfc63a730_original.jpeg', 'Pink Crochet Skirt', 'Dull pink crochet top with a matching skirt, perfect for a summer day out.')">View
                      details »</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img
                    src="https://i5.walmartimages.com/seo/DanceeMangoo-Woman-Jacket-Spring-Small-Suit-Coats-and-Jackets-for-Women-Clothing-Korean-Fashion-Casual-Short-Trench-Coat-Gilet-Femme-Zm220_235a0690-83f4-40b7-b187-1d755f4c2025.f746886784ad1b484c8a7fb3249d80f3.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF"
                    alt="Product 4" class="card-img-top rounded">
                  <div class="card-body">
                    <h5 class="card-title">Dull pink crochet with skirt</h5>
                    <button class="btn btn-primary"
                      onclick="showDetails('https://i5.walmartimages.com/seo/DanceeMangoo-Woman-Jacket-Spring-Small-Suit-Coats-and-Jackets-for-Women-Clothing-Korean-Fashion-Casual-Short-Trench-Coat-Gilet-Femme-Zm220_235a0690-83f4-40b7-b187-1d755f4c2025.f746886784ad1b484c8a7fb3249d80f3.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF', 'Pink Crochet Skirt', 'Dull pink crochet top with a matching skirt, perfect for a summer day out.')">View
                      details »</button>
                  </div>
                </div>
              </div>
              <!-- Add more cards for the second slide here -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#womenCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#womenCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div id="category3" class="category">
    <div class="container">
      <h2>KIDS CLOTHING</h2>
      <div class="card-deck">
        <!-- Carousel -->
        <div id="kidsCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
              <div class="row">
                <!-- First Image -->
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwRnTY1sKLWmEfJtwQCqu7tj_RXiLb8SNfWXVFFoWURIfJC94srX5uCjbht7r2O4GGKfM&usqp=CAU"
                      alt="Product 1" class="card-img-top rounded" data-toggle="tooltip" title="Product 1 details">
                    <div class="card-body">
                      <p class="card-text">Skirt cut dress for baby.</p>
                      <button class="btn btn-primary"
                        onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwRnTY1sKLWmEfJtwQCqu7tj_RXiLb8SNfWXVFFoWURIfJC94srX5uCjbht7r2O4GGKfM&usqp=CAU', 'Skirt Cut Dress', 'Adorable skirt cut dress for baby girls, perfect for any occasion.')">View
                        details »</button>
                    </div>
                  </div>
                </div>
                <!-- Second Image -->
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://static-01.daraz.pk/p/a287105826ea9cc8b4e95d227d194e23.jpg_750x750.jpg_.webp"
                      alt="Product 2" class="card-img-top rounded" data-toggle="tooltip" title="Product 2 details">
                    <div class="card-body">
                      <p class="card-text">Cute baby pink track dress style.</p>
                      <button class="btn btn-primary"
                        onclick="showDetails('https://static-01.daraz.pk/p/a287105826ea9cc8b4e95d227d194e23.jpg_750x750.jpg_.webp', 'Baby Pink Track Dress', 'Cute baby pink track dress, comfortable and stylish.')">View
                        details »</button>
                    </div>
                  </div>
                </div>
                <!-- Third Image -->
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE5557eeh9Uh_e40B_rgr-t5a1fEOVTTTIaKMG4cfkv_DhmYHgX3Jtq7f0GZg3veP1UdE&usqp=CAU"
                      alt="Product 3" class="card-img-top rounded" data-toggle="tooltip" title="Product 3 details">
                    <div class="card-body">
                      <p class="card-text">Twin dresses for siblings.</p>
                      <button class="btn btn-primary"
                        onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE5557eeh9Uh_e40B_rgr-t5a1fEOVTTTIaKMG4cfkv_DhmYHgX3Jtq7f0GZg3veP1UdE&usqp=CAU', 'Twin Dresses', 'Matching twin dresses for siblings, perfect for family photos.')">View
                        details »</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Second Slide -->
            <div class="carousel-item">
              <div class="row">
                <!-- Fourth Image -->
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLD71zCDd387wfWcdBXIOFvEz-n1EL5JRf6bDusUn1viQZASu4CdVmj9KbshBDlMRsLrw&usqp=CAU"
                      alt="Product 4" class="card-img-top rounded" data-toggle="tooltip" title="Product 4 details">
                    <div class="card-body">
                      <p class="card-text">Skirt cut dress for baby.</p>
                      <button class="btn btn-primary"
                        onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLD71zCDd387wfWcdBXIOFvEz-n1EL5JRf6bDusUn1viQZASu4CdVmj9KbshBDlMRsLrw&usqp=CAU', 'Skirt Cut Dress', 'Adorable skirt cut dress for baby girls, perfect for any occasion.')">View
                        details »</button>
                    </div>
                  </div>
                </div>
                <!-- Fifth Image -->
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWe28iaYPCJkz6up9n269nIvEBwwy570EMGMWm1sZEdz8LopxYlC7Y_sVBMKq95b61Ce4&usqp=CAU"
                      alt="Product 5" class="card-img-top rounded" data-toggle="tooltip" title="Product 5 details">
                    <div class="card-body">
                      <p class="card-text">Grey dress for baby.</p>
                      <button class="btn btn-primary"
                        onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWe28iaYPCJkz6up9n269nIvEBwwy570EMGMWm1sZEdz8LopxYlC7Y_sVBMKq95b61Ce4&usqp=CAU', 'Grey Dress', 'Elegant grey dress for baby, comfortable and stylish.')">View
                        details »</button>
                    </div>
                  </div>
                </div>
                <!-- Sixth Image -->
                <div class="col-md-4">
                  <div class="card">
                    <img src="https://sc04.alicdn.com/kf/Hd00726bd62414d13861fa78b46958fc9U.jpg" class="d-block w-100"
                      alt="Product 6">
                    <div class="card-body">
                      <p class="card-text">Grey dress for baby.</p>
                      <button class="btn btn-primary"
                        onclick="showDetails('https://sc04.alicdn.com/kf/Hd00726bd62414d13861fa78b46958fc9U.jpg', 'Grey Dress', 'Elegant grey dress for baby, comfortable and stylish.')">View
                        details »</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more slides as needed -->
          </div>
          <!-- Carousel Controls -->
          <a class="carousel-control-prev" href="#kidsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#kidsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>




  <div id="category3" class="category">
    <div class="container">

      <div class="col-md-12">
        <h2>MEN CLOTHING</h2>
        <div class="card-deck">
          <div id="menCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <!-- First Slide of Men Clothing -->
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoZ7KP8oWOPiDzmigfQtu0ipYGYClSIPbSvseG8YfgyWyLKxfcDhpz4fCWzuNTMdEhtMM&usqp=CAU"
                        alt="Product 6" class="card-img-top rounded" data-toggle="tooltip" title="Product 6 details">
                      <div class="card-body">
                        <p class="card-text">Black leather jacket for a rugged look.</p>
                        <button class="btn"
                          onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoZ7KP8oWOPiDzmigfQtu0ipYGYClSIPbSvseG8YfgyWyLKxfcDhpz4fCWzuNTMdEhtMM&usqp=CAU', 'Gray Formal Suit', 'Gray formal suit for a classic professional look.')">View
                          details »</button>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://www.thekoreanfashion.com/cdn/shop/products/Embroidered-Casual-Suit-The-Korean-Fashion-17_800x.jpg?v=1651863850"
                        alt="Product 2" class="card-img-top rounded" data-toggle="tooltip" title="Product 2 details">
                      <div class="card-body">
                        <p class="card-text">street style fashion look.</p>
                        <button class="btn"
                          onclick="showDetails('https://www.thekoreanfashion.com/cdn/shop/products/Embroidered-Casual-Suit-The-Korean-Fashion-17_800x.jpg?v=1651863850', 'Street Style Fashion', 'Street style fashion look perfect for urban outings.')">View
                          details »</button>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="https://ae04.alicdn.com/kf/S0e2c57ee11e14a438933f284bfa649f9t.jpg" alt="Product 3"
                        class="card-img-top rounded" data-toggle="tooltip" title="Product 3 details">
                      <div class="card-body">
                        <p class="card-text">Basic trio shirts for friends and family.</p>
                        <button class="btn"
                          onclick="showDetails('https://ae04.alicdn.com/kf/S0e2c57ee11e14a438933f284bfa649f9t.jpg', 'Basic Trio Shirts', 'Set of basic trio shirts perfect for everyday wear.')">View
                          details »</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <!-- Second Slide of Men Clothing -->
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSpQD_J4qIllUKTv0q4rDGezO-W1rzzcOrpKzNsJ57hIJVu4ZpE89akdz-br-M1UgiIr0&usqp=CAU"
                        alt="Product 4" class="card-img-top rounded" data-toggle="tooltip" title="Product 4 details">
                      <div class="card-body">
                        <p class="card-text">Beige color suit for interview look.</p>
                        <button class="btn"
                          onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSpQD_J4qIllUKTv0q4rDGezO-W1rzzcOrpKzNsJ57hIJVu4ZpE89akdz-br-M1UgiIr0&usqp=CAU', 'Beige Suit', 'Beige color suit perfect for a professional interview look.')">View
                          details »</button>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLo7QgjbPh1K6NuWYyZsTJtFSZkI5C4c-JfZWGXI4uGsEw8qnIymgjzD1jikZkjwkI6QY&usqp=CAU"
                        alt="Product 5" class="card-img-top rounded" data-toggle="tooltip" title="Product 5 details">
                      <div class="card-body">
                        <p class="card-text">Gray formal suit for a classic look.</p>
                        <button class="btn"
                          onclick="showDetails('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLo7QgjbPh1K6NuWYyZsTJtFSZkI5C4c-JfZWGXI4uGsEw8qnIymgjzD1jikZkjwkI6QY&usqp=CAU', 'Gray Formal Suit', 'Gray formal suit for a classic professional look.')">View
                          details »</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://thestreetsofseoul.com/cdn/shop/products/V-Neck-Knitted-Vest-thestreetsofseoul-korean-street-style-minimal-streetwear-k-style-kstyle-mens-affordable-clothing-2.jpg?v=1648568005&width=1280"
                        alt="Product 6" class="card-img-top rounded" data-toggle="tooltip" title="Product 6 details">
                      <div class="card-body">
                        <p class="card-text">Black leather jacket for a rugged look.</p>
                        <button class="btn"
                          onclick="showDetails('https://thestreetsofseoul.com/cdn/shop/products/V-Neck-Knitted-Vest-thestreetsofseoul-korean-street-style-minimal-streetwear-k-style-kstyle-mens-affordable-clothing-2.jpg?v=1648568005&width=1280', 'Gray Formal Suit', 'Gray formal suit for a classic professional look.')">View
                          details »</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <a class="carousel-control-prev" href="#menCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#menCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
 
<!-- Product Details Modal -->
<div id="productModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: #dbd2cf;">
      <div class="modal-header">
        <h5 class="modal-title" id="productName">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <img src="" id="productImage" alt="Product Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <p id="productDescription"></p>
            <p id="productPrice"></p> <!-- New line for displaying price -->
            <div class="icon-container">
              <i class="fas fa-heart modal-icon"></i>
              <i class="fas fa-shopping-cart modal-icon"></i>
              <i class="fas fa-star modal-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- Bootstrap JS and jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
 integrity="sha384-p9t6TYLu9k4v5gkOS/8PIKGbuC2oiMz0Zv1p4RfxS2Co99xyC4So/Yt0DIuJb0V+" crossorigin="anonymous">
 </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
 integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+5L4Z6Ls6AuFtEWfTf/dsf4x0xIM+B07j" crossorigin="anonymous">
 </script>


<script>
  function showDetails(imageSrc, productName, productDescription, productPrice) {
    // Set product details in the modal
    document.getElementById('productImage').src = imageSrc;
    document.getElementById('productName').innerText = productName;
    document.getElementById('productDescription').innerText = productDescription;
    document.getElementById('productPrice').innerText = "Price: " + productPrice; // Set price

    // Show the modal
    $('#productModal').modal('show');
  }



// Subscribe form submission
$('.subscribe-form').submit(function(e) {
  e.preventDefault();
  // Implement your subscription functionality here
  alert('Thank you for subscribing!');
});
$(document).ready(function() {
// Show the welcome message with fade in animation
$('#welcomeMessage').fadeIn('slow');

// Hide the welcome message after 3 seconds with fade out animation
setTimeout(function() {
    $('#welcomeMessage').fadeOut('slow');
}, 3000); // Adjust the time as needed
});
</script>
<!-- Ensure to include Bootstrap's JavaScript and jQuery libraries -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>