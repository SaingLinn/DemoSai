<?php
include("config.php");

?>
<html>
<head>
	<title>Report</title>
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
			<li><a href="index.php">Home<a/></li>
			<li><a href="login.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

	<?php
		if(isset($_GET['model'])){
		$model=$_GET['model'];
		$sql="SELECT * FROM carinfo WHERE car_model='$model'";
		$query=mysql_query($sql);?>
	<div id="menu">
		<?php while($row=mysql_fetch_assoc($query)):?>
		<img src="image/<?php echo $row['car_image']?>">
		<div id="info">
		<h3><?php echo $row['car_name']?><i>(<?php echo $row['car_type']?>) <?php echo $row['car_model']?></i>
			</h3>
		<h5>Price=<?php echo $row['car_price']?>, Color=<?php echo $row['car_color']?><h5>
		<h5>Number=<?php echo $row['car_no']?>, PostDate=<?php echo $row['date']?></h5>
		<h5>Gear Type=<?php echo $row['car_gear']?>, EnginePower=<?php echo $row['car_enginepower']?></h5>
		<h5>Other Features=<?php echo $row['car_otherfeatures']?> 
		Location=<?php echo $row['car_location']?></h5>
		</div>	
		<?php endwhile;?>
	</div>
	<?php }else if(isset($_GET['type'])){
		$type=$_GET['type'];
		$sql="SELECT * FROM carinfo WHERE car_type='$type'";
		$query=mysql_query($sql);?>
		<div id="menu">
		<?php while($row=mysql_fetch_assoc($query)):?>
		<img src="image/<?php echo $row['car_image']?>">
		<div id="info">
		<h3><?php echo $row['car_name']?><i>(<?php echo $row['car_type']?>) <?php echo $row['car_model']?></i>
			</h3>
		<h5>Price=<?php echo $row['car_price']?>, Color=<?php echo $row['car_color']?><h5>
		<h5>Number=<?php echo $row['car_no']?>, PostDate=<?php echo $row['date']?></h5>
		<h5>Gear Type=<?php echo $row['car_gear']?>, EnginePower=<?php echo $row['car_enginepower']?></h5>
		<h5>Other Features=<?php echo $row['car_otherfeatures']?> 
		Location=<?php echo $row['car_location']?></h5>
		</div>	
		<?php endwhile;?>
	</div>
		<?php }else if(isset($_GET['price'])){
		$price=$_GET['price'];
		$sql="SELECT * FROM carinfo WHERE car_price='$price'";
		$query=mysql_query($sql);?>
		<div id="menu">
		<?php while($row=mysql_fetch_assoc($query)):?>
		<img src="image/<?php echo $row['car_image']?>">
		<div id="info">
		<h3><?php echo $row['car_name']?><i>(<?php echo $row['car_type']?>) <?php echo $row['car_model']?></i>
			</h3>
		<h5>Price=<?php echo $row['car_price']?>, Color=<?php echo $row['car_color']?><h5>
		<h5>Number=<?php echo $row['car_no']?>, PostDate=<?php echo $row['date']?></h5>
		<h5>Gear Type=<?php echo $row['car_gear']?>, EnginePower=<?php echo $row['car_enginepower']?></h5>
		<h5>Other Features=<?php echo $row['car_otherfeatures']?> 
		Location=<?php echo $row['car_location']?></h5>
		</div>	
		<?php endwhile;?>
	</div>
		<?php } else {
		header("location:index.php");
		}
		?>

</body>
</html>