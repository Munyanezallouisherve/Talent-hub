<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // no password if default XAMPP setup
$dbname = "TalentHub1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assume employer is logged in and their ID is stored in session
if (!isset($_SESSION['UserID']) || $_SESSION['UserType'] != 'employer') {
    header("Location: login.php");
    exit();
}

$employer_id = $_SESSION['UserID'];

// Fetch hired talents for this employer
$sql = "SELECT sp.full_name, sp.talent_field, h.hired_date
        FROM hiredtalents h
        JOIN submitted_portfolios sp ON h.portfolio_id = sp.id
        WHERE h.employer_id = ? 
        ORDER BY h.hired_date DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $employer_id);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hired Talents | TalentHub</title>
  <link rel="stylesheet" href="../styles/employee_dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="container">
    <!-- SIDE NAV -->
    <div class="sidenav">
        <div class="topnav-centered">
            <img src="../assests/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
        </div>
        <a href="employer_dashboard.php"><i class="fas fa-home"></i> Overview</a>
        <a class="active" href="hired_talents.php"><i class="fas fa-user"></i> Hired Talents</a>
        <a href="Explore_talents.php"><i class="fa fa-search"></i> Explore Talents</a>
        <a href="employer_profile.php"><i class="fas fa-user-edit"></i> Edit My Profile</a>
        <a href="employer_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="dashboard">
        <div class="hiring-status">
            <h2><a href="#">Hired Talents</a></h2>
            <table>
                <thead>
                    <tr>
                        <th>Talent Name</th>
                        <th>Position</th>
                        <th>Date Hired</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['talent_field']); ?></td>
                                <td><?php echo date("d-m-Y", strtotime($row['hired_date'])); ?></td>
                                <td class="accepted">Hired</td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" style="text-align:center;">No hired talents yet</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
