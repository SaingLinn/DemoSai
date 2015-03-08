<?php
$databasehost="localhost";
$databaseuser="root";
$databasepass="";
$databasename="car";

$connect=mysql_connect($databasehost,$databaseuser,$databasepass);
mysql_select_db($databasename,$connect);
?>

