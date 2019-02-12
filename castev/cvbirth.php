<?php 
  
  session_start();

  if(array_key_exists("id",$_COOKIE)){

    // if cookie exists set session id = cookie id

    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['username']=$_COOKIE['username'];

  }

  // check session id
  if(array_key_exists("id", $_SESSION)){

    //echo "<p>Logged in! </p> "; //logout=1  is a flag
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Caste Certificate And Validity System</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="../assets/css/ready.css">
  <link rel="stylesheet" href="../assets/css/demo.css">
        <script src="../assets/js/core/jquery.3.2.1.min.js"></script>

  <style>
         
    .form-group.required .control-label:before {
  content:"*";
  color:red;
}
  span{
     color: red;
  }
 
            </style>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

</head>
<body>
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
							<a href ='index.php?logout=99'>
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
                                            <div class="card">
               
                        <div class="card-body">
                         
                       
                            <form class="" method="post" action="cvsavebirth.php">
                 
          
               
                  <?php
                  require_once '../connection.php';
                  $username = $_SESSION['username'];
                  $sql="select * from cvbirth where username='$username'";
                $result= mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_array($result)){
                      
                  
                  ?>
            

<div class="bg-info text-white card-header form-group col-md-12 card">
            Birth Place Details
        </div>
        
        <div class="alert alert-warning col-sm-12 ">
			 If State is other than Maharashtra,then district & taluka will not be available. Please mention your entire address in Birthplace along with state and pincode      
        </div>
           
            <div class="card col-md-12">  
                
                <div class="card-body">
                
                
        <div class="form-group row col-md-12">
   		    <div class="col-md-6">
   		        <label for="a_country" class="col-form-label control-label">Country   </label>

                            <select class="custom-select" id="a_country" name="a_country" required>
                        
                        <option selected>India</option>	
       	                       	            </select>
   		    </div>
   		   
       

   		    <div class="col-md-6">
   			    <label for="a_state" class="col-form-label control-label">State </label>

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
   		    </div>
   	    </div>
           

        <div class="form-group required row col-md-12" >
   		    <div class="col-md-6">
   		        <label for="a_district" class="col-form-label control-label">District</label>

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
   		    </div>
   		   


   		    <div class="required col-md-6">
   			    <label for="a_taluka" class="col-form-label control-label">Taluka</label>

 					<select class="custom-select" id="a_taluka" name="a_taluka" required>
                      <option selected> <?php echo $row['taluka'];?></option>
   		                <option>--select--</option>		
       	                
       	            </select>
   		    </div>
   	    </div>

                
           <div class="form-group row col-md-12">     
            <div class="col-md-6">
                    <label for="a_b_place" class="col-form-label control-label">Birth place </label>

                        <input type="text" class="form-control" id="a_b_place" name="a_b_place" placeholder="Place" value="<?php echo $row['birthplace'];?>" required>
            </div>


            <div class="col-md-6">
                    <label for="a_motherTongue" class="col-form-label control-label">Mother Tongue</label>

                        <input type="text" class="form-control" id="a_motherTongue" name="a_motherTongue" value="<?php echo $row['mothertongue'];?>" placeholder="Mother Tongue" required>
            </div>
           </div>     
  
            <div class="form-group row col-md-12">
                <div class="col-md-12">
                    <label for="god" class="col-form-label control-label">God/Goddess Name </label>

                        <input type="text" class="form-control" id="god" name="god" value="<?php echo $row['godname'];?>" placeholder="God/Goddess name">
                </div>
            </div>

            <div class="form-group row col-md-12">
                <div class="col-md-12">             
                <label for="relatives" class="col-form-label control-label">Five different surnames of relatives or person from the same caste as the applicant  </label>
                </div>
                
                    	    <div for="f_surName" class="col-md-4">
                               <input type="text" class="form-control" id="f_surName" name="f_surName" value="<?php echo $row['sur1'];?>" required>
                            </div> 
                            <div for="s_surName" class="col-md-4">
                               <input type="text" class="form-control" id="s_surName" name="s_surName" value="<?php echo $row['sur2'];?>" required>
                            </div> 
                            <div for="t_surName" class="col-md-4">
                               <input type="text" class="form-control" id="t_surName" name="t_surName" value="<?php echo $row['sur3'];?>" required>
                            </div>
                                
                <div for="fo_surName" class="col-md-4" style="margin-top:15px">
                        	    <input type="text" class="form-control" id="fo_surName" name="fo_surName" value="<?php echo $row['sur4'];?>" required>	
                        	</div>
                        	<div for="fi_surName" class="col-md-4" style="margin-top:15px">
                        	    <input type="text" class="form-control" id="fi_surName" name="fi_surName" value="<?php echo $row['sur5'];?>" required>
                        	</div>
            </div>
  
                </div> 
           
        </div>
         </p>   
            <!-- Address for Correspondence -->
            <p>
              
                  <!-- Native place details -->
       
        <p>
            <p class="bg-info text-white card-header col-md-12 ">Native Place Details</p> 


            <div class="card">    
            <div class="card-body">        
            
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
            
               	    </div>

                
                
                
             <div class="form-group required row">
                
                 
                 <div class="col-md-6 form-group" >
   			    <label for="nvillage" class="col-md-12 col-form-label control-label">Village/Town
 					<select class="custom-select" name="nvillage" id="nvillage">
                                        <option><?php echo $row['village'];?></option>
   		            
                                      </select>
                            </label>
   		    </div>
                  
                 
                 <div class="form-group required col-md-6">
                    <label for="pin" class="col-md-12 col-form-label control-label">Pin code
                        <input type="text" class="form-control" name ="pin" id="pin" value="<?php echo $row['pincode'];?>" placeholder="Pin code">
                    </label>
            </div>

             </div>
            
             





        <div class="form-group row" >
            <label class="col-md-12" style="">If the applicant has left the native place</label>

          
   		    <div class="form-group col-md-6">
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


        <div class="form-group row">
   		    <div class=" col-md-6">
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
            
            
             <div class="form-group col-md-6">
   		        <label for="current" class="col-md-12 col-form-label control-label">Since when applicant is residing at current address(YYYY) 
   			        <input type="text" class="form-control" name ="residingSince" id="residingSince" value="<?php echo $row['residingSince'];?>" placeholder="Division">
   		        </label>
   		    </div>
        </div>
         

        <div class="form-group row" >
   		   
   		    <div class="form-group col-md-6">
                        <label class="col-md-12  col-form-label control-label">Do you own land or house at native place? </label> 
                        <label class="col-md-12"><input type="radio" name="rad" class="col-md-12 row" checked="<?php echo $row['ownLand'];?>"> <span class="form-radio-sign">Yes</span></label>
                        <label class="col-md-12"><input type="radio" name="rad" class="col-md-12 row" checked="<?php echo $row['ownLand'];?>"> <span class="form-radio-sign">No</span></label>

                      </div>
                    
                 </div>   

        
                  <div class="form-group">
                    <label for="address2" class="col-md-12 col-form-label control-label">Address Line 1
                        <input type="text" class="form-control" name="address1" id="address1" value="<?php echo $row['addressLine1'];?>" placeholder="Address Line 1">
                    </label>
            </div>

        
        <div class="form-group ">
                    <label for="relation" class="col-md-12 col-form-label control-label" >Name and relation of the person staying at native place
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
      
              </div>       

            </div>
            </div>
   </p>
  
     </p>

     <div class="buttonholder" style="margin-bottom:20px;margin-left: 40%">
          <a href="cvfamilydetails.php" class="previous btn btn-primary btn-raised">&laquo; Previous</a>
       	<button type="submit" class="save btn btn-success btn-raised" id="save">Save & Next..</button>
        

       </div>
            </form>    

          </div>

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

                    <script>
            $(document).ready(function(){ 
            $('#district').on('change',function(){
             var distID = $(this).val();
             if(distID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'distID':distID,
                },
                success:function(html){
                    $('#taluka').html(html);
             
                },
    });
    }
    });
    $('#taluka').on('change',function(){
             var subdistID = $(this).val();
             if(subdistID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'subdistID':subdistID,
                },
                success:function(html){
                    $('#village_or_town').html(html);
             
                },
    });
    }
    });

            $('#category').on('change',function(){
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
                    $('#caste').html(html);
             
                },
    });
    }
    });
            });
            
  
      
  </script>
				
			

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