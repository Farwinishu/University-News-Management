<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: front_page.php"); // Redirect to login page if not logged in
    exit(); // Ensure script stops execution after redirect
}

// The user is logged in, continue with the page content
?>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rajarata_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the news from the database
$sql = "SELECT id, title, content, image, created_at FROM genaral_news ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>General News</title>
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

</head>

<body>

  <?php include('user_navbar.php');?>

  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">General</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>       
    


  <!-- Sports News Section -->
  <div class="site-section">
    <div class="container">
      <div class="row">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-4 col-md-6 mb-4">
                        <div class="course-1-item">
                          <figure class="thumbnail">';
                if ($row['image']) {
                    echo '<img src="' . $row['image'] . '" alt="Image" class="img-fluid">';
                } else {
                    echo '<img src="images/default-image.jpg" alt="Default Image" class="img-fluid">';
                }
                echo '     </figure>
                          <div class="course-1-content pb-4">
                            <h2>' . $row['title'] . '</h2>
                            <p class="desc mb-4">' . substr($row['content'], 0, 100) . '...</p> <!-- Shortened content --> 
                            <p><small>' . date('F d, Y', strtotime($row['created_at'])) . '</small></p>
                            <a href="genaral-news-details.php?id=' . $row['id'] . '" class="btn btn-primary px-4">See More</a> <!-- See More Button -->
                          </div>
                        </div>
                      </div>';
            }
        } else {
            echo "<p>No news found</p>";
        }

        $conn->close();
        ?>
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