<?php
$connect=mysql_connect("localhost","root","");
if($connect){
	echo "connected successfully<br>";
}
else{
	die("could not connect to database".mysql_error());
}

$db='CREATE DATABASE IF NOT EXISTS car';
mysql_query($db,$connect) or die(mysql_error($connect));
echo"create database successfully<br>";
mysql_select_db('car',$connect) or die(mysql_error($connect));

$admin='CREATE TABLE  `car`.`Admin` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`admin_name` VARCHAR( 255 ) NOT NULL ,
`admin_password` VARCHAR( 255 ) NOT NULL
) ENGINE = INNODB';
mysql_query($admin,$connect) or die(mysql_error($connect));
echo"admin table is created<br>";

$staff='CREATE TABLE  `car`.`staff` (
`staff_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`staff_name` VARCHAR( 255 ) NOT NULL ,
`staff_password` VARCHAR( 255 ) NOT NULL ,
`staff_email` VARCHAR(255) NOT NULL,
`staff_address` VARCHAR(255) NOT NULL,
`staff_phone` VARCHAR(255) NOT NULL,
`staff_gender` VARCHAR(255) NOT NULL,
`date` DATE NOT NULL
) ENGINE = INNODB';
mysql_query($staff,$connect) or die(mysql_error($connect));
echo"staff table is created<br>";

$customer='CREATE TABLE  `car`.`customer` (
`customer_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`customer_name` VARCHAR( 255 ) NOT NULL ,
`customer_password` VARCHAR( 255 ) NOT NULL ,
`customer_gender` VARCHAR( 255 ) NOT NULL ,
`customer_email` VARCHAR( 255 ) NOT NULL ,
`date` DATE NOT NULL
) ENGINE = INNODB';
mysql_query($customer,$connect) or die(mysql_error($connect));
echo"customer table is created<br>";

$carinfo='CREATE TABLE  `car`.`carinfo` (
`car_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`staff_id` INT NOT NULL,
`car_name` VARCHAR( 255 ) NOT NULL ,
`car_no` VARCHAR( 255 ) NOT NULL ,
`car_type` VARCHAR(255) NOT NULL,
`car_model` VARCHAR(255) NOT NULL,
`car_price` VARCHAR(255) NOT NULL,
`car_color` VARCHAR(255) NOT NULL,
`car_image` VARCHAR(255) NOT NULL,
`car_gear` VARCHAR(255) NOT NULL,
`car_location` VARCHAR(255) NOT NULL,
`car_enginepower` VARCHAR(255) NOT NULL,
`car_otherfeatures` VARCHAR(255) NOT NULL,
`date` DATE NOT NULL,
FOREIGN KEY (staff_id) REFERENCES staff(staff_id)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($carinfo,$connect) or die(mysql_error($connect));
echo"car table is created<br>";

$order='CREATE TABLE  `car`.`order` (
`order_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`customer_id` INT NOT NULL ,
`car_id` INT NOT NULL,
`car_no` VARCHAR( 255 ) NOT NULL ,
`payment` VARCHAR(255) NOT NULL,
`payment_type` VARCHAR(255) NOT NULL,
`PIN` VARCHAR(255) NOT NULL,
`phone` VARCHAR(255) NOT NULL,
`address` VARCHAR(255) NOT NULL,
`date` DATE NOT NULL,
FOREIGN KEY (customer_id) REFERENCES customer(customer_id)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (car_id) REFERENCES carinfo(car_id)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($order,$connect) or die(mysql_error($connect));
echo"order table is created<br>";

$sql="INSERT INTO  `car`.`admin` (
`id` ,
`admin_name` ,
`admin_password`
)
VALUES (
'1',  'admin',  '11111111'
)";

mysql_query($sql,$connect) or die(mysql_error($connect));
echo"Admin is inserted successfully<br>";

?>