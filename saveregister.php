<?php

	$regerror = "";
	require 'connection.php';
	if(isset($_POST['rbutton']))
	{

			$rappname=$_POST['rappname'];
			$ruid=$_POST['ruid'];
			$rdob=$_POST['rdob'];
			$rgender=$_POST['rgender'];
			$remail=$_POST['remail'];
			$rmobile=$_POST['rmobile'];
			$username=$_POST['username'];
			$password=$_POST['password'];	

			if(!$_POST['rappname']){

				$regerror.="name is required<br>";
			}

			if(!$_POST['ruid']){

				$regerror.="user id is required<br>";
			}

			if(!preg_match('/^[0-9]{12}+$/', $ruid)){
				$regerror.="Aadhar number is not valid";
			}

			if(!$_POST['rdob']){

				$regerror.="Date of birth is required<br>";
			}

			if(!$_POST['rgender']){

				$regerror.="Gender is required<br>";
			}

			if(!$_POST['remail']){

				$regerror.="An email address is required<br>";
			}

			if(!$_POST['rmobile']){

				$regerror.="A mobile number is required<br>";
			}

			if(!preg_match('/^[0-9]{10}+$/', $rmobile)){
				$regerror.="Mobile number must have 10 digits";
			}

			if(!$_POST['username']){

				$regerror.="An username is required<br>";
			}
			
			if(!$_POST['password']){

				$regerror.="A password is required<br>";
			}

			//errors are there
			if($regerror!=""){
				$regerror="<p>There were error(s) in your form:</p>".$regerror;

			}
			else
			{
			

				$query1="SELECT pid FROM appdetails WHERE aaadhar='".mysqli_real_escape_string($connection,$_POST['ruid'])."' LIMIT 1";

				$result1=mysqli_query($connection,$query1);

				if(mysqli_num_rows($result1)>0){

					$regerror="Aadhar number is already used";
				}

				$query2="SELECT pid FROM appdetails WHERE aemail='".mysqli_real_escape_string($connection,$_POST['remail'])."' LIMIT 1";

				$result2=mysqli_query($connection,$query2);

				if(mysqli_num_rows($result1)>0){

					$regerror="Email is already used";
				}

				$query3="SELECT pid FROM appdetails WHERE amob='".mysqli_real_escape_string($connection,$_POST['rmobile'])."' LIMIT 1";

				$result3=mysqli_query($connection,$query3);

				if(mysqli_num_rows($result1)>0){

					$regerror="Mobile number is already used";
				}


				$query4="SELECT pid FROM appdetails WHERE username='".mysqli_real_escape_string($connection,$_POST['username'])."' LIMIT 1";

				$result4=mysqli_query($connection,$query4);

				if(mysqli_num_rows($result1)>0){

					$regerror="That username is already taken";
				}



				if($regerror!=""){
				$regerror="<p>There were error(s) in your form:</p>".$regerror;

				}

				else
				{	

					$sql="insert into appdetails(fullnameEnglish,aaadhar,adob,amob,Agender,aemail,username) values('$rappname','$ruid','$rdob','$rmobile','$rgender','$remail','$username')";
					$result=mysqli_query($connection, $sql);
					if($result){
					   // echo 'Data Inserted';
					}

					 else {
					    echo 'error'. mysqli_error($connection);    
					}

					$sql1="insert into users(uid,password) values('$username','$password')";
					$result1=mysqli_query($connection, $sql1);
					$query="UPDATE users SET password ='".md5(md5(mysqli_insert_id($connection)).$_POST['password'])."' WHERE id=".mysqli_insert_id($connection)." LIMIT 1";

					            mysqli_query($connection,$query);

					$sql2="insert into appcaste(username) values('$username')";
					$result2=mysqli_query($connection, $sql2);
					$sql3="insert into additionalinfo(username) values('$username')";
					$result3=mysqli_query($connection, $sql3);
					$sql4="insert into attachmenttobeattached(username) values('$username')";
					$result4=mysqli_query($connection, $sql4);
					$sql5="insert into benfdet(username) values('$username')";
					$result5=mysqli_query($connection, $sql5);
					$sql51="insert into birthdetails(username) values('$username')";
					$result51=mysqli_query($connection, $sql51);
					$sql6="insert into castelist(username) values('$username')";
					$result6=mysqli_query($connection, $sql6);
					$sql7="insert into create_application(username) values('$username')";
					$result7=mysqli_query($connection, $sql7);
					$sql8="insert into cvbirth(username) values('$username')";
					$result8=mysqli_query($connection, $sql8);
					$sql9="insert into cvfamilydetails(username) values('$username')";
					$result9=mysqli_query($connection, $sql9);
					$sql10="insert into familydetails(username) values('$username')";
					$result10=mysqli_query($connection, $sql10);
					$sql11="insert into fatherdetails(username) values('$username')";
					$result11=mysqli_query($connection, $sql11);
					$sql12="insert into studentdetails(username) values('$username')";
					$result12=mysqli_query($connection, $sql12);
					if($result12){
					header('location:index.php');
					}
				}
			}
	}
?>