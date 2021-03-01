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
<title>form site</title>
  <style>
  form{
		border:2px solid white;
		width:500px;
		height:900px;
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
		background-image:url("pink.jpg");
		
	}
	.fm{
		margin-left: 500px;
		border-width: 100%; 
	}
	
  </style>
</head>
<body class="img ">
    
	<form method="post" action="insert_data.php" class="fm">
		<h1>Registration Form</h1>
	    <label class="studl">Name:</label></br>
        <input class="stud" type="text" name="name" placeholder="Enter Name"></br>	
		
		 <label class="studl">DOB:</label></br>
        <input class="stud" type="date" name="dob" ></br>	
		
		 <label class="studl">Place:</label></br>
        <input class="stud" type="text" name="place" ></br>	
		
		 <label class="studl">Gender:</label></br>
        <input class="stud" type="radio" name="gender" id="male">
		 <label for="male">Male</label>
		  <input class="stud" type="radio" name="gender" id="female">
		 <label for="female">Female</label></br>
		 
		 <label class="studl"> Contactno:</label></br>
		<input class="stud" name="phone" ></br>
       
		<label class="studl"> Address:</label></br>
		<textarea class="stud" name="address" placeholder="Enter Address"></textarea></br>
		
		<label class="studl"> Email:</label></br>
		<input class="stud"type="email" name="email" placeholder="Enter Email"></br>
		
		<label class="studl"> Password:</label></br>
		<input class="stud"type="password" name="password" ></br>
		
		<input class= "sub" type="submit" value="Submit">
	</form>
	
		
</body>
</html>