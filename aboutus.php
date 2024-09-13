<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   
    <style>
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
   color: white;
  }
  .container {
    margin: 20px;
    /* background-color: #D4E4ED; */
    padding: 100%;
    width: 100%;
  
  }
  
  .history-section {
    display: flex;
    align-items: center;
   
  }
  
  #historyImage {
    width: 200%;
    height: 70%;
    margin-bottom: 10%;
  }
  
  #readMoreButton {
    margin-top: 10px;
    width: 20%;
    margin-left: 32%;
    margin-right: 10%;
    background-color: #b6cade;
    color: whitesmoke;
  }
  #readMoreButton:hover{
    background-color: #decac4;
  }
  .history-section {
    padding: 50px 0;
  }
  
  .special-features-section {
    background-color:#b6d9ee;
    height: 450px;
  
  }
  
  .special-features-section h2 {
    margin-bottom: 19px;
    color: white;
  }
  
  .head{
  text-align: center;
  margin-right: 50%;
  margin-left: 50%;
  }
  .container-history-section{
    background-color:#dbd2cf ;
    padding-top: 56px;
    width: 100%;
  color: white;
  }
  .box {
  
    width: 270px;
    height: 300px;
    border: 2px solid #000;
    margin-top: 150%;
    background-color: #9db6cf;
    color:white;
    border: none;
    border-radius: 9px;
    margin-top: 550px;
    cursor: pointer;
    font-size: medium;
    display: inline-block;
    margin-top: 1%;
    margin-right: 2px;
    margin-left: 5%;
  }
  
  .box:hover {
    background-color:#dbd2cf;
  }
  .container {
    padding-left: 350px;
    /* margin-right:40% ; */
  }
  .team {
    text-align: center;
  }
  
  .centered-heading {
    margin-bottom: 20px;
    text-align: center;
    margin-left: 32%;
   margin-right: 38%;
   color: white;
  }
  
  .team-container {
    text-align: left; 
      justify-content: space-around;
    flex-wrap:wrap; 
    
  }
  .member-container {
    white-space: nowrap; /* Prevent boxes from wrapping to the next line */
    overflow-x: auto; /* Enable horizontal scrolling if needed */
    text-align: center; 
    margin-top: 3%;
  }
  .member {
    width: 150px;
    margin: 0 40px; /* Adjust the distance between each member horizontally */
    display: inline-block;
    position: relative;
    transition: transform 0.3s ease; /* Add transition for transform property */
  }
  
  .member.zoomed {
    transform: scale(1.1); /* Zoom effect */
  }
  
  
  .infoButton {
    width: 100%;
    background-color: #9db6cf ;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
  }
  .infoButton:hover{
    background-color: #dbd2cf;
  }
  .infoDisplay {
    display: none;
    margin-top: 10px; 
  }
  .btnbtn-primary{
    color: white;
  background-color: #82aeda ;
  width: 10%;
  height: 20%;
  }
  .btnbtn-primary:hover{
    background-color: #dbd2cf;
  }
    </style>
</head>

