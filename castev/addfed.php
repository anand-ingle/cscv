<?php
session_start();
require '../connection.php';

if(isset($_POST)){


$qualification = $_POST['qualification'];
$occupation =$_POST['occupation'];
$of_name = $_POST['of_name'];
$designation = $_POST['designation'];
$of_address = $_POST['of_address'];
$of_number = $_POST['of_number'];
$tr_business = $_POST['tr_business'];
$ismigrated=$_POST['ismigrated'];
    $mstate=$_POST['mstate'];
    $mplace=$_POST['mplace'];
    $mwhen=$_POST['mwhen'];
    $mreason=$_POST['mreason'];
    $username=$_SESSION['username'];





$sql="UPDATE fatherdetails
 SET
    `fathersqualification`= '{$qualification}',
    `fathersoccupation`= '{$occupation}',
    `officename`= '{$of_name}',
    `designation`= '{$designation}',
    `officeaddress`= '{$of_address}',
    `officecontact`= '{$of_number}',
    `traditionalbusiness`='{$tr_business}',
        `ismigrated`= '{ismigrated}',
        `mstate`='{$mstate}',
        `mplace`='{$mplace}',
        `mwhen`='{$mwhen}',
        `mreason`='{$mreason}'

    WHERE
    username='$username'
    ";

    $result= mysqli_query($connection, $sql);
    if($result){
        //echo 'Success';
        header("location:cvprevious.php");

    }
     else {
         echo 'failed'. mysqli_error($connection);
    }


    }

 ?>