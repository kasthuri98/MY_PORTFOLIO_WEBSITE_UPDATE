<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);
 //Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
echo "Connected successfully<br>";


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $result=mysqli_query($conn,"INSERT into user values ('','$name','$email','$message')");
   if($result){
    echo "Success";
   }
   else{
    echo "Failed";
   }
}


$errors = array();

if(isset($_POST['submit'])){

//checking required field...
  $req_fields = array('name', 'email');

  foreach ($req_fields as $field){
    if (empty(trim($_POST[$field]))){
    $errors[]= $field." is required";
   }
  }

//checking max length...
$max_len_fields = array('name'=> 200 , 'email' => 100 , 'message' => 500);

foreach ($max_len_fields as $field => $max_len){
    if (strlen(trim($_POST[$field]))>$max_len){
    $errors[]= $field." must be less than ".$max_len. ' characters';
   }
  }



//checking email address...
/*if (!is_email($_POST['email'])){
  $errors[] = 'Email address is invalid.';
}*/

}


//checking if email address already exists...
function checkEmail($conn, $email){
$query = "SELECT email FROM user WHERE email='$email'";

$result = $conn->query($query);

if($result-> num_rows>0){
    echo "<span>Email address already exists.</span>";
   }
 }





?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>MyPortfolio</title>
    <link rel="stylesheet" href="CSS/pf.css" />
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="main">
      <nav>
        <img src="IMG/logo.png" class="logo" />
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
        <img src="IMG/girl1.jpg" class="girl">
      </div>
    </div>


    <!-- ------About------- -->
    <div id="About"></div>
       <div class="container">
          <div class="row">
            <div class="about-col-1">
              <img src="IMG/about.jpg"></div>
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
        <img src="IMG/web.jpg" style="width:100%">
        <div class="text">Web Design</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="IMG/app.jpg" style="width:100%">
        <div class="text">App Design</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="IMG/uiux.jpg" style="width:100%">
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

        <?php

        if(!empty($errors)){
          echo '<div class = "errmsg">';
          echo '<b>There were error on your form.</b><br>';
          foreach ($errors as $error){
            echo $error . '<br>';
          }
        echo '</div>';
        }


        ?>

        <form action = "" method = "POST">
          <input type="text" name="name" placeholder="Your Name" >
          <input type="text" name="email" placeholder="Your Email" required>

          <textarea name="message" rows="5" cols="40" placeholder="Your Message"></textarea>
          <button type="submit" name="submit" class="btn btn2">Submit</button>
        </form>

        <span id="msg"></span>
      </div>
    </div>
  </div>

</div>
  <script src="JS/pfl.js"></script>
  </body>
</html>