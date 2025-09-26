<?php
session_start();

// Database connection
include 'connection.php';

// Initialize error message variable
$_SESSION['error_message'] = '';

// Get form data and sanitize it
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query to check if user exists and credentials match
$sql = "SELECT * FROM users WHERE Email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    // User found, verify password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['Password'])) {
        // Password is correct, redirect to respective dashboard
        $_SESSION['UserID'] = $row['UserID'];
        $_SESSION['UserType'] = $row['UserType'];

        if ($row['UserType'] == 'employer') {
            header("Location: employer_dashboard.php");
            exit();
        } elseif ($row['UserType'] == 'employee') {
            header("Location: employee_dashboard.php");
            exit();
        } else {
            // User type is neither employer nor employee
            $_SESSION['error_message'] = "Invalid user type. Please contact support.";
            header("Location: login.php");
            exit();
        }
    } else {
        // Password incorrect, display error message
        $_SESSION['error_message'] = "Invalid email or password. Please try again.";
        header("Location: login.php");
        exit();
    }
} else {
    // User not found or query failed, display error message
    $_SESSION['error_message'] = "Invalid email or password. Please try again.";
    header("Location: login.php");
    exit();
}

// Close database connection
mysqli_close($conn);
?>
