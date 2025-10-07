<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connected Employers - TalentHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../styles/connected_employers.css">
</head>
<body>
<header>
    <div class="topnav">
        <div class="nav-left"></div>
        <h1>Dashboard</h1>
        <div class="nav-right"></div>
    </div>

    <div class="sidenav">
        <div class="topnav-centered">
            <img src="../assests/images/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
        </div>
        <a href="employee_dashboard.php"><i class="fas fa-home"></i> Overview</a>
        <a href="Talent_showcasing.php"><i class="fas fa-address-book"></i> Showcase your talent</a>
        <li><a class="active" href="connected_emoloyers.php"><i class="fas fa-user-tie"></i> Connected Employers</a></li>
        <a href="employee_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</header>

<div class="container">
    <h2>Connected Employers</h2>
    <div class="Talent_showcasing-table">
        <table>
            <thead>
                <tr>            
                    <th>Employer Name</th>
                    <th>Contact Email</th>
                    <th>Contact Phone</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $user_id = $_SESSION['UserID'] ?? null;
            $user_type = $_SESSION['UserType'] ?? null;

            if ($user_id !== null && $user_type === 'patient') {
                $sql = "SELECT t.*, u.Username AS EmployerName, u.Email AS EmployerEmail, u.ContactInfo AS EmployerPhone
                        FROM talents t
                        JOIN users u ON t.user_id = u.UserID
                        WHERE t.user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result !== false) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['EmployerName']); ?></td>
                                <td><?php echo htmlspecialchars($row['EmployerEmail']); ?></td>
                                <td><?php echo htmlspecialchars($row['EmployerPhone']); ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='3'>No connected employers found</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Error executing query: " . htmlspecialchars($stmt->error) . "</td></tr>";
                }

                $stmt->close();
            } else {
                echo "<tr><td colspan='3'>User ID not found.</td></tr>";
            }

            $conn->close();
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
