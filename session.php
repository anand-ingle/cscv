<?php 
  
  session_start();

  if(array_key_exists("id",$_COOKIE)){

    // if cookie exists set session id = cookie id

    $_SESSION['id']=$_COOKIE['id'];

  }

  // check session id
  if(array_key_exists("id", $_SESSION)){

   // echo "<p>Logged in! </p> "; 
  }
  else{
    // not logged in
    header("Location: index.php");
  }
 ?>