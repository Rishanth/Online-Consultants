<?php

?>

<!DOCTYPE  html>
<html>
	 <head>
        <meta charset="utf-8" />
        <title>Register Here!</title>
        <link rel="shortcut icon" href="DSC_0209.JPG">
       <link rel ="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
  <!--international numbers-->
  	     <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/intlTelInput.css">
  	     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
         <link href = "rishi/drop.css" rel="stylesheet">
  	     <link href = "boot.css" rel="stylesheet">
        <link href="bootstrap-3.2.0-dist/css/form_helpers.css" rel="stylesheet" />
         <link href="bootstrap-3.2.0-dist/css/countries.css" rel="stylesheet">
         <link href="bootstrap-3.2.0-dist/css/flags.css"rel="stylesheet">
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 <link rel ="stylesheet" href="bootstrap.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="rishi/bootstrap-filestyle.min.js" charset="utf-8"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel = "stylesheet" href="rishi/drop.css">
<link rel = "stylesheet" href="rishi/select.css">
 <style>
      .container {
        
       width:500px;
       /*margin-top:20px;*/
       margin-left:440px;
       padding:35px;
      }
      .form-group {
        margin-bottom: 8px;
      }
      *
      {
      	font-family:"Times New Roman", Times, serif;
      }
      #hiii
      {
      	      	font-family:"Times New Roman", Times, serif;
      	      	margin-left:545px;
      	      	margin-top: 60px;

      }
      
      
      select {
      width: 300px;
      
      
    }
#hij
{
	font-family:"Times New Roman", Times, serif;
	margin-left:85px;
}

h2
{
	margin-top:15px;
	margin-left:10px;
}   

#contact_form
{
	margin-bottom:85px;
	/*margin-top:30px;*/
	
}
#hil
{
 margin-top:15px;
 width:330px;	
	
}
#files
{
	width:330px;
}
#charan
{
	padding:15px;
	/*margin-left:2px;*/
	padding-left:1px;
	
	
	
}
#phone
{
	height:30px;
	font-family:"Times New Roman", Times, serif;
	width:330px;
}
#ranju
{
	padding:15px;
	height:30px;
	width:330px;
		font-family:"Times New Roman", Times, serif;

	
}
.selectpicker
{
	font-family:"Times New Roman", Times, serif;
	width:330px;
	
	
}

/*.bar
{
	width:500px;
}*/
.prema
{
	/*padding:55px;*/
}
#read-me
{
	padding:15px;
	padding-left:1px;
}
.progress
{
	/*margin-right:200px;*/
	width:500px;
	/*margin-left:500px;*/
	
}

#greg
{
	margin-right:100px;
}

#nel
{
	
}

.bar
{
	margin-right:300px;

}
    </style>
    <body>
    	<div id="hiii">
    	<h2>Registration Part</h2>
    	<h4 id="hij">Part 3 of 3</h4>
    	</div>
     <div class = "prema">
      <div class="container">
      <div id="contact_form">
          <form role="form" id="feedbackForm">
           <div class="form-group has-feedback">
              <label class="control-label" for="phone"></label>
              <input type="tel" class="form-control input-sm optional" id="phone" name="phone" 
              placeholder="Enter your phone (Optional)"/>
              <span class="help-block" style="display: none;">Please enter a valid phone number.</span>
          
          <div class="bfh-selectbox bfh-countries" data-country="IN" data-flags="true" id="hil" placeholder="--select">
          	
          </div>
       <div id= "charan">
     <select class="selectpicker" name="rishi">
    <option = "selected">Select your Question</option>
    <option>What is your pet name?</option>
    <option>What is your Best Friend's name?</option>
    <option>What is the name of your lady love?</option>
    <option>who according to you,is the greatest leader ever?</option>
    <option>What is your Father's name?</option>
    <option>What is your Mother's name?</option>
    </select>
    <div id= 'read-me'  style='display:none'>

	<input type="text" class="form-control input-sm optional" placeholder="Answer" id="ranju">

</div>   
     
     <div id = "charan">
      <select class="selectpicker" id="hat"  name="rishi" >
    <option = "selected">Select your Question</option>
    <option>What is your Favoriate Movie?</option>
    <option>What is your Favoriate Holiday Spot?</option>
    <option>What is your Favoriate Hangout place?</option>
    <option>what is your Favoriate Subject?</option>
    <option>When is your birthday ?</option>
    <option>What is your Favoriate Sport ?</option>
     </select>
     </div>
<div id= 'show-me'  style='display:none'>

	<input type="text" class="form-control input-sm optional" placeholder="Answer" id="ranju">

</div>     
 <ul class = "pager" id="teju" >
<li class="ff"><a href="#">Previous</a></li>
<li class="" id="greg"><a href="#">Next</a></li>
</ul>    
 <div class="progress progress-striped active" id="nel">
 <div class="bar" style="width: 0%;"></div>

   </div>  
</div>
    </div>
          </div>
          </form>
          </div>
          </div>
         
         </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/intlTelInput.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/contact-form.js"></script>  
    <script src = "bootstrap-3.2.0-dist/js/form-min.js"></script>
    <script src = "bootstrap-3.2.0-dist/js/countries.js"></script>
    <script src = "rishi/pretify.js"></script>
    <script src = "rishi/mouse.js"></script>
    <script src = "rishi/scrollyou.js"></script>

 <script>
 	$('select[name=rishi]').on("click", function () {
    if (this.id == "hat") {
        $("#show-me").show();
        
        
    } 
    else
    {$("#read-me").show();
     
    	
    }
   
});
   </script> 
   
    <script>
	var progress = setInterval(function() {
    var $bar = $('.bar');
    
    if ($bar.width()==480) {
        clearInterval(progress);
        $('.progress').removeClass('active');
    } else {
        $bar.width($bar.width()+20);
    }
    $bar.text($bar.width()/5 + "%");
}, 500);
</script>      
</body>
