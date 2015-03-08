<?php
include("config.php");
session_start();
if(!isset($_SESSION['stfid']) AND !isset($_SESSION['admname'])){
	header("location:index.php");
}
$stfid=$_POST['stfid'];
$carname=$_POST['carname'];
$carno=$_POST['carno'];
$cartype=$_POST['cartype'];
$carmod=$_POST['carmod'];
$carprice=$_POST['carprice'];
$carcolr=$_POST['carcolr'];
$carimg=$_FILES['carimg']['name'];
$tmp=$_FILES['carimg']['tmp_name'];
$cargear=$_POST['cargear'];
$location=$_POST['location'];
$enginepower=$_POST['enginepower'];
$other=$_POST['other'];

if($carimg) {
    move_uploaded_file($tmp, "image/$carimg");
  }


$sql="INSERT INTO `car`.`carinfo`(staff_id,car_name,car_no,car_type,car_model,car_price,car_color,car_image,car_gear,car_location,car_enginepower,car_otherfeatures,date) VALUES ('$stfid','$carname','$carno','$cartype','$carmod','$carprice','$carcolr','$carimg','$cargear','$location','$enginepower','$other',now())";
$query=mysql_query($sql);
header("location:report.php");
?>
