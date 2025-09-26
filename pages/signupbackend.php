<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "natembea_online";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $maritalStatus = $conn->real_escape_string($_POST['familyRole']);
    $dateOfBirth = $conn->real_escape_string($_POST['birthdate']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['email']); 
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
    $password = $conn->real_escape_string($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);
    $userType = $conn->real_escape_string($_POST['UserType']); 

    // Create SQL insert statement
    $sql = "INSERT INTO users (FirstName, LastName, Gender, MaritalStatus, DateOfBirth, Email, Username, PhoneNumber, Password, ConfirmPassword, UserType) 
            VALUES ('$firstName', '$lastName', '$gender', '$maritalStatus', '$dateOfBirth', '$email', '$username', '$phoneNumber', '$hashed_password', '$confirmPassword', '$userType')";

if (mysqli_query($conn, $sql)) {
    // Registration successful, redirect to login page
    header("Location: login.php");
    exit(); // Stop executing the rest of the code
} else {
    // Error handling if registration fails
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
}
?>
