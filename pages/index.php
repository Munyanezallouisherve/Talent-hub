<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="stylesheet" href="../styles/indexstyles.css">
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

  <div class="landing-container">
    <div class="slide active">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="../assests/Images/slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Welcome to TalentHub</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Explore the amazing support and  Services we offer.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='../pages/login.php'">Login</button>
          <button class="button" onclick="window.location.href='../pages/signUp.php''">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="../assests/Images/slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Are you an Employee?</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Join us to showercase your talents and be matched to amazing Employers</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='../pages/login.php'">Login</button>
          <button class="button" onclick="window.location.href='../pages/signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="../assests/Images/slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Are you looking for innovative minds and talents?</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Just us today and get matched with amazing talents people!</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='../pages/login.php'">Login</button>
          <button class="button" onclick="window.location.href='../pages/signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="../assests/Images/slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>You are on the Right platform!</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Just Register and login and Explore!</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='../pages/login.php'">Login</button>
          <button class="button" onclick="window.location.href='../pages/signUp.php'">Register</button>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="video-container">
        <video class="video" autoplay loop muted>
          <source src="../assests/Images/slide1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <h1 style="background-color: rgba(54, 137, 131, 0.5);"><strong>Unleash Your Creativity</strong></h1>
        <p style="background-color: rgba(54, 137, 131, 0.5);">Join our creative community and unleash your full potential.</p>
        <div class="button-container">
          <button class="button" onclick="window.location.href='../pages/login.php'">Login</button>
          <button class="button" onclick="window.location.href='../pages/signUp.php'">Register</button>
        </div>
      </div>
    </div>
  </div>

  <button class="arrow left" onclick="prevSlide">&#8249;</button>
  <button class="arrow right" onclick="nextSlide">&#8250;</button>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    function autoChangeSlide() {
      setInterval(() => {
        nextSlide();
      }, 5000); 
    }

    showSlide(currentSlide);
    autoChangeSlide();
  </script>
</body>

</html>
