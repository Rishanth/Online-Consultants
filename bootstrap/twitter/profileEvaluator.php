<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ProfileEvaluator</title>
   <link rel="shortcut icon" href="DSC_0209.JPG">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
 
 <link rel = "stylesheet" href = "style.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel = "stylesheet" href = "bootstrap-3.2.0-dist/css/bootstrap.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <link rel ="stylesheet" href="bootstrap.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="rishi/bootstrap-filestyle.min.js" charset="utf-8"></script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->






  <script>
  $(function() {
    $( "#speed" ).selectmenu()
      .selectmenu("menuWidget").addClass( "overflow" );
 
    $( "#files" ).selectmenu()
       .selectmenu("menuWidget").addClass( "overflow" );
 
 
    $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );
  });
  </script>
  <style>
  body
  {
  	background:orange;
  	color:black;  }
    fieldset {
      border-radius:10px;

      border: 0;
    }
     .bs-example{
    	margin: 20px;
    	margin-left:590px;
    }
    
    
   
    
    label {
      display: block;
      margin:30px,0,0;
      padding:15px;
    }
    select {
      width: 300px;
      padding:15px;
    }
    .overflow {
      height: 200px;
    }

    fieldset
    {
    	margin-left:520px;
    	margin-top:60px;
    	     

    }
 
 #rishi
 {
 	margin-top:10px;
 	margin-right:490px;
 	
 	font-family:"Times New Roman", Times, serif;
    
 }
  
  
  h1
  {
  	font-family:"Times New Roman", Times, serif;
  }
    *
    {
    	font-family:"Times New Roman", Times, serif;
    }
    
    #kanchu
    {
    	width:305px;
    	padding:15px;
    	padding-left:5px;
    	
    }
    #ranju
    {
    	width:150px;
    }
    
    #uel
    {
    	margin-left:0px;
    }
    #vel
    {
    	margin-left:35px;
    }
    #kel
    {
    	margin-left:35px;
    }
    #touch-me
    {
    	margin-left:590px;
    	margin-top:15px;
    	
    }
    #show-me
    {
    	margin-left:590px;
    	margin-top:15px;
    }
    #kkk
{
	margin-left:570px;
	padding:15px;
}

#eat-me
{
	margin-left:50px;
}
  
 .ns-example
 {
     margin:20px;
     color:black;
 }
  #logout
  { 
      padding:10px;
      padding-left:12px;
     
  }
  .container
  {
      color:black;
  }
  .myNavbar
  {
      color :#000000;
  }
  .demo
  {
      margin-top:120px;
  }
  </style>


  
<div class="ns-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
 <a class="navbar-brand" href="#" id="change" ><b id = "jel"><span class="glyphicon glyphicon-home">Rishanth's</span></b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#" id = "change" >Rankings</a></li>
                    <li><a href="#" id = "change" >Sop</a></li>
                    <li><a href = "#" id="change" class="revenge">Documentation</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" id= "change">F-1 visa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="change">Visa slots</a></li>
                            <li><a href="#" id="change">Visa experiences</a></li>
                            
                            
                         </ul>
                    </li>
                    <li><a href = "#" id="change" class="revenge">profileEvaluator</a></li></li>
                </ul>
                    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-success "><span class="glyphicon glyphicon-search">Search</span></button>
      </form>
                <!--<ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" id="change">Profile Evaluator <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="change">Action</a></li>
                            <li><a href="#" id="change">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#" id="change">Settings</a></li>
                        </ul>
                    </li>
                </ul>-->
                <div id = "logout">
   <a href="#" class="btn btn-danger btn-large" id = "gol"><span class="glyphicon glyphicon-off"></span> Logout</a>
</div>

            </div><!-- /.navbar-collapse -->
        </div>
        
    </nav>
    
</div> 







<h1 align="center" id="rishi">Profile Evaluator</h1>



