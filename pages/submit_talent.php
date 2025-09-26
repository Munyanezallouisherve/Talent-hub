<?php
session_start();
include 'connection.php'; // Assuming you have a file named 'connection.php' that contains your database connection code

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $user_id = $_SESSION['UserID'] ?? null;
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
    $email_address = mysqli_real_escape_string($conn, $_POST['email']);
    $talent_field = mysqli_real_escape_string($conn, $_POST['field']);

    // File upload handling
    $portfolio_file = $_FILES['portfolio']['name'];
    $portfolio_temp = $_FILES['portfolio']['tmp_name'];

    $resume_file = $_FILES['resume']['name'];
    $resume_temp = $_FILES['resume']['tmp_name'];

    $cover_letter_file = $_FILES['cover_letter']['name'];
    $cover_letter_temp = $_FILES['cover_letter']['tmp_name'];
    
    // Create directories for file uploads if they don't exist
    if (!file_exists('portfolio_uploads')) {
        mkdir('portfolio_uploads', 0777, true);
    }
    if (!file_exists('resume_uploads')) {
        mkdir('resume_uploads', 0777, true);
    }
    if (!file_exists('cover_letter_uploads')) {
        mkdir('cover_letter_uploads', 0777, true);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO talents (user_id, full_name, email_address, talent_field, portfolio_file, resume_file, cover_letter_file) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check for errors in preparing the statement
    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("issssss", $user_id, $full_name, $email_address, $talent_field, $portfolio_file, $resume_file, $cover_letter_file);

    // Move uploaded files to the desired location
    move_uploaded_file($portfolio_temp, "portfolio_uploads/" . $portfolio_file);
    move_uploaded_file($resume_temp, "resume_uploads/" . $resume_file);
    move_uploaded_file($cover_letter_temp, "cover_letter_uploads/" . $cover_letter_file);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to Recordsavedsuccessfully.php
        header("Location: Recordsavedsuccessfully.php");
        exit();
    } else {
        echo "ERROR: Could not able to execute $sql. " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    mysqli_close($conn);
}
?>
