<?php


   require 'connection.php';

  $view ="SELECT * FROM uaddress ";
  $outputview = mysqli_query($connection, $view);

  while ($row = mysqli_fetch_assoc($outputview)) {
  //  echo "<a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a>";
  //  echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
  echo "<li><a target='_blank' href='viewone.php?id=".$row['id']."'>".$row['name']."</a></li>";

  }

 ?>
