<?php 
  
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
    header("Location: index.php");
  }
      include("connection.php");
      $username=$_SESSION['username'];
      $sql1="select * from appdetails where username='$username'";
      $row=mysqli_fetch_array(mysqli_query($connection,$sql1));
      if($row['arelben']=='Self'){
        $salutationcontent = $row['salutation'];
        $nameengcontent= $row['fullnameEnglish'];

      $namemarcontent = $row['fullnameMarathi'];

      $dobcontent= $row['adob'];

      $mobilecontent = $row['amob'];

      $gendercontent= $row['Agender'];

      $emailcontent = $row['aemail'];

      $adharcontent= $row['aaadhar'];

      $nationalitycontent = $row['anationality'];

     // $postcontent= $row['postname'];

      $occupationcontent = $row['aoocupation'];

      //$peraddrcontent= $row['peraddr'];

      $addrl1content = $row['aaddressline1'];

      $addrl2content= $row['aaddressline2'];

      $countrycontent = $row['acountry'];

      $statecontent= $row['astate'];

      $districtcontent = $row['adistrict'];

      $talukacontent= $row['ataluka'];

      $villagecontent = $row['avillage'];

      $pincodecontent= $row['apincode'];

      }
      else{
      $query = "SELECT * FROM `benfdet` WHERE username ='$username'";

      $row = mysqli_fetch_array(mysqli_query($connection, $query));
       $salutationcontent = $row['salutation'];
      $nameengcontent= $row['nameeng'];

      $namemarcontent = $row['namemar'];

      $dobcontent= $row['dob'];

      $mobilecontent = $row['mobile'];

      $gendercontent= $row['gender'];

      $emailcontent = $row['email'];

      $adharcontent= $row['adhar'];

      $nationalitycontent = $row['nationality'];

      $postcontent= $row['postname'];

      $occupationcontent = $row['occupation'];

      $peraddrcontent= $row['peraddr'];

      $addrl1content = $row['addrl1'];

      $addrl2content= $row['addrl2'];

      $countrycontent = $row['country'];

      $statecontent= $row['state'];

      $districtcontent = $row['district'];

      $talukacontent= $row['taluka'];

      $villagecontent = $row['village'];

      $pincodecontent= $row['pincode'];

      
    // } else {
        
    //     header("Location: benfdet.php");
        
    // }
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
						<form method="POST" action="savebenfd.php">  
            
            <div class="card">
                
                <div class="card-body">
        
            <h3><strong>Beneficiary Details</strong></h3>
             
                    <div class="card">                   
                           <div class="card-body">

                               <div class="row ">
                                   <div class="form-group col-sm-2">
                                       <label for="salutation">Salutation</label>
                                       <select class="form-control" id="Bsalutation" name="Bsalutation">
                                           <?php echo "<option>".$salutationcontent."</option>"  ?>
                                                                       <option>Advocate</option>
                                           <option>Kumar</option>
                                           <option>Kumari</option>
                                           <option>Mr.</option>
                                           <option>Mrs</option>
                                           <option>Shri</option>
                                           <option>Shrimati</option>
                                       </select>   
                                   </div>
                                   
                                   <div class="form-group col-sm-10">
                                       <label for="nameEnglish">Full Name(English)</label>
                                       <input type="text" class="form-control" id="BnameEnglish" name="BnameEnglish" value=" <?php echo $nameengcontent ?> ">
                                   </div>
                                   
                                    
                                   
                                       
                                   
                               </div>   
             
                  <!------------------------------------------------------------------------------>                                          
   
                                <div class="row">
                                      
                                     <div class="form-group col-sm-2">
                                           <label for="dob">Date of Birth</label>
                                           <input type="date" id="Bdob" name="Bdob" class="form-control" value="<?php echo $dobcontent ?>">
                                        </div>  
                                   
                                      <div class="form-group col-sm-2">
                                           <label for="mob">Mobile Number</label>
                                           <input type="tel" id="Bmob" name="Bmob" class="form-control" value="<?php echo $mobilecontent ?>">
                                   </div>
                                       
                                    <div class="form-group col-sm-2">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="Bgender" name="Bgender">
                                           

                                                                                     
                                            <?php 
                                            if( $gendercontent!=null)
                                              {
                                                echo "<option selected>".$gendercontent."</option>";
                                               
                                                echo "<option>"."Male"."</option>";
                                                echo"<option>"."Female"."</option>";
                                               echo "string"; "<option>"."Other"."</option>";
                                               }
                                               else{
                                                                                     
                                          
                                                echo "<option>"."Male"."</option>";
                                                echo"<option>"."Female"."</option>";
                                               echo "string"; "<option>"."Other"."</option>";                               
                                             }
                                           ?> 
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-sm-5">
                                           <label for="email">Email ID</label>
                                           <input type="email" id="Bemail" name="Bemail" class="form-control" value="<?php echo $emailcontent ?>">
                                   </div>

                                  
                                                                                                   
                                </div>
                  
                  <!------------------------------------------------------------------------------>
                  
                              
                                <div class="row">         
                                    <div class="form-group col-sm-5">
                                        <label for="adhar">Aadhar Number</label>
                                        <input type="text" class="form-control" id="Badhar" name="Badhar" value="<?php echo $adharcontent ?>" >
                                    </div> 
                                    
                                     <div class="form-group col-sm-5">
                                        <label for="nationality">Applicant Nationality</label>
                                        <input type="text" class="form-control" value="Indian" readonly>
                                            
                                        </select>    
                                    </div>
                                  
                                </div>
                 
                  <!-------------------------------------------------------------------------------------->
                       
                  <div class="row">
                                
                                
                                <div class="form-group col-sm-3">
                                    <label for="herediataryOccupation">Occupation</label>
                                    <select class="form-control" id="AOherediataryOccupation" name="AOherediataryOccupation">
                                                     <?php echo "<option>".$occupationcontent."</option>"  ?>         
                                                    
                                                        <option value="Artist">Artist</option>
                                                        <option value="B.A">B.A</option>
                                                        <option value="B.E">B.E</option>
                                                        <option value="Bussiness">Bussiness</option>
                                                        <option value="Doctor">Doctor</option>
                                                        <option value="Engineer">Engineer</option>
                                                        <option value="Farm Wages">Farm Wages</option>
                                                        <option value="Farmer">Farmer</option>
                                                        <option value="Government Employee">Government Employee</option>
                                                        <option value="Hardware Professional">Hardware Professional</option>
                                                        <option value="Housewife">Housewife</option>
                                                        <option value="Industrialist">Industrialist</option>
                                                        <option value="Lawyer">Lawyer</option>
                                                        <option value="Nurse">Nurse</option>
                                                        <option value="2Others">Others</option>
                                                        <option value="Private Service">Private Service</option>
                                                        <option value="Professor">Professor</option>
                                                        <option value="Software Professional">Software Professional</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Teacher">Teacher</option>
                                                        <option value="Wages">Wages</option>
                                                        <option value="Worker">Worker</option>
                                                        <option value="Writer">Writer</option>
                                                        </select>   
                  <input class="form-control" id="HereditarytOccupation" name="HereditarytOccupation" value="" type="hidden">
                                </div>
                                
                                                                 
                            </div>
                           </div>
                       </div> 
                     
             <!--*****************************************************************************************************-->
             
                   
             
                        <br>            
                         <div class="card">
                            <div class="card-body">
                     
                               
                                    <p>Address same as Applicant Address?</p>
                                    
                                     <div class="radio">
                                        <label> <input type="radio" checked name="BpermanantAddress" id="BpermanantAddress"  onclick="reload1()" style="margin-right: 10px" value="no" <?php echo ($row['peraddr'] == "no" ? 'checked="checked"': ''); ?>><span class="form-radio-sign"> Yes</span></label>
                                     </div>
                                      
                                    <div class="radio">
                                        <label><input type="radio" name="BpermanantAddress" id="BpermanantAddress"  onclick="myFunction()" style="margin-right: 10px" value="no" <?php echo ($row['peraddr'] == "no" ? 'checked="checked"': ''); ?> ><span class="form-radio-sign">No</span></label>
                                     </div>
                                     <script>
                                        function myFunction() {
                                            document.getElementById('corresAddress1').value='';
                                            document.getElementById('corresAddress2').value='';
                                            document.getElementById("acountry").selectedIndex = -1;
                                            document.getElementById("astate").selectedIndex = -1;
                                            document.getElementById("adistrict").selectedIndex = -1;
                                            document.getElementById("ataluka").selectedIndex = -1;
                                            document.getElementById("avillage").selectedIndex = -1;
                                            document.getElementById('a_pincode').value='';
                                            
                                        }
                                        
                                        function reload1() {
                                            location.reload();
                                         }
                                     </script>
                              
                            </div>
                         </div>
                             <div class="bg-info text-white card-header col-sm-12">
                Address for Correspondence
            </div>
            
             
             <div class="card col-md-12">  
            
            <div class="form-group required">
                    <label for="corresAddress1" class="col-md-12 col-form-label control-label">Address Line 1
                        <input type="text" class="form-control" id="corresAddress1" name="corresAddress1" placeholder="Address Line 1" required value="<?php echo $addrl1content  ?>">
                    </label>
            </div>
            
            <div class="form-group">
                    <label for="corresAddress2" class="col-md-12 col-form-label control-label">Address Line 2
                        <input type="text" class="form-control" id="corresAddress2" name="corresAddress2" placeholder="Address Line 2" value="<?php echo $addrl2content ?>">
                    </label>
            
            </div> 


               


            <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="country" class="col-md-12 col-form-label control-label">Country
   			   		<select class="form-control" id="acountry" name="acountry" required>
                       <?php echo "<option>".$countrycontent."</option>"  ?>         
    			<option>India</option>
       	               
       	            </select>
   		        </label>
   		    </div>
   		   


   		    <div class="form group required col-md-6">
   			    <label for="state" class="col-md-12 col-form-label control-label">State
 					<select class="form-control" id="astate" name="astate" required>
                      <?php echo "<option>".$statecontent."</option>"  ?>         
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
   		        <label for="district" class="col-md-12 col-form-label control-label">District
   			   		<select class="form-control" id="adistrict" name="adistrict" required>
                      <?php echo "<option>".$districtcontent."</option>"  ?> 
   		              
                      <option value="Ahmednagar">Ahmednagar</option>
                      <option value="Akola">Akola</option>
                      <option value="Amravati">Amravati</option>
                      <option value="Aurangabad">Aurangabad</option>
                      <option value="Beed">Beed</option>
                      <option value="Bhandara">Bhandara</option>
                      <option value="Buldana">Buldana</option>
                      <option value="Chandrapur">Chandrapur</option>
                      <option value="Dhule">Dhule</option>
                      <option value="Gadchiroli">Gadchiroli</option>
                      <option value="Gondiya">Gondiya</option>
                      <option value="Hingoli">Hingoli</option>
                      <option value="Jalgaon">Jalgaon</option>
                      <option value="Jalna">Jalna</option>
                      <option value="Kolhapur">Kolhapur</option>
                      <option value="Latur">Latur</option>
                      <option value="Mumbai">Mumbai City</option>
                      <option value="Mumbai uburban">Mumbai urban</option>
                      <option value="Nagpur">Nagpur</option>
                      <option value="Nanded">Nanded</option>
                      <option value="Nandurbar">Nandurbar</option>
                      <option value="Nashik">Nashik</option>
                      <option value="Osmanabad">Osmanabad</option>
                      <option value="Palghar">Palghar</option>
                      <option value="Parbhani">Parbhani</option>
                      <option value="Pune">Pune</option>
                      <option value="Raigarh">Raigarh</option>
                      <option value="Ratnagiri">Ratnagiri</option>
                      <option value="Sangli">Sangli</option>
                      <option value="Satara">Satara</option>
                      <option value="Sindhudurg">Sindhudurg</option>
                      <option value="Solapur">Solapur</option>
                      <option value="Thane">Thane</option>
                      <option value="Wardha">Wardha</option>
                      <option value="Washim">Washim</option>
                      <option value="Yavatmal">Yavatmal</option>
       	            </select>
   		        </label>
   		    </div>
       


   		    <div class="form-group required col-md-6">
   			    <label for="taluka" class="col-md-12 col-form-label control-label">Taluka
 					<select class="form-control" id="ataluka" name="ataluka" required>
                      <?php echo "<option>".$talukacontent."</option>"  ?> 
   		       

       	            </select>
                </label>
   		    </div>
                 <div class="form-group col-md-6">
                    <label for="a_town" class="col-md-12 col-form-label control-label">Village/Town
	<select class="form-control" id="avillage" name="avillage" required>
                      <?php echo "<option>".$villagecontent."</option>"  ?> 
   		                               
        </select></label>
                 </div>
            
            <div class="form-group required col-md-6">
                    <label for="a_pincode" class="col-md-12  col-form-label control-label">Pin code
                        <input type="text" class="form-control " id="a_pincode" name="a_pincode" placeholder="Pin code" required value="<?php echo $pincodecontent ?>" >
                    </label>
            </div>
            </div>

                        
                <!-------------------------------------------------------------------------------------------------->
                
                     <br>            
                        
                
                </div>
            </div>
                
                
             <div class="row" style="margin-bottom:20px;margin-left:40%">
                 <a href="caste_apply.php" class="btn btn-primary btn-raised">Prev..</a> &nbsp;  
                           <input type="submit" class="form-control btn-success col-md-2 btn-raised btn" id="addappinfo" name="addappinfo" value="Save & Next..">

                           <input type="submit" href="casteandbirth.php"  style="display: none;" class="form-control bg-primary col-md-2" id="updateappinfo" name="updateappinfo" value="UPDATE">
                          
            
                       </div>
                
         </form>

						</div>
					</div>
				</div>
				
			
	 <?php
    
     
      
        ?>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
            <script>
            $(document).ready(function(){
             
                
            $('#adistrict').on('change',function(){
             var distID = $(this).val();
             if(distID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'distID':distID,
                },
                success:function(html){
                    $('#ataluka').html(html);
             
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

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

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
</html>