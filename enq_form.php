<html>
<head>
<title></title>
<style>
    .bi{
	background-image:url("bg15.jpg");
	background-size:cover;
    }
    input{
        padding:10px;
        margin:10px;
        text-align:center;
    }
	textarea{
        padding:30px;
		margin:10px;
        text-align:center;
	}
    .ci{
        border:2px solid black;
        padding:15px;
        width:700px;
        height:750px;
        background-color:rgba(0,0,0,0.2);
        color:white;
        margin-left:300px;
        text-align:center;
        font-size:22px;
    }
   
    table{
        color:white;
        margin-left:150px;
    }
</style>
</head>
<body>
<div class="bi">
    <form method="post" action="insert_enq.php">
    <div class="ci">
    <h2 class="head">ENQUIRY FORM</h2>
    <table>
    <tr><td>Name:</td><td><input type="text" name="name" placeholder="enter name"><br></td></tr>
	<tr><td>Email ID:</td><td><input type="email" name="email" placeholder="Enter email"><br></td></tr>
    <tr><td>Phone No:</td><td><input type="text" name="phoneno" placeholder="Enter phone no"><br>  </td></tr>
    <tr><td>Enquiry:</td><td><textarea name="enquiry" placeholder="Your enquiry"></textarea><br>
    </table>
    <input  type="submit" value="submit">
    
    </div>
    </form>
</div>
</body>
</html>