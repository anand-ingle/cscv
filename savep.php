<?php
session_start();

include'connection.php';
$username=$_SESSION['username'];

if(isset($_POST['addappinfo'])){
$salutation=$_POST['salutation'];
$castetype=$_POST['castetype'];
$fullnameEnglish=$_POST['fullnameEnglish'];
$fullnameMarathi=$_POST['fullnameMarathi'];
$fatherSalutation=$_POST['fatherSalutation'];
$fathernameEnglish=$_POST['fatherNameEnglish'];
$fathernameMarathi=$_POST['fatherNameMarathi'];
$dob=$_POST['Adob'];
$age=$_POST['Aage'];
$Aemail=$_POST['Aemail'];
$Amob=$_POST['Amob'];
$Agender=$_POST['Agender'];
$Aadhar=$_POST['Aadhar'];
$Aoccupation=$_POST['Aoccupation'];
$ApplicantNationality=$_POST['AapplicantNationality'];
$Aaddress1=$_POST['Aaddress1'];
$Aaddress2=$_POST['Aaddress2'];
$acountry=$_POST['acountry'];
$astate=$_POST['astate'];
$adistrict=$_POST['adistrict'];
$ataluka=$_POST['ataluka'];
$avillage=$_POST['avillage'];
$pincode=$_POST['a_pincode'];
$relben=$_POST['relben'];
    $sql="UPDATE appdetails
     SET
        `castetype`='{$castetype}',
        `salutation`='{$salutation}',
        `fullnameEnglish`= '{$fullnameEnglish}',
        `fullnameMarathi`= '{$fullnameMarathi}',
        `fatherSalutation`= '{$fatherSalutation}',
        `fathernameEnglish`= '{$fathernameEnglish}',
        `fathernameMarathi`= '{$fathernameMarathi}',
        `adob`= '{$dob}',
        `aage`= '{$age}',
        `amob`= '{$Amob}',
        `Agender`= '{$Agender}',
        `aemail`= '{$Aemail}',
        `aoocupation`= '{$Aoccupation}',
        `aaadhar`= '{$Aadhar}',
        `anationality`= '{$ApplicantNationality}',
        `aaddressline1`= '{$Aaddress1}',
        `aaddressline2`= '{$Aaddress2}',
        `acountry`= '{$acountry}',
        `astate`= '{$astate}',
        `adistrict`= '{$adistrict}',
        `ataluka`= '{$ataluka}',
        `avillage`= '{$avillage}',
        `apincode`= '{$pincode}' ,
        `arelben`= '{$relben}'
        WHERE
        username='$username'";  
$result=mysqli_query($connection, $sql);
if($result){
header("location:BeneficiaryDetail.php");
}
else{
echo "error";
}
}
?>