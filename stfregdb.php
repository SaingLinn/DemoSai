<?php
include("config.php");?>
<html>
<head>
	<title>Home</title>
	<link href="css/car.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script type="text/javascript" src="javascript/script.js"></script>
</head>
<body>
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
$stfname=$_POST['stfname'];
$stfpwd=$_POST['stfpwd'];
$stfmail=$_POST['stfmail'];
$stfadd=$_POST['stfadd'];
$stfph=$_POST['stfph'];
$gender=$_POST['gender'];

$query="SELECT * FROM staff";
$sql=mysql_query($query);
$result=mysql_fetch_assoc($sql);
$name=$result['staff_name'];
$email=$result['staff_email'];
if($stfname==$name OR $stfmail==$email){?>
<div id="menu">
	<div id="info">
	<h4>Staff Name and Gmail have been taken! Insert another staff name and gmial</h4><a href="stfflist.php">Try Again</a>
	</div>
</div>
<?php } else {
$sql="INSERT INTO `car`.`staff`(staff_name,staff_password,staff_email,staff_address,staff_phone,staff_gender,date) VALUES ('$stfname','$stfpwd','$stfmail','$stfadd','$stfph','$gender',now())";
$query=mysql_query($sql);
header("location:stfflist.php");
}
?>
</body>
</html>