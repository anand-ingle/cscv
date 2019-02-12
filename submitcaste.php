<?php
	session_start();
	require 'connection.php';
	echo "Hii";
	$username=$_SESSION['username'];
	echo $username;
	
		 $sql="select * from appdetails apd INNER JOIN familydetails fd on apd.username=fd.username "
                    . "INNER JOIN  appcaste ac on fd.username=ac.username where apd.username='$username'";
            
            $result=mysqli_query($connection, $sql);
             
           
             while($row = mysqli_fetch_assoc($result))
            
            {

       // echo  "".$row["fullnameEnglish"];
      
			$fname=$row['fullnameEnglish'];	
			echo $row['fullnameEnglish'];;
			$appcaste=$row['caste'];
			$acastecat=$row['accaste'];
			$acrelegion=$row['acrelegion'];
			$village=$row['avillage'];
			
			function randomDigits($length){
 		   $numbers = range(0,9);
    		shuffle($numbers);
    		$digits="";
    		for($i = 0;$i < $length;$i++)
       		$digits .= $numbers[$i];
    		return $digits;
			}

}
	$appid=randomDigits(10);

			$sql="insert into casteverifier1 values(DEFAULT,'$appid','$fname','$appcaste','$acastecat','$village','submitted','verifier1','$username')";
			$result=mysqli_query($connection,$sql);
			if($result){
				echo "Your Form Submitted";
			}
			$sql1="update appdetails set `status`='submitted' `cappid`='$appid' where username='$username'";
			$result1=mysqli_query($connection,$sql1);
			if($result1){
				echo "<script> alert('Your Form Submitted') </script>";
			}



?>