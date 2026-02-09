<?php
include('db_connect.php');
session_start(); // Start the session

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login page
header("Location: login.php");
exit(); // Ensure script stops execution after redirect