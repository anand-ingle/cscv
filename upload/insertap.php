<?php
include 'connection.php';
if(!empty($_POST))
{
  $name = $_FILES['myfile']['name'];
  $type = $_FILES['myfile']['type'];
  $tmp_name = $_FILES['myfile']['tmp_name'];
  $error = $_FILES['myfile']['error'];

  //$data = file_get_contents($_FILES['myfile']['tmp_name']);

  $data = addslashes(file_get_contents($tmp_name));



  $sql="INSERT INTO uaddress VALUES(DEFAULT,'$name','$type','$data')";
  mysqli_query($connection, $sql);
  echo "success";

  }

?>
