<?php
include("config.php");
session_start();
if(!$_GET['id']){
	header("location:index.php");
}
?>
<html>
<head>
	<title>Update</title>
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

	<?php

	$id=$_GET['id'];
	$query="SELECT * FROM carinfo WHERE car_id='$id' ";
	$sql=mysql_query($query);
	$row=mysql_fetch_assoc($sql);
	?>
	<div id="new">
	<form id="login" class="new" method="post" action="updatedb.php" enctype="multipart/form-data">
			<input type="hidden" name="carid" value="<?php echo $row['car_id']?>">
			<label for="carname">Car Name</label>
			<input type="text" name="carname" value="<?php echo $row['car_name']?>">
			<label for="cartype">Type</label>
			<input type="text" name="cartype" value="<?php echo $row['car_type']?>">
			<label for="carmod">Model</label>
			<input type="text" name="carmod" value="<?php echo $row['car_model']?>">
			<label for="carprice">Price</label>
			<input type="text" name="carprice" value="<?php echo $row['car_price']?>">
			<label for="carno">Number</label>
			<input type="text" name="carno" value="<?php echo $row['car_no']?>">
			<label for="carcolr">Color</label>		
			<input type="text" name="carcolr" value="<?php echo $row['car_color']?>">
			<label for="gear">Gear Type</label>
			<input type="radio" name="gear" value="Auto">Auto
			<input type="radio" name="gear" value="Manual">Manual
			<label for="location">Location</label>
			<input type="text" name="location" value="<?php echo $row['car_location']?>">
			<label for="enginepower">Engine Power</label>
			<input type="text" name="enginepower" value="<?php echo $row['car_enginepower']?>">
			<label for="features">Other Features</label>
			<input type="text" name="features" value="<?php echo $row['car_otherfeatures']?>">
			<label for="image">Edit Car Image</label>
			<img src="image/<?php echo $row['car_image']?>" width="170" height="120"><br/>
			<input type="file" name="image">
			<br/>
			<input type="submit" value="UPDATE">
		</form>
	</div>
	
	<script>
		$("#login").validate({
		rules:{
			carname:{
				"required":true				
			},
			cartype:{
				"required":true
			},
			carmod:{
				"required":true
			},
			carprice:{
				"required":true
			},
			carno:{
				"required":true				
			},
			carcolr:{
				"required":true
			},
			gear:{
				"required":true
			},			
			location:{
				"required":true
			},
			enginepower:{
				"required":true
			},
			features:{
				"required":true
			},
			image:{
				"required":true
			}
		}
	}); 
	</script>
</body>
</html>