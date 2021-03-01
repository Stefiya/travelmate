<?php
session_start();
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$froms=$_POST['froms'];
$tos=$_POST['tos'];
$id=$_SESSION['id'];
if(!empty($name)&&!empty($contact)&&!empty($email)&&!empty($froms)&&!empty($tos))
{
$sql="insert into booking(name,contact,email,froms,tos,login_id)
     values('$name','$contact','$email','$froms','$tos',$id)";
 echo $sql;
if(mysqli_query($mysql,$sql))
{
header("Location:bookingview.php");
}
}
mysqli_close($mysql);
?>

