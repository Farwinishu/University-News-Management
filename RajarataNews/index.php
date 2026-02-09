<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:front_page.php"); // Redirect to login page if not logged in
    exit(); // Ensure script stops execution after redirect
}

// The user is logged in, continue with the page content
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rajarata &mdash; News and Updates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="news.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php
include('db_connect.php');

?>
  <div class="site-wrap">

 

    <?php include('user_navbar.php');?>
     
         
        </div>
      <php?>
    </header>

    <div class="hero-slide owl-carousel site-blocks-cover">
    <?php
    include('db_connect.php');
    // Fetch all banner data
    $result = mysqli_query($conn, "SELECT * FROM banners");

    // Check if there are results
    if (mysqli_num_rows($result) > 0) {
        $first = true;

        // Loop through each banner
        while ($row = mysqli_fetch_assoc($result)) {
            // Output each carousel item
            echo '<div class="carousel-item ' . ($first ? 'active' : '') . '">';
            echo '<div class="intro-section" style="background-image: url(\'' . htmlspecialchars($row['image_path']) . '\');">';
            if (!empty($row['title'])) {
                echo '<div class="carousel-caption d-none d-md-block">';
                echo '<h5>' . htmlspecialchars($row['title']) . '</h5>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            
        }
    } else {
        echo '<p>No banners available.</p>';
    }
    ?>
</div>


    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Why We Need</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>News and Updates</h2>
                <p>Rajarata university News updates</p>
                <p><a href="Genaral.php" class="btn btn-primary px-4 rounded-0">Click Here</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
                <span class="fas fa-futbol text-white"></span> 
            </div>
            <div class="feature-1-content">
                <h2>Sports News</h2>
                <p>Latest Updates and Highlights from the World of Sports</p>
                <p><a href="sports.php" class="btn btn-primary px-4 rounded-0">Click Here</a></p>
            </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Academic News</h2>
                <p>Breaking Developments and Insights in the Academic World</p>
                <p><a href="academics.php" class="btn btn-primary px-4 rounded-0">Click More</a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>


   

    


    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About Our Website</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead" style="color:white">Our platform provides detailed coverage of university news, including significant research findings, faculty achievements, and student successes. We aim to bridge the gap between the university community and the public by delivering timely and accurate information. Whether it’s groundbreaking research or important campus events, we ensure that you stay up-to-date with everything happening at Sri Lankan universities.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
    <div class="row justify-content-center"> <!-- Center the row -->
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center"> <!-- Add text-center class -->
        <span style="color: white;" class="icon flaticon-mortarboard"></span>
        <h3 style="color: white;" >Our Mission</h3>
        <p >Creating a fastest news network among Sri Lankan Universities</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center"> <!-- Add text-center class -->
        <span style="color: white;" class="icon flaticon-school-material"></span>
        <h3 style="color: white;">Our Vision</h3>
        <p>Providing a great path for Sri Lankan undergraduates</p>
      </div>
    </div>
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