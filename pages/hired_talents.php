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
                    <tr>
                        <td>Koku Mutabazi</td>
                        <td>Backend Engineer</td>
                        <td>21-02-24</td>
                        <td class="accepted">Hired</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
