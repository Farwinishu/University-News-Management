<?php
include('db_connect.php');
session_start(); // Start the session

// Get the form data
$email = $_POST['email'] ?? '';
$pass = $_POST['password'] ?? '';

// Validate the inputs
if (empty($email) || empty($pass)) {
    echo "<script>
    alert('Email or Password cannot be empty');
    window.location.href = 'admin_login.php'; // Redirect to login.php
    </script>";
    exit(); // Stop further script execution
}

// Prepare and bind the SQL query
$stmt = $conn->prepare("SELECT password FROM admin_login WHERE email = ?");
if ($stmt === false) {
    echo "<script>
    alert('Database query error');
    window.location.href = 'admin_login.php'; // Redirect to login.php
    </script>";
    $conn->close(); // Close connection before exiting
    exit(); // Stop further script execution
}

$stmt->bind_param("s", $email);

// Execute the query
$stmt->execute();
$stmt->store_result();

// Check if the email exists
if ($stmt->num_rows === 0) {
    echo "<script>
    alert('Email or Password is wrong');
    window.location.href = 'admin_login.php'; // Redirect to login.php
    </script>";
    $stmt->close(); // Close statement
    $conn->close(); // Close connection
    exit(); // Stop further script execution
}

// Bind result variable to fetch the plain text password
$stmt->bind_result($db_password);
$stmt->fetch();

// Compare the plain text password
if ($pass === $db_password) {
    // Set session variables to indicate the user is logged in
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email; // Store email in session if needed

    // Regenerate session ID for security
    session_regenerate_id(true);

    header("Location: backend_banners.php"); // Redirect to the protected page
    exit();  
} else {
    echo "<script>
    alert('Email or Password is wrong');
    window.location.href = 'admin_login.php'; // Redirect to login.php
    </script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
