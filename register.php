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
				$regerror.="Aadhar number is not valid<br>";
			}

			if(!$_POST['rdob']){

				$regerror.="Date of birth is required<br>";
			}
                        
                        $dates = explode("-", $_POST[rdob]);  
                       
                        $year = date("Y") - $dates["0"];    
                        $month = date("m") - $dates["1"];   
                        $day = date("d") - $dates["2"]; 
                        
                        // If month is negative, means it's a year earlier - Decrement year by 1. Else if month is 0 and day is negative, means it's a year earlier - Decrement year by 1
                        if ($month < 0) {
                            $year--;
                        } elseif ($month == 0 && $day < 0) {
                            $year--;
                        }
                         
                        // If customer's age is greater than or equal to certificate then age is valid, else it's invalid
                        if ($year < 18) { 
                            $regerror.="Age is not valid<br>";
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
				$regerror.="Mobile number must have 10 digits<br>";
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

				if(mysqli_num_rows($result4)>0){

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

<html>
    <head>
    <title>Registration Page</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="/assets/css/ready.css">
	<link rel="stylesheet" href="/assets/css/demo.css">
         <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
         <script src="assets/js/core/jquery.3.2.1.min.js"></script>
         <script src="script.js"></script>
         <script src="jquery-3.3.1.min.js"></script>
         <style>
     .form-group.required .control-label:before{
  content:"*";
  color:red;
}
  span{
     color: red;
  }
         </style>
    </head>
    <body>
       
		<div id="google_translate_element"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        
                                                
				<div class="content m-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-2"></div>
                                        <div class="card col-xl-9 ">
                                            <div class="card-header"><h3>User Registration</h3></div>
                                            <form class="rform" name="rform" id="rform" method="post" action="register.php">
                                                <div class="card-body">
                                                
                                                <div class="form-group control-label required col-12">
                                                    <label class="control-label">AADHAR Number</label>
                                                    <input type="text" class="form-control" pattern="[0-9]{12}" title="Enter valid 12 digits" name="ruid" id="ruid" placeholder="Enter 12 Digits UID Number">
                                                    
                                                    
                                                </div>
                                                
                                                <div class="form-group ">
                                                                <a id="btnaadhar"  class="btn btn-warning" name="btnaadhar">Click Here </a>
                                                        
                                                </div>
                                                
                                                <hr>
                                                <hr>
                                                <div class="form-group control-label required col-12">
                                                    
                                                    <label class="control-label">Applicant's name </label>
                                                    <input type="text" class="form-control"  id="rappname" name="rappname" placeholder="Enter Your Full Name" required readonly>
                                                    
                                                    
                                                </div>
                                                  
                                                    <div class="row container">
                                                  <div class="form-group  control-label required col-4" readonly>
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" class="form-control" name="rdob" id="rdob" placeholder="Enter Date Of Birth" readonly>
                                                    
                                                    
                                                </div>
                                                
                                                <div class="form-group  control-label required col-4">
                                                    <label class="control-label">Gender</label>
                                                    <input type="text" class="form-control" name="rgender" id="rgender" readonly>                                                  
                                                </div>
                                                
                                               <!--  <div class="form-group  control-label required col-4 ">
                                                    <label class="control-label">Gender</label>
                                                    <select class="custom-select" name="rgender" id="rgender" title="Select Gender" >
                                                        <option> MALE</option>
                                                        <option>FEMALE</option>
                                                        <option>Others</option>
                                                    </select>
                                                  </div> -->
                                                                                                  
                                                </div>
                                                  <div class="form-group  control-label required col-12">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" class="form-control" name="remail" id="remail" required placeholder="Enter Your Email" readonly>                                                  
                                                </div>
                                                <div class="form-group  control-label required col-12">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input type="text" class="form-control" pattern="[0-9]{10}" title="Mobile no. required 10 digits" name="rmobile" id="rmobile" placeholder="Enter Your Mobile Number" required readonly>
                                                                                                        
                                                </div>
                                                  <div class="form-group  control-label required col-8">
                                                    <label class="control-label">Enter Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Select Username">
                                                    
                                                    
                                                </div>
                                                  <div class="form-group  control-label required col-12">
                                                    <label class="control-label">Enter Password</label>
                                                    <input type="password" class="form-control" pattern=".{6,}" title="Six or more characters" name="password" id="password" placeholder="Select Password">
                                                    
                                                    
                                                </div>
                                                 <div class="form-group  control-label required col-12">
                                                    <label class="control-label">Re-Enter Password</label>
                                                    <input type="password" class="form-control" name="rpassword" id="rpassword"  placeholder="Select Password">
                                                    
                                                   </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                <div id="imgdiv" class="form-group">
                                                <img id="img" src="newcp.php" width="200px">
                                                </div>
                                                        </div>
                                                <img id="reload" src="reload.png" width="30px" height="30px">
                                                </div>
                                                Enter Image Text:  
                                                    
                                                <input id="captcha1" class="form-control  control-label required" placeholder="Enter Above text here" name="captcha" type="text">
                                                </div>
                                                <div class="container">
                                                         <?php
                                                                    if($regerror!="" && $_POST[rbutton]){
                                                                    echo '<div style="margin-top: 5px; margin-bottom: 5px;" class="alert alert-danger alert-dismissible fade show" role="alert">'
                                                          .$regerror.
                                                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>';
                                                        }
                                                        
                                                        
        
                                                        ?>
                                                 </div>
                                                <div class="form-control">
                                                    <input type="submit" class="btn btn-success btn-raised" id="rbutton" name="rbutton">
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
       </div>
        

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>//$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>


         <script type="text/javascript" src="jquery-1.3.2.js"> </script>

         <script type="text/javascript">
        
                 $(document).ready(function() {
                
                    var uid;
                $(document).on('click', '#btnaadhar', function(ev){
			ev.preventDefault();
			var btn_button = $(this);
			btn_button.html(' <i class="la la-spinner la-spin"></i> ');
			uid = $("#ruid").val();
			$('.btn-reset').trigger('click');
			$.ajax({
			  cache: false,
			  url: 'display.php', // url where to submit the request
			  type : "POST", // type of action POST || GET
			  dataType : 'json', // data type
			  data : { cmd: "get_details", uid:uid  }, // post data || get data
			  success : function(result) {
				btn_button.hide();
				console.log(result);
				$("#rappname").val(result['name']);
				$("#rdob").val(result['dob']);
				$("#rgender").val(result['gender']);
				$("#remail").val(result['email']);
				$("#rmobile").val(result['phone']);
				//$('#eduadd').hide();
				//$('#eduupdate').show();
			  },
			  error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			  }
			});
		});
	
                });

        </script>
    </body>

 
</html>