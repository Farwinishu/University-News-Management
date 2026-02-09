<?php
// Database connection parameters
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $last_name = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['eaddress']);
    $tel_number = mysqli_real_escape_string($conn, $_POST['tel']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL query to insert the data into the table
    $sql = "INSERT INTO contact_form_submissions (first_name, last_name, email, tel_number, message) 
            VALUES ('$first_name', '$last_name', '$email', '$tel_number', '$message')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
