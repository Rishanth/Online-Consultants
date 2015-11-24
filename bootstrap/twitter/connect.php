<?php
 $db_username ="root";
 $db_password ="lakshmi";
 $db_host ="localhost";
 $db_name= "ecommerce";
 
 $db=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die("something went wrong");
 if(!$db)
 {
 	echo "failed".mysqli_error();
 }
 
 //echo "succesfull";
	
?>

