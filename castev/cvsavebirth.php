<?php
require '../connection.php';
if(isset($_POST)){

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
$username=$_POST['username'];


    $sql1="UPDATE cvbirth
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
    header("location:studentedu.php");
}
 else {
     echo 'failed'. mysqli_error($connection);
}
    
    
}

            ?>