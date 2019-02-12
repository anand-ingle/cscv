<?php

   
  
  session_start();


  if(array_key_exists("id",$_COOKIE)){

    // if cookie exists set session username = cookie username

    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['username']=$_COOKIE['username'];

  }

  // check session username
  if(array_key_exists("username", $_SESSION)){

    //echo "<p>Logged in! </p> "; //logout=1  is a flag
  }
  else{
    // not logged in
    header("Location: index.php");
  }

    if(isset($_POST['addappinfo'])) {
       
        require "connection.php";
        $username=mysqli_real_escape_string($connection, $_SESSION['username']);
        
       $query = "UPDATE `benfdet` SET `salutation` = '".mysqli_real_escape_string($connection, $_POST['Bsalutation'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          echo mysqli_error($connection);

          $query = "UPDATE `benfdet` SET `nameeng` = '".mysqli_real_escape_string($connection, $_POST['BnameEnglish'])."' WHERE username ='$username'";
            mysqli_query($connection, $query);

         $query = "UPDATE `benfdet` SET `namemar` = '".mysqli_real_escape_string($connection, $_POST['BnameMarathi'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);

          $query = "UPDATE `benfdet` SET `dob` = '".mysqli_real_escape_string($connection, $_POST['Bdob'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `mobile` = '".mysqli_real_escape_string($connection, $_POST['Bmob'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `gender` = '".mysqli_real_escape_string($connection, $_POST['Bgender'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
         $query = "UPDATE `benfdet` SET `email` = '".mysqli_real_escape_string($connection, $_POST['Bemail'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `adhar` = '".mysqli_real_escape_string($connection, $_POST['Badhar'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `nationality` = '".mysqli_real_escape_string($connection, $_POST['Bnationality'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `postname` = '".mysqli_real_escape_string($connection, $_POST['AOpostOffic'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
         $query = "UPDATE `benfdet` SET `occupation` = '".mysqli_real_escape_string($connection, $_POST['AOherediataryOccupation'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `peraddr` = '".mysqli_real_escape_string($connection, $_POST['BpermanantAddress'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `addrl1` = '".mysqli_real_escape_string($connection, $_POST['corresAddress1'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `addrl2` = '".mysqli_real_escape_string($connection, $_POST['corresAddress2'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
         $query = "UPDATE `benfdet` SET `country` = '".mysqli_real_escape_string($connection, $_POST['acountry'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `state` = '".mysqli_real_escape_string($connection, $_POST['astate'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `district` = '".mysqli_real_escape_string($connection, $_POST['adistrict'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `taluka` = '".mysqli_real_escape_string($connection, $_POST['ataluka'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
         $query = "UPDATE `benfdet` SET `village` = '".mysqli_real_escape_string($connection, $_POST['avillage'])."' WHERE username ='$username'";
          mysqli_query($connection, $query);
          
          $query = "UPDATE `benfdet` SET `pincode` = '".mysqli_real_escape_string($connection, $_POST['a_pincode'])."' WHERE username ='$username'";
          
          $result=mysqli_query($connection, $query);

         header("location:familydetails.php");
          
        
    }

?>
