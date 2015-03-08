<?php
include("config.php");

$name=$_POST['stfname'];
$pass=$_POST['stfpwd'];

$sql="SELECT * FROM admin";
$query=mysql_query($sql);
$row=mysql_fetch_assoc($query);

$sql1="SELECT * FROM staff";
$query1=mysql_query($sql1);
$row1=mysql_fetch_assoc($query1);

if($row['admin_name']==$name AND $row['admin_password']==$pass){
	session_start();
	$_SESSION['auth']=true;
	$_SESSION['admname']=$name;
	header("location:report.php");
}

else if($row1['staff_name']==$name AND $row1['staff_password']==$pass){
	session_start();
	$_SESSION['auth']=true;
	$_SESSION['stfname']=$name;
	$_SESSION['stfid']=$row1['staff_id'];
header("location:report.php");
}
else{
	$mesg="Invalid Staff Name and Password";?>
	<html>
<head>
	<title>Home</title>
	<link href="css/car.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script type="text/javascript" src="javascript/script.js"></script>
	<script src="jquery/jquery.validate.min.js"></script>
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
	<div id="new">
		<form class="new" method="post" action="stflogindb.php" id="login">
			<label><h3>Staff Login</h3></label>
			<label for="stfname">Name</label>
			<input type="text" name="stfname">
			<label for="stfpwd">Password</label>
			<input type="password" name="stfpwd"><br/>
			<input type="submit" value="SignIn">
		</form>
	</div>
	<script>
		$("#login").validate({
		rules:{
			stfname:{
				"required":true
			},
			stfpwd:{
				"required":true
			}
		}
	}); 
	</script>
</body>
</html>
<?php
}
?>