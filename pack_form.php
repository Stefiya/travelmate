<!DOCTYPE html>
<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="style.css">
	<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->
<style>

  form{
		border:2px solid white;
		width:500px;
		height:900px;
		margin-left:300px;
		color:white;
	}
	h1{
		text-decoration:underline;
		text-align:center;
	}
	.studl{
		font-size:20px;
		margin-left:20px;
	}
    .stud{
	      padding :15px;
		  margin:10px;
		  margin-left:100px;
		  
	     }
	.sub{
		border:1px solid;
		width:100px;
		height:50px;
		border-radius:5px;
		text-align:center;
		margin-left:120px;
		margin-top:30px;
		font-size:20px;
	}
	.img{
		background-image:url("b3.jpg");
		background-size:cover;
	}
	
  </style>
</head>
<body class="img">
<section id="nav-bar"  >
		<div class="p-3 mb-2   ">
		<nav class=" nav navbar navbar-expand-lg navbar-light bg-primary text-white ">

  <a class="navbar-brand text-white" href="#">TRAVELMATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
	
	<div class="collapse navbar-collapse menubar " id="navbarNav">
    <ul class="navbar-nav ml-auto text-white">
      <li class="nav-item ">
        <a class="nav-link" href="admin_page.php">Back</a>
      </li>
    </ul>
  </div>
</nav>
	</div> 	
	</section>
    
	<form method="post" action="insert_pack.php">
		<h1>create package</h1>
	    <label class="studl">Package Type:</label></br>
        <input list="package"  name="package" class="stud"></br>	
		<datalist id="package">
		<option value="Family package">
		<option value="Honeymoon package">
		<option value="Adventure package">
		<option value="Religious package">
		</datalist>
		 <label class="studl">Destination:</label></br>
        <input class="stud" type="text" name="destination" ></br>	
		
		 <label class="studl">Duration:</label></br>
        <input class="stud" type="text" name="duration" ></br>	
		
		
		 
		 <label class="studl"> Travel Mode:</label></br>
		<input class="stud" name="travelmode" ></br>
       
		<label class="studl"> Cost:</label></br>
		<input type="text" class="stud" name="cost"></br>
		
		
		
		<input class= "sub" type="submit" value="Submit">
	</form>
	
		
</body>
</html>