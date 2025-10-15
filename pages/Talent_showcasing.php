<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Talent Showcasing - TalentHub</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: whitesmoke;
      overflow-x: hidden;
    }

.topnav {
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: center; /* centers the text */
  height: 70px;
  padding: 0 20px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  z-index: 10;
}

.topnav h1 {
  margin: 0;
  font-weight: 900;
  font-size: 24px;
  color: #07bca3;
}


    /* ---------- SIDE NAV ---------- */
    .sidenav {
      height: 100%;
      width: 23%;
      position: fixed;
      top: 0;
      left: 0;
      background-color: white;
      overflow-x: hidden;
      padding-top: 80px;
      padding-left: 10px;
      border-right: 1px solid #ddd;
    }

    .sidenav img {
      height: 50px;
      display: block;
      margin: 10px auto 30px auto;
    }

    .sidenav a {
      padding: 15px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      border-radius: 8px;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #dedab6;
      background-color: #07bca3;
    }

    .sidenav a.active {
      background-color: #07bca3;
      color: white;
    }

    /* ---------- MAIN CONTAINER ---------- */
    .container {
      width: 60%;
      margin-left: 30%;
      margin-top: 100px;
    }

    h2 {
      text-align: center;
      color: #07bca3;
      background-color: #dedab6;
      padding: 10px;
      border-radius: 10px;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    /* ---------- FORM ---------- */
    .feedback-form label {
      display: block;
      margin-bottom: 10px;
      color: #07bca3;
      font-weight: bold;
    }

    .feedback-form input,
    .feedback-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 15px;
    }

    .feedback-form input[type="file"] {
      border: none;
    }

    .action-buttons {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    .action-buttons button {
      background-color: #07bca3;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 10px 25px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    .action-buttons button:hover {
      background-color: #09311f;
    }

    /* ---------- TABLE ---------- */
    .Talent_showcasing-table {
      margin-top: 40px;
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .Talent_showcasing-table h2 {
      background: none;
      color: #07bca3;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      text-align: left;
      padding: 10px;
      border: 1px solid #ccc;
      font-size: 15px;
    }

    th {
      background-color: #07bca3;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e6e3cd;
    }

    td a {
      color: #07bca3;
      text-decoration: none;
      font-weight: bold;
    }

    td a:hover {
      text-decoration: underline;
    }

  </style>
</head>

<body>

  <<!-- ---------- TOP NAV ---------- -->
<div class="topnav">
  <h1>Dashboard</h1>
</div>


  <div class="sidenav">
    <img src="../assests/images/logo.png" alt="Logo">
    <a href="employee_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a class="active" href="Talent_showcasing.php"><i class="fas fa-address-book"></i> Showcase your talent</a>
    <a href="connected_emoloyers.php"><i class="fas fa-user-tie"></i> Connected Employers</a>
    <a href="employee_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="container">
    <h2>Showcase Your Talent</h2>    
    <p>We are happy to have you again! Submit your qualifications and let employers find your talent.</p>

    <form class="feedback-form" action="submit_talent.php" method="post" enctype="multipart/form-data">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email Address</label>
      <input type="text" id="email" name="email" required>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" required>

      <label for="field">Talent Field</label>
      <select id="field" name="field" required>
        <option value="" selected disabled>Select Talent Field</option>
        <option value="Music">Music</option>
        <option value="Art">Art</option>
        <option value="Dance">Dance</option>
        <option value="Cinematography">Cinematography</option>
        <option value="Photography">Photography</option>
        <option value="Web Development">Web Development</option>
        <option value="Design">Design</option>
        <option value="Writing">Writing</option>
      </select>

      <label for="portfolio">Upload Portfolio</label>
      <input type="file" id="portfolio" name="portfolio" accept=".pdf,.doc,.docx" required>

      <label for="resume">Upload Resume</label>
      <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

      <label for="cover_letter">Upload Cover Letter</label>
      <input type="file" id="cover_letter" name="cover_letter" accept=".pdf,.doc,.docx">

      <div class="action-buttons">
        <button type="submit"><i class="fas fa-save"></i> Submit Your Qualifications</button>
      </div>
    </form>

    <div class="Talent_showcasing-table">
      <?php
      include 'connection.php';
      $_SESSION['error_message'] = '';

      $user_id = $_SESSION['UserID'] ?? null;

      if ($user_id !== null) {
        $sql = "SELECT * FROM talents WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result !== false && $result->num_rows > 0) {
          echo '<h2>My Qualifications</h2>';
          echo '<table>';
          echo '<thead>
                  <tr>
                    <th>Talent Field</th>
                    <th>Portfolio</th>
                    <th>Resume</th>
                    <th>Cover Letter</th>
                  </tr>
                </thead>
                <tbody>';

          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['talent_field']) . '</td>';
            echo '<td><a href="' . htmlspecialchars($row['portfolio_file']) . '" target="_blank">View Portfolio</a></td>';
            echo '<td><a href="' . htmlspecialchars($row['resume_file']) . '" target="_blank">View Resume</a></td>';
            echo '<td><a href="' . htmlspecialchars($row['cover_letter_file']) . '" target="_blank">View Cover Letter</a></td>';
            echo '</tr>';
          }

          echo '</tbody></table>';
        } else {
          echo "<p>No talents submitted yet.</p>";
        }

        $stmt->close();
      } else {
        header("Location: login.php");
        exit();
      }

      mysqli_close($conn);
      ?>
    </div>
  </div>

</body>
</html>
