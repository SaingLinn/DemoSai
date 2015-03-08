<?php
include("config.php");

$cname=$_POST['cname'];
$cpwd=$_POST['cpwd'];


$sql="SELECT * FROM customer WHERE customer_name='$cname' AND customer_password='$cpwd'";
$query=mysql_query($sql);
$row=mysql_fetch_assoc($query);

if($row){
	session_start();
	$_SESSION['auth']=true;
	$_SESSION['cname']=$cname;
	$_SESSION['cid']=$row['customer_id'];?>
	
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
	<div>
		<?php
		if($row['customer_gender']=="male"){
		?>	
		Welcome Mr.<?php echo $_SESSION['cname']?>, You can start make order in <a href="index.php">Home</a> page. Thank You!
	<?php }else{?>
		Welcome Ms.<?php echo $_SESSION['cname']?>, You can start make order in <a href="index.php">Home</a> page. Thank You!
		<?php }?>
	
	</div>	
	
<?php }
else{
	header("location:login.php");
}
?>