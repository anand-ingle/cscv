<?php

     require "connection.php";

$id = isset($_GET['id'])? $_GET['id'] : "";
//if (isset( $_GET['id'] ) ) {

  $id = $_GET['id'];
  $sqldelete="DELETE FROM Relative_Info WHERE rid='$id'";
  $resultdelete = mysqli_query($connection, $sqldelete);

  if ($resultdelete) {
    echo '<script>window.location.href="relativeinfo.php"</script>';
  }
  else{
    echo '<script>alert("Delete Failed")</script>';
  }
//}

?>
