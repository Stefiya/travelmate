<?php
session_start();
$link=mysqli_connect("localhost","root","","travelmate");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM regtb WHERE email='$email' and password='$password' ";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$_SESSION['id']=$id;
$name=$row['name'];
$_SESSION['name']=$name;
if($email==$row['email'] && $password==$row['password'] && $row['status']=='0')
{
	header("Location:admin_page.php");
}
else if($email==$row['email'] && $password==$row['password'] && $row['status']=='1')
{
	header("Location:user_home.php");
}
else
{
echo "<script language='javascript'>
window.location='logform.php';
alert('invalid user');
</script>";
}
mysqli_close($link);
?>