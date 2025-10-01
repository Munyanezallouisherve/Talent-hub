<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | TalentHub</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../styles/employee_dashboard.css">
</head>
<body>
     <div class="container">
        <div class="topnav">
          <h1>Dashboard</h1>
        </div>

        <div class="sidenav">
            <div class="topnav-centered">
            <img src="../assests/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
        </div>
          <a class="active" href="#"><i class="fas fa-home"></i> Overview</a>
          <li><a href="Talent_showcasing.php"><i class="fas fa-address-book"></i> Showcase your talent</a></li>
          <li><a href="connected_employers.php"><i class="fas fa-user-tie"></i> Connected Employers</a></li>
          <li><a href="employee_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </div>

    <div class="dashboard">
        <div class = "welcome">
            <h1>Welcome!</h1>
            <p>Ready to be hired today?</p>
        </div>

        <div class="intro">
        <img src="../assests/Images/employees.jpeg" alt="Employees" width="30%" style="border-radius: 20px">
            <h1>Need a job?</h1>
            <p>Showcase your talents by posting your portofolio and get instantly connected with your dream employer!</p>
            <button onclick="document.location='bookappointment.php'" >Showcase your talent</button>
            
        </div>

        <div class="activity-overview">
    <h2>Report</h2>
    <div class="cards-container">
        <div class="card">
            <h3>Submitted Portfolios</h3>
            <p>3</p>
        </div>
        <div class="card">
            <h3>Portfolio Views</h3>
            <p>2</p>
        </div>
        <div class="card">
            <h3>Employer Offers</h3>
            <p>4</p>
        </div>
        <div class="card">
            <h3>Accepted Employer Offers</h3>
            <p>2</p>
        </div>
    </div>
</div>

      
      <div class="hiring-status">
        <h2><a href="#">Employer Offers</a></h2>
        <table>
          <thead>
            <tr>
              <th>Employer</th>
              <th>Job Specification</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Favour Samba</td>
                <td>Dancer</td>
                <td>26-02-24</td>
                <td class="pending">Pending</td>
            </tr>
            <tr>
                <td>Jabari Jimenez</td>
                <td>Frontend Engineer</td>
                <td>25-02-24</td>
                <td class="rejected">Cancelled</td>
            </tr>
            <tr>
                <td>Blaise Mugisha</td>
                <td>Backend Engineer</td>
                <td>25-02-24</td>
                <td class="accepted">Accepted</td>
            </tr>
            <tr>
                <td>Fiona Rolland</td>
                <td>Backend Engineer</td>
                <td>21-02-24</td>
                <td class="accepted">Accepted</td>
            </tr>
          </tbody>
        </table>
        <br>
        <a href="hiring-status.php" style="color:blue"><u>View More</u></a>
      </div>
    </div>
  </div>
</body>
</html>

