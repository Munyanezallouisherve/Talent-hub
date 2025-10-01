<?php
// Initialize the error message variable
$errorMsg = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $Username   = mysqli_real_escape_string($conn, $_POST['Username']);
    $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
    $phoneNumber= mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email      = mysqli_real_escape_string($conn, $_POST['email']);
    $password   = mysqli_real_escape_string($conn, $_POST['password']);
    $userType   = mysqli_real_escape_string($conn, $_POST['UserType']);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Username, Password, Email, Gender, ContactInfo, UserType) 
            VALUES ('$Username', '$hashedPassword', '$email', '$gender', '$phoneNumber', '$userType')";

    if (mysqli_query($conn, $sql)) {
        header("Location: signUp_successful.php");
        exit();
    } else {
        $errorMsg = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        /* General reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(rgba(7, 188, 163, 0.7), rgba(7, 188, 163, 0.7)),
                        url('Images/Talentshowcasing.png') no-repeat center center/cover;
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .signup-container {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            animation: fadeIn 0.6s ease-in-out;
        }

        .signup-container h2 {
            color: #07bca3;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #0d452f;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #07bca3;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background: #07bca3;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-group button:hover {
            background: #059e89;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center;
        }

        p {
            text-align: center;
            margin-top: 12px;
        }

        p a {
            color: #07bca3;
            font-weight: 600;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Create Account</h2>

        <?php if (!empty($errorMsg)) : ?>
            <p class="error-message"><?php echo $errorMsg; ?></p>
        <?php endif; ?>

        <form action="signUp.php" method="post" id="signupForm">
            <div class="form-group">
                <label for="Username">Full Name</label>
                <input type="text" id="Username" name="Username" 
                       pattern="[A-Za-z ]+" 
                       placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" 
                       pattern="[0-9]{10}" 
                       placeholder="e.g. 0781234567" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" 
                       placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                       pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" 
                       placeholder="At least 8 characters with a letter & digit" required>
            </div>

            <div class="form-group">
                <label for="UserType">User Type</label>
                <select id="UserType" name="UserType" required>
                    <option value="" disabled selected>Select user type</option>
                    <option value="employer">Employer</option>
                    <option value="employee">Employee</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
