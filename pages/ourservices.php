<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services - TalentHub</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      padding-top: 80px; 
    }

    .container {
      margin: 0 auto;
      padding: 20px;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 80px; 
      background-color: white;
      display: flex;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
    }

    .logo {
      width: 130px;
      height: auto;
    }

    .navigation {
      margin-left: auto; 
      margin-left:600px;
    }

    .navigation a {
      color: #07bca3;
      text-decoration: none;
      margin-right: 30px;
      font-size: 18px;
      font-weight: bold;
  
    }

    h1 {
      text-align: center;
      margin-top: 100px;
    }

    .service-category {
      background-color: #fff;
      padding: 50px 0;
      margin-top:-120px;
    }

    .service-category h2 {
      text-align: center;
    }

    .service-list {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .service-item {
      width: 25%;
      padding: 20px;
      margin-bottom: 30px;
      background-color: #f2f2f2;
      border-radius: 8px;
      text-align: justify; 
      transition: transform 0.3s ease-in-out;
      margin-left: 20px;
      margin-right: 20px;
    }

    .service-item:hover {
      transform: scale(1.05);
    }

    .service-item img {
      width: 100%;
      height: auto;
    }

    .cta-section {
      background-color: #07bca3;
      color: #fff;
      padding: 50px 0;
      text-align: center;
    }

    .cta-section p {
      font-size: 18px;
    }

    .cta-btn {
      background-color: #dedab6;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .cta-btn:hover {
      background-color: #c2be9f;
    }
  </style>
</head>

<body>
  <header>
  <img class="logo" src="Images/Logo.png" alt="Logo">
    <div class="container">
      <div class="navigation">
        <a href="Index.php"> Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="ourservices.php">Our Services</a>
        <a href="contactUs.php">Contact Us</a>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="service-category">
      <h1 style="background-color: #07bca3; color: #dedab6;">Our Services</h1>
      <div class="service-list">
        <div class="service-item">
          <img src="Images\Talentshowcasing.png" alt="TalentHub Connect Proposal">
          <h3>Talent showcasing</h3>
          <p>
            Talent showcasing is at the heart of what we do at TalentHub Connect. We provide a platform for individuals to effectively display their skills, experiences, and achievements to potential employers. Through personalized profiles, users can highlight their unique talents, whether it's in programming, design, marketing, or any other field. Our goal is to empower individuals to present themselves in the best possible light, helping them stand out in a competitive job market. With TalentHub Connect, talent showcasing becomes not just a task, but an opportunity to shine and secure meaningful employment opportunities. Join us and let your talent take center stage.
          </p>
        </div>
        <div class="service-item">
          <img src="Images\Employee_connection_to_Employer Service.png" alt="Problem Statement">
          <h3>Employee connection to Employer Service</h3>
          <p>
            TalentHub Connect serves as the bridge between talented individuals and prospective employers, facilitating meaningful connections that lead to rewarding opportunities. Our platform is designed to empower both job seekers and companies, providing a user-friendly interface where profiles can be created, skills can be showcased, and matches can be made with ease. Whether you're a skilled professional looking for your next career move or a company seeking to hire top talent, TalentHub Connect offers the tools and resources needed to connect, collaborate, and succeed. Join us today and experience the transformative power of connecting employees to employers with TalentHub Connect.
          </p>
        </div>
        <div class="service-item">
          <img src="Images\TalentHub.png" alt="Employer Services">
          <h3>Employer Services</h3>
          <p>
            TalentHub Connect is your gateway to seamlessly connect employers with talented individuals. Our platform streamlines the recruitment process, making it easier than ever for companies to find the perfect candidates for their roles. With TalentHub Connect, employers gain access to a diverse pool of skilled professionals, allowing them to efficiently discover, evaluate, and hire the best talent for their teams. Whether you're a startup, a growing enterprise, or an established company, TalentHub Connect empowers you to find the right employees to drive your business forward. Join us today and discover how TalentHub Connect can revolutionize your hiring process.
          </p>
        </div>
      </div>
    </div>

    <div class="cta-section">
      <h2>Ready to Experience Our Services?</h2>
      <p>Take the first step towards better talents worlds today.</p>
      <a href="Index.php" class="cta-btn">Join Us Today</a>
    </div>
  </div>
</body>

</html>
