<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.couldnot connect".mysqli_connect_error());
}
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$email=mysqli_real_escape_string($db,$POST['email']);
	$password=mysqli_real_escape_string($db,$POST['password']);
	$sql="select id from regtb where email='$email' and password='$password';
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count=mysqli_num_rows($result);
	
	if($count==1)
	{
		
		session_register("email");
		$_SESSION['email']=$email;
	}
	
		header("location:register.php");
	
}
?>
	


<html>
<head>
<title></title>
<style>
body{
	border:1px solid;
	border-collapse:collapse;
	padding:10px;
}
form{
		border:2px solid white;
		width:500px;
		height:900px;
	}
	h1{
		text-decoration:underline;
		text-align:center;
	}
	.img{
		background-color:pink;
	}
	
</style>
</head>
<body class="img">
<form action="index.html">
<h1>LOGIN </h1>
Emailid:<input type="email" name="email"></br></br>
password:<input type="password" name="password"></br><br><br>
<a href="#">Forgot password?  </a>  
<a href="register.php">create account</a><br><br>
<input type="submit" value="Login">
</form>
</body>
</html>