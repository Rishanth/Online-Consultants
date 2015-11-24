<?php
$db_username = 'root';
$db_password = 'lakshmi';
$db_name = 'ecommerce';
$db_host = 'localhost';
$item_per_page = 2;

$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');

if(!$db)
 {
 	echo "failed".mysqli_error();
 }
 
// echo "succesfull";
	


?>