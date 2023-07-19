<?php
require_once "connection.php";
?>
 <!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
 nav{
    background: #0082e6;
    height: 80px;
    width:100%;
}


nav ul{
    float: right;
    margin-right: 20px;
    line-height: 60px;
}
nav li{
    display: inline-block;
    list-style:none;
}
nav li a{
    font-size: 18px;
    text-transform: uppercase;
    padding: 0px 30px;
    color: white;
    text-decoration: none;
}
nav ul li a{
   color:white;
   font-size:20px;
   padding: 7px 13px;
   border-radius: 3px;
   text-transform: uppercase;
   }
a.active,a:hover{
    bakground: #2c3e50;
    transition:.5s;
}
    .skills-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
    }
    .contact-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    .contact-container h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    .contact-form input[type="text"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .contact-form button {
      padding: 10px 20px;
      background-color: #0082e6;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .contact-form .error-message {
      color: red;
      margin-bottom: 10px;
    }

    .contact-social {
      margin-top: 20px;
      text-align: center;
    }

    .contact-social a {
      display: inline-block;
      margin-right: 10px;
      color: #333;
      font-size: 20px;
      transition: color 0.3s;
    }

    .contact-social a:hover {
      color: #4caf50;
    }

    .contact-map {
      margin-top: 20px;
      width: 100%;
      height: 400px;
    }
    
     body{
      background-image: url("fly7.jpg");
    background-size: cover;
    background-position: center;
    font-size: 18px;
    color: white;
    }
     ol{
      list-style: none;
    }
  </style>
  <script>
    function validateForm() {
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;
      const errorMessage = document.getElementById('error-message');

      if (name === '' || email === '' || message === '') {
        errorMessage.textContent = 'Please fill in all fields.';
        return false;
      }

      if (!validateEmail(email)) {
        errorMessage.textContent = 'Please enter a valid email address.';
        return false;
      }

      errorMessage.textContent = '';
      return true;
    }

    function validateEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  </script>
</head>
<body>
  
  <div class="contact-container">
    <h1>Contact Us</h1>
    <header>
  <nav>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="skills.php">Skills</a></li>
    </ul>
  </nav>
</header>
    <h2>Hotlines</h2>
    <ol>
      <li>+265 999 26 06 668</li>
    </ol>
     <h2>Physical Address</h2>
    <ol>
      <li>kamuzi airport housing</li>
      <li>P.O. Box 171</li>
      <li>lilongwe</li>
    </ol>
    <h3>Message Us</h3>
       <p>For a better communication please send us your questions and enquries and we will get back to you using the email you provide below</p>

    <form action= "" method="post"class="contact-form" onsubmit="return validateForm()">
      <div class="error-message" id="error-message"></div>
      <input type="text" id="name"name="name"placeholder="Your Name" required>
      <input type="text" id="email" name="email"placeholder="Your Email" required>
      <textarea id="message" name ="message" placeholder="Your Message" required></textarea>
      <button type="submit" name="submit">Send Message</button>
    </form>
<?php
if(isset($_POST["submit"])){
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

      //selecting a database
$selectdb=mysqli_select_db($con,"my_project");
$query = "INSERT INTO contact(name,email,  message)values('$name','$mail','$message')";
      $result = mysqli_query($con,$query);
      echo "data sent to the database";
    }else{
      echo "data not sent to the database";
    }
  ?>
    <h2>visit my social media accounts</h2>
    <div class="contact-social">
      <a href=""><i class="fab fa-twitter"></i></a>
      <a href="https://www.facebook.com/angella.angence"><i class="fab fa-facebook"></i></a>
      <a href="https://example.com"><i class="fab fa-linkedin"></i></a>
      <a href="https://example.com"><i class="fab fa-instagram"></i></a>
    </div>

    <h2>Find me at kamuzu internation airport housing ,lilongwe Malawi.</h2>
 <?php
  $selectdb=mysqli_select_db($con,"my_project");
  $query="SELECT*FROM contact";
  $result=mysqli_query($con,$query);

while($row=mysqli_fetch_row($result)){
 echo $row[1];
}
?>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  
</body>
</html>
