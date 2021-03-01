<?php
$link=mysqli_connect("localhost","root","","travelmate");
$pid=$_GET['id'];
$sql="delete from pack_table where pid=$pid";
mysqli_query($link,$sql);
header('location:selectdata.php');



?>