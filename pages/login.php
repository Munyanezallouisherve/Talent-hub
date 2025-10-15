<?php
    session_start();
    if (isset($_SESSION['error_message']) && $_SESSION['error_message'] != "") {
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
      margin: 0;
      padding: 0;
    }

    .login-container {
      max-width: 420px;
      margin: 120px auto;
      padding: 30px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(13, 69, 47, 0.3);
      text-align: center;
    }

    .login-container h2 {
      color: #07bca3;
      margin-bottom: 20px;
      font-size: 26px;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #07bca3;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #07bca3;
      border-radius: 6px;
      background-color: white;
      color: black;
      font-size: 15px;
      margin-bottom: 15px;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      outline: none;
      border-color: #048f7a;
      box-shadow: 0 0 6px rgba(7, 188, 163, 0.4);
    }

    .form-group button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      background-color: #07bca3;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-group button:hover {
      background-color: #04937f;
    }

    .extra-links {
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }

    .extra-links a {
      color: #07bca3;
      font-weight: bold;
      text-decoration: none;
      margin: 0 5px;
      transition: color 0.3s;
    }

    .extra-links a:hover {
      color: #04937f;
      text-decoration: underline;
    }

    .error-message {
      color: red;
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="../pages/login_action.php" method="post" name="loginForm" id="loginForm">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
      </div>
    </form>

    <div class="extra-links">
      <p>Don't have an account? <a href="../pages/signUp.php">Register here</a></p>
      <p>Forgot password? <a href="../pages/forgot_password.php">Set it here</a></p>
    </div>
  </div>
</body>
</html>
