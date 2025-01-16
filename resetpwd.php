<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="forgotpass.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@800&family=Montserrat&family=Oswald:wght@700&display=swap" rel="stylesheet">
  <script src="resetpwd.js"></script>
  <title>Reset Password | DELPITRACK</title>
  <link rel="icon" href="mhpnhs-logo.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar-design">
      <img src="mhpnhs-logo.png" alt="">
    </nav>

    <div class="back-arrow">
      <a href="http://localhost:3000/DelpiTrack/ADMINLOGIN/forgotpass/forgotpass.html" target="_self">
        <i class='fas fa-arrow-left'></i>
      </a>
    </div>
    <div class="container">
    
    <div class="wrapper">
      <!-- log in name and profile picture -->

      <div class="title"><span>Reset Password</span></div>

      <!-- username icon and username text field -->
      <form action="resetfinal.php" method="post" onsubmit="return validateForm()">
        <div class="row">
            <i class='fas fa-envelope'></i>
          <input type="password" id="newpwd" name="newpwd" placeholder="Enter New Password Here">
          <div class="error-message" id="newpwd-error"></div>
        </div>
       

        <div class="row">
            <i class='fas fa-envelope'></i>
          <input type="password" id="confirmpwd" name="confirmpwd" placeholder="Confirm Password">
         <div class="error-message" id="confirmpwd-error"></div>
        </div>
       

        <!-- submit button -->
        <div class="row button">

          <input type="submit" value="Reset Password">
        </div>

      </form>
    </div>
  </div>
  <script src ="resetpwd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>