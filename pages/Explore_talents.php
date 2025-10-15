<?php
session_start();
include 'connection.php';

// Make sure only employers can access this page
if (!isset($_SESSION['UserID']) || $_SESSION['UserType'] != 'employer') {
    header("Location: login.php");
    exit();
}

$employer_id = $_SESSION['UserID'];

// Handle form submissions (Hire, Pend, Reject)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $portfolio_id = intval($_POST['portfolio_id']);
    $action = $_POST['action'];

    if ($action == "hire") {
        $stmt = $conn->prepare("INSERT INTO hiredtalents (portfolio_id, employer_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $portfolio_id, $employer_id);
        $stmt->execute();
    } elseif ($action == "pend") {
        $stmt = $conn->prepare("INSERT INTO pendingtalents (portfolio_id, employer_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $portfolio_id, $employer_id);
        $stmt->execute();
    } elseif ($action == "reject") {
        $stmt = $conn->prepare("INSERT INTO rejectedtalents (portfolio_id, employer_id, reason) VALUES (?, ?, ?)");
        $reason = "Rejected by employer"; // later you can add a text input for custom reason
        $stmt->bind_param("iis", $portfolio_id, $employer_id, $reason);
        $stmt->execute();
    }
}

// Search functionality
$sql = "SELECT * FROM submitted_portfolios";
if (isset($_GET['talent_field']) && !empty($_GET['talent_field'])) {
    $talent_field = $conn->real_escape_string($_GET['talent_field']);
    $sql .= " WHERE talent_field LIKE '%$talent_field%'";
}
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Explore Talents | TalentHub</title>
  <link rel="stylesheet" href="../styles/employee_dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body { font-family: Arial, sans-serif; background-color: #f8f8f8; margin:0; padding:0; }
    .container { display:flex; }
    .topnav { position:fixed; top:0; left:0; right:0; height:60px; background:white; border-bottom:1px solid #ddd; display:flex; align-items:center; padding:0 20px; }
    .topnav h1 { font-size:20px; color:#07bca3; }
    .sidenav { width:200px; position:fixed; top:60px; left:0; bottom:0; background:#fff; border-right:1px solid #ddd; padding-top:20px; }
    .sidenav a { display:block; padding:12px 16px; color:#333; text-decoration:none; }
    .sidenav a.active { background:#07bca3; color:white; border-radius:5px; }
    .sidenav a:hover { background:#ebdfd3; }
    .content { margin-left:220px; padding:80px 20px 20px 20px; width:100%; }
    #Catalog { width:100%; border-collapse:collapse; margin-top:20px; }
    #Catalog th, #Catalog td { padding:10px; border:1px solid #ddd; text-align:center; }
    #Catalog th { background:#07bca3; color:white; }
    #Catalog tr:nth-child(even){ background:#f9f9f9; }
    #Catalog tr:hover{ background:#f1f1f1; }
    button.action { padding:6px 10px; border:none; border-radius:3px; cursor:pointer; margin:2px; }
    button.hire { background:#4CAF50; color:white; }
    button.pend { background:#FF9800; color:white; }
    button.reject { background:#F44336; color:white; }
    #TalentSearch { padding:10px; width:250px; }
    #TalentSearchButton { padding:10px; background:#07bca3; color:white; border:none; border-radius:4px; cursor:pointer; }
  </style>
</head>
<body>

<div class="topnav">
  <h1>Employer Dashboard</h1>
</div>

<div class="sidenav">
  <a href="employer_dashboard.php"><i class="fas fa-home"></i> Overview</a>
  <a class="active" href="Explore_talents.php"><i class="fa fa-search"></i> Explore Talents</a>
  <a href="hired_talents.php"><i class="fas fa-user"></i> Hired Talents</a>
  <a href="employer_profile.php"><i class="fas fa-user-edit"></i> Edit Profile</a>
  <a href="employer_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="content">
  <form method="get">
    <input type="text" id="TalentSearch" name="talent_field" placeholder="Enter talent field">
    <button id="TalentSearchButton" type="submit"><i class="fas fa-search"></i> Search</button>
  </form>

  <table id="Catalog">
    <thead>
      <tr>
        <th>Name</th>
        <th>Talent Field</th>
        <th>Portfolio</th>
        <th>Resume</th>
        <th>Cover Letter</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo htmlspecialchars($row["full_name"]); ?></td>
            <td><?php echo htmlspecialchars($row["talent_field"]); ?></td>
            <td><?php echo htmlspecialchars($row["portfolio_file"]); ?></td>
            <td><?php echo htmlspecialchars($row["resume_file"]); ?></td>
            <td><?php echo htmlspecialchars($row["cover_letter_file"]); ?></td>
            <td><?php echo htmlspecialchars($row["email_address"]); ?></td>
            <td>
              <form method="post" style="display:inline;">
                <input type="hidden" name="portfolio_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="action" value="hire" class="action hire">Hire</button>
              </form>
              <form method="post" style="display:inline;">
                <input type="hidden" name="portfolio_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="action" value="pend" class="action pend">Pend</button>
              </form>
              <form method="post" style="display:inline;">
                <input type="hidden" name="portfolio_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="action" value="reject" class="action reject">Reject</button>
              </form>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="7">No talents found</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

</body>
</html>
