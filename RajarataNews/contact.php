<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit(); // Ensure script stops execution after redirect
}

// The user is logged in, continue with the page content
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by RajarataNews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">



    <?php include('user_navbar.php');?>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Contact</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
      </div>
    </div>

    <div class="site-section">
    <div class="container">
    <form action="save_contact.php" method="POST">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control form-control-lg" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control form-control-lg" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="eaddress">Email Address</label>
                <input type="email" id="eaddress" name="eaddress" class="form-control form-control-lg" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="tel">Tel. Number</label>
                <input type="text" id="tel" name="tel" class="form-control form-control-lg"  maxlength="10" pattern="\d{10}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" cols="30" rows="10" class="form-control" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
            </div>
        </div>
        <br>
        <h2 class="icon-envelope-o"> Contact Us: <a href="mailto:Dean@tec.rjt.ac.lk" class="small mr-3">Dean@tec.rjt.ac.lk</a></h2>
    </form>
</div>
</div>
  <?php include 'footer.php'?>

  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>