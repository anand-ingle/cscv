<?php 
 include("connection.php");
  session_start();
 $username=$_SESSION['username'];
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
    header("Location: index.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Caste Certificate And Validity System</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demor.css">
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
                                            <form class="" method="post" action="saveattach.php">
                                            <div class="card ">
                                   <div class="card-body">
                                       <h3 class="card-header">Attachement to be Attached</h3>
                                   
                              
                       
                       
                         <div class="card">
                           <div class="card-body">
                              
                               <br>
                                <div >
                                       
                                    <label>Evidence in support of this Scheduled Caste Claim </label>                                     
                                     
                                     <div>
                                     	<?php
                                     	$sql="select * from attachmenttobeattached where username='$username'"; 
                                     	$result=mysqli_query($connection,$sql);
                                     	while ($row=mysqli_fetch_array($result)) {
                                     		# code...
                                     	
                                     	?>
                                         <label class="form-radio-label">
					<input class="form-radio-input" name="AAevidence" id="AAevidence"  value="Yes" type="radio" <?php if ($row['evidence'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input" name="AAevidence" id="AAevidence" value="No" type="radio" <?php if ($row['evidence'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                   
                                </div>
                               
                               <hr>
 
            <!------------------------------------------------------------------------------------------------------------------->                      

                                <br>
                                <div >
                                       
                                    <label>Extract of the birth rgister in respect of applicant,his father or relatives</label>                                     
                                     <div>
                                         <label class="form-radio-label">
					<input class="form-radio-input"  name="AAextractOfBirthRegister" id="AAextractOfBirthRegister"   value="Yes" type="radio" <?php if ($row['eofbirthRegister'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input"  name="AAextractOfBirthRegister" id="AAextractOfBirthRegister"  value="No" type="radio" <?php if ($row['eofbirthRegister'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                    
                                     
                                                                  
                                </div>
                               
                               <hr>
                               
         <!------------------------------------------------------------------------------------------------------------------->                      
                            
                                <br>
                                <div>
                                    <label>Extract of the Primary School Admission Register of the applicant</label>                                     
                                     
                                    <div>
                                         <label class="form-radio-label">
					<input class="form-radio-input" name="AAextractOfPrimarySchool" id="AAextractOfPrimarySchool"    value="Yes" type="radio" <?php if ($row['eofprimaryShoolAdmission'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input"   name="AAextractOfPrimarySchool" id="AAextractOfPrimarySchool"  value="No" type="radio" <?php if ($row['eofprimaryShoolAdmission'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                    
                                                                  
                                </div>
                               
                               <hr>                  
          
       <!------------------------------------------------------------------------------------------------------------------->                      
                    
                                <br>
                                <div>
                                    <label>Primary School Leaving Certificate of the applicant or his father</label> 
                                <div >
                                     
                                                                        
                                       <label class="form-radio-label">
					<input class="form-radio-input" name="AAprimarySchoolLeaving" id="AAprimarySchoolLeaving"   value="Yes" type="radio" <?php if ($row['pschoolLeaving'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input"  name="AAprimarySchoolLeaving" id="AAprimarySchoolLeaving"  value="No" type="radio" <?php if ($row['pschoolLeaving'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                    
                                                                  
                                </div>
                               
                               <hr>                  
          
       <!------------------------------------------------------------------------------------------------------------------->                      

       
                                 <br>
                                 <div>
                                      <label>Documentary evidence in regard to the Schedule Caste and ordinary place of residence prior to the date
                                            of notification of such
                                    </label>
                                <div >
                                       
                                                                        
                                       <label class="form-radio-label">
					<input class="form-radio-input" name="documentaryEvidence" id="documentaryEvidence"    value="Yes" type="radio" <?php if ($row['documentaryEvidence'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input"   name="documentaryEvidence" id="documentaryEvidence" value="No" type="radio" <?php if ($row['documentaryEvidence'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                     
                                 </div>                              
                            
                               
                               <hr>                  
          
       <!------------------------------------------------------------------------------------------------------------------->                      

       <div>
            <label>An extract of service record a (book) mentioning Scheduled Caste of the applicant's father or relatives who
                                            are in Government or any other services if any
                                    </label>
                                <div >
                                       
                                                                        
                                       <label class="form-radio-label">
					<input class="form-radio-input" name="AAextractOfServiceRecord" id="AAextractOfServiceRecord"  value="Yes" type="radio" <?php if ($row['eofServiceRecords'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input" name="AAextractOfServiceRecord" id="AAextractOfServiceRecord"  value="No" type="radio" <?php if ($row['eofServiceRecords'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                    
       </div>                            
                               
                               
                               <hr>                  
          
       <!------------------------------------------------------------------------------------------------------------------->                      

                              <br>
                              <div>
                                                                      <label>True copy of Validity Certificate,if any of the other father or relatives which issued by the Scrutiny Committee</label>                                     

                                <div >
                                       
                                       <label class="form-radio-label">
					<input class="form-radio-input" name="AAtrueCopyOfValidity" id="AAtrueCopyOfValidity"    value="Yes" type="radio" <?php if ($row['trueCopyOfValidity'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input"   name="AAtrueCopyOfValidity" id="AAtrueCopyOfValidity" value="No" type="radio" <?php if ($row['trueCopyOfValidity'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                                        
                                </div>
                               
                               <hr>                  
          
       <!------------------------------------------------------------------------------------------------------------------->                      

       
                             <br>
                             <div>
                                                                     <label>Copy of Revenue record or village panchayat record,if any </label>                                     

                             <div>
                                       
                                       <label class="form-radio-label">
					<input class="form-radio-input"  name="AAcopyOfRevenueRecord" id="AAcopyOfRevenueRecord"   value="Yes" type="radio" <?php if ($row['copyOfRevenueRecord'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input"    name="AAcopyOfRevenueRecord" id="AAcopyOfRevenueRecord"  value="No" type="radio" <?php if ($row['copyOfRevenueRecord'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                    
                                    </div>                              
                              
                               
                               <hr>                  
          
       <!------------------------------------------------------------------------------------------------------------------->                      

       
                            <br>
                            <div>
                            <label>Other Documents,if any </label>                                     

                                <div>
                                       
                                    <label class="form-radio-label">
					<input class="form-radio-input" name="AAotherRelevantDocuments" id="AAotherRelevantDocuments" value="Yes" type="radio" <?php if ($row['otherRelevantDocuments'] == 'Yes') {echo ' checked ';} ?>>
					<span class="form-radio-sign">Yes</span>
					</label>
                                     </div>
                                    <div>
                                     <label class="form-radio-label">
					<input class="form-radio-input" name="AAotherRelevantDocuments" id="AAotherRelevantDocuments" value="No" type="radio" <?php if ($row['otherRelevantDocuments'] == 'No') {echo ' checked ';} ?>>
					<span class="form-radio-sign">No</span>
					</label>
                                 </div>
                                                                 
                                </div>
                                                
          <?php
          }
          ?>
      

											
                           </div>																
                         </div>
                           </div>
                         
             <div class="row">
                 <a href="casteandbirth.php" class="btn btn-primary btn-raised">Prev..</a> &nbsp;  
                           <input type="submit" class="form-control btn-success btn-raised col-md-2" id="addappinfo" name="addappinfo" value="SAVE & Next.." >
                           <input type="submit"  style="display: none;" class="form-control bg-primary col-md-2" id="updateappinfo" name="updateappinfo" value="UPDATE">
                           
            
                       </div>
    </div
						</div>
					</div>
				</div>
				
			
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
</body>

</html>