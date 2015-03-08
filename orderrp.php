<?php
include("config.php");
session_start();
if(!isset($_SESSION['admname'])){
	header("location:index.php");
}
?>
<html>
<head>
	<title>Admin</title>
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
	
	<?php
		$sql="SELECT * FROM `order`";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		if($num>0){
		?>
		<div id="stflist" class="staff">
		<h3>Order & Payment Report</h3>
		<table>
		<tr><th>Order ID</th>
			<th>Customer ID</th>
			<th>Car ID</th>
			<th>Payment</th>
			<th>Address</th>
			<th>Date</th>
			<th>Edit</th>
		</tr>
		<?php while($row=mysql_fetch_assoc($query)): ?>
		<tr><td><?php echo $row['order_id']?></td>
		<td><?php echo $row['customer_id']?></td>
		<td><?php echo $row['car_id']?></td>
		<td><?php echo $row['payment']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['date']?></td>
		<td>
		<a href="delete.php? orderid=<?php echo $row['car_id']?>">DELETE</a>
		</td>	
		</tr>
			
		<?php endwhile;?>
		</table>
		</div>
		<?php }else{ ?>
		<div id="stflist">
		<table width="70%">
		<tr><th>Empty customer make order!</th></tr>
		</table>
		</div>
		<?php } ?>

</body>
</html>