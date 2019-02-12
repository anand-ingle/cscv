

<?php

require 'connection.php';

  $one = $_FILES['userfile']['name'][0];
  $tmp_name1 = $_FILES['userfile']['tmp_name'][0];
  $data1 = addslashes(file_get_contents($tmp_name1));

  $two = $_FILES['userfile']['name'][1];
  $tmp_name2 = $_FILES['userfile']['tmp_name'][1];
  $data2 = addslashes(file_get_contents($tmp_name2));

  $three = $_FILES['userfile']['name'][2];
  $tmp_name3 = $_FILES['userfile']['tmp_name'][2];
  $data3 = addslashes(file_get_contents($tmp_name3));

  $four = $_FILES['userfile']['name'][3];
  $tmp_name4 = $_FILES['userfile']['tmp_name'][3];
  $data4 = addslashes(file_get_contents($tmp_name4));

  $five = $_FILES['userfile']['name'][4];
  $tmp_name5 = $_FILES['userfile']['tmp_name'][4];
  $data5 = addslashes(file_get_contents($tmp_name5));

  $six = $_FILES['userfile']['name'][5];
  $tmp_name6 = $_FILES['userfile']['tmp_name'][5];
  $data6 = addslashes(file_get_contents($tmp_name6));

  $sql="INSERT INTO mandatorydoc VALUES(DEFAULT,'$data1','$data2','$data3','$data4','$data5','$data6')";

  mysqli_query($connection, $sql);
  echo "success";





 ?>
