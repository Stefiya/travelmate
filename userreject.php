<?php
$mysql=new mysqli("localhost","root","","travelmate");

$id=$_GET['id'];
$sql="update regtb set status='2' where id=$id";
mysqli_query($mysql,$sql);
header('location:user_view.php');


  
?>