<?php 
   


    require 'connection.php';
   if(isset($_POST)){
    $earlier_verification = $_POST['earlier'];

    $if_app_applied_to_caste = $_POST['app_applied'];

    $commitee = $_POST['commitee'];

    $category = $_POST['category'];

    $caste = $_POST['caste'];

    $subcaste = $_POST['subcaste'];

    $date_of_app = $_POST['date_app'];

    $commitee_decision = $_POST['decision'];

    $purpose_of_scrutiny = $_POST['purpose'];

    $other_documents = $_POST['other_doc'];



  //   $sql = "INSERT INTO cvprevious (earlier_verification,if_app_applied_to_caste,commitee,category,caste,subcaste,date_of_app,commitee_decision,purpose_of_scrutiny,other_documents) VALUES ('$earlier_verification','$if_app_applied_to_caste','$commitee','$category','$caste','$subcaste','$date_of_app','$commitee_decision','$purpose_of_scrutiny','$other_documents') ";

  // if(mysqli_query($connection, $sql))
  //       {
  //           echo "<br> inserted ";
  //       }
        
  //        else              
  //       {
     
  //           echo "not inserted ". mysqli_error($connection);     
  //        }  
     
  $sql="UPDATE cvprevious
     SET
        
        `earlier_verification`='{$earlier_verification}',
        `if_app_applied_to_caste`= '{$if_app_applied_to_caste}',
        `commitee`= '{$commitee}',
        `category`= '{$category}',
        `caste`= '{$caste}',
        `subcaste`= '{$subcaste}',
        `date_of_app`= '{$date_of_app}',
        `commitee_decision`= '{$commitee_decision}',
        `purpose_of_scrutiny`= '{$purpose_of_scrutiny}',
        `other_documents`= '{$other_documents}'
       
        WHERE
        username='michtoh'";
          
$result= mysqli_query($connection, $sql);
if($result){
    echo '<br>Updated Successfully';
     header("Location: relativeinfo.php");
    
}
 else {
     echo 'failed'. mysqli_error($connection);
}





     
  
}
mysqli_close($connection);

?>

