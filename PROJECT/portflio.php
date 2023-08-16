<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>MyPortfolio</title>
    <link rel="stylesheet" href="pf.css" />
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="main">
      <nav>
        <img src="logo.png" class="logo" />
        <ul>
          <li><a href="#main">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <div class="content">
        <h1>I’m <span>Kasthurika Madhumali</span></h1>
      </div>
      <div class="image">
        <img src="girl1.jpg" class="girl">
      </div>
    </div>


    <!-- ------About------- -->
    <div id="About"></div>
       <div class="container">
          <div class="row">
            <div class="about-col-1">
              <img src="about.jpg"></div>
            <div class="about-col-2">
              <h1 class="sub-title">About Me</h1>
              <p>Hello, <br>I am G.T. Kasturika Madhumali Karunathilaka. I am a student at Rajarata University, Sri Lanka. I am learning web design. I am doing web design and app development as my hobby and hope to make it my career path in the future.</p>
              <div class="tab-titles">
                <p></p>
            </div>
          </div>
        </div>
  </div>

  <!-- ---Services--- -->

<!-- Slideshow container -->
<div id="services">
  <div class="container">
  <h1 class="sub-title">Services</h1>
  <div class="Slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="web.jpg" style="width:100%">
        <div class="text">Web Design</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="app.jpg" style="width:100%">
        <div class="text">App Design</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="uiux.jpg" style="width:100%">
        <div class="text">UI/UX Design</div>
      </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
</div>

<!-- ----contact--- -->

<div id="contact">
  <div class="container">
    <div class="row">
      <div class="contact-left">
        <h1 class="sub-title">Contact me</h1>
        <p><i class="fa-sharp fa-solid fa-paper-plane"></i>gtkmadhumali@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i>0112239345</p>
        <div class="social-icons">
          <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://intagram.com"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <a href="my-cv.pdf" download class="btn btn2">Download CV</a>
      </div>
      <div class="contact-right">
        <form name="submit-to-google-sheet">
          <input type="text" name="Name" placeholder="Your Name" required>
          <input type="email" name="Email" placeholder="Your Email" required>
          <textarea name="Message" placeholder="Your Message"></textarea>
          <button type="submit" class="btn btn2">Submit</button>
        </form>
        <span id="msg"></span>
      </div>
    </div>
  </div>

</div>
  <script src="pfl.js"></script>
  </body>
</html>