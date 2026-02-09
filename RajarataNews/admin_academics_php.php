<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: front_page.php"); // Redirect to login page if not logged in
    exit(); // Stop further script execution
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rajarata_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Colombo');
// Collect and sanitize form data
$title = $conn->real_escape_string($_POST['title']);
$content = $conn->real_escape_string($_POST['content']);
$created_at = date('Y-m-d H:i:s'); // Set the created_at automatically


// Handle file upload
$image = null; // Initialize image variable

if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_name = basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_path = 'uploads/' . uniqid() . '.' . $imageFileType; // Use unique name to avoid conflicts

    // Ensure the upload directory exists
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    // Validate image
    $uploadOk = 1;
    $check = getimagesize($file_tmp);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if ($_FILES['image']['size'] > 10 * 1024 * 1024) { // Limit to 10MB
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1 && move_uploaded_file($file_tmp, $file_path)) {
        $image = $file_path; // Save the full path in the database
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Insert into database
$sql = "INSERT INTO academics_news (title, content, image, created_at) VALUES ('$title', '$content', '$image', '$created_at')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
