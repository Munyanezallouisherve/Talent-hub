<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | TalentHub</title>
  <link rel="stylesheet" href="../styles/ContactUs.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <!-- HEADER -->
  <div class="header">
    <img class="logo" src="../assests/logo.png" alt="Logo">
    <div class="navigation">
      <a href="../pages/index.php">Home</a>
      <a href="../pages/AboutUs.php">About Us</a>
      <a href="../pages/OurServices.php">Our Services</a>
      <a class="active" href="../pages/ContactUs.php">Contact Us</a>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <div class="contact-container">
    <div class="contact-card">
      <div class="contact-form">
        <h2>Let’s Get in Touch</h2>
        <p>We’d love to hear from you! Whether it’s a question, feedback, or collaboration idea — drop us a message below.</p>

        <form action="Contact_backend.php" method="post">
          <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="Your Name" required>
          </div>
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="input-group">
            <i class="fas fa-comment-dots"></i>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit">Send Message <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>

      <div class="contact-info">
        <h3>Contact Information</h3>
        <div class="contact-info-item">
          <i class="fab fa-google"></i>
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
  </div>
</body>
</html>
