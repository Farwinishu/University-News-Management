<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: front_page.php"); // Redirect to login page if not logged in
    exit(); // Stop further script execution
}
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
$sql = "SELECT id, title, content, image, created_at FROM academics_news ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <?php include('user_navbar.php');?>
  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Academics</h2>
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
                            <a href="academics-news-details.php?id=' . $row['id'] . '" class="btn btn-primary px-4">See More</a> <!-- See More Button -->
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
