<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<html>
<head>
<link rel="stylesheet"  href="style.css">
	<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->

	<style>
	body{
	background-image: url("img19.jpg");
	background-size:cover;
	}
	input
	{
		padding:10px;
	}
	.bi
	{
		text-align:center;
		border:2px solid;
		width:300px;
		height:500px;
		margin-left:450px;
		
	}

	</style>
</head>
<body>
<section id="nav-bar"  >
		<div class="p-3 mb-2   ">
		<nav class=" nav navbar navbar-expand-lg navbar-light bg-primary text-white ">

  <a class="navbar-brand text-white" href="#">TRAVELMATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
	
	<div class="collapse navbar-collapse menubar " id="navbarNav">
    <ul class="navbar-nav ml-auto text-white">
      <li class="nav-item ">
        <a class="nav-link" href="selectdata.php">Back</a>
      </li>
    </ul>
  </div>
</nav>
	</div> 	
	</section>

	<?php
		$id=$_GET['id'];
		$query="select * from pack_table where pid=$id";
		$result=mysqli_query($mysql,$query);
		$row=mysqli_fetch_assoc($result);
			
	?>
	<div class="bi">
	<form action="update_f.php" method="post">

  <h1>Update Form</h1>
  <input type="hidden" name="pid" value="<?php echo $row['pid'];?>"></br>
  <label>Package type:</label></br>
  <input type="text" name="ptype" value="<?php echo $row['ptype'];?>"></br>
  <label>Destination:</label><br>
  <input type="text" name="destination" value="<?php echo $row['destination'];?>"></br>
   <label >Duration:</label><br>
  <input type="text"  name="duration" value="<?php echo $row['duration'];?>"></br>
  <label>Travel mode:</label><br>
  <input type="text" name="travelmode" value="<?php echo $row['travelmode'];?>"></br></br>
  <label >Cost:</label><br>
  <input type="text" name="cost" value="<?php echo $row['cost'];?>"></br></br>
  
  <input type="submit" value="Update">
  
</form> 
</div>
	
</body>
</html>