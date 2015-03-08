<?php
include("config.php");
?>
<html>
<head>
	<title>Login</title>
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
	<!-- Customer Register Form-->

	<div id="new">
		<form class="login" method="post" action="clogin.php">
			<label><h3>Customer Login</h3></label>
			<label for="cname">User Name</label>
			<input type="text" name="cname">
			<label for="cpwd">Password</label>
			<input type="password" name="cpwd">
			<br/>
			<input type="submit" value="SignIn">
		</form>
	</div>
	<div id="new">
		<form class="reg" method="post" action="cmreg.php">
			<label><h3>Customer Register</h3></label>
			<label for="cname">User Name</label>
			<input type="text" name="cname">
			<label for="cpwd">Password</label>
			<input type="password" name="cpwd">
			<label for="gender">Sex</label>
			<input name="gender" type="radio" value="male">Male
			<input name="gender" type="radio" value="female">Female
			<label for="cmail">Gmail</label>
			<input type="text" name="cmail"><br/>
			<input type="submit" value="SingUp">
		</form>
	</div>
	<script src="jquery.js"></script>
	<script>
		$(".login").validate({
		rules:{
			cname:{
				"required":true
				
			},
			cpwd:{
				"required":true
				
			}
		}
   	}); 
		$(".reg").validate({
		rules:{
			cname:{
				"required":true
				
			},
			cpwd:{
				"required":true
				
			},
			gender:{
				"required":true
			},
			cmail:{
				"required":true
			}
		}
   	}); 
	</script>

</body>
</html>