<?php
 session_start();

require '../connection.php';
if(isset($_POST))
{ 
   $fullName=$_POST['a_name'];
   $aCertificateNo=$_POST['cerNo'];
   $cIssueingDate=$_POST['c_date'];
   $issuedFrom=$_POST['issueFrom'];
   $disignation=$_POST['authority'];
   $documentsSubmitted=$_POST['documents'];
   $gender=$_POST['gender'];
   $uid=$_POST['uid'];
   $categoryApplied=$_POST['category'];
   $castApplied=$_POST['caste'];
   $subCaste=$_POST['subcaste'];
   $dob=$_POST['dob'];
    $mob=$_POST['appmob'];
    $email=$_POST['appemail'];
    $address1=$_POST['corresAddress1'];
    $address2=$_POST['corresAddress2'];
    $village=$_POST['village_or_town'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $taluka=$_POST['taluka'];
    $pincode=$_POST['a_pincode'];
    $username=$_SESSION['username'];
    $sql="update create_application set  `a_full_name`='{$fullName}',`a_certificate_no`='{$aCertificateNo}',`c_issueing_date`='{$cIssueingDate}',"
            . "`issued_from`='{$issuedFrom}',`designation_of_certificate_issuing_authority`='{$disignation}',`documents_submitted_to_officer`='{$documentsSubmitted}',"
            . "`gender`='{$gender}',`UID_no`='{$uid}',`category_applied`='{$categoryApplied}',`caste_applied`='{$castApplied}',`sub_caste`='{$subCaste}',"
            . "`dob`='{$dob}',`mob_no`='{$mob}',`email`='{$email}',`address_line_1`='{$address1}',`address_line_2`='{$address2}',`village_or_town`='{$village}',"
            . "`country`='{$country}',`state`='{$state}',`district`='{$district}',`taluka`='{$taluka}',`pin_code`='{$pincode}' where username='$username' ";   
if(mysqli_query($connection, $sql))
        {
        //echo "inserted";
         header("location:cvfamilydetails.php");   
        }
         else              
        {    
            echo "not inserted ". mysqli_error($connection);     
         }       
}
?>