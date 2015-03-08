<?php
include("config.php");

?>
<html>
<head>
	<title>Home</title>
	<link href="css/car.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script type="text/javascript" src="javascript/script.js"></script>
	<script src="jquery/jquery.validate.min.js"></script>
</head>
<body>
	<div id="header">
		Online Car Sale System
	</div>
	<div id="nav">
		<ul>
			<li><a href="index.php">Home<a/></li>
			<li><a href="login.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<div id="new">
		<form class="new" method="post" action="stflogindb.php" id="login">
			<label><h3>Staff Login</h3></label>
			<label for="stfname">Name</label>
			<input type="text" name="stfname">
			<label for="stfpwd">Password</label>
			<input type="password" name="stfpwd"><br/>
			<input type="submit" value="SignIn">
		</form>
	</div>
	<script>
		$("#login").validate({
		rules:{
			stfname:{
				"required":true
			},
			stfpwd:{
				"required":true
			}
		}
	}); 
	</script>
</body>
</html>