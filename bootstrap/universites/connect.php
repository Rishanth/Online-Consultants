<?php
$db_username = "root";
$db_password = "lakshmi";
$db_host = "localhost";
$db_name = "ecommerce";
$item_per_page = 3;
$db=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die("something went wrong");
 if(!$db)
 {
 	echo "failed".mysqli_error();
 }
 
 //echo "succesful";
?>