<?php
include("config.php");
session_start();
if(!isset($_SESSION['admname'])){
	header("location:index.php");
}
?>
<html>
<head>
	<title>Add New Staff</title>
	<link href="css/car.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script type="text/javascript" src="javascript/script.js"></script>
	<script src="jquery/jquery.validate.min.js"></script>
</head>
<body>
	<!-- navigation bar -->
	<div id="header">
		Online Car Sale System
	</div>
	<div id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="admin.php">Customer</a></li>
			<li><a href="stfflist.php">Staff Lists</a></li>
			<li><a href="orderrp.php">Order</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<!-- Customer Register Form-->
	<div id="new">
		<form class="login" method="post" action="stfregdb.php">
			<label><h3>Register here for add new staff</h3></label>
			<label for="stfname">Staff Name</label>
			<input type="text" name="stfname">
			<label for="stfpwd">Password</label>
			<input type="password" name="stfpwd">
			<label for="stfmail">Email</label>
			<input type="text" name="stfmail">
			<label for="stfadd">Address</label>
			<textarea type="text" name="stfadd"></textarea>
			<label for="stfph">Phone</label>
			<input type="text" name="stfph">
			<label for="gender"></label>
			<input name="gender" type="radio" value="male">Male
			<input name="gender" type="radio" value="female">Female
			<br/>
			<input type="submit" value="Add">
		</form>
	</div>
	<script src="jquery.js"></script>
	<script>
		$(".login").validate({
		rules:{
			stfname:{
				"required":true,
				minlength:4
				
			},
			stfpwd:{
				"required":true,
				minlength:8
				
			},
			stfmail:{
				"required":true,
				"email":true
			},
			stfadd:{
				"required":true
			},
			stfph:{
				"required":true
			},
			gender:{
				"required":true
			}
		},
		messages:{
			stfname:{
				"required":"Please provide a username",
				minlength:"must be at least 4 characters"
			},
			stfpwd:{
				"required":"Please provide a password",
				minlength:"must be at least 8 characters"
			},
			stfmail:{
				"required":"Please provide a email",
				"email":"Please enter a valid email"
			}
		}
   	}); 
	</script>

</body>
</html>