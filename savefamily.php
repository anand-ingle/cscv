<?php 
  
session_start();
require 'connection.php';

 if(isset($_POST['addinfo'])){
    $FatherName = $_POST['fatherName'];

    $FatherDOB = $_POST['fatherDOB'];

    $PlaceOB = $_POST['placeOB'];

    $GrandFatherName = $_POST['grandfathername'];

    $GrandFatherDOB = $_POST['grandFatherDOB'];

    $GrandPlaceOB = $_POST['grandPlace'];

    $MotherName = $_POST['motherName'];

    $username=$_SESSION['username'];



     //    $sql = "INSERT INTO FamilyDetails (FatherName,FatherDOB,PlaceOB,GrandFatherName,GrandFatherDOB,GrandPlaceOB,MotherName) VALUES ('$FatherName','$FatherDOB','$PlaceOB','$GrandFatherName','$GrandFatherDOB','$GrandPlaceOB','$MotherName') ";

  // if(mysqli_query($con, $sql))
  //       {
  //           echo "<br> inserted ";
  //       }
        
  //        else              
  //       {
     
  //           echo "not inserted ". mysqli_error($con);     
  //        }  
     


$sql="UPDATE familydetails
     SET
        
        `FatherName`='{$FatherName}',
        `FatherDOB`= '{$FatherDOB}',
        `PlaceOB`= '{$PlaceOB}',
        `GrandFatherName`= '{$GrandFatherName}',
        `GrandFatherDOB`= '{$GrandFatherDOB}',
        `GrandPlaceOB`= '{$GrandPlaceOB}',
        `MotherName`= '{$MotherName}'
          WHERE
        username='$username'";
          
$result= mysqli_query($connection, $sql);
if($result){
    //echo '<br>Updated Successfully';
     header("location:casteandbirth.php");
}
 else {
     //echo 'failed'. mysqli_error($connection);
}

}
?>