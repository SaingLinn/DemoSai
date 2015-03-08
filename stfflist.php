<?php
include("config.php");
session_start();
if(!isset($_SESSION['admname'])){
	header("location:index.php");
}
?>
<html>
<head>
	<title>Staff List</title>
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
		$sql="SELECT * FROM staff";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		if($num>0){
		?>
		<div id="stflist" class="staff">
		<a href="stfreg.php">Add New Staff</a><br/><br/>
		<h3>Staff Lists</h3>
		<table>
		<tr><th>Staff ID</th>
			<th>Staff Name</th>
			<th>Staff Email</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Date</th>
			<th>Edit</th>
		</tr>
		<?php while($row=mysql_fetch_assoc($query)): ?>
		<tr><td><?php echo $row['staff_id']?></td>
		<td><?php echo $row['staff_name']?></td>
		<td><?php echo $row['staff_email']?></td>
		<td><?php echo $row['staff_address']?></td>
		<td><?php echo $row['staff_phone']?></td>
		<td><?php echo $row['staff_gender']?></td>
		<td><?php echo $row['date']?></td>
		<td><a href="stfupdate.php? id=<?php echo $row['staff_id']?>">UPDATE</a>
		<a href="stfdelete.php? id=<?php echo $row['staff_id']?>">DELETE</a>
		</td>	
		</tr>
			
		<?php endwhile;?>
		</table>
		</div>
		<?php }else{ ?>
		<div id="stflist">
		<table width="70%">
		<tr><th>Empty Staff! Click 'Add New Staff' to add staff</th></tr>
		</table>
		</div>
		<?php } ?>

</body>
</html>
