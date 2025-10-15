<?php
session_start();

// Load environment variables
require_once 'env.php';
require_once 'connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email format";
        header("location: forgot_password.php");
        exit();
    }

    // Generate a random token
    $token = bin2hex(random_bytes(16));

    // Hash the token before storing it in the database
    $hashed_token = password_hash($token, PASSWORD_DEFAULT);

    // Prepare and execute SQL query to update reset_token column in the users table
    $stmt = $conn->prepare("UPDATE users SET reset_token = ? WHERE Email = ?");
    $stmt->bind_param("ss", $hashed_token, $email);
    $stmt->execute();


    if ($stmt->affected_rows === 1) {
        // Send email with the token
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = getenv('GMAIL_USERNAME');
            $mail->Password = getenv('GMAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set email parameters
            $mail->setFrom(getenv('GMAIL_USERNAME'), 'Natembea Online');
            $mail->addAddress($email);
            $mail->Subject = 'Password Reset';
            $mail->isHTML(true);
            $mail->Body = "<p>Here is your password reset token: <br>$token</p>";

            // Send email
            $mail->send();

            $_SESSION['message'] = "A reset token has been sent to your email";
            $_SESSION['successful_email'] = $email;
            header("location: Enter_Reset_Token.php");
            exit();
        } catch (Exception $e) {
            $_SESSION['message'] = "Oops! Something went wrong. Please try again later: " . $e->getMessage();
        }
    } else {
        $_SESSION['message'] = "Error updating record";
    }
} else {
    $_SESSION['message'] = "Invalid request";
}

header("location: forgot_password.php");
exit();
?>
