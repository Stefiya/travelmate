<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
$name=$_POST['name'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$issue=$_POST['issue'];
$description=$_POST['description'];
if(!empty($name)&&!empty($phno)&&!empty($email)&&!empty($issue)&&!empty($description))
{
$sql="insert into issue(name,phno,email,issue,description)
     values('$name','$phno','$email','$issue','$description')";
 echo $sql;
if(mysqli_query($mysql,$sql))
{
header("Location:issue_form.php");
}
}
mysqli_close($mysql);
?>
