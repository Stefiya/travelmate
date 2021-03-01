<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error:could not connet".mysqli_connect_error());
}
$pid=$_POST['pid'];
$ptype=$_POST['ptype'];
$destination=$_POST['destination'];
$duration=$_POST['duration'];
$travelmode=$_POST['travelmode'];
$cost=$_POST['cost'];
		 $query="update pack_table set ptype='$ptype',destination='$destination',duration='$duration',
                 travelmode='$travelmode',cost='$cost' where pid=$pid";
		 if(mysqli_query($mysql,$query))
		 {
			header("Location:selectdata.php");
		 }
		 else
		 {
			 echo "Error: $query".mysqli_error($mysql);
		 }
		 mysqli_close($mysql);
?>
		
		
