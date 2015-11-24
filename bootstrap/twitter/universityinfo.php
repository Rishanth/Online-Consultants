<!DOCTYPE  html>
<html>
	 <head>
        <meta charset="utf-8" />
        <title>Admin page</title>
 
<script src="../js/jquery-1.9.0.min.js"></script>
<script>
    $(document).ready(function()
    {
        $("#nishi").submit(function(){
            
            
           
  $.ajax({
     type       : 'POST', //Method type
     url         : 'university.php', //Your form processing file url
     data        : $(this).serialize()})
     .done(function(data){
     
      $('#jam').html(data);
      })
      .fail(function()
      {
          alert("failure");
      });
 return false;
 });
  });
  
  
</script>

</head>
<body>

  
</head>
<body>
<form id = "nishi">
name<input type = "text" id="vss" name = "hi"/>
password<input type = "text" name = "gi"/> 
<input type = "submit"  value="submit" id = "rishi">
</form>



<div id = "jam">
</div>      

</body>       
</html>