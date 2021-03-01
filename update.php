<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error:could not connet".mysqli_connect_error());
}
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$place=$_POST['place'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
		 $query="update regtb set name='$name',dob=$dob,place='$place',gender='$gender',phone='$phone',address='$address',
                 email='$email',password='$password' where id=$id";
		 if(mysqli_query($mysql,$query))
		 {
			header("Location:view_students.php");
		 }
		 else
		 {
			 echo "Error: $query".mysqli_error($mysql);
		 }
		 mysqli_close($mysql);
?>