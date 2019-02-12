<?php
  
  session_start();

  if(array_key_exists("id",$_COOKIE)){

    // if cookie exists set session id = cookie id

    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['username']=$_COOKIE['username'];

  }

  // check session id
  if(array_key_exists("id", $_SESSION)){

    //echo $_SESSION['id']."<p>Logged in! </p> "; 
  }
  else{
    // not logged in
    header("Location: index.php");
  }

require 'connection.php';
$username=$_SESSION['username'];
if(isset($_POST['savecb'])){
$accat=mysqli_real_escape_string($connection,$_POST['BCCcategory']);
$accaste=mysqli_real_escape_string($connection,$_POST['BCCcaste']);
$acsubcaste=mysqli_real_escape_string($connection,$_POST['BCCsubcast']);
$acrelegion=mysqli_real_escape_string($connection,$_POST['BCCrelegion']);
$acmt=mysqli_real_escape_string($connection,$_POST['mtounge']);
$acdialect=mysqli_real_escape_string($connection,$_POST['BCCdialect']);
 $country=$_POST['a_country'];
$state=$_POST['a_state'];
$district=$_POST['a_district'];
$taluka=$_POST['a_taluka'];
$birthplace=$_POST['a_b_place'];
$mothertongue=$_POST['a_motherTongue'];
$godname=$_POST['god'];
$sur1=$_POST['f_surName'];
$sur2=$_POST['s_surName'];
$sur3=$_POST['t_surName'];
$sur4=$_POST['fo_surName'];
$sur5=$_POST['fi_surName'];
$addressLine1=$_POST['address1'];
$addressLine2=$_POST['address2'];
$village =$_POST['nvillage'];
$nativeCountry=$_POST['ncountry'];
$nativeState=$_POST['nstate'];
$nativeDistrict=$_POST['ndistrict'];
$nativeTaluka=$_POST['ntaluka'];
$pincode=$_POST['pin'];
$whoLeft=$_POST['who'];
$whenLeft=$_POST['when'];
$reasonForLeaving=$_POST['reason'];
$residingSince=$_POST['residingSince'];
$ownLand=$_POST['rad'];
$relation=$_POST['relation'];
$nativeAddress=$_POST['nativeAddress'];
$telNumber=$_POST['number'];




$sql="UPDATE appcaste 
        SET 
        `accat`='{$accat}',
        `accaste`= '{$accaste}',
        `acsubcaste`= '{$acsubcaste}',
        `acrelegion`= '{$acrelegion}',
        `acmt`= '{$acmt}',
        `acdialect`= '{$acdialect}' WHERE username='$username'";
    $result= mysqli_query($connection, $sql);
    
    if($result){
        //echo "Inserted".$result;
    }else{
        //echo "Not Inserted". mysqli_error($connection);
    }

            
            

/*$sql="insert into appdetails(`pid`, `salutation`, `fullnameEnglish`, `fullnameMarathi`, 
    `fatherSalutation`, `fathernameEnglish`, `fathernameMarathi`, `dob`, `age`, `amob`, 
    `Agender`, `aemail`, `aoocupation`, `aaadhar`, `anationality`, `address`, `building`, 
    `section`, `street`, `landmark`, `district`, `taluka`, `village`, `pincode`, `relben`, 
    `username`) values(
        DEFAULT,
        '$salutation',
         '$fullnameEnglish',
          ' $fullnameMarathi',
          '$fatherSalutation',
                '$fathernameEnglish',
                '$fathernameMarathi',
                '$dob',
                '$age',
                '$Amob',
                '$Agender',
                '$Aemail',
                '$Aoccupation',
                '$Aadhar',
                '$ApplicantNationality',
                '$address','$building','$section','$street','$landmark','$district','$taluka','$village','$pincode','$relben','anand'
                    
        )";
*/

    $sql1="UPDATE birthdetails
     SET
        
        `country`='{$country}',
        `state`= '{$state}',
        `district`= '{$district}',
        `taluka`= '{$taluka}',
        `birthplace`= '{$birthplace}',
        `mothertongue`= '{$mothertongue}',
        `godname`= '{$godname}',
        `sur1`= '{$sur1}',
        `sur2`= '{$sur2}',
        `sur3`= '{$sur3}',
        `sur4`= '{$sur4}',
        `sur5`= '{$sur5}',
        `addressLine1`= '{$addressLine1}',
        `addressLine2`= '{$addressLine2}',
        `village`= '{$village}',
        `nativeCountry`= '{$nativeCountry}',
        `nativeState`= '{$nativeState}',
        `nativeDistrict`= '{$nativeDistrict}',
        `nativeTaluka`= '{$nativeTaluka}',
        `district`= '{$district}',
        `pincode`= '{$pincode}',
        `whoLeft`= '{$whoLeft}' ,
        `whenLeft`= '{$whenLeft}',
        `reasonForLeaving`='{$reasonForLeaving}',
        `residingSince`= '{$residingSince}',
        `ownLand`= '{$ownLand}',
        `relation`= '{$relation}',
        `nativeAddress`= '{$nativeAddress}',
        `telNumber`= '{$telNumber}'
        WHERE
       username='$username';
        ";  
$result= mysqli_query($connection, $sql1);
if($result){
    //echo 'Success';
    header("location:attachmentInfo.php");
}
 else {
     //echo 'failed'. mysqli_error($connection);
}
    
    
}

            ?>