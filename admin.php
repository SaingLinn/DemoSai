<?php
include("config.php");
session_start();

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
	<?php if(isset($_SESSION['admid']) OR isset($_SESSION['admname'])){?>
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
		$sql="SELECT * FROM customer";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		if($num>0){
		?>
		<div id="stflist" class="staff">
		<h3>Customer Report</h3>
		<table>
		<tr><th>Customer ID</th>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Date</th>
			<th>Edit</th>
		</tr>
		<?php while($row=mysql_fetch_assoc($query)): ?>
		<tr><td><?php echo $row['customer_id']?></td>
		<td><?php echo $row['customer_name']?></td>
		<td><?php echo $row['customer_email']?></td>
		<td><?php echo $row['customer_gender']?></td>
		<td><?php echo $row['date']?></td>
		<td>
		<a href="delete.php? cid=<?php echo $row['customer_id']?>">DELETE</a>
		</td>	
		</tr>
			
		<?php endwhile;?>
		</table>
		</div>
		<?php }else{ ?>
		<div id="stflist">
		<table width="70%">
		<tr><th>Empty Customer Registration!</th></tr>
		</table>
		</div>
		<?php } ?>


	<?php }else{?>
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
		<form class="new" method="post" action="adminlogin.php" id="login">
			<label><h3>Admin Login</h3></label>
			<label for="admname">Admin Name</label>
			<input type="text" name="admname">
			<label for="admpwd">Password</label>
			<input type="password" name="admpwd"><br/>
			<input type="submit" value="SignIn">
		</form>
	</div>
	<script>
		$("#login").validate({
		rules:{
			admname:{
				"required":true
			},
			admpwd:{
				"required":true
			}
		}
	}); 
	</script>
	<?php } ?>

</body>
</html>