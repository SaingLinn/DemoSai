<?php 
include("config.php");
session_start();
if(!isset($_SESSION['admname'])){
	header("location:index.php");
}
$id=$_GET['id'];
$query="DELETE FROM staff WHERE staff_id='$id'";
$sql=mysql_query($query);
header("location:stfflist.php");

?>