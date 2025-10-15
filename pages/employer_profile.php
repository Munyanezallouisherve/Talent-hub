<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Employer- TalentHub</title>
    <script src="https://kit.fontawesome.com/a3c696c988.js" crossorigin="anonymous"></script>
    
    <style>
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
        }

        
        #navbar {
            background-color: #fff; 
            color: #07bca3;
            text-align: center;
            padding: 10px;
        }

        
        #sidenav {
            height: 100%;
            width: 20%;
            position: fixed;
            z-index: 0;
            top: 0;
            background-color: #fff;
            padding-top: 50px;
            text-align: justify;
            overflow-x: hidden;
        }

        #sidenav a {
        padding: 20px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
        margin-bottom:15px;

      }

      #sidenav a:hover {
        color:  #dedab6;  
        background-color:#07bca3; 
        border-radius: 10px; 
        padding: 12px 20px; 
      }

        
        #ProfileViewing {
            margin-top: 3%;
        }

        .ViewProfile {
            width: 80%; 
            max-width: 600px; 
            margin: 50px auto;
            margin-left: 35%;
            background-color: #d9d9d9; 
            padding: 20px;
            border: 2px solid #999; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            display: flex;
            align-items: center; 
        }

        .profile {
            display: flex;
            align-items: flex-start; 
        }

        .profile img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin-right: 20px;
        }

        .separator {
            border-left: 2px solid #999; 
            margin-right: 20px;
            height: 200px; 
        }

        .info label {
            font-weight: bold;
            margin-bottom: 9px; 
            display: inline-block; 
            width: 90px; 
        }

        #Name, #UserID, #email, #role {
            background-color: #d9d9d9;
            border: 0px;
            font-size: 16px;
            font-family: Times New Roman;
            color: #808080;
        }

        #Editbutton {
            width: 180px;
            height: 30px;
            background-color: #07bca3; /* Updated color code */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
        }

        #SaveProfile,
        #Cancelbutton {
            width: 150px;
            height: 30px;
            background-color: #07bca3; /* Updated color code */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
        }

        @media only screen and (max-width: 768px) {
            .ViewProfile {
                width: 90%; /
            }
        }
    </style>
</head>
<body>

<div id="navbar">
    <h2>Edit Profile TalentHub</h2>

</div>
<div id="sidenav">
    <img src="../assests/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:-15px">
    <a href="employer_dashboard.php"><i class="fas fa-home"></i> Overview</a>
    <a href="Explore_talents.php"><i class="fa fa-search"></i> Explore talents</a>
    <a href="hired_talents.php"><i class="fas fa-user"></i> Hired talents</a>
    <a href="employer_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a>
    <a href="employer_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div id="ProfileViewing">
    <div class="ViewProfile">
        <div class="profile">
            <img id="uploadImage" src="../assests/Images/profile-image.jpg" alt="Profile Picture">
            <div class="separator"></div>
        </div>
        <?php
        if (isset($_SESSION['UserID'])) {
            $user_id = $_SESSION['UserID'];
            $sql = "SELECT * FROM users WHERE UserID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form method="post" action="update_employer_profile.php">
                    <div class="info">
                        <label>User ID:</label> <input type="text" name="UserID" id="UserID" value="<?php echo $row["UserID"]; ?>" readonly><br>
                        <label>Email:</label> <input type="email" name="email" id="email" value="<?php echo $row["Email"]; ?>" readonly><br>
                        <label>UserType:</label> <input type="text" name="UserType" id="UserType" value="<?php echo $row["UserType"]; ?>" readonly><br>
                        <button id="Editbutton" onclick="EditProfile()" type="button">Edit Profile</button>
                        <button id="SaveProfile" name="submit" style="display: none;" type="submit">Save Profile</button>
                        <button id="Cancelbutton" onclick="Cancel()" style="display:none;" type="button">
                        <i class="fas fa-ban"></i> Cancel
</button>

                    </div>
                </form>


                    <?php
                }
            }
        }
        ?>
    </div>
</div>


<script>
    function EditProfile() {
        var inputs = document.querySelectorAll('.editable[readonly]');
        // Loop through each input and remove the readonly attribute
        inputs.forEach(function (input) {
            input.removeAttribute('readonly');
            input.style.border = '1px solid #07bca3'; 
        });

        document.getElementById("Editbutton").style.display = "none";
        document.getElementById("SaveProfile").style.display = "inline-block";
        document.getElementById("Cancelbutton").style.display = "inline-block";
    }

    function Cancel(Name) {
        document.getElementById("Name").value = Name;
        document.getElementById("Editbutton").style.display = "block";
        document.getElementById("SaveProfile").style.display = "none";
        document.getElementById("Cancelbutton").style.display = "none";

        var inputs = document.querySelectorAll('.editable:not([readonly])');
        inputs.forEach(function (input) {
            input.setAttribute('readonly', 'readonly');
            input.style.border = '0';
        });
    }

</script>

</body>
</html>
