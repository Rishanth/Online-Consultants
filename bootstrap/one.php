<?php
 
 

 if(isset($_POST['name']) === true && empty($_POST['name']) == false)
 {
 	
 	
	require 'connect.php';
	$y=$_POST['name'];
	$k = mysqli_real_escape_string($db,$y);
	$query="select * from  posts where post_author = '$k'";

	$run=mysqli_query($db,$query);
	 if(mysqli_num_rows($run)!=0)
	 {
	 	$k = mysqli_fetch_assoc($run);
		echo $k['post_date']."<br>".$k['post_author']."<br>".$k['post_content'];
		//echo  strip_tags($k['post_date'],'<br>');
		
		
	
		//echo  strip_tags($k['post_author'],'<br>');
	//echo  strip_tags($k['post_content'],'<br>');
	
	 }
	 else
	 	{
	 		echo "sorry!!name not found";
	 	}
    
	
	

/*require 'connect.php';
/*$y=mysqli_real_escape_string(trim($_POST['game']));
$query="select post_content from posts where post_author=$y"; 
$run=mysqli_query($db,$query);
if($run)
{
	echo "hi";
*/
 }
else
	{
		echo "bye";
	}

?>
