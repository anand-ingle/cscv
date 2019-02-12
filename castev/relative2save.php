


<?php
include 'connection.php';


$relative_name=$_POST['name'];
$relation =$_POST['relation_Option'];
$commitee=$_POST['commitee'];
$reason=$_POST['reason'];
$year=$_POST['dateVerification'];
$granted=$_POST['granted'];


$rejection_reason=$_POST['rejection_reason'];
$rejection_date=$_POST['date'];



if (isset($_POST["cvc_number"]) && isset($_POST["cvc_date"])) {

  $cvc_number=$_POST['cvc_number'];
  $cvc_date=$_POST['cvc_date'];

}else{
  $cvc_number="NULL";
  $cvc_date="NULL";
}


$query="INSERT INTO Relative_Info
        values
        (DEFAULT,'$relative_name','$relation','$commitee','$reason','$year','$granted','$cvc_number','$cvc_date','$rejection_reason','$rejection_date')";
$result=mysqli_query($connection,$query);
if ($result) {
  # code...
  echo "DATABASE SAVED";
}
else {
  ECHO "DATABASE not saved" . mysqli_error($connection); ;
}




 ?>
