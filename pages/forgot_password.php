<?php
session_start();

// Check if there's any error message stored in the session
if(isset($_SESSION['error_message']) && $_SESSION['error_message'] != ""){
    $error_message = $_SESSION['error_message'];
    echo "<p class='error-message'>$error_message</p>";
    // Clear the error message from the session to avoid displaying it again
    $_SESSION['error_message'] = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            background-color: #dedab6;
            color: black;
            font-family: Arial, sans-serif;
            background-image: url('Images/backgroundlogin.jpg');
            background-attachment: fixed;
            background-size: cover;
        }

        .forgot-password-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5);
            margin-top: 150px;
            height: 300px;
        }

        .forgot-password-container h2 {
            color: #0d452f;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #0d452f;
            margin-top: 10px;
        }

        .form-group input {
            width: 95%;
            padding: 8px;
            border: 1px solid #006400;
            border-radius: 5px;
            background-color: white;
            color: black;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #0d452f;
            color: white;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="forgot-password-container">
        <h2 style="background-color: rgba(54, 137, 131, 0.5); text-align:center;">Forgot Password</h2>
        <form action="forgot_password_action.php" method="post" name="forgotPasswordForm" id="forgotPasswordForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
