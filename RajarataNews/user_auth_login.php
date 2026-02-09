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
    window.location.href = 'login.php'; // Redirect to login.php
    </script>";
    exit(); // Ensure script stops execution after redirect
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
    alert('Invalid email format');
    window.location.href = 'login.php'; // Redirect to login.php
    </script>";
    exit(); // Ensure script stops execution after redirect
}

// Prepare and bind
$stmt = $conn->prepare("SELECT password FROM user_signup WHERE email = ?");
$stmt->bind_param("s", $email);

// Execute the query
$stmt->execute();
$stmt->store_result();

// Check if the email exists
if ($stmt->num_rows === 0) {
    echo "<script>
    alert('Email or Password is wrong');
    window.location.href = 'login.php'; // Redirect to login.php
    </script>";
    exit(); // Ensure script stops execution after redirect
}

// Bind result variable
$stmt->bind_result($hashed_password);
$stmt->fetch();

// Verify the password
if (password_verify($pass, $hashed_password)) {
    // Set session variable to indicate the user is logged in
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email; // Store email in session if needed

    // Regenerate session ID for security
    session_regenerate_id(true);

    header("Location: index.php"); // Redirect to the main page
    exit(); // Ensure script stops execution after redirect
} else {
    echo "<script>
    alert('Email or Password is wrong');
    window.location.href = 'login.php'; // Redirect to login.php
    </script>";
    exit(); // Ensure script stops execution after redirect
}

// Close the statement and connection

