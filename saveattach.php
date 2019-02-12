<?php
session_start();
include("connection.php");
if(isset($_POST['addappinfo'])){
$evidence=$_POST['AAevidence'];
$eofbirthRegister=$_POST['AAextractOfBirthRegister'];
$eofprimaryschoolAdmission=$_POST['AAextractOfPrimarySchool'];
$pschoolLeaving=$_POST['AAprimarySchoolLeaving'];
$documentaryEvidence=$_POST['documentaryEvidence'];
$eofServiceRecords=$_POST['AAextractOfServiceRecord'];
$trueCopyOfValidity=$_POST['AAtrueCopyOfValidity'];
$copyOfRevenueRecord=$_POST['AAcopyOfRevenueRecord'];
$otherRelevantDocuments=$_POST['AAotherRelevantDocuments'];
$username=$_SESSION['username'];

$sql="UPDATE `attachmenttobeattached` SET `evidence`='$evidence',`eofbirthRegister`='$eofbirthRegister',`eofprimaryShoolAdmission`='$eofprimaryschoolAdmission',`pschoolLeaving`='$pschoolLeaving',`documentaryEvidence`='$documentaryEvidence',`eofServiceRecords`='$eofServiceRecords',`trueCopyOfValidity`='$trueCopyOfValidity',`copyOfRevenueRecord`='$copyOfRevenueRecord',`otherRelevantDocuments`='$otherRelevantDocuments' WHERE username='$username'";
}
$result=mysqli_query($connection,$sql);

if($result){
	header("location:AdditionalInfo.php");
}
?>
