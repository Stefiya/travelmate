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
		margin-left:400px;
		text-align:center;
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
		background-image:url("bck2.jpg");
		
	}
	
  </style>
</head>
<a class="nav-link" href="user_home.php">Back</a>
<body class="img">
    
	<form method="post" action="issue_insert.php">
		<h1>ISSUES</h1>
	    <label class="studl">Name:</label></br>
        <input class="stud" type="text" name="name" placeholder="Enter Name"></br>	
		
		 <label class="studl">Phoneno:</label></br>
        <input class="stud" type="phno" name="phno" ></br>	
		
		 <label class="studl">Emailid:</label></br>
        <input class="stud" type="text" name="email" ></br>	
		 
		 <label class="studl"> Issues:</label></br>
		<input class="stud" name="issue" ></br>
       
		<label class="studl"> Description</label></br>
		<textarea class="stud" name="description"></textarea></br>
		
		
		
		<input class= "sub" type="submit" value="Submit">
	</form>
	
		
</body>
</html>

