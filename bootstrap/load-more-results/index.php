<head>

 <link rel="stylesheet" href="../twitter/bootstrap-3.2.0-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.js "></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<style type="text/css">
	*{
		font-family:"Times New Roman", Times, serif;
		background: orange;
	}
	
	
</style>  
</head>


<?php

include 'config.inc.php';
$query = "select count(*) from posts";
$exec = mysqli_query($connecDB,$query);
$ref = mysqli_fetch_array($exec);
//echo $item_per_page;
$y=$ref[0];
$k=ceil($y/$item_per_page);
//echo $k;
//echo ceil($item_per_page/$ref[0]);
?>


  <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
<script>
$(document).ready(function(){
	
	var track_click =0;

	var y = <?php echo $k; ?>;

		$('#ram').load("fetch_pages.php", {'page':track_click}, function(){track_click++; });
     	$('.load_more').on("click",function()
     	{ 

		//if(this.id == "hi")
		
		//$('#ram').show();
			//$(this).hide();
		  //$('.animation_image').show();
		if(track_click<=y)
		{
			$.post('fetch_pages.php',{'page': track_click},function(data){
				$('.load_more').show();
				$('#ram').append(data);
			    $("html, body").animate({scrollTop: $("#hi").offset().top}, 500);

			
				track_click++;
			}).fail(function(xhr, ajaxOptions, thrownError) { 
				alert("hi"); //alert any HTTP error
				$(".load_more").hide(); //bring back load more button
			});
		
	 if(track_click > y-1)
		{
				     alert(track_click);
					 $(".load_more").prop("disabled",true);
				
		}
		}
		
	
		});
});




</script>


<html>
	<body>
		
		<!--<input type = "text" name = "test" id = "hi">-->
		
	<div id = "ram">
		
	</div>
	<div align="center">
		<!--<button class="load_more" name = "test"  id="hi">Load</button>-->
       		<button class="  load_more btn btn-success" name = "test"  id="hi">load More</button>

     </div>
	
	
	
	</body>
</html>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.js "></script>
    



<!--<script type="text/javascript">  
$(function() { 
    $(".btn").click(function(){
    	var btn = $(this)
    	btn.button('loading')
    	setTimeout(function(){
    	btn.button('reset')},100);
    	
       // $(this).button('loading').delay(1000).queue(function() {
         //   $(this).button('reset');
           //$(this).dequeue();
        });        
    });
</script>

