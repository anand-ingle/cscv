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
					<div class="container">
						

            <?php
           
           
            $sql="select * from familydetails where username='$username'";
                $result= mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_array($result)){
                      
                  ?>





<form action="savefamily.php" method="post">
  <div class="container-fluid col-md-12"> 
     <div class="card col-md-12">

   <p class="bg-info text-white card-header col-md-12 " style="margin-top:20px">Family's Details</p> 

          <div class="card col-md-12">  
            <div class="form-group required">
                    <label for="name" class="col-md-12 col-form-label control-label">Father's Name
                        <input type="text" class="form-control" id="name" plceholder="Father's Name" name="fatherName" required value="<?php 
                                 // if(isset($row['FatherName'])){
                                  echo $row['FatherName'];
                                 // }
                        ?>">
                    </label>
            </div>



        <div class="form-group required" >
              <label for="dob" class="col-md-12 col-form-label control-label">Father's Date of Birth(DD/MM/YYYY)
                <input type="date" class="form-control col-md-6" id="dob" placeholder="DD/MM/YYYY" name="fatherDOB" required value="<?php 
                                // if(isset($row['FatherDOB'])){

                                  echo $row['FatherDOB'];
                                // }
                                                                    
            
                ?>">
              </label>
      </div>
        

        <div class="form-group required">
                    <label for="place" class="col-md-12 col-form-label control-label">Father's Place of Birth
                        <input type="text" class="form-control" id="place" plceholder="Place" name="placeOB" required value="<?php
                                                          // if(isset($row['PlaceOB'])){
                                                            echo $row['PlaceOB'];
                                                          // }
                         ?>">
                    </label>
        </div>


        <div class="form-group">
                    <label for="gf_name" class="col-md-12 col-form-label control-label">Grandfather's Name
                        <input type="text" class="form-control" id="gf_name" plceholder="Grandfather's Name" name="grandfathername" value="<?php 
                                      // if(isset($row['GrandFatherName'])){
                                        echo $row['GrandFatherName'];
                                      // }
                        ?>">
                    </label>
        </div>

        
        <div class="form-group" >
              <label for="gf_dob" class="col-md-12 col-form-label control-label">Grandfather's Date of Birth(DD/MM/YYYY)
                <input type="date" class="form-control col-md-6" id="gf_dob" placeholder="DD/MM/YYYY" name="grandFatherDOB" value="<?php 
                                        // if(isset($row['GrandFatherDOB'])){
                                          echo $row['GrandFatherDOB'];
                                        // }
    
                 ?>">
              </label>
      </div>


         <div class="form-group">
                    <label for="gf_place" class="col-md-12 col-form-label control-label">Grandfather's Place of Birth
                        <input type="text" class="form-control" id="gf_place" plceholder="Place" name="grandPlace" value="<?php  
                                      // if(isset($row['GrandPlaceOB'])){
                                        echo $row['GrandPlaceOB'];

                                      // }

                        ?>">
                    </label>
        </div>


        <div class="form-group">
                    <label for="m_name" class="col-md-12 col-form-label control-label">Mother's Name
                        <input type="text" class="form-control" id="m_name" plceholder="Mother's Name" name="motherName" value="<?php 
                                     // if(isset($row['MotherName'])){
                                     echo $row['MotherName'];   

                          ?>">
                                     
                    </label>
        </div>

    </div> 
    <?php
  }
  ?>
    
         <!-- Parent's Address -->
    <p>
        <div class="form-group bg-info text-white card-header col-md-12">
          Parent's Address
          (If Father is not alive,mention the address where he used to stay till his expiry)</div>
        
         

        <?php
                  require 'connection.php';
                  $username=$_SESSION['username'];
                  $sql="select * from appdetails where username='$username'";
                $result= mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_array($result)){                  
                  ?>

     
            <div class="checkbox">
             <input type="checkbox">Same Address for Correspondence as the Applicant
                </div>
                                    <div class="radio">
                                        <label> <input type="radio" checked name="FpermanantAddress" id="BpermanantAddress"  onclick="reload1()" style="margin-right: 10px" value="no" <?php echo ($row['peraddr'] == "no" ? 'checked="checked"': ''); ?>><span class="form-radio-sign"> Yes</span></label>
                                     </div>
                                      
                                    <div class="radio">
                                        <label><input type="radio" name="FpermanantAddress" id="BpermanantAddress"  onclick="myFunction()" style="margin-right: 10px" value="no" <?php echo ($row['peraddr'] == "no" ? 'checked="checked"': ''); ?> ><span class="form-radio-sign">No</span></label>
                                     </div>
                                     <script>
                                        function myFunction() {
                                            document.getElementById('aaddress1').value='';
                                            document.getElementById('aaddress2').value='';
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
            
           
            
              <br>
             <div class="card col-md-12">  
             <div class="alert alert-warning col-sm-12 ">
       If State is other than Maharashtra,then district & taluka will not be available. Please mention your entire address in Address Line 2 along with state and pincode      
        </div>
            <div class="form-group required">
                    <label for="Aaddress1" class="col-md-12 col-form-label control-label">Address Line 1
                        <input type="text" class="form-control" id="aaddress1" name="aaddress1" placeholder="Address Line 1" value="<?php echo $row['aaddressline1'];?>" required>
                    </label>
            </div>
            
            <div class="form-group">
                    <label for="Aaddress2" class="col-md-12 col-form-label control-label">Address Line 2
                        <input type="text" class="form-control" id="aaddress2" name="aaddress2" placeholder="Address Line 2" value="<?php echo $row['aaddressline2'];?>" required="">
                    </label>
            
            </div> 


               


            <div class="form-group required row" >
          <div class="col-md-6">
              <label for="acountry " class="col-md-12 col-form-label control-label">Country
                            <select class="form-control custom-select" id="acountry" name="acountry" required>
                                <option ><?php echo $row['acountry'];?> </option>
                        <option>India</option>
                    </select>
              </label>
          </div>
         


          <div class="form group required col-md-6">
            <label for="astate" class="col-md-12 col-form-label control-label">State
          <select class=" custom-select" id="astate" name="astate" required>
                                            <option selected><?php echo $row['astate'];?></option>
        <option>Maharashtra</option>
                      <option>Other</option>
                    </select>
                </label>
          </div>
        </div>
              

        <div class="form-group required row" >
          <div class="col-md-6">
              <label for="adistrict" class="col-md-12 col-form-label control-label">District
              <select class="custom-select" id="adistrict" name="adistrict">
                          <option selected><?php echo $row['adistrict'];?></option>
                      <option >Ahmadnagar</option>
                      <option >Akola</option>
                      <option >Amravati</option>
                      <option >Aurangabad</option>
                      <option >Beed</option>
                      <option >Bhandara</option>
                      <option >Buldana</option>
                      <option >Chandrapur</option>
                      <option >Dhule</option>
                      <option >Gadchiroli</option>
                      <option >Gondiya</option>
                      <option  >Hingoli</option>
                      <option >Jalgaon</option>
                      <option  >Jalna</option>
                      <option >Kolhapur</option>
                      <option  >Latur</option>
                      <option  >Mumbai City</option>
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
                      <option>Sindhudurg</option>
                      <option >Solapur</option>
                      <option >Thane</option>
                      <option >Wardha</option>
                      <option >Washim</option>
                      <option >Yavatmal</option>
                    </select>
              </label>
          </div>
       


          <div class="form-group required col-md-6">
            <label for="ataluka" class="col-md-12 col-form-label control-label">Taluka
          <select class=" custom-select" id="ataluka" name="ataluka" required>
                                            <option selected>  <?php echo $row['ataluka'];?></option>
                                      
                    </select>
                </label>
          </div>
                 <div class="form-group col-md-6">
                    <label for="avillage" class="col-md-12 col-form-label control-label">Village/Town</label>
  <select class=" custom-select" id="avillage" name="avillage" required>
            <option selected><?php echo $row['avillage'];?></option>
                      <option>--select--</option>   
                                           
        </select>
                 </div>
            
            <div class="form-group required col-md-6">
                    <label for="a_pincode" class="col-md-12 col-form-label control-label">Pin code</label>
                        <input type="text" class="form-control col-md-6" value="<?php echo $row['apincode'];?>" id="b_pincode" name="b_pincode" placeholder="Pin code" required>
                    
            </div>
            </div>
 </div>
        
                                              
            <!--*****************************************************************************************************-->                          <?php
                }
            ?>
                     
                         <div class="container submitBtn row" style="margin-left:40%;margin-bottom:20px;">
                             
                             <a href="BeneficiaryDetail.php" class="btn btn-primary btn-raised">Prev..</a> &nbsp;  
                           <input type="submit" class="form-control btn-success btn-raised col-md-2" id="addinfo" name="addinfo" value="SAVE & Next.." >

                          <!-- <input type="reset"  style="display: none;" class=" btn col-md-2" id="updateappinfo" name="updateappinfo" value="Reset">
                             <a href="BeneficiaryDetail.php" class="btn btn-raised btn-primary" hidden="">Next..</a>  --> 
            
                       </div>
                      
                           
                       </div>
                     
                    </form>

                       </div>
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
	
</body>
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
</html>