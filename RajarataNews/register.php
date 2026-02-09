
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; </title>
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
<?php
include('db_connect.php');?>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

   
    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>777123456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@rajarata.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="login.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/logo.jpg" style="width:12rem;" alt="Image" class="img-fluid">
            </a>
          </div>
        <div class="ml-auto">
        <div class="social-wrap">
              <a href="https://web.facebook.com/RajarataUniversity/?ref=pages_you_manage&_rdc=1&_rdr" target="_blank"><span class="icon-facebook"></span></a>
              <a href="https://x.com/RUofSL" target="_blank" ><span class="icon-twitter"></span></a>
              <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2F1563842%2Fadmin%2Ffeed%2Fposts%2F" target="_blank"><span class="icon-linkedin"></span></a>


              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
        </div>
</header>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>



    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">User Register</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">User Register</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                      <form action="user_saved_details.php" method="POST">
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input 
                              type="email" 
                              name="email"  
                              pattern="[a-zA-Z0-9._%+-]+@tec\.rjt\.ac\.lk" 
                              placeholder="example@tec.rjt.ac.lk" 
                              title="Email must be in the format example@tec.rjt.ac.lk." 
                              id="email" 
                              class="form-control form-control-lg" 
                              required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" 
                             name="password"
                             id="pword" 
                             pattern="([a-zA-Z0-9._%+-]+[!@#$%^&*])" title="Password must contain at least one special character (!, @, #, $, etc.)" placeholder="Enter your password"
                             class="form-control form-control-lg"
                             minlength="8"
                             maxlength="8" 
                             required>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            

          
        </div>
    </div>
    <?php include 'footer.php'?>


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