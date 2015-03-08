<?php 
include("config.php");

if(isset($_GET['id'])){
$id=$_GET['id'];
$query="DELETE FROM carinfo WHERE car_id='$id'";
$sql=mysql_query($query);
header("location:report.php");

}else if(isset($_GET['cid'])){
$id=$_GET['cid'];
$query="DELETE FROM customer WHERE customer_id='$id'";
$sql=mysql_query($query);
header("location:admin.php");

}else if(isset($_GET['orderid'])){
$id=$_GET['orderid'];
$query="DELETE FROM `order` WHERE order_id='$id'";
$sql=mysql_query($query);
header("location:orderrp.php");
}else{
	header("location:admin.php");
}
?>