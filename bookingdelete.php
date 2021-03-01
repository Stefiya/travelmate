<?php
$link=mysqli_connect("localhost","root","","travelmate");
$bid=$_GET['id'];
$sql="delete from booking where bid=$bid";
mysqli_query($link,$sql);
header('location:bookingview.php');



?>