</head>
<body>
 <div class="demo">
 <form action="#">
 <fieldset>
    <label for="speed" id="uel">Select your Area</label>
    <select name="speed" id="speed">
      <option>Kansas</option>
      <option>Texas</option>
      <option selected="selected">California</option>
      <option>Florirda</option>
      <option>Arkansas</option>
      <option>Maryland</option>
      <option>Minnesota</option>
      <option>New Jersey</option>
      <option>Lousiana</option>
      <option>Alabama</option>
      <option>Alaska</option>
      <option>Arizona</option>
      <option>Illinois</option>
      <option>Idaho</option>
      <option>Indiana</option>
      <option>Hawaii</option>
      <option>Kentucky</option>
      <option>Colorado</option>
      <option>Connecticut</option>
      <option>Delware</option>
      <option>Georgia</option>
      <option>Maine</option>
      <option>Monatna</option>
      <option>Missuori</option>
      <option>Massachusetts</option>
      <option>Michigan</option>
      <option>Virgina</option>
      <option>Missisipi</option>
      <option>NewMexico</option>
      <option>Nebraska</option>
      <option>Ohio</option>
      <option>Oklahama</option>
      <option>Orgeon</option>
      <option>Pennsenleviya</option>
      <option>Tennesse</option>
      <option>Utah</option>
      <option>Washington</option>
      <option>West Virginia</option>
      <option>Wyoming</option>
      <option>Vermont</option>
      <option>Newyork</option>
      <option>South Dakota</option>
      <option>North Carolina</option>
      <option>Wisconsin</option>
      <option>South Carolina</option>
      <option>North Carolina</option>
      <option>Rhode Island</option>
      <option>Nevada</option>
      <option>Nebraska</option>
      <option>New Hampshire</option>
    </select>
 
    <label for="files" id="uel">Select your  field of Interest</label>
    <select name="files" id="files">
     <option value="jquery">Computer Science</option>
        <option value="jqueryui">Electrical Engineering</option>
        <option value = "jjjj">Mechanichal Engineering</option>
        <option value = "dsfv">Environmental Engineering</option>
        <option>Engineering Management</option>
        <option>Information Systems</option>
        <option>Computer Engineering</option>
        <option>Environmental Engineering</option>
      </select>
 
    <label for="number" id="uel">Work Experience</label>
    <select name="number" id="number">
      <option >0</option>
      <option selected="selected">1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>More than 5</option>
     
    
    </select>
    
    
 <label for ="number" id="uel">CGPA(or)GPA(or)Percentage:</label>
<input type="text" class="form-control" placeholder="Example:70%,3/4,7.5/10" id="kanchu">

<label for ="number" id="uel">GRE:</label>
<input type="text" name="gre" class="form-control" placeholder="Example:300" id="kanchu">
<div id= 'eat-me' style='display:none'>
<label for ="number" id="uel">Verbal:</label>
<input type="text" class="form-control" placeholder="Example:154" id="ranju">
<label for ="number" id="uel">Quant:</label>
<input type="text" class="form-control" placeholder="Example:148" id="ranju">
<label for ="number" id="uel">AWA:</label>
<input type="text" class="form-control" placeholder="Example:3.0" id="ranju">
</div>

<label for = "number"  id="uel">Select Your Test</label>
<input type = "radio" name="test" value="TOEFL" id="vel">TOEFL</input>
<input type = "radio" name="test" value="IELTS" id="kel">IELTS</input>
</fieldset>
 </form>
 
</div>

 <div id= 'show-me' style='display:none'>
   <label for ="number" id="uel">IELTS:</label>
<input type="text" class="form-control" placeholder="Example:6.5" id="ranju">
</div>
<div id = 'touch-me' style= 'display:none'>
   <label for ="number" id="uel">TOFEL:</label>
<input type="text" class="form-control" placeholder="Example:300" id="ranju">
</div>
<div class = "input-group"  id="kkk" title="upload your Resume">
<input type="file" class="filestyle"   data-buttonName="btn-info" data-input=false>
</div>


<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="btn btn-lg btn-success" data-toggle="modal">Submit</a>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" align="center">Summary of Universites</h4>
                </div>
                <div class="modal-body">
                 <?php
                     $k=include_once 'connect.php';
					 $query = "select*from Credentials";
					 $exec = mysqli_query($db,$query);
					$y=mysqli_fetch_array($exec);
					 
					 //echo $y[1];
					 //echo $y[3];
					 
					 $k = mysqli_num_rows($exec);
					 
					 
					
					
					if($k>=0)
					{
						echo $y['password'];
					}
					else {
						echo "bye";
					}
					// if(mysqli_num_rows($y)>0)
					 //{
					 	//echo "hi";
					 	//echo $y['username']; 
					 //}
					 //else {
						// echo "bye";
					 //}
				  
			
                 ?>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>     

 <script>
 	$('input[name=test]').click(function () {
    if (this.id == "kel") {
        $("#show-me").show();
        $("#touch-me").hide();
    } else if(this.id == "vel") {
        $("#touch-me").show();
        $("#show-me").hide();
    }
   
});

$('input[name=gre]').on("click", function (){
	if(this.id == "kanchu"){
		$("#eat-me").toggle();
	}
	});


$( "#kkk" ).tooltip({
      show: {
        effect: "slideDown",
        delay: 250
      }
   });
    var tooltips = $( "[title]" ).tooltip({
      position: {
        my: "left top",
        at: "right+5 top-5"
      }
    });
   
   
 </script>


</body>



</html>