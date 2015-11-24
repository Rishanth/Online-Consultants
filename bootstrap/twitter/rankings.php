<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rankings</title>
<link rel="shortcut icon" href="DSC_0209.JPG">

<link rel = "stylesheet" href = "style.css">
<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<script src="bootstrap-3.2.0-dist/js/jquery-1.11.1.js"></script>
<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="bootstrap-3.2.0-dist/js/jquery-1.11.1.js"></script>
  <script src="bootstrap-3.2.0-dist/js/jquery_ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style type="text/css">
    .bs-example{
        margin: 20px;
        margin-left:25px;
        margin-right:25px;
    }
    
    #stage
    {
        margin-left:30px;
        border-radius:10px;
    }
</style>
<div class="bs-example">
    <script>
    $(document).ready(function(){
        var x = "<table class = 'table table-hover'  border= '1'><thead><tr><th>UniversityId</th><th>Universityname</th><th>UniversityRanking</th><th>AcceptanceRate</th><th>FallDeadline</th><th>SpringDeadline</th><th>Tutionfee</th></tr></thead>";
        $.getJSON("http://localhost/bootstrap/twitter/jsoncreating.php",function(ss){
            $.each(ss,function(k,v)
            {
                x+= "<tr><td>"+v.univid+"</td><td>"+v.univname+"</td><td>"+v.univrank+"</td><td>"+v.acceptance+"</td><td>"+v.falldeadline+"</td><td>"+v.springdeadline+"</td><td>"+v.tutionfee+"</td></tr>";
});
  $("#stage").html(x);

        });
    });
    </script></head>
    <head>
        <h1 align="center">University Rankings</h1>
        <head>
    </head>
    <body>
        
      <div id = "stage"></div>
    </body>
  <!--  <table class=" table table-hover" border="3px green">
        <thead>
            <tr>
                <th>Row</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Carter</td>
                <td>johncarter@mail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>peterparker@mail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Rambo</td>
                <td>johnrambo@mail.com</td>
            </tr>
        </tbody>
    </table>-->
</div>
</body>
</html>                                     