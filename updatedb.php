<?php
include("config.php");
session_start();
if(!isset($_SESSION['stfid']) AND !isset($_SESSION['admname'])){
	header("location:index.php");
}
$carid=$_POST['carid'];
$carname=$_POST['carname'];
$cartype=$_POST['cartype'];
$carmod=$_POST['carmod'];
$carprice=$_POST['carprice'];
$carno=$_POST['carno'];
$carcolr=$_POST['carcolr'];
$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$gear=$_POST['gear'];
$location=$_POST['location'];
$enginepower=$_POST['enginepower'];
$features=$_POST['features'];

if($image) {
    move_uploaded_file($tmp, "image/$image");
  }

$query="UPDATE carinfo SET car_name='$carname',car_no='$carno',car_type='$cartype',car_model='$carmod',car_price='$carprice',car_color='$carcolr',car_image='$image',car_gear='$gear',car_location='$location',car_enginepower='$enginepower',car_otherfeatures='$features' WHERE car_id='$carid'";
$sql=mysql_query($query) or die("cannot query");
header("location:report.php");
?>
