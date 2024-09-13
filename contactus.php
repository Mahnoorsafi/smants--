<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  
<style>
  .backgroundimage {

background-size: cover;
background-position: center;
margin: 0;
padding: 0;
}
.head{
color: white;
}
.container {
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
padding: 850px 0;
font-size: 72%;
}
.contain{
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
padding: 650px 0;
/* font-size:  */
}
.contact-form-container {
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color:#d4e4ed;
border: 2px solid black;
border-radius: 25px;
padding: 50px;
width: 500px; /* Increased width */
max-width: 90%; /* Added max-width for responsiveness */
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.contact-form-title {
font-size: 24px;
font-weight: bold;
margin-bottom: 20px;
text-align: center;
}

.contact-form label {
font-weight: bold;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
width: 100%;
padding: 12px;
margin-bottom: 20px;
border: 1px solid #ced4da;
border-radius: 8px;
}

.contact-form textarea {
resize: vertical;
}

.btnbtn-primary {
font-size: 10px;
/* Increase the font size */
width: 170px; /* Adjust width as needed */
height: 55px;
padding: 20px 30px;
background-color: #7ab3d3;
color: white;
border: none;
border-radius: 9px;
cursor: pointer;
margin-top: 0%;
 margin-bottom: 20px;
}

.btnbtn-primary:hover {
background-color: #decac4;
}



.contact-form button[type="submit"],
.contact-form button[type="button"] {
width: 30%;
/* Adjusted width */
padding: 10px;
border: none;
border-radius: 8px;
background-color: #7ab3d3;
/* Green color */
color: white;
font-size: 16px;
cursor: pointer;
}

.contact-form button[type="submit"]:hover,
.contact-form button[type="button"]:hover {
background-color:#decac4;
}

.close-btn {
position: absolute;
top: 20px;
right: 20px;
font-size: 24px;
color: #6c757d;
cursor: pointer;
border: none;
background-color: transparent;
border-radius: 10%;
padding: 5px;
}

.close-btn:hover {
color:black;
}

.box {
width: 250px;
height: 200px;
border: 2px solid #000;
margin-top: 150%;
background-color: #decac4;
color: black;
border: none;
border-radius: 9px;
margin-top: 550px;
cursor: pointer;
font-size: medium;


}

.box:hover {
background-color: #accddf;
}
</style>
</head>

<body>
  <div class="backgroundimage">
    <img src="https://stptrans.com/wp-content/uploads/2022/01/Ecommerce-Nordics.png" alt="backgroundimage " width="1760vh" height="820vh">

  </div>
  <div class="container">
    <div class="contain">
      <h1 class="head">Contact Us</h1>
      <button id="showFormBtn" class="btnbtn-primary">Feel free to Contact us</button>
    </div>
  
    <div class="cont">
      <button id="box" class="box">
        <i class="fas fa-home"></i>
        <p>Our Main Office</p>
        <p>123 Main Street, Anytown,</p>
      </button>
      <button id="box" class="box">
        <i class="fas fa-envelope"></i>
        <p>EMAIL</p>
        <p>Smants@gmail.com</p>
      </button>
      <button id="box" class="box">
        <i class="fas fa-phone"></i> 
        <p>PHONE NUMBER</p>
        <p>1-800-876-5400 </p>
      </button>
      <button id="box" class="box">
        <i class="fas fa-fax"></i>
        <p>FAX</p>
        <p>1-234-567-8900</p>
      </button>
    </div>
  </div>

  <!-- Contact Form -->
  <div id="contactFormContainer" class="contact-form-container d-none">
    <button id="closeFormBtn" class="close-btn">&times;</button>
    <div class="contact-form">
      <h2 class="contact-form-title">Contact Us</h2>
      <form id="contactForm">
        <section class="task-list">

          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message" rows="5" placeholder="Message" required></textarea>
          </div>
        </section>
        <button type="submit" class="btn btn-primary">Done</button>
      </form>
      <div id="successMessage" class="mt-3 alert alert-success d-none">Message sent successfully!!!</div>
      <div id="errorMessage" class="mt-3 alert alert-danger d-none">Oops! Something went wrong. Please try again later.
      </div>
    </div>

  </div>



  <!-- Bootstrap JS, jQuery, and Custom JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script src="script.js">
  </script>
  <script>// script.js

    $(document).ready(function() {
        $('#showFormBtn').click(function() {
          $('#contactFormContainer').removeClass('d-none');
        });
      
        $('#closeFormBtn').click(function() {
          $('#contactFormContainer').addClass('d-none');
        });
      
        $('#contactForm').submit(function(event) {
          event.preventDefault();
      
          var name = $('#name').val();
          var email = $('#email').val();
          var message = $('#message').val();
      
          // Simulate form submission
          // Replace this with your actual form submission logic
          setTimeout(function() {
            $('#successMessage').removeClass('d-none');
            $('#contactForm')[0].reset();
          }, 1000);
        });
      });</script>
</body>

</html>