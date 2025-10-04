<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employer Dashboard | TalentHub</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../styles/employer_dashboard.css"> <!-- Employee CSS reused -->
</head>
<body>

<!-- Sidebar -->
<div class="sidenav">
    <div class="topnav-centered">
        <img src="../assests/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
    </div>
    <a class="active" href="employer_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a href="Explore_talents.php"><i class="fa fa-search"></i> Explore talents</a>
    <a href="hired_talents.php"><i class="fas fa-user"></i> Hired talents</a>
    <a href="employer_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="employer_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Main Container -->
<div class="container">

    <!-- Topnav -->
    <div class="topnav">
        <h1>Employer Dashboard</h1>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard">

        <!-- Welcome Section -->
        <div class="welcome">
            <h1>Welcome, Employer!</h1>
            <p>We appreciate you trusting us with your hiring needs.</p>
        </div>

        <!-- Intro / CTA Section -->
       <div class="intro">
    <div>
        <h1>Ready to Hire?</h1>
        <p>Browse our talented individuals and hire the best match for your company!</p>
        <button onclick="document.location='Explore_talents.php'">Explore talents</button>
    </div>
    <img src="../assests/Images/employees.jpeg" alt="Employees">
</div>


        <!-- Activity Overview Cards -->
        <div class="activity-overview">
            <div class="card">
                <h3>Available Talents</h3>
                <p>10</p>
            </div>
            <div class="card">
                <h3>Hired Talents</h3>
                <p>4</p>
            </div>
            <div class="card">
                <h3>Pending Applications</h3>
                <p>6</p>
            </div>
            <div class="card">
                <h3>Rejected Applications</h3>
                <p>2</p>
            </div>
        </div>

        <!-- Hiring Status Table -->
        <div class="hiring-status">
  <h2><a href="#">Employee Hiring Status</a></h2>
  <table>
    <thead>
      <tr>
        <th>Personnel</th>
        <th>Job Specification</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <!-- Always visible rows -->
      <tr>
        <td>Bryan Mugisha</td>
        <td>Frontend Engineer</td>
        <td>26-02-24</td>
        <td class="pending">Pending</td>
      </tr>
      <tr>
        <td>Linda Rolland</td>
        <td>Singer</td>
        <td>25-02-24</td>
        <td class="rejected">Rejected</td>
      </tr>

      <!-- Hidden rows -->
      <tr class="more-rows" style="display: none;">
        <td>Soreille Zuba</td>
        <td>Audio Transcriber</td>
        <td>25-02-24</td>
        <td class="pending">Pending</td>
      </tr>
      <tr class="more-rows" style="display: none;">
        <td>Koku Mutabazi</td>
        <td>Backend Engineer</td>
        <td>21-02-24</td>
        <td class="accepted">Accepted</td>
      </tr>
    </tbody>
  </table>

  <div class="view-more-container">
    <button class="view-more-btn" id="viewMoreBtn">
      View More <i class="fas fa-chevron-down"></i>
    </button>
  </div>
</div>

<script>
const btn = document.getElementById('viewMoreBtn');
const hiddenRows = document.querySelectorAll('.more-rows');
let expanded = false;

btn.addEventListener('click', () => {
  expanded = !expanded;
  
  hiddenRows.forEach(row => {
    row.style.display = expanded ? 'table-row' : 'none';
  });

  const icon = btn.querySelector('i');
  icon.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';

  btn.textContent = expanded ? 'View Less ' : 'View More ';
  btn.appendChild(icon); // reattach the icon
});
</script>

</body>
</html>
