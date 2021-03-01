<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.couldnot connect".mysqli_connect_error());
}
$name=$_POST['name'];
$dob=$_POST['dob'];
$place=$_POST['place'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($name)&&!empty($dob)&&!empty($place)&&!empty($gender)&&!empty($phone)&&!empty($address)&&!empty($email)&&!empty($password))
{
	$sql="insert into regtb(name,dob,place,gender,phone,address,email,password,status)
	      values('$name','$dob','$place','$gender',$phone,'$address','$email','$password','2')";
		  echo $sql;
	if(mysqli_query($mysql,$sql))
	{
		header("Location:logform.php");
	}
}
else
{
	 echo "<script language='javascript'>
	         window.location='stud_reg_form.php';
			 alert('Invalid user');
			 </script>";
}
mysqli_close($mysql);
?>