

<?php // You need to add server side validation and better error handling here

include '../connect.php';
 



$data = array();

if(isset($_GET['files']))
{
    $error = false;
    $files = array();

    $uploaddir = 'images/';
    foreach($_FILES as $file)
    {    
        if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
        {
            $y = $file['name'];
           // echo $y;
           
            $files[] = $uploaddir .$file['name'];
           
        }
        else
        {
            $error = true;
        }
    }
    $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
     
}
else
{
    $universityid = $_POST['univid'];
    $universityname = $_POST['univ'];
    $universityRanking = $_POST['univrank'];
    $tutionfee = $_POST['tutionfee'];
    $acceptancerate = $_POST['acceptance'];
    $falldeadline = $_POST['falldeadline'];
    $springdeadline = $_POST['springdeadline'];
    $image = $y;

    //echo $universityname;
    
    //echo $k;
   $query = "insert into Universities(UniversityId,Universityname,UniversityRanking,Tutionfee,AcceptanceRate,falldeadline,springendline) values".
   "('$universityid','$universityname' ,'$universityRanking' ,'$tutionfee' , '$acceptancerate','$falldeadline','$springdeadline')";
  //echo $query;
  // echo "<pre>Debug: $query</pre>\m"; 
   //"insert into Universities(UniversityId) values"."('$universityid')";
  // "insert into Universities(UniversityId,Universityname,UniversityRanking,Tutionfee,AcceptanceRate,falldeadline,springendline) values".
   //"('$universityid','$universityname' ,'$universityRanking' ,'$tutionfee' , '$acceptancerate','$falldeadline','$springdeadline')";
  //echo $query;
  $run = mysqli_query($db,$query);
  //echo $run;
   //echo $run;
  if(false==$run)
 {
       printf("error: %s\n", mysqli_error($db));
     
 }
 else {
     echo "hi";
 }
   
    

    $data = array('formData' => $_POST['univ'], 'univId' => $_POST['univid']);
   // print_r($_POST);
   
   
    
   
     
}

   

echo json_encode($data);


?>

