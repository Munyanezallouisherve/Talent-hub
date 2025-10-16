<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | TalentHub</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #d3d7b0ff;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #222;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: 500;
      margin-bottom: 6px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: border 0.2s;
    }

    input:focus, select:focus {
      border-color: #007bff;
    }

    small {
      color: red;
      display: none;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #07bca3;
;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #00b354ff;
    }

    .note {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .note a {
      color:  #07bca3;
      text-decoration: none;
    }

    .note a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Create Your Account</h2>

    <form action="signUp.php" method="post" id="signupForm">

      <!-- Full Name -->
      <div class="form-group">
        <label for="Username">Full Name</label>
        <input type="text" id="Username" name="Username" placeholder="Enter your full name" required>
        <small id="nameError">Only letters and spaces allowed</small>
      </div>

      <!-- Gender -->
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="" disabled selected>Select gender</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
          <option value="Others">Others</option>
        </select>
      </div>

      <!-- Phone Number -->
      <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="e.g. 0781234567" required>
        <small id="phoneError">Enter exactly 10 digits</small>
      </div>

      <!-- Email -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <small id="emailError">Invalid email format</small>
      </div>

      <!-- Password -->
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="At least 8 characters with a letter & digit" required>
        <small id="passwordError">Password must be at least 8 characters long and include a letter & a digit</small>
      </div>

      <!-- User Type -->
      <div class="form-group">
        <label for="UserType">User Type</label>
        <select id="UserType" name="UserType" required>
          <option value="" disabled selected>Select user type</option>
          <option value="employer">Employer</option>
          <option value="employee">Employee</option>
        </select>
      </div>

      <!-- Submit Button -->
      <div class="form-group">
        <button type="submit">Register</button>
      </div>

      <div class="note">
        Already have an account? <a href="login.php">Login here</a>
      </div>
    </form>
  </div>

  <script>
    // Full Name validation
    document.getElementById('Username').addEventListener('input', function() {
      const nameInput = this.value;
      const nameError = document.getElementById('nameError');
      if (!/^[A-Za-z\s]*$/.test(nameInput)) {
        nameError.style.display = 'block';
        this.value = nameInput.replace(/[^A-Za-z\s]/g, '');
      } else {
        nameError.style.display = 'none';
      }
    });

    // Phone number validation
    document.getElementById('phoneNumber').addEventListener('input', function() {
      const phoneInput = this.value;
      const phoneError = document.getElementById('phoneError');
      this.value = phoneInput.replace(/[^0-9]/g, ''); // Only digits allowed
      phoneError.style.display = (this.value.length !== 10) ? 'block' : 'none';
    });

    // Email validation
    document.getElementById('email').addEventListener('input', function() {
      const emailError = document.getElementById('emailError');
      const validEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      emailError.style.display = validEmail.test(this.value) ? 'none' : 'block';
    });

    // Password validation
    document.getElementById('password').addEventListener('input', function() {
      const passwordError = document.getElementById('passwordError');
      const validPassword = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
      passwordError.style.display = validPassword.test(this.value) ? 'none' : 'block';
    });
  </script>
</body>
</html>
