<html>
<head>
<title>registration
</title>
<style>
input { padding:1px;
margin:20;
}
input
{
  padding:10px; 
  
}
h1{
    text-align:center;
	color:white;
	margin-top:50px;
	
}
body{
	background-image:url("bg12.jpg");
	background-size:cover;
	
}
.log{
	background-color:rgba(0,0,0,0.3);
	border:1px solid white;
   margin:2px;
   width:400px;
   padding:25px;
   color:white;
   text-align:center;
   margin-left:450px;
   
}
table{
	color:white;
	font-size:20px;
	
}
</style>    
</head>
<body>
<h1>LOGIN</h1>
<form action="check.php"  method="post">
<div class="log">
	<table>
		<tr>
		<td>Email:</br></td><td>
		<input type="email" name="email" placeholder="Enter Email"></br></td></tr>
		
		<tr><td>Password:</br></td><td>
		<input type="password" name="password" placeholder="Enter password"></br></td></tr>
		</table>
		<input  type="submit" value="Login">
		<a href="register.php">Register</a>
		
</div>
</form>
	

</body>
</html>
