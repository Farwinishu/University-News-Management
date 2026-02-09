<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location:front_page.php"); // Redirect to login page if not logged in
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

// Get the news ID from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the specific news item from the database
$sql = "SELECT title, content, image, created_at FROM sports_news WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $news = $result->fetch_assoc();
} else {
    echo "News not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo htmlspecialchars($news['title']); ?></title>
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
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- Mobile Navigation -->
  <?php include('user_navbar.php');?>


  <!-- News Details Section -->
  <div class="site-section">
    <div class="container">
      <h1><?php echo htmlspecialchars($news['title']); ?></h1>
      <p><small><?php echo date('F d, Y', strtotime($news['created_at'])); ?></small></p>
    
      <?php if ($news['image']): ?>
        <img src="<?php echo htmlspecialchars($news['image']); ?>" alt="<?php echo htmlspecialchars($news['title']); ?>" class="img-fluid">
      <?php endif; ?>
    
      <p><?php echo nl2br(htmlspecialchars($news['content'])); ?></p>
    </div>
  </div>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      // Toggle the mobile menu
      $('.js-menu-toggle').on('click', function() {
        $('.site-mobile-menu').toggleClass('active');
      });
      $('.site-mobile-menu-close').on('click', function() {
        $('.site-mobile-menu').removeClass('active');
      });
    });
  </script>
    <?php include 'footer.php'?>
</body>
</html>

<?php
$conn->close();
?>
