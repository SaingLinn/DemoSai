<?php
include("config.php");
session_start();
if(isset($_SESSION['stfid']) OR isset($_SESSION['admname'])) {
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
			<li><a href="index.php">Home</a></li>
			<?php if(isset($_SESSION['stfid'])){?>
			<li><a href="new.php">Add New</a></li>
			<?php }else{$mesg="Only staff account can add new car"; ?>
			<li><a onclick="mesg()">Add New</a></li>
			<?php } ?>
			<li><a href="admin.php">Admin</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<script type="text/javascript">
	function mesg(){alert("<?php echo $_SESSION['admname']?> have not permission for add new car! Only staff can add new car so you need to login with staff account!");}
	</script>

	<?php
		$sql="SELECT * FROM carinfo";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		
		if($num>0){?>
		<?php while($row=mysql_fetch_assoc($query)):?>
	<div id="menu">

		<img src="image/<?php echo $row['car_image']?>">
		<div id="info">
		<h3><?php echo $row['car_name']?><i>(<?php echo $row['car_type']?>) <?php echo $row['car_model']?></i>
			</h3>
		<h5>Price=<?php echo $row['car_price']?>, Color=<?php echo $row['car_color']?><h5>
		<h5>Number=<?php echo $row['car_no']?>, PostDate=<?php echo $row['date']?></h5>
		<h5>Gear Type=<?php echo $row['car_gear']?>, EnginePower=<?php echo $row['car_enginepower']?></h5>
		<h5>Other Features=<?php echo $row['car_otherfeatures']?> 
		Location=<?php echo $row['car_location']?></h5>
		<h5><a href="update.php? id=<?php echo $row['car_id']?>">UPDATE</a></h5>
		<h5><a href="delete.php? id=<?php echo $row['car_id']?>">DELETE</a></h5>
		</div>	
	</div>
	<?php endwhile; ?>
	<?php }else{ ?>
	<div id="menu">
		<h4><?php echo"Empty Car! Click 'Add New' to add new car?"?></h4>
	</div>
	<?php }?>
</body>
</html>
<?php
}
else{
	include("stflogin.php");
}
?>