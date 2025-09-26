<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | TalentHub</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

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
      margin-bottom:10px;

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
      width:85%;
      flex-direction: column;
      height: 100vh;
      margin-left:150px;
      margin-right:0;
    }

    .topnav {
      background-color: white;
      color: #07bca3; /* Updated color code */
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
        margin-bottom:5px;

      }

      .sidenav a:hover {
        color:  #dedab6;  
        background-color:#07bca3; 
        border-radius: 10px; 
        padding: 12px 20px; 
      }

      .main {
        margin-left: 160px;
        padding: 0px 10px;
      }

      a.active {
        background-color: #07bca3;
        color: white;
        border-radius: 4px;
        font-weight: 900;
      }

      .active a{
        background-color: £0d452f;
        color: white;
        border-radius: 4px
      }

      .active a {
        color: white;
      }

          /* search product styling */   
    #ViewTalents{
      margin-top:3%;
    }

    #Catalog{
      width: 75%;
      margin: 20px auto;
      margin-left:20%;
      border-collapse: collapse;
      border: 2px solid #07bca3;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    #Catalog td{
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }

    #Catalog th{
      background-color: #07bca3;
      color: white;
      font-weight: bold;
    }

    #Catalog tbody tr:nth-child(even){
      background-color: #f9f9f9;
    }

    #Catalog tbody tr:hover{
      background-color: #ddd;
    }

    #TalentSearch{
      margin:50px auto;
      margin-left:40%;
      padding: 10px;
      width: 40%; /* Set a standard width for the input */
      box-sizing: border-box;
      margin-bottom: 5px; /* Add a little space between the input and button */
    }

    #TalentSearchButton{
      margin:5px;
      padding: 10px;
      width: 150px;
      background-color: #07bca3;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    </style>

<div class="container">
    <div class="topnav">
        <h1>Dashboard</h1>
    </div>

    <div class="sidenav">
        <div class="topnav-centered">
            <img src="images/logo.jpg" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
        </div>
        <li><a href="employer_dashboard.php"><i class="fas fa-home"></i> Overview</a></li>
        <a class="active" href="Explore_talents.php"><i class="fa fa-search"></i> Explore talents</a></li>
        <li><a href="employer_dashboard.php"><i class="fas fa-user"></i> Hired talents</a></li>
        <li><a href="employer_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
        <li><a href="employer_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </div>

    <!-- Product Search-->
  <div id="ViewTalents">
      <input type="text" id="TalentSearch" name="talent_field" placeholder="Enter talent field">
      <button id="TalentSearchButton" type="submit"><i class="fas fa-search"></i></button>
    <div id="ShowTalents">
      <!-- Product table -->
      <table id="Catalog">
        <thead>
          <tr>
            <th>Name</th>
            <th>Talent Field</th>
            <th>Portfolio</th>
            <th>Resume</th>
            <th>Cover letter</th>
            <th>Email address</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM talents";
          if(isset($_GET['talent_field'])){
            $talent_field = $_GET['talent_field'];
            $sql .= " WHERE talent_field='$talent_field'";
          }
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $row["full_name"]; ?></td>
            <td><?php echo $row["talent_field"]; ?></td>
            <td>$<?php echo $row["portfolio_file"]; ?></td>
            <td>$<?php echo $row["resume_file"]; ?></td>
            <td>$<?php echo $row["cover_letter_file"]; ?></td>
            <td>$<?php echo $row["email_address"]; ?></td>
            <td><button style=" padding: 5px 10px; background-color:#4CAF50;color: white;border: none; border-radius: 3px;cursor: pointer;" 
            onclick="">Add to Cart</button></td>
          </tr>
          <?php
            }
          } else {
            echo "<tr><td colspan='6'>Sorry, we don't have that talent</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
