<?php
include 'connect.php';
$query = "select count(*) from posts";
$exec = mysqli_query($db,$query);
$y = mysqli_fetch_array($exec);

$page_number = ceil($y[0]/$item_per_page);
//echo $page_number;
?>
<script>
$(document).ready(function(){
	
	var track_click = 0;
	var total_pages = <?php echo $page_number;?>;
	$("#results").load("fetch_pages.php",{'page':track_click},function(){track_click++;});
	$(".load_more").click(function (e) { //user clicks on button
	
		$(this).hide(); //hide load more button on click
		$('.animation_image').show(); //show loading image

		if(track_click <= total_pages) //make sure user clicks are still less than total pages
		{
			//post page number and load returned data into result element
			$.post('fetch_pages.php',{'page': track_click}, function(data) {
			
				$(".load_more").show(); //bring back load more button
				
				$("#results").append(data); //append data received from server
				
				//scroll page to button element
				$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
				
				//hide loading image
				$('.animation_image').hide(); //hide loading image once data is received
	
				track_click++; //user click increment on load button
			
			}).fail(function(xhr, ajaxOptions, thrownError) { 
				alert(thrownError); //alert any HTTP error
				$(".load_more").show(); //bring back load more button
				$('.animation_image').hide(); //hide loading image once data is received
			});
			
			
			if(track_click >= total_pages-1)
			{
				//reached end of the page yet? disable load button
				$(".load_more").attr("disabled", "disabled");
			}
		 }
		  
		});
	
});
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="results"></div>

<div align="center">
<button class="load_more" id="load_more_button">load More</button>
<div class="animation_image" style="display:none;"><img src="ajax-loader.gif"> Loading...</div>
</div>
</body>
</html>