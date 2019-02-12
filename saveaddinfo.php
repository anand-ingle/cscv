<?php
session_start();
include("connection.php");
if(isset($_POST['saveButton'])){

$personConvertedToAnotherReligion=$_POST['AIpersonConvertedToAnotherReligion'];
$aFathersOriginalVillage=$_POST['AIapplicantFGoriginalVillage'];
$eOfOriginalVillages=$_POST['AIapplicantOriginalVillageEvidence'];
$fatherOrRelativesObtainedSc=$_POST['AIfatherOrRelevantObtainedSC'];
$affidavitToBeAttached=$_POST['AIaffidavitToBeAttached'];
$aAppliedToCompetentAuthority=$_POST['AIapplicantAppliedTOCompetent'];
$validityIsGranted=$_POST['AIvalidityGrantedToFatherOrRelatives'];
$reasontoapply=$_POST['ODreason'];
$username=$_SESSION['username'];


		$sql="UPDATE `additionalinfo` SET `personConvertedToAnotherReligion`='$personConvertedToAnotherReligion',`aFathersOriginalVillage`='$aFathersOriginalVillage',`eOfOriginalVillages`='$eOfOriginalVillages',`fatherOrRelativesObtainedSc`='$fatherOrRelativesObtainedSc',`affidavitToBeAttached`='$affidavitToBeAttached',`aAppliedToCompetentAuthority`='$aAppliedToCompetentAuthority',`validityIsGranted`='$validityIsGranted', `reasontoapply`='$reasontoapply' WHERE username='$username'";
}
$result=mysqli_query($connection,$sql);

if($result){
	header("location:viewapp.php");
}
else
echo mysqli_error($connection);
?>
