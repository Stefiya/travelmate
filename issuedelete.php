<?php
$link=mysqli_connect("localhost","root","","travelmate");
$id=$_GET['id'];
$sql="delete from issue where id=$id";
mysqli_query($link,$sql);
header('location:issueview.php');



?>