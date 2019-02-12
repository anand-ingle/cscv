<!DOCTYPE html>
<html>
<head>
	<title>applicant Details</title>
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<style type="text/css">
		.form-group.required .control-label:before {
  content:"*";
  color:red;
}
  span{
     color: red;
  }
 
body{
	padding-top: 4.5rem;
	padding-bottom: 4.5rem;

}
 

header
{
	font-family: 'Lobster', cursive;
	text-align: center;
	font-size: 25px;	
}

#info
{
	font-size: 18px;
	color: #555;
	text-align: center;
	margin-bottom: 25px;
}

a{
	color: #074E8C;
}
.bg-info{
	font-size: 20px;
}
#area{
	background: #ffe6e6;
	border-left: #ffeb3b;
}

.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}

.alert {
  border-left: 6px solid #ffeb3b;
  }

a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}
.next {
    background-color: #4CAF50;
    color: white;
}
.save{
	 background-color: #4CAF50;
    color: white;

}
button:hover{
	background-color: #ddd;
    color: black;
}
button{
	text-decoration: none;
    display: inline-block;
    padding: 8px 16px;

}
.buttonholder{
	text-align: center;
}

	</style>
</head>
<body>
    
    
    


    
    
    
    

    <form method="post" action="createApplication4.php">
	<div class="container-fluid col-md-8"> 
        <!-- <div style="border:  5px solid #F8F8F8"> -->
        <fieldset>
            <div class="card col-md-12">
              	<div class="card-header"><h3>Create Application</h3></div>
             
               
                <p> 
            <!-- <div style="border: 1px solid #F0F0F0">-->   
                     
		        <div class="alert alert-warning col-sm-12 ">
			     All fields marked with <span>*</span> sign are required 
		        </div>
		         
                </p>
         
                <!-- Caste Certificate Details -->

                <p class="bg-info text-white col-md-12 card-header">Caste Certificate Details</p> 
                <div class="card col-md-12"> 
            
                <div class="form-group required has-feedback">
                   <label for="a_name" class="col-md-12 col-form-label control-label">Applicant's full name (As perspecified in Caste Certificate)</label>
    
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="a_name" placeholder="Applicant's full name" name="a_name"  required value="<?php echo $fullName  ?>">
                        <div class="invalid-feedback">Please fill this field</div>
                    </div>
                </div>
 


                <div class="form-group required">
                    <label for="cerNo" class="col-md-12 col-form-label control-label">Applicant's Certificate No.</label>
                        <div class="col-md-12 mr-auto">
                            <input type="text" class="form-control" id="cerNo" placeholder="Certificate No." name="cerNo" required value="<?php echo $aCertificateNo ?>">
                        </div>
                </div>

  
   
   	            <div class="form-group required row" >
   		            <div class="col-md-6">
   		                <label for="c_date" class="col-md-12 col-form-label control-label">Certificate Issuing Date (DD/MM/YYYY)
   			                <input type="c_date" class="form-control" id="Date" placeholder="DD/MM/YYYY" name="c_date" required value="<?php echo $cIssueingDate ?>">
   		                </label>
   		            </div>
   		      
   		            <div class="form group required col-md-6 ">
   			            <label for="issueFrom" class="col-md-12 col-form-label control-label">Issued from
 			                <input type="text" class="form-control" id="issueFrom" placeholder="Issued from" name="issueFrom" required value="<?php echo $issuedFrom ?>">
   			            </label>
   		            </div>
  	            </div>

   	

   	            <div class="form-group required">
                    <label for="authority" class="col-md-12 col-form-label control-label">Designation of Certificate Issuing Authority
                        <input type="text" class="form-control" id="authority" placeholder="Certificate Issuing Authority" name="authority" required value="<?php echo $disignation ?>">
                    </label>
                </div>
  
   			
   	
   	            <div class="form-group">
                    <label for="documents" class="col-md-12 col-form-label control-label">Documents submitted to the Officer for receiving the caste certificate
                        <input type="text" class="form-control" id="documents" placeholder="Documents submitted" name="documents"value="<?php echo $documentsSubmitted ?>">
                    </label>
                 </div>
             </div>
             </div>
              
           <!--Applicant Details  -->
       

                    <p class="bg-info text-white col-md-12 card-header form-group">Applicant Details</p>
                
                   <div class="card col-md-12">
               
                                                    <div class="form-group col-sm-4">
                                                        <label >Gender</label>
                                                        <select class="form-control" id="gender" name="gender" >
                                                            <option><?php echo $gender ?></option>
                                                            <option>--Select--</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>  

              

                 <div class="form-group required">
                    <label for="uid" class="col-md-12 col-form-label control-label">UID No.
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="UID no." required value="<?php echo $uid ?>">
                    </label>
                </div> 

                
        <div class="form-group required">
            <label for="category" class="col-md-12 col-form-label control-label" >Category Applied
                <select class="form-control" id="category" name="category" required="required" value="">
                    <option><?php echo $categoryApplied ?></option>
   		            <option>--select category--</option>		
       	            <option>Sheduled Caste</option>
       	            <option>Scheduled Caste Converted To Buddism</option>
                    <option>Vimukta Jati(A)</option>
                    <option>Nomadic Tribe(B)</option>
                    <option>Nomadic Tribe(C)</option>
                    <option>Nomadic Tribe(D)</option>
                    <option>Other Backward Class</option>
                    <option>Special Backward Class</option>
                    <option>Educationally and Socially Backward Category</option>
                    <option>Special Backward Category(A)</option>
       	        </select>
            </label>
        </div>
  



        <div class="form-group required" >
   		    <label for="caste" class="col-md-12 col-form-label control-label ">Caste Applied
   			   		<select class="form-control" id="caste" name="caste" required="required" value="">
   		        
                        <option><?php echo $castApplied ?></option>
                        <option>--select caste--</option>                       
       	                <option>Ahmednagar</option>
       	                <option>Akola</option>
                        <option>Amravati</option>
                        <option>Aurangabad</option>
       	            </select>
   		        </label>
   		    </div>             
        


        <div class="form-group" >
   		    <label for="subcaste" class="col-md-12 col-form-label control-label ">Sub caste
   			   		<select class="form-control" id="subcaste" name="subcaste" value="">
   		       
                        <option><?php echo $subCaste ?></option>
                        <option>--select subcaste--</option>		
       	                <option>Ahmednagar</option>
       	                <option>Akola</option>
                        <option>Amravati</option>
                        <option>Aurangabad</option>
       	            </select>
   		        </label>
   		    </div>                    
       
               
        <div class="form-group required row" >
        	<div class="col-md-12">
   		        <label for="dob" class="col-md-12 col-form-label control-label">Date of Birth (DD/MM/YYYY)
   		    	    <input type="date" class="form-control" id="dob" name="dob" placeholder="DD/MM/YYYY" required value="<?php echo $dob ?>">
   		        </label>
   		    </div>
          
        </div> 
                       <div class="row">
        <div class="form-group col-md-6 container">
                                           <label for="mob">Mobile Number</label>
                                           <input type="tel" id="appmob" name="appmob" class="form-control" value="<?php echo $mob ?>">
                                   </div>
             <div class="form-group col-md-6 container ">
                                           <label for="mob">Email-ID</label>
                                           <input type="email" id="appemail" name="appemail" class="form-control" value="<?php echo $email ?>">
                                   </div>
        </div>
                   </div>         
      <div class="bg-info text-white card-header col-sm-12">
                Address for Correspondence
            </div>
            
             
             <div class="card col-md-12">  
            
            <div class="form-group required">
                    <label for="corresAddress1" class="col-md-12 col-form-label control-label">Address Line 1
                        <input type="text" class="form-control" id="corresAddress1" name="corresAddress1" placeholder="Address Line 1" required value="<?php echo $address2 ?>">
                    </label>
            </div>
            
            <div class="form-group">
                    <label for="corresAddress2" class="col-md-12 col-form-label control-label">Address Line 2
                        <input type="text" class="form-control" id="corresAddress2" name="corresAddress2" plceholder="Address Line 2" value="<?php echo $address2 ?>">
                    </label>
            
            </div> 


            <div class="form-group">
                    <label for="a_town" class="col-md-12 col-form-label control-label">Village/Town
                        <input type="text" class="form-control" id="a_town" name="a_town" plceholder="Village/Town" value="<?php echo $village ?>">
                    </label>
            </div>     


            <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="country" class="col-md-12 col-form-label control-label">Country
   			   		<select class="form-control" id="country" name="country" required value="">
                                            <option> <?php echo $country ?></option>
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
 					<select class="form-control" id="state" name="state" required value="">
                                            <option><?php echo $state ?></option>
 						<option>--Select State--</option>
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
                                <option>Maharashtra</option>
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
   		        <label for="district" class="col-md-12 col-form-label control-label">District
   			   		<select class="form-control" id="district" name="district" required value="">
                                            <option><?php echo $district ?></option>
   		               <option > -Your District-</option>
                      <option value="AHM">Ahmednagar</option>
                      <option value="AKO">Akola</option>
                      <option value="AMR">Amravati</option>
                      <option value="AUR">Aurangabad</option>
                      <option value="BEE">Beed</option>
                      <option value="BHA">Bhandara</option>
                      <option value="BUL">Buldana</option>
                      <option value="CHA">Chandrapur</option>
                      <option value="DHU">Dhule</option>
                      <option value="GAD">Gadchiroli</option>
                      <option value="GON">Gondiya</option>
                      <option value="HIN">Hingoli</option>
                      <option value="JAG">Jalgaon</option>
                      <option value="JAL">Jalna</option>
                      <option value="KOL">Kolhapur</option>
                      <option value="LAT">Latur</option>
                      <option value="MUM">Mumbai City</option>
                      <option value="MUS">Mumbai Suburban</option>
                      <option value="NAG">Nagpur</option>
                      <option value="NAN">Nanded</option>
                      <option value="NAD">Nandurbar</option>
                      <option value="NAS">Nashik</option>
                      <option value="OSM">Osmanabad</option>
                      <option value="PAL">Palghar</option>
                      <option value="PAR">Parbhani</option>
                      <option value="PUN">Pune</option>
                      <option value="RAI">Raigarh</option>
                      <option value="RAT">Ratnagiri</option>
                      <option value="SAN">Sangli</option>
                      <option value="SAT">Satara</option>
                      <option value="SIN">Sindhudurg</option>
                      <option value="SOL">Solapur</option>
                      <option value="THA">Thane</option>
                      <option value="WAR">Wardha</option>
                      <option value="WAS">Washim</option>
                      <option value="YAV">Yavatmal</option>
       	            </select>
   		        </label>
   		    </div>
   		   


   		    <div class="form group required col-md-6">
   			    <label for="taluka" class="col-md-12 col-form-label control-label">Taluka
 					<select class="form-control" id="taluka" name="taluka" required value="">
                                            <option><?php echo $taluka ?></option>            
   		                <option>--select--</option>		
       	                <option>Ahmednagar</option>
       	                <option>Akola</option>
                        <option>Amravati</option>
                        <option>Aurangabad</option>
       	            </select>
                </label>
   		    </div>
   	    </div>

            
            <div class="form-group required">
                    <label for="a_pincode" class="col-md-12 col-form-label control-label">Pin code
                        <input type="text" class="form-control col-md-6" id="a_pincode" name="a_pincode" placeholder="Pin code" required value="<?php echo $pincode ?>">
                    </label>
            </div>

         </div>
    


       <div class="buttonholder">
           <button type="submit" class="save" id="save"value="submit">Save</button>
       <a href="Familydetails.html" class="next" id="next">Next &raquo;</a>

       </div>
       
    </div>

            
        </fieldset>
    </div>
</form>
    
</body>
</html>


