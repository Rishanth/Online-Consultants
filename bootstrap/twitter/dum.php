




<!DOCTYPE  html>
<html>
     <head>
        <meta charset="utf-8" />
        <title>Admin page</title>
        <link rel="shortcut icon" href="DSC_0209.JPG">
        <link rel = "stylesheet" href = "bootstrap.css">
       <link rel ="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="rishi/bootstrap-filestyle.min.js" charset="utf-8"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

       <link rel = "stylesheet" href="bootstrap-3.2.0-dist/js/jquery-1.11.1.js">
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
       <style type="text/css">
       

.container {
    margin-top: 70px;
    width: 600px;
}
.pager{
    margin-top:120px;
}
.previous disabled
{
    margin-left:20px;
}
  .bs-example{
        margin: 20px;
    }
#rss
{
    width:260px;
    height:40px;
}

#vss
{
     width:260px;
    height:40px;
}
#ess
{  width:260px;
    height:40px;
    
}
#fall
{
    width:260px;
    height:40px;
    
}
#spring
{   width:260px;
    height:40px;
    
    
}
#gss
{
    width:160px;
    height:40px;
}
#rkk
{
    width:200px;
    height:30px;
}
#css
{ margin-right:102px;

}

#manchu
{
   margin-top:130px;
   margin-left:500px;
        
}

#ganchu
{ 
    margin-top:50px;
   margin-left:500px;
    
}

#danchu
{ 
     margin-top:50px;
   margin-left:500px;
    
}
#kanchu
{
 margin-left:500px;
 margin-top:50px;
}

#unchu
{
    margin-left:540px;
 margin-top:50px;
}

#varma
{
    margin-right:640px;
}
#bench
{
    margin-left:500px;
    margin-top:40px;
}
*
{
    font-family:"Times New Roman", Times, serif;
}
#hhj
{
    margin-left: 15px;
    
}

#ress
{
margin-top:25px;
font-family:"Times New Roman", Times, serif;    
}
#hi
{
margin-right:450px;
float:left; 
}
#greg
{
 margin-right:420px;
    
}
.ff
{
    display:inline-block;
    
}
#janma
{
    margin-left:570px;
    padding:55px;
    padding-left:15px;
    
}
#bandham
{
    margin-right:50px;


}

#sub
{
    margin-left:560px;
    margin-top:60px;
    font-family:"Times New Roman", Times, serif;
}
#kkk
{
    margin-left:560px;
    margin-top:60px;
}
#jell
{
    margin-right:0px;
    margin-left:440px;
    padding-top:20px;
}
#teju
{
    margin-left:420px;
    margin-top:60px;
}

#kub
{
    /*margin-right:200px;
    margin-top:60px;*/
    margin-left:10px;
    margin-top:60px;
    margin-right:100px;
   
}

#jam
{
    background:orange;
}


  </style>
    
</head>
<body>
<h2 align="center" id= "ress">List of Universites </h2>
<!--<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>-->
<script src="assets/js/jquery.complexify.js"></script>
<script src="assets/js/script.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
      <script type="text/javascript" src="rishi/bootstrap-filestyle.min.js" charset="utf-8"></script>

<link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $(function() {
     //$("#rss").datepicker();
    $("#fall").datepicker({dateFormat :"yy-mm-dd"}),
    $("#spring").datepicker({dateFormat:"yy-mm-dd"});
  
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
   
   
  
});

</script>

