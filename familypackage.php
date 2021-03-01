<?php
$mysql=mysqli_connect("localhost","root","","travelmate");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<!DOCTYPE html>
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
	
	h1{
		text-align:center;
		
	}
	table,th,td{
	   margin-left:30px;
	   border:2px solid blue;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	  
   }
   form
   {
	   
   }
  div{
	backgroundcolor:gray;
  }
	body{
		background-image:url("img.jpg");
		
  }
  a {
	 color:black;
  }
   
</style>
</head>
<body>
	<section id="nav-bar"  >
		<div class="p-3 mb-2   ">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">

  <a class="navbar-brand text-white" href="#">TRAVELMATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
	
	<div class="collapse navbar-collapse menubar " id="navbarNav">
    <ul class="navbar-nav ml-auto text-white">
      <li class="nav-item ">
        <a class="nav-link" href="package_home.php">Back</a>
      </li>
    </ul>
  </div>
</nav>
	</div> 	
	</section>
	
	
	
	
	
	
	
	
<div>
<form method="get" action="#">
<table>
<h1>Family Package</h1>
<thead>
 <tr>
  <th>package id</th>
  <th>package type</th>
  <th>destination</th>
  <th>duration</th>
  <th>travel mode</th>
  <th>cost</th>
  <th>View</th>
   <th>Booking</th>
 </tr>
</thead>
<tbody>
<?php
$query="select * from pack_table where ptype='family'";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['pid']."</td>
				<td>".$row['ptype']."</td>
				<td>".$row['destination']."</td>
				<td>".$row['duration']."</td>
				<td>".$row['travelmode']."</td>
				<td>".$row['cost']."</td>
				
				<td><a href=viewpackage.php?id=".$row['pid'].">view</a></td>
				<td>
				    <a href='bookingform.php?id=".$row['pid']."'>Booking</a></td>
			  </tr>";
	}
}
else
{
	echo "no result";
}
mysqli_close($mysql);
?>
</tbody>
</table>
<form>
</div>
</body>
</html>