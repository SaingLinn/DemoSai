<?php
include("config.php");

$name=$_POST['admname'];
$pass=$_POST['admpwd'];

$sql="SELECT * FROM admin WHERE admin_name='$name' AND admin_password='$pass'";
$query=mysql_query($sql);
$row=mysql_fetch_assoc($query);

if($row){
	session_start();
	$_SESSION['auth']=true;
	$_SESSION['admid']=$row['id'];
	$_SESSION['admname']=$name;
	
	header("location:admin.php");
}
else{
	header("location:admin.php");
}