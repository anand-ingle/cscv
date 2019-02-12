<?php


   require 'connection.php';

  $view ="SELECT * FROM otherdoc ";
  $outputview = mysqli_query($connection, $view);

  while ($row = mysqli_fetch_assoc($outputview)) {
  //  echo "<a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a>";
  //  echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
  echo "<li><a target='_blank' href='viewtwo.php?id=".$row['id']."'>".$row['name']."</a></li>";

  }

 ?>
