<?php
include("config.php");
session_start();
if(!isset($_SESSION['admname'])){
	header("location:index.php");
}
$stfid=$_POST['stfid'];
$stfname=$_POST['stfname'];
$stfpwd=$_POST['stfpwd'];
$stfmail=$_POST['stfmail'];
$stfadd=$_POST['stfadd'];
$stfph=$_POST['stfph'];
$gender=$_POST['gender'];


$query="UPDATE staff SET staff_name='$stfname',staff_password='$stfpwd',staff_email='$stfmail',staff_address='$stfadd',staff_phone='$stfph',staff_gender='$gender' WHERE staff_id='$stfid'";
$sql=mysql_query($query) or die("cannot query");
header("location:stfflist.php");
?>