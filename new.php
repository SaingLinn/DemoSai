<?php
include("config.php");
session_start();
if(!isset($_SESSION['stfid']) AND !isset($_SESSION['admname'])){
	header("location:index.php");
}
?>
<html>
<head>
	<title>Add New</title>
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
			<li><a href="new.php">Add New</a></li>
			<li><a href="admin.php">Admin</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

	<div id="new">
		<form class="new" method="post" action="newdb.php" enctype="multipart/form-data" id="login">
			<label><h3>Register For Add New Car</h3></label>
			<input type="hidden" name="stfid" value="<?php echo $_SESSION['stfid']?>">
			<label for="carname">Name</label>
			<input type="text" name="carname" placeholder="Eg..Civic or Belta">
			<label for="carno">Number</label>
			<input type="text" name="carno" placeholder="MDY/2957">
			<label for="carimg">Upload Car Image</label>
			<input type="file" name="carimg">
			<label for="cartype">Type</label>
			<input type="text" name="cartype" placeholder="Toyota">
			<label for="carmod">Model</label>
			<input type="text" name="carmod" placeholder="2014">
			<label for="cargear">Which type</label>
			<input name="cargear" type="radio" value="Auto">Auto
			<input name="cargear" type="radio" value="Manual">Manual
			<label for="location">Location</label>
			<input type="text" name="location" placeholder="Yangon, Yangon City">
			<label for="enginepower">Engine Power</label>
			<input type="text" name="enginepower" placeholder="3000cc">
			<label for="carprice">Price</label>
			<input type="text" name="carprice" placeholder="$25000">
			<label for="carcolr">Color</label>
			<input type="text" name="carcolr" placeholder="White/Black">
			<label for="other">Other Features</label>
			<textarea name="other" placeholder="Eg..TV, Back Cam, Digital Aircon, Power Window"></textarea><br/>
			<input type="submit" value="Add New">
		</form>
	</div>
	<script src="jquery.js"></script>
	<script>
		$("#login").validate({
		rules:{
			carname:{
				"required":true				
			},
			carno:{
				"required":true				
			},
			carimg:{
				"required":true
			},
			cartype:{
				"required":true
			},
			carmod:{
				"required":true
			},
			cargear:{
				"required":true
			},
			location:{
				"required":true
			},
			enginepower:{
				"required":true
			},
			carprice:{
				"required":true
			},
			carcolr:{
				"required":true
			},
			other:{
				"required":true
			}
		}
	}); 
	</script>
</body>
</html>