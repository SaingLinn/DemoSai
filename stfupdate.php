<?php
include("config.php");
session_start();
if(!isset($_SESSION['admname'])){
	header("location:index.php");
}
?>
<html>
<head>
	<title>Update Staff</title>
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
			<li><a href="login.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<?php

	$id=$_GET['id'];
	$query="SELECT * FROM staff WHERE staff_id='$id' ";
	$sql=mysql_query($query);
	$row=mysql_fetch_assoc($sql);
	?>
	<!-- Customer Register Form-->
	<div id="new">
		<form class="login" method="post" action="stfupdatedb.php">
			<label><i>Edit Staff Information</i></label>
			<label for="stfname">Staff Name</label>
			<input type="hidden" name="stfid" value="<?php echo $row['staff_id']?>">
			<input type="text" name="stfname" value="<?php echo $row['staff_name']?>">
			<label for="stfpwd">Password</label>
			<input type="password" name="stfpwd" value="<?php echo $row['staff_password']?>">
			<label for="stfmail">Email</label>
			<input type="text" name="stfmail" value="<?php echo $row['staff_email']?>">
			<label for="stfadd">Address</label>
			<textarea type="text" name="stfadd"></textarea>
			<label for="stfph">Phone</label>
			<input type="text" name="stfph" value="<?php echo $row['staff_phone']?>">
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