<?php
   require 'connection.php';
  $view ="SELECT * FROM identity ";
  $outputview = mysqli_query($connection, $view);
  while ($row = mysqli_fetch_assoc($outputview)) {
  //  echo "<a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a>";

  echo "<div class='row'> <div class='col-md-2'> ".$row['idproof']." </div><div class='col-md-2'> <li> $nbsp;$nbsp;<a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."  </a></li></div></div>";
  }
 ?>