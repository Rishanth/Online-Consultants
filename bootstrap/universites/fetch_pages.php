<?php
include("connect.php"); //include config file
//sanitize post value

$page_number = $_POST["page"];

echo $page_number;
//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}

//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range. 
$results = mysqli_query($db,"select post_content  from  posts ORDER BY post_id DESC LIMIT $position, $item_per_page");

//output results from database
echo '<ul class="page_result">';
while($row = mysqli_fetch_array($results))
{
	echo  $row['post_content'];
}
echo '</ul>';
?>

