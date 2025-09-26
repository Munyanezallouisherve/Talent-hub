<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
<link rel="stylesheet" href="../styles/ContactUs.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>

<body>
  <div class="header">
    <img class="logo" src="../assests/logo.png" alt="Logo">
    <div class="navigation">
      <a href="../pages/index.php"> Home</a>
      <a href="../pages/AboutUs.php">About Us</a>
      <a href="../pages/OurServices.php">Our Services</a>
      <a href="../pages/ContactUs.php">Contact Us</a>
    </div>
  </div>

  <div class="contact-container">
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form action="Contact_backend.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <div class="contact-info-item">
        <i class="fab fa-google"></i>
        <p>contact@talentHub.com</p>
      </div>
      <div class="contact-info-item">
        <i class="fas fa-envelope"></i>
        <p>contact@talentHub.com</p>
      </div>
      <div class="contact-info-item">
        <i class="fas fa-phone"></i>
        <p>+250781129035</p>
      </div>
      <div class="contact-info-item">
        <i class="fab fa-instagram"></i>
        <p>@talentHub</p>
      </div>
    </div>
  </div>
</body>

</html>