<body>
    
     
        <img src="Images\ff686b5b-2fce-4872-81dc-2f432abd8d8b-fotor-bg-remover-20240404144425.png" alt="Header Image" class="header-image"
            height="120px">
        <div class="about-us-label">
            <h1>About Us</h1>
        </div>
    
    <section class="container-history-section">
        <br>
        <div class="row">
            <div class="col-md-4 order-md-1">
                <img id="historyImage" src="Images\images.jpeg" alt="History Image" class="img-fluid">
            </div>
            <div class="col-md-8 order-md-2">
                <h2 class=" col-md-4 mx-auto">HISTORY</h2>
                <p id="firstParagraph">Welcome to our online shopping haven! At SMANTS E-commerce, we’re more than
                    just a marketplace; we’re your
                    go-to destination for curated collections and unparalleled shopping experiences. Founded with a
                    passion for
                    connecting people with quality products, we embark on a journey to redefine online shopping. Our
                    story is
                    woven with dedication to customer satisfaction, a commitment to offering a diverse range of
                    premium
                    goods, and
                    an unwavering belief in the magic of seamless transactions.</p>
                <button id="readMoreButton">Read More</button>
                <p id="secondParagraph" style="display:none;">As a team of enthusiasts, we strive to create an
                    environment where style meets convenience, and every
                    click
                    opens the door to a world of possibilities. At SMANTS ecommerce, we’re not just a platform;
                    we’re a
                    community
                    of discerning shoppers and dedicated sellers coming together to celebrate the joy of discovery
                    and
                    the thrill
                    of finding something uniquely you. Join us in this adventure, and let’s make every purchase a
                    delightful
                    experience!</p>
            </div>
        </div>

    </section>

    <br>
    <section class="special-features-section ">
        <br><br>
        <h2 class="text-center ">OUR SPECIAL FEATURES</h2>
        <div class="row">
            <button id="box" class="box">

                <h5>ONLINE SUPPORT</h5>
                <p>Our support team is ready to address any concerns or inquiries you may have. How can we make your
                    shopping
                    experience better?</p>
            </button>
            <button id="box" class="box">

                <h5>FREE SHIPPING & RETURN</h5>
                <br>
                <p>Not satisfied? No worries. We believe in stress-free shopping – return any item for free within 14
                    days.</p>
            </button>
            <button id="box" class="box">

                <h5>MONEY BACK GUARANTEE</h5>
                <p>Shop with confidence! Our products come with a money-back guarantee, ensuring your satisfaction. </p>
            </button> <button id="box" class="box">
                <h5>NEW STYLES EVERYDAY</h5>
                <p>Discover new styles every day – because your wardrobe deserves a daily dose of chic and trendy on our
                    online
                    shopping platform!</p>
            </button>

        </div>
    </section>
    <br>
    <br>

    <section class="team">
        <div class="team-container">
          <h2 class="centered-heading">TEAM MEMBERS </h2>
          
          <div class="member-container" id="team-grid">
            <div class="member">
              <img src="Images\nadia.jpg" alt="Nadia Mushtaq">
              <br><br>
              <button class="infoButton" onclick="toggleDescription(1)">Nadia Mushtaq</button>
              <div class="infoDisplay infoDisplay1" style="display: none;">TESTER</div>
            </div>
            
            <div class="member">
              <img src="Images/tanzeela.jpg" alt="Tanzeela Tariq">
              <br><br>
              <button class="infoButton" onclick="toggleDescription(2)">Tanzeela Tariq</button>
              <div class="infoDisplay infoDisplay2" style="display: none;">HR</div>
            </div>
            <div class="member">
              <img src="Images/sidra.jpg" alt="Sidra Mehboob">
              <br><br>
              <button class="infoButton" onclick="toggleDescription(3)">Sidra Mehboob</button>
              <div class="infoDisplay infoDisplay3" style="display: none;">DESIGNER </div>
            </div>
            <div class="member">
              <img src="Images/mahnoor.jpg" alt="Mahnoor">
              <br><br>
              <button class="infoButton" onclick="toggleDescription(4)">Mahnoor</button>
              <div class="infoDisplay infoDisplay4" style="display: none;">DEVELOPER-1</div>
            </div>
            <div class="member">
            <img src="Images/alisha.jpg" alt="alisha">
              <br><br>
              <button class="infoButton" onclick="toggleDescription(5)">Alisha Akhtar</button>
              <div class="infoDisplay infoDisplay5" style="display: none;">DEVELOPER-2</div>
            </div>
          </div>
          
        </div>
        <br>
        <button id="animateButton" class="btnbtn-primary">Animate</button>
         </section>
   
         
     
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="aboutus.js"></script>
    <script>
        $(document).ready(function() {
    $('#animateBtn').click(function() {
        $('.box-container').addClass('animate');
        setTimeout(function() {
            $('.box-container').removeClass('animate');
        }, 2000); // Adjust the duration of the animation as needed
    });
  });
  $(document).ready(function() {
  $('#readMoreButton').click(function() {
      $('#secondParagraph').toggle();
  });
  });
  $(document).ready(function() {
    $('.box button').click(function() {
        $(this).siblings('.additional-info').slideToggle();
    });
  });
  $(document).ready(function() {
    $(".toggle-info-btn").click(function() {
        $(this).siblings(".info-container").toggle();
    });
  });
  
  
  function toggleDescription(index) {
  var descriptions = document.getElementsByClassName("infoDisplay");
  for (var i = 0; i < descriptions.length; i++) {
    if (i === index - 1) {
      descriptions[i].style.display = (descriptions[i].style.display === "block") ? "none" : "block";
    } else {
      descriptions[i].style.display = "none";
    }
  }
  }
  
  
  $(document).ready(function() {
  $('.member img').hover(
      function() {
          $(this).closest('.member').addClass('zoomed');
      },
      function() {
          $(this).closest('.member').removeClass('zoomed');
      }
  );
  });
  
  
  $(document).ready(function(){
  var isAnimating = false;
  
  // Function to animate grid items
  function animateGrid() {
    $('#team-grid .member').each(function(index){
      $(this).delay(400 * index).fadeIn(100);
    });
  }
  
  // Animate grid items when button is clicked
  $('#animateButton').click(function(){
    if (!isAnimating) {
      isAnimating = true;
      // Fade out all images slowly
      $('#team-grid .member').fadeOut('slow', function(){
        // After fade out, fade in images one by one
        animateGrid();
        isAnimating = false;
      });
    }
  });
  });
    </script>
</body>

</html>