<?php
        
    if(isset($_SESSION['error_message']) && $_SESSION['error_message'] != ""){
        $error_message = $_SESSION['error_message'];
        echo "<p class='error-message'>$error_message</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: #dedab6;
            color: black;
            font-family: Arial, sans-serif;
            background-image: url('Images/TalentHub.png');
            background-attachment: fixed;
            background-size: cover;
        }

        .login-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(13, 69, 47, 0.5);
            margin-top: 150px;
            height: 350px;
        }

        .login-container h2 {
            color: #07bca3; 
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #07bca3; 
            margin-top: 10px;
        }

        .form-group input {
            width: 95%;
            padding: 8px;
            border: 1px solid #007b8c; 
            border-radius: 5px;
            background-color: white;
            color: black;
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #07bca3; 
            border-radius: 5px;
            background-color: white;
            color: black;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #07bca3; 
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
    <div class="login-container">
        <h2 style="text-align:center;">Login</h2>
        <form action="login_action.php" method="post" name="loginForm" id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </div>
        </form>
        <p style="text-align: center;">Don't have an account? <a href="signUp.php">Register here</a></p>
        <p style="text-align: center;">Forgot password? <a href="forgot_password.php"> Set it here</a></p>
    </div>
</body>

</html>
