<?php 
 include("../connection.php");
  session_start();
 
  if(array_key_exists("id",$_COOKIE)){

    // if cookie exists set session id = cookie id

    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['username']=$_COOKIE['username'];

  }

  // check session id
  if(array_key_exists("id", $_SESSION)){

    //echo $_SESSION['id']."<p>Logged in! </p> "; 
  }
  else{
    // not logged in
    header("Location: ../index.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Caste Certificate And Validity System</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../assets/css/ready.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>
<body>

       
        
	<div class="wrapper">
		<div class="main-header">
             <div id="google_translate_element"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <div class="logo-header">
                
                <a href="index.html" class="logo">
                CCVS
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto bmd-btn-fab dropdown-toggle" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
            
            </div>
            <div class="sidebar">
                <div class="scrollbar-inner sidebar-wrapper">
            
                    
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="#">
                                <i class="la la-home"></i>
                                <p>Home</p>
                                <span class="badge badge-count"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-edit"></i>
                                <p>Apply</p>
                                <span class="badge badge-count"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-download"></i>
                                <p>Downloads</p>
                                <span class="badge badge-count"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-upload"></i>
                                <p>Upload Documents</p>
                                <span class="badge badge-count"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-user"></i>
                                <p>Edit Profile</p>
                                <span class="badge badge-success"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-files-o"></i>
                                <p>Verify Certificate</p>
                                <span class="badge badge-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="la la-sign-out"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container">            
        <?php
        //$username=$_SESSION['username'];
        $username=$_GET['username'];
            //echo "connected";
            
            //$sql="select * from appdetails NATURAL JOIN address NATURAL JOIN relationofbeneficiary NATURAL JOIN  beneficiarydetails ";
            //$sql="select * from appdetails where id='2'";
            $sql="select * from appdetails apd INNER JOIN benfdet bfd on apd.username=bfd.username INNER JOIN familydetails fd on bfd.username=fd.username "
                    . "INNER JOIN  appcaste ac on fd.username=ac.username INNER JOIN birthdetails btd on ac.username=btd.username "
                    . "INNER JOIN  attachmenttobeattached atm on btd.username=atm.username INNER JOIN additionalinfo adt on atm.username=adt.username where apd.username='$username'";
            
            $result=mysqli_query($connection, $sql);
             
            
    // output data of each row
             while($row = mysqli_fetch_assoc($result))
            
            {
       // echo  "".$row["fullnameEnglish"];
    

        
        ?>
        
        
        
        

        <div class="container col-12">
            <form method="post" action="#">
            <div class="card">
                <div class="card-body">
                <div class="card">
                    <h3 class="card-title bg-light">1.&nbsp; Applicants Details</h3>   
                              
               
                   <div class="card-body">
                <div class="row" style="margin-left:35px">
                    <label ><strong>Full Name :</strong></label>    
                    <div style="margin-left: 95px"><?php echo $row['fullnameEnglish'] ?></div>
                </div>
              
                <div class="row" style="margin-left:35px">
                    <label ><strong>Father's Name :</strong> </label>    
                    <div style="margin-left: 65px"><?php echo $row['fathernameEnglish']; ?></div>
                </div>
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Date Of Birth :</strong> </label>    
                    <div style="margin-left: 75px"><?php echo $row['adob']; ?></div>
                </div>
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Age :</strong> </label>    
                    <div style="margin-left: 140px"><?php echo $row['aage']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Mobile Number :</strong> </label>    
                    <div style="margin-left: 55px"><?php echo $row['amob']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Gender :</strong> </label>    
                    <div style="margin-left: 115px"><?php echo $row['Agender']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Email ID :</strong> </label>    
                    <div style="margin-left: 110px"><?php echo $row['aemail']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Occupation :</strong></label>    
                    <div style="margin-left: 85px"><?php echo $row['aoocupation']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Aadhar Number :</strong> </label>    
                    <div style="margin-left: 55px"><?php echo $row['aaadhar']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Applicant Nationality :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['anationality']; ?></div>
                </div>
                
                               
   <!---------------------------------------------------------------------------------------------------------------------------------------->          
                   
   
                
                <div class="row bg-light m-3"><h5> Address Details</h5> </div>   

                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Address Line 1 :</strong></label>    
                    <div style="margin-left: 50px"><?php echo $row['aaddressline1']; ?></div>
                </div >
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Address Line 2 :</strong></label>    
                    <div style="margin-left: 50px"><?php echo $row['aaddressline2']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Country :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['acountry']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>State :</strong></label>    
                    <div style="margin-left: 65px"><?php echo $row['astate']; ?></div>
                </div>
                
                <!--
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Landmark :</strong></label>    
                    <div style="margin-left: 35px"><?php echo $row['Landmark']; ?></div>
                </div>
 -->               
                 <div class="row" style="margin-left:35px">
                     <label ><strong>District :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['adistrict']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Taluka :</strong></label>    
                    <div style="margin-left: 60px"><?php echo $row['ataluka']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Village :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['avillage']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Pincode :</strong></label>    
                    <div style="margin-left: 45px"><?php echo $row['apincode']; ?></div>
                </div>
                
        <!---------------------------------------------------------------------------------------------------------------------------------------->          
            
      <hr>
                
                <div class="row col-sm-11 bg-light"><strong>2. &nbsp;Relation Of Beneficiary With Applicant</strong></div>   
                
                   
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Relation Of Beneficiary With Applicant :</strong></label>    
                    <div style="margin-left: 25px"><?php echo $row['arelben']; ?></div>
                </div>
                </div>
               </div> 
                
                                  
      <!---------------------------------------------------------------------------------------------------------------------------------------->          
                <hr>
                 
                 <div class="row m-3 bg-light"><h4>3. &nbsp;Beneficiary Details</h4></div>   
                
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Full Name :</strong></label>    
                    <div style="margin-left: 95px"><?php echo $row['nameeng']; ?></div>
                </div>
              
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Date Of Birth :</strong></label>    
                    <div style="margin-left: 75px"><?php echo $row['dob']; ?></div>
                </div>
                
              
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Mobile Number :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['mobile']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Gender :</strong></label>    
                    <div style="margin-left: 115px"><?php echo $row['gender']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Email ID :</strong></label>    
                    <div style="margin-left: 110px"><?php echo $row['email']; ?></div>
                </div>
               
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Aadhar Number :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['adhar']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Applicant Nationality :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['nationality']; ?></div>
                </div>
                
     <!---------------------------------------------------------------------------------------------------------------------------------------->    
                
               
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Occupation :</strong></label>    
                    <div style="margin-left: 60px"><?php echo $row['occupation']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Permanant Address (Yes/No) </strong></label>    
                    <div style="margin-left: 50px"><?php echo $row['peraddr']; ?></div>
                </div>
                
                   
                
    <!---------------------------------------------------------------------------------------------------------------------------------------->          
                  <hr>
                 
                 <div class="row m-3 bg-light"><h4>3. &nbsp;Beneficiary Family Details</h4></div>   
                
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Father's Name :</strong></label>    
                    <div style="margin-left: 105px"><?php echo $row['FatherName']; ?></div>
                </div>
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Father's Date of Birth (DD/MM/YYYY) :</strong></label>    
                    <div style="margin-left: 85px"><?php echo $row['FatherDOB']; ?></div>
                </div>
               
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Father's Place of Birth :</strong></label>    
                    <div style="margin-left: 65px"><?php echo $row['PlaceOB']; ?></div>
                </div>
                
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Grandfather's Name :</strong></label>    
                    <div style="margin-left: 120px"><?php echo $row['GrandFatherName']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Grandfather's Date of Birth(DD/MM/YYYY) :</strong></label>    
                    <div style="margin-left: 95px"><?php echo $row['GrandFatherDOB']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Grandfather's Place of Birth :</strong></label>    
                    <div style="margin-left: 65px"><?php echo $row['GrandPlaceOB']; ?></div>
                </div>
                 
                  <div class="row" style="margin-left:35px">
                     <label ><strong>Mother's Name :</strong></label>    
                    <div style="margin-left: 65px"><?php echo $row['MotherName']; ?></div>
                </div>
                
                 
    <!---------------------------------------------------------------------------------------------------------------------------------------->          
    
                 
                 <!--<div class="row col-sm-8" style="background-color: yellow;margin-left:20px;font-size: 20px"><strong>Beneficiary Father Address Details</strong></div>   
                
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Address :</strong></label>    
                    <div style="margin-left: 50px"><?php echo $row['Address']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Building :</strong></label>    
                    <div style="margin-left: 50px"><?php echo $row['Building']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Section :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['Section']; ?></div>
                </div>
               
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Street :</strong></label>    
                    <div style="margin-left: 65px"><?php echo $row['Street']; ?></div>
                </div>
                   
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Landmark :</strong></label>    
                    <div style="margin-left: 35px"><?php echo $row['Landmark']; ?></div>
                </div>
                

                 <div class="row" style="margin-left:35px">
                     <label ><strong>District :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['District']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Taluka :</strong></label>    
                    <div style="margin-left: 60px"><?php echo $row['Taluka']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Village :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['Village']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Pincode :</strong></label>    
                    <div style="margin-left: 45px"><?php echo $row['Pincode']; ?></div>
                </div>
                -->
                
      <!---------------------------------------------------------------------------------------------------------------------------------------->          
    
      <!-- <hr>
                 
                 <div class="row col-sm-11 m-3"><h4>4. &nbsp;Beneficiary Caste/Category Details</h4></div>   
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Caste :</strong></label>    
                    <div style="margin-left: 85px"><?php echo $row['accaste']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Category :</strong></label>    
                    <div style="margin-left: 60px"><?php echo $row['accat']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Religion :</strong></label>    
                    <div style="margin-left:65px"><?php echo $row['acsubcaste']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Sub Caste :</strong></label>    
                    <div style="margin-left: 55px"><?php echo $row['acrelegion']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Mother Tounge :</strong></label>    
                    <div style="margin-left: 15px"><?php echo $row['acmt']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Dialect :</strong></label>    
                    <div style="margin-left: 80px"><?php echo $row['acdialect']; ?></div>
                </div>
                -->
             
       <!---------------------------------------------------------------------------------------------------------------------------------------->          
     
      <!-- <hr>
                 
                 <div class="row  bg-light m-3"><h4>5. &nbsp;Birth Details</h4></div>   
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Country :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['country']; ?></div>
                </div>
                 <div class="row" style="margin-left:35px">
                     <label ><strong>State :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['state']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>District :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['district']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Taluka :</strong></label>    
                    <div style="margin-left: 25px"><?php echo $row['taluka']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Birth Place :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['birthplace']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Mother Tongue :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['mothertongue']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>God/Goddess Name :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['godname']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Five different surnames of relatives or person from the same caste as the applicant :</strong></label>    
                     <div style="margin-left: 25px" class="row" ><?php echo $row['sur1']; ?></div>
                    <br>
                   <div style="margin-left: 25px" class="row"><?php echo $row['sur2']; ?></div>
                   <br> 
                   <div style="margin-left: 25px" class="row"><?php echo $row['sur3']; ?></div>
                   <br> 
                   <div style="margin-left: 25px" class="row"><?php echo $row['sur4']; ?></div>
                   <br> 
                   <div style="margin-left: 25px" class="row"><?php echo $row['sur5']; ?></div>

                 </div>
                 
                 
        <div class="row m-3 bg-light"><h4>5. &nbsp;Native Place Details</h4></div>   

                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Address Line 1 :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['addressLine1']; ?></div>
                </div>
                
                  <div class="row" style="margin-left:35px">
                      <label ><strong>Address Line 2 :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['addressLine2']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:20px">
                     <label class="col-sm-12"><strong>Country :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['nativeCountry']; ?></div>
                </div>
             
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>State :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['nativeState']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:20px">
                     <label class="col-sm-12"><strong>District :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['nativeDistrict']; ?></div>
                </div>
                
        
                   <div class="row" style="margin-left:20px">
                     <label class="col-sm-12"><strong>Taluka :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['nativeTaluka']; ?></div>
                </div>
                
        
                   <div class="row" style="margin-left:20px">
                     <label class="col-sm-12"><strong>Village/Town :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['village']; ?></div>
                </div>
                
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Pin code :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['pincode']; ?></div>
                </div>
                
                
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Who left the place :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['whoLeft']; ?></div>
                </div>
                
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>When was the place left Year(YYYY) :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['whenLeft']; ?></div>
                </div>
                
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Reason for Leaving :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['reasonForLeaving']; ?></div>
                </div>
                
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Since when applicant is residing at current address(YYYY) :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['residingSince']; ?></div>
                </div>
                
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Do you own land or house at native place? :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['ownLand']; ?></div>
                </div>
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Name and relation of the person staying at native place :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['relation']; ?></div>
                </div>
                
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Address of the person staying at native place :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['nativeAddress']; ?></div>
                </div>
                
        
        
                <div class="row" style="margin-left:20px">
                    <label class="col-sm-12"><strong>Telephone no :</strong></label>    
                    <div style="margin-left: 0px" class="col-sm-12"><?php echo $row['telNumber']; ?></div>
                </div>
                
                
      <!---------------------------------------------------------------------------------------------------------------------------------------->         
                  
      <!-- <hr>
                 
                 <div class="row m-3 bg-light"><h4>6. &nbsp;Attachment to be Attached</h4></div>   
                
                
                 
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Evidence in support of this Scheduled Caste Claim :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['evidence']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:35px">
                     <label><strong>Extract of the birth register in respect of application,his father or relatives:</strong></label>    
                    <div style="margin-left: 25px"><?php echo $row['eofbirthRegister']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Extract of the Primary School Admission Register of the applicant :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['eofprimaryShoolAdmission']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Primary School Leaving Certificate of the applicant or his father :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['pschoolLeaving']; ?></div>
                </div>
                
                 <div class='row' style="margin-left:35px">
                     <label ><strong>Documentary evidence in regard to the Schedule Caste and ordinary place of residence prior to the </strong></label>
                     <label><strong>date of notification of such :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['documentaryEvidence']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label><strong>An extract of service record a (book) mentioning Scheduled Caste of the applicant's father or relatives </strong></label>
                     <label><strong> who are in Government or any other services if any :</strong></label>    
                     <div style="margin-left: 20px" ><?php echo $row['eofServiceRecords']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>True copy of Validity Certificate,if any of the other father or relatives which issued by the Scrutiny</strong></label>
                     <label><strong>Committee :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['trueCopyOfValidity']; ?></div>
                </div>
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Copy of Revenue record or village panchayat record,if any :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['copyOfRevenueRecord']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Other Documents,if any :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['otherRelevantDocuments']; ?></div>
                </div>

                
      
   <!---------------------------------------------------------------------------------------------------------------------------------------->          

      <!-- <hr>
                 
                 <div class="row m-3 bg-light"><h4>7. &nbsp;Additional Information</h4></div>   
                
                 <div class="row" style="margin-left:35px">
                     <label class="row col-sm-11"><strong>In case of a person converted to another religion,the names of the gods and goddesses worshiped by him prior to conversion :</strong></label>    
                    <div style="margin-left: -15px" class="col-sm-12"><?php echo $row['personConvertedToAnotherReligion']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>The applicant's father's/ grandfather's original village/town, tahsil and district :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['aFathersOriginalVillage']; ?></div>
                </div>
      
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>The evidence of the applicants original village/town, if any. :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['eOfOriginalVillages']; ?></div>
                </div>
                
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Whether the father or relatives obtained the Scheduled Caste :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['fatherOrRelativesObtainedSc']; ?></div>
                </div>
                
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>The Affidavit to be attached here with Form-2 and Form-3 :</strong></label>    
                    <div style="margin-left: 20px"><?php echo $row['affidavitToBeAttached']; ?></div>
                </div>
                
                
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Whether the applicant has applied to the Competent Authority in Maharastra State or Competent</strong></label>
                     <label><strong> Authority of other State previously for issuance of Scheduled Caste :</strong></label>    
                     <div style="margin-left: 20px"><?php echo $row['aAppliedToCompetentAuthority']; ?></div>
                </div>
                
                <div class="row" style="margin-left:35px">
                    <label ><strong>Whether a Validity Certificate is granted to the father or any relatives of the applicant by the Scrutiny</strong></label>
                    <label><strong>Committee :</strong></label>
                    <div style="margin-left: 20px" ><?php echo $row['validityIsGranted']; ?></div> 
                                    
                </div>
                
     <!---------------------------------------------------------------------------------------------------------------------------------------->          
              
     
                 
             <!--    <div class="row m-3 bg-light" ><strong>Other Details</strong></div>   
                
                
                 <div class="row" style="margin-left:20px">
                     <label class="col-sm-12"><strong>Reason :</strong></label>    
                    <div style="margin-left: 15px"  ><?php echo $row['reasontoapply']; ?></div>
                </div>
                
                 <div class="row" style="margin-left:35px">
                     <label ><strong>Do you need Affidavit ?</strong> </label>    
                    <div style="margin-left: 20px"><?php echo $row['doYouNeedAffidavit']; ?></div>
                </div>
               </div>
               </div></div>
                
                <div class="row">
                 <a href="casteandbirth.php" class="btn btn-primary btn-raised col-1">EDIT</a> &nbsp;  
                           <a class="form-control btn-success btn-raised col-md-2" href="submitcaste.php" id="addappinfo" name="addappinfo" value="SUBMIT">
                            SUBMIT
                           </a>
                           <!--<input type="submit"  style="display: none;" class="form-control bg-primary col-md-2" id="updateappinfo" name="updateappinfo" value="UPDATE">SUBMIT</a>-->
                           
            
                       </div>
                
                
                
             
                
                </div>
            </div>
            </form>
        </div>
  
            <?php
             
            }
          
             ?>
   
                
        
    
        </div>
   
      	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>

<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/ready.min.js"></script>
<script src="../assets/js/demo.js"></script>
</body>
</html>