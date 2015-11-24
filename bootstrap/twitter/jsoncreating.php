

<?php
 include 'connect.php';
$query = "select * from Universities";
$run = mysqli_query($db,$query);
 if(false==$run)
 {
       printf("error: %s\n", mysqli_error($db));
     
 }
 else {
    // echo "hi";
     $i=0;
    while($stu =mysqli_fetch_assoc($run))
    {     $dan[$i]['univid'] =$stu['UniversityId'];
         // echo $dan[$i]['univid'];
          $dan[$i]['univname'] =$stu['Universityname'];
          $dan[$i]['univrank'] =$stu['UniversityRanking'];
          $dan[$i]['tutionfee'] =$stu['Tutionfee'];
          $dan[$i]['acceptance'] =$stu['AcceptanceRate'];
          $dan[$i]['falldeadline'] = $stu['falldeadline'];
          $dan[$i]['springdeadline'] = $stu['springendline'];
         //echo $dan['springdeadline'];
          $i++;
        
     }
    header('content-type: application/json');
    echo json_encode($dan);
     }
   

?>



  

