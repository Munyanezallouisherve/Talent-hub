<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Token</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .token-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: green;
            color: #fff;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="token-container">
        <h2>Enter Token</h2>
        <form action="reset_password.php" method="POST">
            <div class="form-group">
                <label for="token">Token</label>
                <input type="text" id="token" name="token" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
            <?php
            session_start();
            include_once 'connection.php';

            // Check if form is submitted
            if (isset($_POST['submit'])) {
                // Retrieve the token from the form
                $token = $_POST['token'];

                // Validate the token
                $query = "SELECT * FROM users WHERE reset_token = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("s", $token);
                $stmt->execute();
                $result = $stmt->get_result();

                echo $result;

                if ($result->num_rows == 1) {
                    // Token is valid, redirect to reset_password.php
                    header("Location: reset_password.php?token=$token");
                    exit();
                } else {
                    // Token is invalid, display error message
                    echo "<p class='error-message'>Invalid token</p>";
                }
            }

            // Clear the error message from the session
            unset($_SESSION['error_message']);
            ?>
        </form>
    </div>
</body>

</html>
