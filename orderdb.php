<?php
include("config.php");
session_start();

if(!isset($_SESSION['cid'])){
	header("location:index.php");
}

$cid=$_POST['cid'];
$carid=$_POST['carid'];
$carno=$_POST['carno'];
$payment=$_POST['payment'];
$paymenttype=$_POST['paymenttype'];
$pin=$_POST['pin'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$sql="INSERT INTO `car`.`order`(customer_id,car_id,car_no,payment,payment_type,PIN,phone,address,date) VALUES ('$cid','$carid','$carno','$payment','$paymenttype','$pin','$phone','$address',now())";
$query=mysql_query($sql);
if($query){
	$mesg="Order is made succefully";
?>
<html>
<head>
	<title>Invoice</title>
	<link href="css/car.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script type="text/javascript" src="javascript/script.js"></script>
</head>
<body>
	<script type="text/javascript">
	alert("<?php echo $mesg?>");
	</script>
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
	$sql="SELECT `order`.*,customer.*,carinfo.* FROM `order`,customer,carinfo WHERE customer.customer_id=`order`.customer_id AND `order`.car_id=carinfo.car_id AND carinfo.car_id='$carid'";
	$query=mysql_query($sql);
	$row=mysql_fetch_assoc($query);
	?>
	<div id="invoice">
	<table>
	<h2>Invoice</h2>
	<tr><td>Customer Name</td><td><?php echo $row['customer_name']?></td></tr>
	<tr><td>Car Name</td><td><?php echo $row['car_name']?> [<?php echo $row['car_type']?>]</td></tr>
	<tr><td>Car Number</td><td><?php echo $row['car_no']?></td></tr>
	<tr><td>Car Price</td><td><?php echo $row['car_price']?></td></tr>
	<tr><td>Your Payment</td><td><?php echo $row['payment']?></td></tr>
	<tr>Thank for your order. We will send this invoice and car to your address : <i><?php echo $row['address']?>, ph:<?php echo $row['phone']?></i></tr>
	<table>
	</div>

<?php
}
?>