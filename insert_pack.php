<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
$ptype=$_POST['ptype'];
$dest=$_POST['destination'];
$duration=$_POST['duration'];
$tmode=$_POST['travelmode'];
$cost=$_POST['cost'];


if(!empty($ptype)&&!empty($dest)&&!empty($duration)&&!empty($tmode)&&!empty($cost))
{
$sql="insert into pack_table(ptype,destination,duration,travelmode,cost)
     values('$ptype','$dest','$duration','$tmode',$cost)";
 echo $sql;
if(mysqli_query($mysql,$sql))
{
header("Location:selectdata.php");
}
}
else
{
echo "<script language='javascript'>
        window.location='stud_reg_form.php';
alert('all fields are required');
</script>";
}
mysqli_close($mysql);
?>

