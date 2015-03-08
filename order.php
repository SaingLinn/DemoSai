<?php
include("config.php");
session_start();
if(isset($_SESSION['cid'])){
?>
<html>
<head>
	<title>Order</title>
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
		$id=$_GET['id'];
		$sql="SELECT * FROM carinfo WHERE car_id='$id'";
		$query=mysql_query($sql);
		$row=mysql_fetch_assoc($query);?>
		<div id="new">
		<form class="order" method="post" action="orderdb.php" id="login">
		<input type="hidden" name="cid" value="<?php echo $_SESSION['cid']?>">
		<input type="hidden" name="carid" value="<?php echo $id?>">
		<label for="carno">Car Number</label>
		<input type="text" name="carno" value="<?php echo $row['car_no']?>">
		<label for="payment">Payment</label>
		<input type="text" name="payment" placeholder="$">
		<label for="paymenttype">Payment Type</label>
		<input type="radio" name="paymenttype" value="Master Card">Master Card
		<input type="radio" name="paymenttype" value="Visa Card">Visa Card
		<label for="pin">PIN</label>
		<input type="password" name="pin" placeholder="********">
		<label for="phone">Phone</label>
		<input type="text" name="phone" placeholder="09*********">
		<label for="address">Detail Address</label>
		<textarea name="address"></textarea>
		<br/>
		<input type="submit" value="Make Order">
		</form>
		</div>
		
	<script>
		$("#login").validate({
		rules:{
			cid:{
				"required":true
			},
			carid:{
				"required":true
			},
			carno:{
				"required":true				
			},
			payment:{
				"required":true				
			},
			paymenttype:{
				"required":true
			},
			pin:{
				"required":true
			},
			phone:{
				"required":true
			},
			address:{
				"required":true
			}
		}
	}); 
	</script>
</body>
</html>
<?php }else{
	header("location:login.php");
}?>