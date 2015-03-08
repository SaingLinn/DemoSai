<?php
include("config.php");
session_start();
if(!isset($_SESSION['cid'])){
	header("location:index.php");
}
?>
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
			<li><a href="index.php">Home<a/></li>
			<li><a href="login.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<?php
$cname=$_POST['cname'];
$cpwd=$_POST['cpwd'];
$gender=$_POST['gender'];
$cmail=$_POST['cmail'];

$query="SELECT * FROM customer";
$sql=mysql_query($query);
$result=mysql_fetch_assoc($sql);
$name=$result['customer_name'];
$email=$result['customer_email'];
if($cname==$name OR $cmail==$email){?>
<div id="menu">
	<div id="info">
	<h4>Username and Gmail have been taken! Insert another username and gmail.</h4><a href="login.php">Try Again</a>
	</div>
</div>
<?php	
}
else{
$sql="INSERT INTO `car`.`customer`(customer_name,customer_password,customer_gender,customer_email,date) VALUES ('$cname','$cpwd','$gender','$cmail',now())";
$query=mysql_query($sql);
if($query){
	session_start();
	$select="SELECT * FROM customer WHERE customer_name='$cname' AND customer_password='$cpwd'";
	$result=mysql_query($select);
	$row=mysql_fetch_assoc($result);
	$_SESSION['auth']=true;
	$_SESSION['cname']=$cname;
	$_SESSION['cid']=$row['customer_id'];

	$mesg="Account create successfully";
}
?>
	<div id="menu">
		<div id="info">
		<?php
		if($row['customer_gender']=="male"){
		?>	
		<h4>Welcome Mr.<?php echo $_SESSION['cname']?>, your account is successfully created. You can start make order in <a href="index.php">Home</a> page. Thank You!</h4>
	<?php }else{?>
		<h4>Welcome Ms.<?php echo $_SESSION['cname']?>, your account is successfully created. You can start make order in <a href="index.php">Home</a> page. Thank You!</h4>
		<?php }?>
	</div>
	</div>
</body>
</html>
<?php }?>