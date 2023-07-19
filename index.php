<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<script type="text/javascript" src="script.js"></script>


</head>
<style>

*{
   padding:0;
   margin:0;
   text-decoration:none;
   list-style:none;
   box-sizing:border-box;
  }
  body{
  background:#2c3e50;
     font-family:monsterrat;
     font-size: 20px;
    }
	article {
  float: right;
  color:white;
 
 }
 nav{
    background: darkblue;
    height: 80px;
    width:100%;
}
label.logo{
font-size: 35px;
font-weight: bold;
color: white;
padding:0 100px;
line-height: 80px;
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
 .gallery{
    width: 90%;
    margin: auto;
    display: inline;
    text-align: center;
    color: white;
}
.gallery img{
    width: 25%;
    margin: 2px;
    text-align: center;
}

#slideshow{
    position: relative;
    box-sizing: border-box;
    margin-left: auto;
    margin-right: auto;
    overflow: hidden;
    height: 500px;
    width: 700px;
}
#slide{
    top: 0;
    position: absolute;
    width: 3500px;
    animation-name: move;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    float: left;
    height: 400px;
}

#class img{
    float: left;
    width: 700px;
}
@keyframes move{
    0%{        left:0px; }
    20%{       left:-700px;}
    40%{       left:-1400px;}
    60%{       left:-2100px;}             
    80%{       left:-1400px;}
    100%{      left:0px}
}
fieldset{
    background-color:darkblue;
    width: 50%;
    height: 600px;
    word-spacing: 2px;
    font-size: 100%;
    color: white;
    padding:7px;
    font-size: 20px;
    margin: auto;
    text-align: center;


}
#page{
    width: 70%;
    margin: auto;
    height: 900px;
    background-color: black;
    padding: 3px;
    text-align: center;
    font-size: 20px;
}
  
 /* Style the footer */
footer {
  margin-top:auto;
  position:fixed;
  bottom:0;
  left:0;
  right:0;
  background-color:darkblue ;
  padding: 2px;
  text-align:center;
  color: white;
} 
.footer-bottom{
width:100vw;
padding:0px 0;
text-align:center;
}
.footer-bottom span{
text-transform: uppercase;
opacity:.4;
}
</style>	
<body style="background-image:url(fly2.jpg) ;">

<nav>
    <label class="logo">FLYING THINGS</label>
	<ul>
	 <li><a class="active" href="#">Home </a></li>
	  <li><a href="contact.php">contact </a></li>
	   <li><a href="Skills.php">skills</a></li>
	   <li><a href="projects.php">projects</a></li>
</ul>
</nav>
<section>
 <img src="fai.jpg" alt="girl" width="410">
  
  <article>
  <h1>PROFILE</h1><br>
  <?php
  $selectdb=mysqli_select_db($con,"my_project");
  $query="SELECT*FROM Home";
  $result=mysqli_query($con,$query);

while($row=mysqli_fetch_row($result)){
 echo $row[1];
}
?>
 
  </article>
  <p id="demo"></p>
<div style="float:left;color:white; ">
<script>

const hour = new Date().getHours(); 
let greeting;

if (hour < 18) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}

document.getElementById("demo").innerHTML = greeting;
</script>
</div>
</section>

<div style="float:left; width: 700px; height:350px;  margin-left:0px;color:white; ">
<h3><b>Featured project and tools used</b></h3><br>
   <h2> FLYING THINGS</h2>
   <p>"Drones are a testment to human ingenuity<br> and creativity, showcasing what we can achieve <br>when we put our minds to it".Acocording to Merriam-Webster,a drone tends to be  an unmanned aircraft or ship guided by a remote control or on board<br>.i personally use tools like worldpress,in wordpress we embed any type of media file on the pages content area.<br>There is no limitation when it comes to the number of pages,posters.<br>Some of the technologies used on a dairy basis include :browers, HTML,PHP,CSS,javascript,java just to mention a few.</p>
   <img src="her1.jpg" alt="girl" width="333">
</div>

<div class="gallery" text-align="center"color="white">
            
     </div>

</div style="text-align: center">
<fieldset>
        <h2>contact us</h2>
<p>For more information please send us your queries and enquries by simply providing us with your  email details</p>
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

<script>
  function validateForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get form inputs
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var messageInput = document.getElementById("message");

    // Check if inputs are valid
    if (nameInput.checkValidity() && emailInput.checkValidity() && messageInput.checkValidity()) {
      // Perform form submission or further processing here
      alert("Form submitted successfully!");
      // Reset form
      document.getElementById("contactForm").reset();
    } else {
      // Display validation error messages
      if (!nameInput.checkValidity()) {
        alert("Please enter a valid name.");
      }

      if (!emailInput.checkValidity()) {
        alert("Please enter a valid email address.");
      }

      if (!messageInput.checkValidity()) {
        alert("Please enter a message.");
      }
    }
  }
</script>
</fieldset>

        <div id="slideshow">
            <div id="slide">
                <img src="her2.jpg" alt="image" width="410"/>
                <img src="her3.jpg" alt="image"  width="410"/>
                <img src="fly0.jpg" alt="image"  width="410"/>
            </div>
        </div>
    </div>

<footer class="footer-content">

<footer class="footer-content">

<p> for more information visit my social links</p>


	 <h4>My portfilio</h4>
	 <div class="social-links">
	 <a href="#"><i class="fab fa-facebook-f"></i></a>
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="#"><i class="fab fa-linkedin-in"></i></a>
	 <a href="#"><i class="fab fa-instagram"></i></a>
</div>
<div class= " footer-bottom">
 <p>copyright&copy;2023 myportfolio. designed by <span>faith mkandawire</span></p>
	  </div>
</footer>	
 
</body>
</html>