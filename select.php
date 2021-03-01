<?php
$mysql=mysqli_connect("localhost","root","","studentmngsys");
if($mysql===false)
{
	die("Error.couldnot connect".mysqli_connect_error());
}
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$address=$_POST['address'];
$email=$_POST['email'];
if(!empty($name)&&!empty($rollno)&&!empty($address)&&!empty($email))
{
	$sql="insert into stud_details(name,rollno,address,email) 
	      values('$name',$rollno,'$address','$email')";
	if(mysqli_query($mysql,$sql))
	{
		header("Location:selectdata.php");
	}
}
else
{
	 echo "<script language='javascript'>
	         window.location='stdform.php';
			 alert('all fields are required');
			 </script>";
}
mysqli_close($mysql);
?>