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
	<link rel="stylesheet" href="assets/css/demo.css">
        	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

</head>
<body>
        <div id="google_translate_element"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<div class="wrapper">
		<div class="main-header">
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
                            <div class=" container">
                                <form class="addform" name="addform" method="post" action="saveaddinfo.php">
                                <div class="card">
				<div class="card-body">
                                    <h3 class="card-header">Additional Information</h3>
                                   
                               </div>
                                  <?php
                                  
                                      $sql="select * from additionalinfo where username='$username'"; 
                                      $result=mysqli_query($connection,$sql);
                                      while ($row=mysqli_fetch_array($result)) {
                                       
                                      
                                      ?>
                       
                         <div class="card">
                           <div class="card-body">
                              
<!-------------------------------------------------------------------------------------------------------------------------------------------->                               
                               
                                 <div class="row">
                                   
                                    <div class="form-group col-10">
                                           <label for="AIpersonConvertedToAnotherReligion">In case of a person converted to another religion,the names of the gods and goddesses worshiped by him prior to conversion</label>
                                           <input type="text" id="AIpersonConvertedToAnotherReligion" name="AIpersonConvertedToAnotherReligion" placeholder="Enter here.." class="form-control"  value="<?php echo $row['personConvertedToAnotherReligion']?>">
                                       </div>
                                   
                                   <div class="form-group col-10">
                                           <label for="AIapplicantFGoriginalVillage">The applicant's father's/ grandfather's original village/town, tahsil and district</label>
                                                                                
                                           <input type="text" id="AIapplicantFGoriginalVillage" name="AIapplicantFGoriginalVillage" placeholder="Enter Here.." class="form-control" value="<?php echo $row['aFathersOriginalVillage']?>">
                                       </div>
                                   
                               </div>
<!-------------------------------------------------------------------------------------------------------------------------------------------->                               
                                <div >
                                    
              <br>
                                <div >
                                       
                                    <label>The evidence of the applicants original village/town, if any.</label>                                     
                                     
                                     <div>
                                         <label class="form-radio-label"><input class="form-radio-input" type="radio" name="AIapplicantOriginalVillageEvidence" id="AIapplicantOriginalVillageEvidence" value="yes"  <?php if ($row['eOfOriginalVillages'] == 'yes') {echo ' checked ';} ?> ><span class="form-radio-sign"> Yes</span></label>
                                     </div>
                                      
                                    <div >
                                        <label class="form-radio-label"><input class="form-radio-input" type="radio"  name="AIapplicantOriginalVillageEvidence" id="AIapplicantOriginalVillageEvidence"  <?php if ($row['eOfOriginalVillages'] == 'no') {echo ' checked ';} ?> value="no" style="margin-right: 10px"><span class="form-radio-sign">No</span></label>
                                     </div>
                                                                  
                                </div>                         
                                    
              <hr>                     
              
              
                                    <label>Whether the father or relatives obtained Caste Certificate </label>                                     
                                     
                                    <div>
                                         <label class="form-radio-label"><input class="form-radio-input" type="radio"  name="AIfatherOrRelevantObtainedSC" id="AIfatherOrRelevantObtainedSC" value="yes"  <?php if ($row['fatherOrRelativesObtainedSc'] == 'yes') {echo ' checked ';} ?>><span class="form-radio-sign"> Yes</span></label>
                                     </div>
                                      
                                    <div >
                                        <label class="form-radio-label"><input class="form-radio-input" type="radio"  name="AIfatherOrRelevantObtainedSC" id="AIfatherOrRelevantObtainedSC" value="no"  <?php if ($row['fatherOrRelativesObtainedSc'] == 'no') {echo ' checked ';} ?>><span class="form-radio-sign" >No</span></label>
                                     </div>
                                    
                                     
                                   
                                </div>
                               
                               <hr>
 
           
                               
         <!------------------------------------------------------------------------------------------------------------------->                      
                               
                                <br>
                                <div >
                                       
                                    <label>The Affidavit to be attached here with Form-2 and Form-3</label> 
                                    <br>                                    
                                    <a href="/PDF/CasteAffidavit_FORM-2.pdf" target="_blank">Download Affidavit Form-2 </a>
                                    
                                    <a href="/PDF/CasteAffidavit_FORM-3.pdf" target="_blank">Download Affidavit Form-3 </a>
                                    
                                    
                                    <div class="radio">
                                        <label><input type="radio" name="AIaffidavitToBeAttached" id="AIaffidavitToBeAttached" value="yes" style="margin-right: 10px"  <?php if ($row['affidavitToBeAttached'] == 'yes') {echo ' checked ';} ?>><span class="form-radio-sign"> Yes</span></label>
                                     </div>
                                      
                                    <div class="radio">
                                        <label><input type="radio" name="AIaffidavitToBeAttached" id="AIaffidavitToBeAttached" value="no" style="margin-right: 10px"  <?php if ($row['affidavitToBeAttached'] == 'no') {echo ' checked ';} ?>><span class="form-radio-sign"> No</span></label>
                                     </div>
                                                                  
                                </div>
                               
                               <hr>
                               
             <!------------------------------------------------------------------------------------------------------------------->                      
     
                                <br>
                                <div >
                                       
                                    <label>Whether the applicant has applied to the Competent Authority in Maharastra State or Competent Authority of
                                            other State previously for issuance of Caste
                                    </label>                                     
                                     
                                     <div class="radio">
                                         <label><input type="radio" name="AIapplicantAppliedTOCompetent" id="AIapplicantAppliedTOCompetent" value="yes" style="margin-right: 10px"  <?php if ($row['aAppliedToCompetentAuthority'] == 'yes') {echo ' checked ';} ?>><span class="form-radio-sign"> Yes</span></label>
                                     </div>
                                      
                                    <div class="radio">
                                        <label><input type="radio" name="AIapplicantAppliedTOCompetent" id="AIapplicantAppliedTOCompetent" value="no" style="margin-right: 10px"  <?php if ($row['aAppliedToCompetentAuthority'] == 'no') {echo ' checked ';} ?>><span class="form-radio-sign"> No</span></label>
                                     </div>
                                                                  
                                </div>
                               
                               <hr>                  
                                <br>
                                <div>
                                       
                                    <label>Whether a Validity Certificate is granted to the father or any realatives of the applicant by
                                            the Scrutiny Committee
                                    </label>                                     
                                     
                                     <div class="radio">
                                         <label><input type="radio" name="AIvalidityGrantedToFatherOrRelatives" id="AIvalidityGrantedToFatherOrRelatives" value="yes" style="margin-right: 10px"  <?php if ($row['validityIsGranted'] == 'yes') {echo ' checked ';} ?>><span class="form-radio-sign">Yes</span></label>
                                     </div>
                                      
                                    <div class="radio">
                                        <label><input type="radio" name="AIvalidityGrantedToFatherOrRelatives" id="AIvalidityGrantedToFatherOrRelatives" value="no" style="margin-right: 10px"  <?php if ($row['validityIsGranted'] == 'no') {echo ' checked ';} ?>><span class="form-radio-sign">No</span></label>
                                     </div>
                                                                  
                                </div>
                                           
          

                           

       
       
                           </div>
                       </div> 
               
                                          
                    
                    <br>  
                       
                               <div class="card ">
                                   <div class="card-body">
                                       <h3>Other Details</h3>
                                   </div>
                               </div>
                         <div class="card">
                           <div class="card-body">
                          
                                <div class="form-group col-sm-12">
                                         <div class="form-group">
                                                <label for="reason">Reason</label>
                                                <textarea class="form-control" placeholder="Enter Here.." rows="2" id="ODreason" name="ODreason" ><?php echo 
                                                $row['reasontoapply'];?></textarea>
                                         </div>
                                    </div>
                                   
                               
                               <br>
                                <div>
                                       
                                    <label> Do you need Affidavit ?</label>
                                     
                                     <div class="radio">
                                         <label><input type="radio" placeholder="Enter Here.." name="needAffidavit" id="needAffidavit" value="yes" style="margin-right: 10px"><span class="form-radio-sign">Yes</span></label>
                                     </div>
                                      
                                    <div class="radio">
                                        <label><input type="radio" placeholder="Enter Here.." name="needAffidavit" id="needAffidavit" value="no" style="margin-right: 10px"><span class="form-radio-sign">No</span></label>
                                     </div>
                                
                                
                                </div>
                    
                           </div>
                       </div> 
                       
            
                    
              
              
                    <br>  
                       
                               <div class="card ">
                                   <div class="card-body">
                                       <h3>Agreement Details</h3>
                                   </div>
                               </div>
                       
                       
                         <div class="card">
                           <div class="card-body">
                              
                               <br>
                                <div>
                                       
                                  I declare on oath that the information furnished by me in this application is correct and i am aware that if                                  
                                  later on it is founded to be incorrect , i will prosecuted under the provision of section 193(2) , 199 and 200
                                  of the Indian Penal Code and shall be punished accordingly.
                                     
                                
                                   
                                </div>
                                                
          
                               <?php
                                }
                               ?>
                      

       
       
                           </div>
                       </div> 
                  

              <br>                           
             <div class="form-check" >
                 <label class="form-check-label" style="margin-left: 10px;font-size: 20px"><b>
                 <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" ><span class="form-check-sign">I accept</span></b></label>
             </div>
              
        
         
         
                                <br><br>

                                <div class="">
                                    <a class="btn btn-primary btn-raised" href="attachmentInfo.php">Prev.</a>
                                    <button type="submit" class="btn btn-success btn-raised col-2 " id="saveButton" name="saveButton" >Submit</button>
                                </div>
                                </form>

							</div>
						</div>
					</div>
				</div>
				
			
	

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