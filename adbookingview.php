<?php
session_start();
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
	
	h3{
		text-align:center;
		font-size:30px;
		
		
	}
	table,th,td{
	   margin-top:50px;
	   margin-left:350px;
	   border:2px solid #000000;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	   background-color:rgba(0,0,0,0.4);
	   color:white;
	  
   }
   
  div{
	backgroundcolor:gray;
  }
	body{
		background-image:url("img22.jpg");
		background-size:cover;
	
  }
  .clr{
	  margin-right:300px;
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
        <a class="nav-link" href="admin_page.php">Back</a>
      </li>
    </ul>
  </div>
</nav>
	</div> 	
	</section>
<div>
<form method="get" action="#">
<table class="clr">

<h3>VIEW BOOKING DETAILS</h3>
<thead>
 <tr>
  <th>Booking id</th>
  <th>Name</th>
  <th>Contact no</th>
  <th>Emailid</th>
  <th>From</th>
  <th>To</th>
  <th>Action</th>
 </tr>
</thead>
<tbody>
<?php
$id=$_SESSION['id'];
$query="select * from booking";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['bid']."</td>
				<td>".$row['name']."</td>
				<td>".$row['contact']."</td>
				<td>".$row['email']."</td>
				<td>".$row['froms']."</td>
				<td>".$row['tos']."</td>
				
				
				<td><a href='bookingdelete.php?id=".$row['bid']."'>Delete</a></td>
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
