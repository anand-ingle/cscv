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
  <script src="assets/js/core/jquery.3.2.1.min.js"></script>       
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
						 <div class="card ">
                            <div class="card-header bg-danger"><h5>Beneficiary Caste/Category Details</h5></div>
              
     
                            <form class="castform" id="castform" method="post" action="saveCastandbirth.php">
          <div class="card">
                     
                         
             
               
                        <div class="card-body">
                           <?php
                           
              

                
                  $sql="select * from appcaste where username='$username'";
                $result= mysqli_query($connection, $sql);
                 while ($row=mysqli_fetch_assoc($result)){
                      
                  ?>
                            <div class="row">
                                <div class="form-group col-md-3 ">
                                        <label for="category control-label" >Category</label>
                                        <select class="custom-select" id="BCCcategory" name="BCCcategory" required>
                                        <option>--Select Category--</option>
                                        <option selected value="<?php echo $row['accat']?>"><?php echo $row['accat']?></option>
                                        <option value="Scheduled Caste">Scheduled Caste</option>
                                        <option value="Scheduled Caste Converted To Buddhism">Scheduled Caste Converted To Buddhism</option>
                                        <option value="Vimukta Jati (A)">Vimukta Jati (A)</option>
                                        <option value="Nomadic Tribe (B)">Nomadic Tribe (B)</option>
                                        <option value="Nomadic Tribe (C)">Nomadic Tribe (C)</option>
                                        <option value="Nomadic Tribe (D)">Nomadic Tribe (D)</option>
                                        <option value="Other Backward Class">Other Backward Class</option>
                                        <option value="Special Backward Class">Special Backward Class</option>
                                        <option value="Educationally and Socially Backward Category">Educationally and Socially Backward Category</option>
                                        <option value="Special Backward Category (A)">Special Backward Category (A) </option>


                                        </select>    
                                        
                                </div> 
                                
                                <div class="form-group col-sm-3">
                                    <label for="caste" >Caste</label>
                                    <select class="custom-select" id="BCCcaste" name="BCCcaste" required>       <!-- BCC=beneficiary cast/category -->
                                      <option>  <?php echo $row['accaste']?>  </option>
                                        <option>--Select--</option>
                                           
                                        </select>    
                                </div>
                                
                                   <div class="form-group col-sm-3">
                                        <label for="subCaste">Sub Caste</label>
                                        <input type="text" class="form-control"  name="BCCsubcast" id="BCCsubcast" value="<?php echo $row['acsubcaste']?>">
                                                                               
                                </div>    
                                       
                                      
                                
                                
                                <div class="form-group col-sm-3">
                                    <label for="religion" >Religion</label>
                                    <select class="custom-select" id="BCCrelegion" name="BCCrelegion">
                                            <option>--Select--</option>
                                            <option selected value="<?php echo $row['acrelegion']?>"><?php echo $row['acrelegion']?></option>
                                            <option >Buddhists</option>
                                            <option >Christians</option>
                                            <option >Hindu</option>
                                            <option >Jain</option>
                                            <option >Muslims</option>
                                            <option >Sikhs</option>
                                            <option >Zoroastrians (Parsis)</option>
                                            <option >Other</option>

                                        </select>    
                                    <input id="hfReligion" class="form-control" name="Religion" value="" type="hidden">
                                </div>
                                
                                 
                                
                            </div>
                          
                       
                        
                   
                   
                   
                            <div class="row">
                                
                                <div class="form-group col-sm-3">
                                    <label for="motherTounge" >Mother Tounge</label>
                                    <input type="text" class="form-control " id="mtoungue" name="mtounge" value="<?php echo $row['acmt']?>" required>
                                </div>
                                
                                <div class="form-group col-sm-3">
                                        <label for="dialect">Dialect</label>
                                        <input type="text" class="form-control" id="BCCdialect" name="BCCdialect"  value="<?php echo $row['acdialect']?>" required="">
                                           
                                </div>    
                                        
                            </div>
                         <?php
                                    }
                                    
                                    ?>
                
                        
                       
                                
                      
      <script>
            $(document).ready(function(){
            $('#BCCcategory').on('change',function(){
             var catID = $(this).val();
             if(catID){
            $.ajax({
                url:'getcast.php',
                method:'POST',
                data: {
                    'catID':catID,
                },
                success:function(html){
                    console.log(html);
                    $('#BCCcaste').html(html);
             
                },
    });
    }
    });
    $('#ataluka').on('change',function(){
             var subdistID = $(this).val();
             if(subdistID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'subdistID':subdistID,
                },
                success:function(html){
                    $('#avillage').html(html);
             
                },
    });
    }
    });
            });
            </script>
                        
                       
                    
                                             </div>

          
               
                  <?php

                 
                  $sql1="select * from birthdetails where username='$username'";
                $result1= mysqli_query($connection, $sql1);
                while ($row=mysqli_fetch_array($result1)){
                      
                  
                  ?>
            <br>
            <br>
                        
              

<div class="bg-info text-white card-header form-group col-md-12 card">
            Birth Place Details
        </div>
        
        <div class="alert alert-warning col-sm-12 ">
			 If State is other than Maharashtra,then district & taluka will not be available. Please mention your entire address in Birthplace along with state and pincode      
        </div>
           
            <div class="card col-md-12">   
        <div class="form-group required row">
   		    <div class="col-md-6">
   		        <label for="a_country" class="col-md-12 col-form-label control-label">Country
                            <select class="custom-select" id="a_country" name="a_country" required>
                        
                        <option selected>India</option>	
       	                       	            </select>
   		        </label>
   		    </div>
   		   
       

   		    <div class="form group required col-md-6">
   			    <label for="a_state" class="col-md-12 col-form-label control-label">State
 					<select class="custom-select" id="a_state" name="a_state" required>
                      <option selected> <?php echo $row['state'];?></option>
   		                <option>--Your state--</option>
                                <option>Maharashtra</option>
       	                        <option>Andaman and Nicobar Islands</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dadra and Nagar Haveli</option>
                                <option>Daman and Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu and Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                
                                <option>Manipur	</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Puducherry</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttarakhand</option>
                                <option>West Bengal</option>
       	            </select>
                </label>
   		    </div>
   	    </div>
           

        <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="a_district" class="col-md-12 col-form-label control-label">District
   			   		<select class="custom-select" id="a_district" name="a_district" required>
                                    <option selected> <?php echo $row['district'];?></option>
   		              <option>--Your District--</option>
                      <option>Ahmednagar</option>
                      <option>Akola</option>
                      <option>Amravati</option>
                      <option>Aurangabad</option>
                      <option>Beed</option>
                      <option>Bhandara</option>
                      <option>Buldana</option>
                      <option>Chandrapur</option>
                      <option>Dhule</option>
                      <option>Gadchiroli</option>
                      <option>Gondiya</option>
                      <option>Hingoli</option>
                      <option>Jalgaon</option>
                      <option >Jalna</option>
                      <option >Kolhapur</option>
                      <option >Latur</option>
                      <option >Mumbai City</option>
                      <option >Mumbai Suburban</option>
                      <option >Nagpur</option>
                      <option >Nanded</option>
                      <option >Nandurbar</option>
                      <option >Nashik</option>
                      <option >Osmanabad</option>
                      <option >Palghar</option>
                      <option >Parbhani</option>
                      <option >Pune</option>
                      <option >Raigarh</option>
                      <option >Ratnagiri</option>
                      <option >Sangli</option>
                      <option >Satara</option>
                      <option >Sindhudurg</option>
                      <option >Solapur</option>
                      <option >Thane</option>
                      <option >Wardha</option>
                      <option >Washim</option>
                      <option >Yavatmal</option>
       	            </select>
   		        </label>
   		    </div>
   		   


   		    <div class="form group required col-md-6">
   			    <label for="a_taluka" class="col-md-12 col-form-label control-label">Taluka
 					<select class="custom-select" id="a_taluka" name="a_taluka" required>
                      <option selected> <?php echo $row['taluka'];?></option>
   		                <option>--select--</option>		
       	                
       	            </select>
                </label>
   		    </div>
   	    </div>

            <div class="form-group required">
                    <label for="a_b_place" class="col-md-12 col-form-label control-label">Birth place
                        <input type="text" class="form-control" id="a_b_place" name="a_b_place" placeholder="Place" value="<?php echo $row['birthplace'];?>" required>
                    </label>
            </div>


            <div class="form-group required">
                    <label for="a_motherTongue" class="col-md-12 col-form-label control-label">Mother Tongue
                        <input type="text" class="form-control" id="a_motherTongue" name="a_motherTongue" value="<?php echo $row['mothertongue'];?>" placeholder="Mother Tongue" required>
                    </label>
            </div>
  
            <div class="form-group">
                    <label for="god" class="col-md-12 col-form-label control-label">God/Goddess Name
                        <input type="text" class="form-control" id="god" name="god" value="<?php echo $row['godname'];?>" placeholder="God/Goddess name">
                    </label>
                </div>

            <div class="form-group required">
                    <label for="relatives" class="col-md-12 col-form-label control-label">Five different surnames of relatives or person from the same caste as the applicant
                    	<div class="form-group col-md-12 row">
                    	    <div for="f_surName" class="form-group col-md-4">
                               <input type="text" class="form-control" id="f_surName" name="f_surName" value="<?php echo $row['sur1'];?>" required>
                            </div> 
                            <div for="s_surName" class="form-group col-md-4">
                               <input type="text" class="form-control" id="s_surName" name="s_surName" value="<?php echo $row['sur2'];?>" required>
                            </div> 
                            <div for="t_surName" class="form-group col-md-4">
                               <input type="text" class="form-control" id="t_surName" name="t_surName" value="<?php echo $row['sur3'];?>" required>
                            </div>
                        </div>

                        <div class="form-group col-md-12 row">
                        	<div for="fo_surName" class="form-group col-md-4">
                        	    <input type="text" class="form-control" id="fo_surName" name="fo_surName" value="<?php echo $row['sur4'];?>" required>	
                        	</div>
                        	<div for="fi_surName" class="form-group col-md-4">
                        	    <input type="text" class="form-control" id="fi_surName" name="fi_surName" value="<?php echo $row['sur5'];?>" required>
                        	</div>
                        </div>   
                    </label>
            </div>
  
              
           
        </div>
         </p>   
            <!-- Address for Correspondence -->
            <p>
              
                  <!-- Native place details -->
       
        <p>
            <p class="bg-info text-white card-header col-md-12 ">Native Place Details</p> 


           
                 
            
            <div class="alert alert-warning col-sm-12 ">
			If State is other than Maharashtra, then district & taluka will not be available.Please mention the entire address in Address Line 1-2 or Village/Town along with state and pincode. In case if you do not have pincode enter 999999.   
            </div> 
         <div class="form-group">
                    <label for="address2" class="col-md-12 col-form-label control-label">Address Line 1
                        <input type="text" class="form-control" name="address1" id="address1" value="<?php echo $row['addressLine1'];?>" placeholder="Address Line 1">
                    </label>
            </div>


            <div class="form-group">
                    <label for="address2" class="col-md-12 col-form-label control-label">Address Line 2
                        <input type="text" class="form-control" name="address2" id="address2" value="<?php echo $row['addressLine2'];?>" placeholder="Address Line 2">
                    </label>
            </div>

            
           


            <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="country" class="col-md-12 col-form-label control-label">Country
   			   		<select class="custom-select" name ="ncountry" id="ncountry">
                <option><?php echo $row['nativeCountry'];?></option>
   		                <option>--select--</option>		
       	                <option>Ahmednagar</option>
       	                <option>Akola</option>
                        <option>Amravati</option>
                        <option>Aurangabad</option>
       	            </select>
   		        </label>
   		    </div>
   		   


   		    <div class="form group required col-md-6">
   			    <label for="state" class="col-md-12 col-form-label control-label">State
 					<select class="custom-select" name ="nstate">
            <option><?php echo $row['nativeState'];?></option>
 						<option>--select State--</option>
                                <option>Maharashtra</option>
   		                <option>Andaman and Nicobar Islands</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dadra and Nagar Haveli</option>
                                <option>Daman and Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu and Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                
                                <option>Manipur	</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Puducherry</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttarakhand</option>
                                <option>West Bengal</option>
       	            </select>
                </label>
   		    </div>
   	    </div>
              

        <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="ndistrict" class="col-md-12 col-form-label control-label">District
   			   		<select class="custom-select" name ="ndistrict" id="ndistrict">
                     <option><?php echo $row['nativeDistrict'];?></option>
   		                <option> -Your District-</option>
                      <option>Ahmadnagar</option>
                      <option>Akola</option>
                      <option>Amravati</option>
                      <option>Aurangabad</option>
                      <option>Beed</option>
                      <option>Bhandara</option>
                      <option>Buldana</option>
                      <option>Chandrapur</option>
                      <option>Dhule</option>
                      <option>Gadchiroli</option>
                      <option>Gondiya</option>
                      <option>Hingoli</option>
                      <option>Jalgaon</option>
                      <option >Jalna</option>
                      <option >Kolhapur</option>
                      <option >Latur</option>
                      <option >Mumbai City</option>
                      <option >Mumbai Suburban</option>
                      <option >Nagpur</option>
                      <option >Nanded</option>
                      <option >Nandurbar</option>
                      <option >Nashik</option>
                      <option >Osmanabad</option>
                      <option >Palghar</option>
                      <option >Parbhani</option>
                      <option >Pune</option>
                      <option >Raigarh</option>
                      <option >Ratnagiri</option>
                      <option >Sangli</option>
                      <option >Satara</option>
                      <option >Sindhudurg</option>
                      <option >Solapur</option>
                      <option >Thane</option>
                      <option >Wardha</option>
                      <option >Washim</option>
                      <option >Yavatmal</option>
       	            </select>
   		        </label>
   		    </div>
   		   


   		    <div class="form group required col-md-6">
   			    <label for="taluka" class="col-md-12 col-form-label control-label">Taluka
 					<select class="custom-select" name="ntaluka" id="ntaluka">
                      <option><?php echo $row['nativeTaluka'];?></option>
   		            
       	            </select>
                </label>
   		    </div>
             <div class="form group required col-md-6">
   			    <label for="nvillage" class="col-md-12 col-form-label control-label">Village/Town
 					<select class="custom-select" name="nvillage" id="nvillage">
                      <option><?php echo $row['village'];?></option>
   		            
       	            </select>
                </label>
   		    </div>
            <div class="form-group required">
                    <label for="pin" class="col-md-12 col-form-label control-label">Pin code
                        <input type="text" class="form-control col-md-6" name ="pin" id="pin" value="<?php echo $row['pincode'];?>" placeholder="Pin code">
                    </label>
            </div>
   	    </div>

             


            <p class="form-group col-md-12">If the applicant has left the native place</p>



        <div class="form-group row" >
          
   		    <div class="col-md-6">
   		        <label for="who" class="col-md-12 col-form-label control-label">Who left the place
   			        <input type="text" class="form-control" name="who" id="who" value="<?php echo $row['whoLeft'];?>" placeholder="Name">
   		        </label>
   		    </div>
   		    <div class="form-group col-md-6">
   			    <label for="when" class="col-md-12 col-form-label">When was the place left Year(YYYY)
 			        <input type="text" class="form-control" name ="when"  id="when" value="<?php echo $row['whenLeft'];?>" placeholder="YYYY">
                </label>
   		    </div>
        </div>


        <div class="form-group">
   		    <div class="form-group col-md-6">
   		        <label for="reason" class="col-md-12 col-form-label control-label">Reason for Leaving
   			   		<select class="custom-select" name="reason">
                      <option><?php echo $row['reasonForLeaving'];?></option>
   		                <option>--select--</option>		
       	                <option>Education</option>
       	                <option>Business</option>
                        <option>Service</option>
                        <option>other</option>
       	            </select>
   		        </label>
   		    </div>        
        </div>
         

        <div class="form-group row" >
   		    <div class="col-md-6">
   		        <label for="current" class="col-md-12 col-form-label control-label">Since when applicant is residing at current address(YYYY) 
   			        <input type="text" class="form-control" name ="residingSince" id="residingSince" value="<?php echo $row['residingSince'];?>" placeholder="Division">
   		        </label>
   		    </div>
   		    <div class="form-group col-md-6">
                   <label class="col-sm-12 col-form-label control-label">Do you own land or house at native place?
                      <div class="form-check form-check-inline col-sm-12">
                      	<label><input type="radio" name="rad" checked="<?php echo $row['ownLand'];?>"><span class="form-radio-sign">Yes</span></label>
                      </div>  
                      <div class="form-check form-check-inline  col-sm-12">
                      	<label><input type="radio" name="rad" checked="<?php echo $row['ownLand'];?>"><span class="form-radio-sign">No</span></label>
                      </div>
                        </label>  
                    
            </div>   
        </div>       

        
        
        <div class="form-group">
                    <label for="relation" class="col-md-12 col-form-label control-label">Name and relation of the person staying at native place
                        <input type="text" class="form-control" name="relation" id="relation" value="<?php echo $row['relation'];?>"  placeholder="Name and relation">
                    </label>
        </div>


         <div class="form-group">
                    <label for="nativeAddress" class="col-md-12 col-form-label control-label">Address of the person staying at native place
                        <textarea class="form-control" rows="2" name = "nativeAddress"  id="nativeAddress"><?php echo $row['nativeAddress'];?></textarea>
                    </label>
        </div>

        <div class="form-group">
                    <label for="number" class="col-md-6 col-form-label control-label">Telephone no
                        <input type="text" class="form-control" name= "number" id="number" value="<?php echo $row['telNumber'];?>" placeholder="Telephone No.">
                    </label>
        </div>
      
      
      

   </p>
  
     </p>

      <div class="buttonholder">
          <a href="familydetails.php" class="previous btn btn-primary btn-raised">&laquo; Previous</a>
       	<button type="submit" class="save btn btn-success btn-raised" id="savecb" name="savecb">Save & Next..</button>
        

       </div>
          </div>
       </form>    

     </div>
     </div>
<?php 


}


?>
    <script>
$(document).ready(function(){
            $('#a_district').on('change',function(){
             var distID = $(this).val();
             if(distID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'distID':distID,
                },
                success:function(html){
                    $('#a_taluka').html(html);
             
                },
    });
    }
    });
    $('#a_taluka').on('change',function(){
             var subdistID = $(this).val();
             if(subdistID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'subdistID':subdistID,
                },
                success:function(html){
                    $('#a_village').html(html);
             
                },
    });
    }
    });  
           
           
            $('#ndistrict').on('change',function(){
             var distID = $(this).val();
             if(distID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'distID':distID,
                },
                success:function(html){
                    $('#ntaluka').html(html);
             
                },
    });
    }
    });
    $('#ntaluka').on('change',function(){
             var subdistID = $(this).val();
             if(subdistID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'subdistID':subdistID,
                },
                success:function(html){
                    $('#nvillage').html(html);
             
                },
    });
    }
    });
}
);
</script>

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