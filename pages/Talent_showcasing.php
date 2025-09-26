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
        
      

        h1 {
            color: #07bca3;
            text-align: center;
            margin-top: -50px;
        }
        h2 {
            color: #07bca3;
            text-align: center;
            background-color: #dedab6;
        }


        .feedback-form {
            margin-top: 30px;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 15px;
            color: #07bca3;
            font-size: 16px;
        }

        .feedback-form input[type="text"],
        .feedback-form textarea,
        .feedback-form input[type="date"],
        .feedback-form input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .feedback-form textarea {
            height: 100px;
        }

        .feedback-form input[type="submit"] {
            background-color: #07bca3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .feedback-form input[type="submit"]:hover {
            background-color: #09311f;
        }

        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 2;
            width: 15%;
        }

        .nav-links {
            list-style-type: none;
            padding: 0;
            background-color: whitesmoke;
            width: 380px;
            margin-left: 0px;
            z-index: 2;
            position: fixed;
        }

        .nav-links a {
            text-decoration: none;
            color: #07bca3; 
            display: flex;
            align-items: center;
            font-size: 16px; 
            font-weight: bold; 
            margin-bottom: 60px;
            margin-left: 20px; 
        }

        .nav-links a:hover {
            color:  #dedab6;  
            background-color: #07bca3; 
            border-radius: 10px; 
            padding: 12px 20px; 
        }

        .nav-links a .icon {
            margin-right: 10px;
        }

        .action-buttons {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            
        }

       
        .action-buttons button {
            width:200px;
            height:40px;
            background-color: #07bca3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 26px; 
        }

    

        .action-buttons button:hover {
            background-color: #09311f;
        }

        .Talent_showcasing-table {
            margin-top: 20px;
            display: block; 
            overflow-x: auto; 
        }

        .Talent_showcasing-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px; 
        }

        .Talent_showcasing-table th, .Talent_showcasing-table td {
            border: 1px solid #ccc;
            padding: 6px; 
            text-align: left;
        }

        .Talent_showcasing-table th {
            background-color: #07bca3;
            color: #fff;
        }

        .Talent_showcasing-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-buttons button {
            padding: 6px 12px; 
            font-size: 12px; 
            background-color: #07bca3;
        }
        .overlay {
            display: none;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .popup {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: black;
            max-width: 400px;
            width: 80%;
        }

        .popup label {
            display: block;
            margin-bottom: 10px;
            color: #07bca3;
            font-weight: bold;
        }

        .popup input[type="text"],
        .popup input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #07bca3;
            border-radius: 5px;
        }

        .popup button {
            width: calc(50% - 5px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #07bca3;
            color: white;
            cursor: pointer;
        }

        #cancel {
            margin-top : 10px;
            background-color: #ff6666;
        }
    
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: whitesmoke;
    }

    .topnav a {
      float: left;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 14px;

    }

    .topnav a:hover {
      background-color: #ebdfd3;
      color: #555;
    }

    .topnav a.active {
      background-color: #07bca3; 
      color: white;
      border-radius: 16px;
    }

    .topnav a.signup {
      float: right;
      background-color: #07bca3;
      color: whitesmoke;
      border-radius: 16px;
    }
    .topnav a.signup:hover {
      color: whitesmoke;
      background-color: #07bca3; 
    }

    .topnav a.split {
      float: right;
      background-color: #ebdfd3;
      color: #333;
    }

    .topnav a.split:hover{
      color: #555;
    }

    .topnav-centered a.title {
      float: left;
      position: absolute;
      font-family: Longhaul;
      font-weight: lighter;
      top: 0%;
      color: black;
    }

    .topnav-centered a.title:hover {
      background-color: white;
    }

    .topnav a.title {
      font-family: Longhaul;
      font-size: x-large;
      font-weight: bold;
    }

    .container {
    display: flex;
    width: 60%;
    flex-direction: column;
    margin-left:30%; 
    margin-top:60px;
}

    .topnav {
      background-color: white;
      color: #07bca3; 
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      margin-left: 160px;
      padding: 20px 10px;
      position: fixed;
      width: 100%;
      overflow: hidden;
    }

    .topnav h1 {
      margin: 0;
      font-weight: bolder;
      font-size: large;
      margin-left: 100px;
    }
    .topnav-centered {
        margin-top: -80px; 
    }


    .sidenav.topnav-centered a {
      float: none;
      position: absolute;
      left: 50%;
      transform: translate(-50%);
    }

    .dashboard {
      margin-top: 80px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: 160px;
      padding: 20px 20px;
    }

    .welcome {
      width: 100%;
    }

    .welcome h1{
      padding-left: 40px;

    }

    .welcome p{
      padding-left: 40px;
      font-weight: bolder;
      color: #818181;
    }

    .intro {
      padding: 40px;
      text-align: left;
      background: #07bca3;
      color: white;
      font-size: 30px;
      margin-bottom: 40px;
      border-radius: 40px;
      margin-left:60px;
      width: 100%; 
      height:15%;
      margin: 0 auto; 
    }

    .intro h1 {
      margin: 0;
      font-weight: bolder;
      font-size: larger;
    }

    .intro p {
      font-size: large;
      width: 48%;
    }

    .intro img {
      float:right;
    }

    button {
      background-color: #dedab6;
      color: black;
      padding: 20px;
      border: none;
      border-radius: 34px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 18px;
    }


    .activity-overview {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 20px;
      width: 40%;
      display: block;
      height: 48%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: 16px;
    }

    .activity-overview h2{
      width: 100%;
    }

    .activity-overview a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    .hiring-status {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 20px;
      width: 40%;
      display: block;
      height: 48%;
      justify-content: space-between;
      margin-left: 16px;
    }

    .hiring-status a {
      text-decoration: none;
      color: #333;
      font-weight: bolder;
    }

    .card {
      background-color: white;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
      width: 30%;
    }

    .card h3 {
      padding: 10%;
      margin: 0;
      font-weight: bold;
      font-size: large;
      color: #555;
    }

    .card p{
      padding-left: 10%;
      font-weight: 900;
      font-size: large;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #07bca3; /* Updated color code */
      color: white;
    }
    tr:hover {background-color: #e6e3cd;}

    li{
        list-style-type: none;
    }
    .sidenav {
        height: 100%;
        width: 23%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        padding-top: 80px;
        padding-left: 10px;
        margin-top: 0;
      }



      .sidenav a {
        padding: 20px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
        margin-bottom:15px;

      }

      .sidenav a:hover {
        color:  #dedab6;  
        background-color:#07bca3; /* Updated color code */
        border-radius: 10px; 
        padding: 12px 20px; 
      }

      .main {
        margin-left: 160px;
        padding: 0px 10px;
      }

      a.active {
        background-color: #07bca3; /* Updated color code */
        color: white;
        border-radius: 4px;
        font-weight: 900;
      }

      td.pending{
        background-color: rgba(255, 255, 0, 0.5);
      }
      td.rejected{
        background-color: rgba(255, 0, 0, 0.5);
      }
      td.accepted{
        background-color: rgba(0, 255, 13, 0.815);
      }

      .active a{
        background-color: #07bca3; 
        color: white;
        border-radius: 4px
      }

      .active a {
        color: white;
      }

    </style>
<body>
<header>
    <div class="container">
        <div class="topnav">
          <h1>Dashboard</h1>
        </div>

        <div class="sidenav">
            <div class="topnav-centered">
            <img src="images/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
            </div>
          <a href="employee_dashboard.php"><i class="fas fa-home"></i> Overview</a>
          <li><a class="active" href="Talent_showcasing.php"><i class="fas fa-address-book"></i> Showcase your talent</a></li>
          <li><a href="connected_employers.php"><i class="fas fa-user-tie"></i> Connected Employers</a></li>
          <li><a href="employee_dashboard.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </div>
    </header>
    </div> 

    <div class="container">
        <h2>Showcase Your Talent</h2>    
        <p>We are happy you are once again! We live to match you with the best employer whom you dream to meet. Submit your Qualification</p>
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
                <option value="Acting">Acting</option>
                <option value="Photography">Photography</option>
                <option value="Writing">Writing</option>
                <option value="Design">Design</option>
                <option value="Cooking">Cooking</option>
                <option value="Sports">Sports</option>
                <option value="Fashion Design">Fashion Design</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Illustration">Illustration</option>
                <option value="Sculpture">Sculpture</option>
                <option value="Cinematography">Cinematography</option>
                <option value="Animation">Animation</option>
                <option value="Interior Design">Interior Design</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="Game Development">Game Development</option>
                <option value="UI/UX Design">UI/UX Design</option>
                <option value="Architecture">Architecture</option>
                <option value="Engineering">Engineering</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Biology">Biology</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Data Science">Data Science</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Robotics">Robotics</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="Content Writing">Content Writing</option>
                <option value="Copywriting">Copywriting</option>
                <option value="Editing">Editing</option>
                <option value="Proofreading">Proofreading</option>
                <option value="Translation">Translation</option>
                <option value="Voice Acting">Voice Acting</option>
                <option value="Podcasting">Podcasting</option>
                <option value="Radio Broadcasting">Radio Broadcasting</option>
                <option value="TV Broadcasting">TV Broadcasting</option>
                <option value="Journalism">Journalism</option>
                <option value="Public Relations">Public Relations</option>
                <option value="Event Planning">Event Planning</option>
                <option value="Hospitality Management">Hospitality Management</option>
                <option value="Tourism Management">Tourism Management</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Project Management">Project Management</option>
                <option value="Sales">Sales</option>
                <option value="Customer Service">Customer Service</option>
                <option value="Retail">Retail</option>
                <option value="Supply Chain Management">Supply Chain Management</option>
                <option value="Logistics">Logistics</option>
                <option value="Transportation">Transportation</option>
                <option value="Finance">Finance</option>
                <option value="Accounting">Accounting</option>
                <option value="Investment Banking">Investment Banking</option>
                <option value="Insurance">Insurance</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Law">Law</option>
                <option value="Legal Services">Legal Services</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Medicine">Medicine</option>
                <option value="Dentistry">Dentistry</option>
                <option value="Nursing">Nursing</option>
                <option value="Pharmacy">Pharmacy</option>
                <option value="Psychology">Psychology</option>
                <option value="Counseling">Counseling</option>
                <option value="Social Work">Social Work</option>
                <option value="Education">Education</option>
                <option value="Teaching">Teaching</option>
                <option value="Training">Training</option>
                <option value="Tutoring">Tutoring</option>
            </select>
            <label for="portfolio">Upload Your Portfolio</label>
            <input type="file" id="portfolio" name="portfolio" accept=".pdf,.doc,.docx" required>
            <label for="resume">Upload Resume</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            <label for="cover_letter">Upload Cover Letter</label>
            <input type="file" id="cover_letter" name="cover_letter" accept=".pdf,.doc,.docx">
            

            <div class="action-buttons">
                <button type="submit"><i class="fas fa-save"></i>Submit Your Qualifications</button>
            </div>
        </form>

        <div class="Talent_showcasing-table">

                <?php

                  // Database connection
                  include 'connection.php';

                  // Initialize error message variable
                  $_SESSION['error_message'] = '';

                  // Get the logged-in user's ID
                  $user_id = $_SESSION['UserID'] ?? null;

                  // Check if the user is logged in
                  if ($user_id !== null) {
                      // Prepare and execute SQL query to fetch talents for the logged-in user
                      $sql = "SELECT * FROM talents WHERE user_id = ?";
                      $stmt = $conn->prepare($sql);
                      $stmt->bind_param("i", $user_id);
                      $stmt->execute();
                      $result = $stmt->get_result();

                      // Check if the query executed successfully
                      if ($result !== false) {
                          // Check if talents were found for the logged-in user
                          if ($result->num_rows > 0) {
                              // Display table header
                              echo '<div class="Talent_showcasing-table">';
                              echo '<h2>My Qualifications</h2>';
                              echo '<table>';
                              echo '<thead>';
                              echo '<tr>';
                              echo '<th>Talent Field</th>';
                              echo '<th>Portfolio</th>';
                              echo '<th>Resume</th>';
                              echo '<th>Cover Letter</th>';
                              echo '<th>Action</th>';
                              echo '</tr>';
                              echo '</thead>';
                              echo '<tbody>';

                              // Display talents details
                              while ($row = $result->fetch_assoc()) {
                                  echo '<tr>';
                                  echo '<td>' . $row['talent_field'] . '</td>';
                                  echo '<td><a href="' . $row['portfolio_file'] . '" target="_blank">View Portfolio</a></td>';
                                  echo '<td><a href="' . $row['resume_file'] . '" target="_blank">View Resume</a></td>';
                                  echo '<td><a href="' . $row['cover_letter_file'] . '" target="_blank">View Cover Letter</a></td>';
                                  echo '<td class="table-actions"></td>';
                                  echo '</tr>';
                              }

                              // Display message if no talents submitted yet
                              echo '</tbody>';
                              echo '</table>';
                              echo '</div>';
                          } else {
                              echo "<p>No talents submitted yet.</p>";
                          }
                      } else {
                          echo "Error executing query: " . $stmt->error;
                      }

                      // Close statement
                      $stmt->close();
                  } else {
                      // Redirect to login page if user is not logged in
                      header("Location: login.php");
                      exit();
                  }

                  // Close database connection
                  mysqli_close($conn);
                  ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>