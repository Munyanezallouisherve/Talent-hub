<?php
// Include the database connection file
include "connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert query
    $sql = "INSERT INTO contactus (Name, Email, Message) VALUES ('$name', '$email', '$message')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // If the query is successful, redirect the user to message_received.php
        header("Location: message_received.php");
        exit();
    } else {
        // If there is an error with the query, display an error message
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
