<?php 
session_start();
require '../connection.php';
 if(isset($_POST['save'])){
 
    $FatherName = $_POST['fatherName'];

    $FatherDOB = $_POST['fatherDOB'];

    $PlaceOB = $_POST['placeOB'];

    $fatherMob = $_POST['fatherMob'];
    
    $fatherEmail = $_POST['fatherEmail'];
    
    $fatherUID = $_POST['fatherUID']; 

    $GrandFatherName = $_POST['grandfathername'];

    $GrandFatherDOB = $_POST['grandFatherDOB'];

    $GrandPlaceOB = $_POST['grandPlace'];

    $MotherName = $_POST['motherName'];
    
    $faddress1 = $_POST['faddress1'];
    
    $faddress2 = $_POST['faddress2'];
    
    $facountry = $_POST['fcountry'];
    
    $fastate = $_POST['fstate'];
    
    $fadistrict = $_POST['fdistrict'];
    
    $fataluka = $_POST['ftaluka'];
    
    $favillage = $_POST['fvillage'];
    
    $fapin = $_POST['fpin'];
     
    $username= $_SESSION['username'];

     //    $sql = "INSERT INTO FamilyDetails (FatherName,FatherDOB,PlaceOB,GrandFatherName,GrandFatherDOB,GrandPlaceOB,MotherName) VALUES ('$FatherName','$FatherDOB','$PlaceOB','$GrandFatherName','$GrandFatherDOB','$GrandPlaceOB','$MotherName') ";

  // if(mysqli_query($con, $sql))
  //       {
  //           echo "<br> inserted ";
  //       }
        
  //        else              
  //       {
     
  //           echo "not inserted ". mysqli_error($con);     
  //        }  
     


$sql="UPDATE cvfamilydetails
     
     SET
        
        `FatherName`='{$FatherName}',

        `FatherDOB`='{$FatherDOB}',
        
        `PlaceOB`='{$PlaceOB}',
        
        `GrandFatherName`='{$GrandFatherName}',
        
        `GrandFatherDOB`='{$GrandFatherDOB}',
        
        `GrandPlaceOB`='{$GrandPlaceOB}',
        
        `MotherName`='{$MotherName}',
        
        `faddress1`='{$faddress1}',
        
        `faddress2`='{$faddress2}',
        
        `fcountry`='{$facountry}',
        
        `fstate`='{$fastate}',
        
        `fdistrict`='{$fadistrict}',
        
        `ftaluka`='{$fataluka}',
        
        `fvillage`='{$favillage}',
        
        `fpin`='{$fapin}'
        
         WHERE
         
         username='$username'";
       
   
    
       
       
       
       
$result= mysqli_query($connection, $sql);
if($result){
    //echo 'Updated Successfully';
     header("location:cvbirth.php");
}
 else {
     echo 'failed'. mysqli_error($connection);
}
}
?>