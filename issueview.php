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
	
	h3{
		text-align:center;
		font-size:25px;
		
		
	}
	h1{
		color:white;
	}
	table,th,td{
		
	   margin-left:350px;
	   border:2px solid #000000;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	   background-color:rgba(0,0,0,0.6);
	   color:white;
	  
   }
   
  div{
	backgroundcolor:gray;
  }
	body{
		
		background-image:url("img29.jpg");
		background-image:cover;
	
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
<table>

<h3>VIEW ISSUES</h3>
<thead>
 <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Contact no</th>
  <th>Emailid</th>
  <th>Issues</th>
  <th>Description</th>
  <th>Action</th>
 </tr>
</thead>
<tbody>
<?php
$query="select * from issue";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['phno']."</td>
				<td>".$row['email']."</td>
				<td>".$row['issue']."</td>
				<td>".$row['description']."</td>
				<td><a href='issuedelete.php?id=".$row['id']."'>Delete</a></td>
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
