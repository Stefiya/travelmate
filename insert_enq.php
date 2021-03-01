<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$enquiry=$_POST['enquiry'];

if(!empty($name)&&!empty($email)&&!empty($phoneno)&&!empty($enquiry))
{
$sql="insert into enqtb(name,email,phoneno,enquiry)
     values('$name','$email','$phoneno','$enquiry')";
if(mysqli_query($mysql,$sql))
{
header("Location:enq_form.php");
}
}
mysqli_close($mysql);
?>
