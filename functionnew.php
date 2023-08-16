<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylenew.css">

    <!--font awesome cdn link-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

</head>
<body>
    
 <!-- Header Section Starts -->

 <header>
 <div class="user">
     <img src="newpic/myprofile.jpg.jpg" alt="">
     <h3 class="name">NATASHI ANUTHTHARA</h3>
     <p class="post">PHOTOGRAPHY</p>
 </div>
    
 <!-- toggle switch -->
 <div>
    <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="checkbox-label">
          <i class="fas fa-moon"></i>
          <i class="fas fa-sun"></i>
          <span class="ball"></span>
        </label>
      </div>

<!-- toggle switch -->

  <nav class="navbar">
     <ul>
         <li><a href="#home">Home</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#service">Service</a></li>
         <li><a href="#Works">My Works</a></li>
         <li><a href="#contact">Contact</a></li>
     </ul>
        </nav>
</header>

<!-- Header Section Ends -->

<div id="menu" class="fa fa-bars"></div>

<!-- Home Section Starts -->

<section class="home" id="home">

    <h1>HI <span>THERE!</span> <br> LOOKING FOR  <span>QUALITY PHOTOGRAPHY?</span></h1>
    <a href="#contact"><button class="btn">Contact Me <i class=""></i></button></a>
    <div class="image-slideshow">
        <div class="image fade">
        <img src="newpic/home1.jpg.jpg" alt="">
        </div>        
        <div class="image fade">
        <img src="newpic/home3.jpg.jpg" alt="">
        </div>       
        <div class="image fade">
        <img src="newpic/home4.jpg.jpg" alt="">
        </div> 
        <div class="image fade">
        <img src="newpic/home2.jpg.jpeg" alt="">
        </div>
      <script src="scriptnew.js"></script>
</div> 

</section>

<!-- Home Section Ends -->

<!-- About Section Starts -->

<section class="about" id="about">

    <h2 class="heading"><span>About</span> Me</h2>

    <h2>WHO IS  <span>NATASHI?</span></h2>
    <p> *An ARTIST <br> I believe that the world 'ARTIST' is another name for photographer. A photographer artistically captures and crafts a wonderful work of art.<br>
        *A FREEDOM SEEKER <br> I feel at ease when I get the camera in my hands. I feel free and peaceful. I would do my best to capture the beautiful moments as they are going to be happy memories that last a life time.<br>
        *A FRIEND <br> I love being a supportive person who understands the needs of my clients and deliver it as they wish.</p>

    
</section>

<!-- About Section Ends -->

<!-- Service Section Starts -->

<section class="service" id="service">
    <h2 class="heading">Service</span></h2>
    <div class="box-container">

    <div class="box">
        <i class="fa fa-camera" style="font-size:30px;color:var(--color)"></i>
        <span>WEDDINGS</span>
        <img src="newpic/wed.jpg.jpg" alt="">

    </div> 
   
    <div class="box">
        <i class="fa fa-camera" style="font-size:30px;color:var(--color)"></i>
        <span>FASHIONS</span>
        <img src="newpic/fashion.jpg.jpg" alt="">
        
    </div>

    <div class="box">
        <i class="fa fa-camera" style="font-size:30px;color:var(--color)"></i>
        <span> TRAVEL</span>
        <img src="newpic/travel.jpg.jpg" alt="">
    
    </div>

    <div class="box">
       <i class="fa fa-camera" style="font-size:30px;color:var(--color)"></i>
        <span>EVENTS</span>
        <img src="newpic/event.jpg.jpg" alt="">
       
    
    </div>

    <div class="box">
       <i class="fa fa-camera" style="font-size:30px;color:var(--color)"></i>
        <span>GRADUATIONS</span>
        <img src="newpic/graduation.jpg.jpg" alt="">
        
        
    </div>

    <div class="box">
        <i class="fa fa-camera" style="font-size:30px;color:var(--color)"></i>
        <span>PHOTO BOOTHS</span>
        <img src="newpic/photobooth.jpg.jpg" alt="">
    
    </div>

</div>
</section>

<!-- Service Section Ends -->

<!-- My works Section Starts -->

<section class="Works" id="Works">
    <h1 class="heading">My <span>Works</span></h1>

    <div class="row">
      <div class="my-process-col">
          <img src="newpic/image.jpg">
          <div class="layer">
              <h1>Capture</h1>
             
          </div>
      </div>
      <div class="my-process-col">
          <img src="newpic/image2.jpg">
          <div class="layer">
              <h1>Your</h1>
             
          </div>
      </div>
      <div class="my-process-col">
          <img src="newpic/my3.jpg.jpg">
          <div class="layer">
              <h1>Dream</h1>
              </div>
              </div>

     </div> 

   

         </section>

<!--  My works Section Ends -->

<!-- Contact Section Starts -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> me </h1>
    
    <div class="row">
    
        <div class="content">
    
            <h3 class="title">contact info</h3>
    
            <div class="info">
                <h3> <i class="fas fa-envelope"></i> anuththara981@gmail.com </h3>
                <h3> <i class="fas fa-phone"></i> 0773845992 </h3>
                <h3> <i class="fas fa-map-marker-alt"></i> Nugegoda,Colombo </h3>
            </div>
    
        </div>
    
        <form action="functionnew.php" method="post">
    
            <input type="text" placeholder="name" class="box" id="name1" name="name1"><br><br>
            <input type="email" placeholder="email" class="box" id="email" name="email"><br><br>
            <textarea name="message" id="message" name="message" cols="30" rows="10" class="box message" placeholder="message"></textarea><br><br>
            <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button><br><br>
    
        </form>
        <button><a href="show.php">show data</a></button><br><br>
	</div>

    </div>
    </section>
    
    <!-- Contact Section Ends -->

    <!-- footer Section Starts -->

  <footer>
    <section class="footer">
        <img src="newpic/LOGO.jpg">
        <h2>CAPTURE YOUR DREAM </h2><br><br> 
    <div class="rounded-social-buttons">
        <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
        <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <p>NATASHI ANUTHTHARA PHOTOGRAPHY</p>
  </footer>

     <!-- footer Section Ends -->
</body>
</html>


<?php 
error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {

	$name1 = $_POST['name1'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	$sql = "INSERT INTO `reg` VALUES ('$id','$name1','$email','$message')";
	
	$data=mysqli_query($con,$sql);

	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>