<script>
    $(function()
{
    // Variable to store your files
    var files;
$(":file").filestyle({buttonName:"btn-primary"});

    // Add events
    $('input[type=file]').on('change', prepareUpload);
    $('form').on('submit', uploadFiles);

    // Grab the files and set them to our variable
    function prepareUpload(event)
    {
        //event.preventDefault();
        //event.stopPropagation();
        files = event.target.files;
        
        
        
    }


    // Catch the form submit and upload the files
    function uploadFiles(event)
    {
        event.stopPropagation(); // Stop stuff happening
        event.preventDefault(); // Totally stop stuff happening

        // START A LOADING SPINNER HERE

        // Create a formdata object and add the files
        var data = new FormData();
        
        $.each(files, function(key, value)
        {
            
            data.append(key, value);
        
        });
        
        $.ajax({
            url: 'dum2.php?files',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
            success: function(data, textStatus, jqXHR)
            {
                if(typeof data.error === 'undefined')
                {
                    // Success so call function to process the form
                    submitForm(event, data);
                }
                
                else
                {
                    // Handle errors here
                    console.log('ERRORS: ' + data.error);
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                // Handle errors here
                console.log('ERRORS: ' + textStatus);
                // STOP LOADING SPINNER
            }
        });
    }

    function submitForm(event, data)
    {
        // Create a jQuery object from the form
        $form = $(event.target);
        //alert(event.target);
        // Serialize the form data
        var formData = $form.serialize();
        
        // You should sterilise the file names
        $.each(data.files, function(key, value)
        {
            formData = formData + '&filenames[]=' + value;
        });

        $.ajax({
            url: 'dum2.php',
            type: 'POST',
            data: formData,
            cache: false,
            dataType: 'json',
            success: function(data, textStatus, jqXHR)
            {
                if(typeof data.error === 'undefined')
                {
                    // Success so call function to process the form
                     console.log('SUCCESS: ' + data.query);
                     //console.log('UNIVID:' + data.univId);
                     $('#jam').html(data.query);
                
                  
                     //alert(data.formdata);
                   // $('#jam').html(data.formdata);
                }
                else
                {
                    // Handle errors here
                    console.log('ERRORS: ' + data.error);
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                // Handle errors here
                console.log('ERRORS: ' + textStatus);
            },
            complete: function()
            {
                // STOP LOADING SPINNER
            }
        });
    }
});
</script>
</head>
<body>
<form id = "rishi">
<div class="input-group" id="manchu">
<span class="input-group-addon"><span class = "glyphicon glyphicon-barcode"></span></span>
<input type="text" class="form-control" placeholder="university id" id = "rss" name="univid" required/ >
</div>
<div class="input-group" id="ganchu">
<span class="input-group-addon"><span class = "glyphicon  glyphicon-stats"></span></span>
<input type="text" class="form-control" placeholder="university ranking" id = "rss" name="univrank" required/>
</div>
<div class="input-group" id="danchu">
<span class="input-group-addon"><span class = "glyphicon  glyphicon-calendar"></span></span>
<input type="text" class="form-control" placeholder="Deadline for fall semester" id="fall" name ="falldeadline" required/ >
</div>
<div class="input-group" id="danchu">
<span class="input-group-addon"><span class = "glyphicon  glyphicon-calendar"></span></span>
<input type="text" class="form-control" placeholder="Deadline for spring semester" id="spring" name = "springdeadline" required/>
</div>

<div class="input-group" id="kanchu">
<span class = "input-group-addon"><span class ="glyphicon glyphicon-home"></span></span>
<input type="text" class="form-control" placeholder="university name" id="rss" name = "univ" required/>
</div>  

<div class="input-group" id="kanchu">
<span class ="input-group-addon"><span class ="glyphicon glyphicon-usd"></span></span>
<input type="text" class="form-control" placeholder="Tution fee" id="vss" name="tutionfee" required/>
</div>
<div class="input-group" id="unchu">
<span class ="input-group-addon"><span class ="glyphicon glyphicon-ok"></span></span>
<input type="text" class="form-control" placeholder="Acceptance Rate" id="gss" name="acceptance" required/>
</div>

<div class = "input-group"  id="kkk" title="upload university image">
<input type="file" class="filestyle"   data-buttonName="btn-primary" data-input=false name ="univimage">
</div>
<input type = "submit"  class = "btn btn-success" id="sub" value="submit" name="submit"></input>
<a href ="dum.php"><input type = "button"  class = "btn btn-primary" id = "kub" value = "reset"></input></a>

</form>


<div id = "jam">


</div>      
</body>
       
</html>


