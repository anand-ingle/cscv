<?php
session_start();
require '../connection.php';

if(isset($_POST['cvsavee'])){
$district = $_POST['district'];
$taluka =$_POST['taluka'];
$institutename = $_POST['institutename'];
$course = $_POST['course'];
$year = $_POST['year'];
$institutephone = $_POST['institutephone'];
$prn = $_POST['prn'];
$appdiv = $_POST['division'];
$roll_no = $_POST['roll_no'];
$college_address=$_POST['college_address'];
$username=$_SESSION['username'];


$sql="UPDATE studentdetails
 SET
    `district`= '{$district}',
    `taluka`= '{$taluka}',
    `collegename`= '{$institutename}',
    `coursename`= '{$course}',
    `year`= '{$year}',
    `collegephono`= '{$institutephone}',
    `permanantregno`= '{$prn}',
    `applicantdiv`= '{$appdiv}',
    `app_rollno`= '{$roll_no}',
    `college_address`='{$college_address}'
    WHERE
    username='$username'
    ";

    $result= mysqli_query($connection, $sql);
    if($result){
        //echo 'Success';
        header("location:studentedu.php");

    }
     else {
         echo 'failed'. mysqli_error($connection);
    }
    }
 ?>