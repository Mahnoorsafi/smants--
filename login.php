<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log-In E-commerce Website</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    body {
      background: url('https://th.bing.com/th/id/OIP.gROArqa_JBfQXjQcIxuV9QHaE8?rs=1&pid=ImgDetMain') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card-body {
      background-color: rgba(154, 194, 234, 0.9);
    }

    #btn1 {
      background-color: rgb(56, 143, 183);
      width: 80px;
      text-align: center;
      display: block;
      margin: 0 auto;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Log In</h5>
          <form id="loginForm">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" id="btn1">Log In</button>
          </form>
          <div id="loginMessage" class="mt-3 text-center"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    // Form submission
    $("#loginForm").submit(function(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "login.php", // Specify your backend URL for handling login logic
        data: $(this).serialize(),
        success: function(response){
          $("#loginMessage").html(response);
          // Clear form fields after successful submission
          $("#loginForm")[0].reset();
        }
      });
    });
  });
</script>
</body>
</html>