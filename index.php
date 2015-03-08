<?php
include("config.php");
session_start();
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
	
	<?php
	$sql="SELECT * FROM carinfo GROUP BY car_model";
	$query=mysql_query($sql);
	?>
	<div class="search">
		<h4>Model</h4>
		<ul class="list">
			<?php while($row=mysql_fetch_assoc($query)):?>
			<li><a href="search.php?model=<?php echo $row['car_model']?>"><?php echo $row['car_model']?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<?php
	$sql="SELECT * FROM carinfo GROUP BY car_type";
	$query=mysql_query($sql);
	?>
	<div class="search">
		<h4>Manufacturer</h4>
		<ul class="list">
			<?php while($row=mysql_fetch_assoc($query)):?>
			<li><a href="search.php?type=<?php echo $row['car_type']?>"><?php echo $row['car_type']?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<?php
	$sql="SELECT * FROM carinfo GROUP BY car_price";
	$query=mysql_query($sql);
	?>
	<div class="search">
		<h4>Price</h4>
		<ul class="list">
			<?php while($row=mysql_fetch_assoc($query)):?>
			<li><a href="search.php?price=<?php echo $row['car_price']?>"><?php echo $row['car_price']?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<div class="slide">	
    <img id="1" src="photo/6.jpg" alt="city"/>
    <img id="2" src="photo/2.jpg" alt="box" /> 
    <img id="3" src="photo/3.jpg" alt="truck"/>
    <img id="4" src="photo/11.jpg">
    <img id="5" src="photo/14.jpg">
    <img id="6" src="photo/16.jpg">
	</div>
	<script src="jquery.js"></script>
	<script>
		$(".list").hide();
		$("h4").click(function() {
			var parent = $(this).parent();
			$("ul", parent).slideToggle("fast");
			$(this).toggleClass("down");
		});
	</script>
	</div>
	<div id="detail">
	<a class="detail">View Detail All</a>
	</div>
	<?php
		$sql="SELECT * FROM carinfo";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		
		if($num>0){?>
		<?php while($row=mysql_fetch_assoc($query)):?>
	<div id="menu">
		<img src="image/<?php echo $row['car_image']?>">
		<div id="info">
		<h2><?php echo $row['car_name']?>-<?php echo $row['car_model']?> [<?php echo $row['car_type']?>]
			</h2>
		<h4>Price - <?php echo $row['car_price']?></h4>
		<h5>Color=[<?php echo $row['car_color']?>], 
		PostDate=<?php echo $row['date']?></h5>
		
		
		<h5 class="more">Gear Type=<?php echo $row['car_gear']?>,
			EnginePower=<?php echo $row['car_enginepower']?></h5>
			<h5>Other Features=<?php echo $row['car_otherfeatures']?>
		</h5>
		<h5 class="more">Location=<?php echo $row['car_location']?></h5>
		<h5 class="more">Number=<?php echo $row['car_no']?></h5>
		<a href="order.php?id=<?php echo $row['car_id']?>">Make Order</a>
	</div>
	</div>
	<?php endwhile; ?>
	<?php }else{ ?>
	<div id="menu">
		<h4><i><?php echo"[[ Empty Car Information!! Click 'Report' button to add car information, only by Staff or Admin? ]]"?></i></h4>
	</div>
	<?php }?>
	<script type="text/javascript">
	$(".more").hide();
		$(".detail").click(function() {
			$(".more").slideToggle();
		});
	</script>
	<div>
		<img src="map.png" width="100%" height="65%">
	</div>
	<footer><h3>@copyright 2015. All Right Reserved.</h3></footer>
</body>
</html>