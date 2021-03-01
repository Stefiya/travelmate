<?php
session_start();
$name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet"  href="style.css">
<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->


</head>
<body >

<section id="nav-bar"  >
<div class="p-3 mb-2   ">
<nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">

  <a class="navbar-brand text-white" href="#"><i class="fa fa-user "></i><?php echo "welcome $name"; ?></a>



  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse menubar " id="navbarNav">
    <ul class="navbar-nav ml-auto text-white">
      <li class="nav-item ">
        <a class="nav-link" href="user_home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="package_home.php">Package</a>
      </li>
     
	  <li class="nav-item">
        <a class="nav-link " href="issue_form.php">Issues</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.html">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="index.html">logout</a>
      </li>
    </ul>
  </div>
</nav>
	</div> 	
	</section>
  <!----------------------headclose------------->
  <div class="banner" >
    <div class="container-fluid slide" >
        <div class="row vh-100 align-items-center">
            <div class="col text-white text-center mt-5" >
                <h1>Welcome to TravelMate</h1>
                <h3>let's enjoy</h3>
            </div>
        </div>
        
    </div>
</div>
	<!-----------banner-section------->
	<section id="banner">
		<div class="container">
			<div class="row" id="about">
				<div class="col-md-6 mt">
					<p class="text-black"><b class="mt-30">Travelmate</b> We will make an easier task of searching places and for booking train, flight or bus. . In the present system a customer has to approach various agencies to find details of places and to book tickets. This often requires a lot of time and effort. We provide approach skills to critically examine how a tourist visits and its ability to operate in an appropriate way when dealing with the consequences of tourism, locally, regionally, and nationally including visitor security and ecological influences. </p>
					
				</div>
				 <div class="col-md-6 text-center">
				 	<img src="man.jpg"  class="img-fluid ">
				 </div>

			</div>
		</div>
		
	</section>
	<!-------4 serv-section------->

<section class="bg-white">
  <div class="container ">
    <h3>FEATURES</h3>
    <div class="row">
      <marquee  onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0"  scrollamount="9de">
	  <div class="col tImg  transparent_box">
      <div class="col-3 ">

        <img src="lime.jpg"class="img-fluid">
     
      
        <img src="boat.jpg "class="img-fluid">
      
      
        <img src="girl.jpg" class="img-fluid">
        <img src="munnar.jpg "class="img-fluid">
		
        <img src="lime.jpg"class="img-fluid">
     
      
        <img src="boat.jpg "class="img-fluid">
      
      
        <img src="girl.jpg" class="img-fluid">
        <img src="munnar.jpg "class="img-fluid">
		
        <img src="lime.jpg"class="img-fluid">
     
      
        <img src="boat.jpg "class="img-fluid">
      
      
        <img src="girl.jpg" class="img-fluid">
        <img src="munnar.jpg "class="img-fluid">
		</div>
		</marquee>
      </div>
     </div>
    </div>
</section>
	<!-------------section close------------>

	
  	
	</section>
	  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->
  
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"> Write to us:</h3>
          </div>
          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <label for="form-name">Your name</label>
            <input type="text" id="form-name" class="form-control">
            
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label for="form-email">Your email</label>
            <input type="text" id="form-email" class="form-control">
            
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <label for="form-Subject">contact number</label>
            <input type="text" id="form-Subject" class="form-control">
            
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
             <label for="form-text">comment</label>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            
          </div>
          <div class="text-center">
            <button class="btn btn-light-blue">Submit</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
          <div class="text-dark">
					<h2> Office Address</h2>
					<p>D3, 3th Floor, Sumaj Complex,</p>
					 <p>Sreekariyam</p>
					<p>Trivandrum - 695581</p>
					<p>Kerala, India</p>
					<p>+91 9207069824</p>
					<p>alsconquerors@gmail.com</p>
				
				</div>
	
      </div>
      <!-- Buttons-->
      
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->


	
	
	
		<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-dark" href="#">SpiderTech-Solutions.com</a>
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>
