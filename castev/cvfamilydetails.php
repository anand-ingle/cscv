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
						

            <?php
           
            require_once '../connection.php';
			$username=$_SESSION['username'];
            $sql="select * from  cvfamilydetails where username='$username'";
                $result= mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_array($result)){
                      
                  ?>





<form action="cvsavefamily.php" method="post">
  <div class="container-fluid col-md-12"> 
     <div class="card col-md-12">

         <p class="bg-info text-white card-header col-md-12 " style="margin-top:30px ">Family's Details</p> 

          <div class="card col-md-12"> 
              <div class="card-body">
              
            <div class="form-group required row col-md-12">
                <div class="col-md-12">
                    <label for="name" class="col-form-label control-label">Father's Name</label>

                        <input type="text" class="form-control" id="name" plceholder="Father's Name" name="fatherName" required value="<?php 
                                 // if(isset($row['FatherName'])){
                                  echo $row['FatherName'];
                                 // }
                        ?>" >
                </div>  
            </div>



        <div class="form-group required row col-md-12" >
            <div class="col-md-6">  
            <label for="dob" class="col-form-label control-label">Father's Date of Birth(DD/MM/YYYY) </label>
                <input type="date" class="form-control" id="dob" placeholder="DD/MM/YYYY" name="fatherDOB" required value="<?php echo $row['FatherDOB']; ?>" >
            </div>
            
             <div class="col-md-6">
                     <label for="place" class="col-form-label control-label">Father's Place of Birth </label>

                        <input type="text" class="form-control" id="place" plceholder="Place" name="placeOB" required value="<?php
                                                          // if(isset($row['PlaceOB'])){
                                                            echo $row['PlaceOB'];
                                                          // }
                         ?>" >
                </div>
            
           
            
       </div>

              
              
        <div class="form-group required row col-md-12" >
            <div class="col-md-6">  
            <label class="col-form-label control-label">Father's Mobile No. </label>
            <input type="text" class="form-control" id="fatherMob" placeholder="Mobile Number" name="fatherMob" required value="<?php echo $row['fatherMob']; ?>" >
            </div>
            
            <div class="col-md-6">  
            <label  class="col-form-label control-label">Father's Email Id </label>
                <input type="text" class="form-control" id="fatherEmail" placeholder="Email Id" name="fatherEmail" required value="<?php echo $row['fatherEmail']; ?>" >
            </div>
            
       </div>
        

              
              

   
            <div class="form-group required row col-md-12">
                <div class="col-md-6">  
            <label  class="col-form-label control-label">Father's UID No. </label>
                <input type="text" class="form-control" id="fatherUID" placeholder="UID No." name="fatherUID" required value="<?php echo $row['fatherUID']; ?>" >
            </div>
        </div>



   
            <div class="form-group required row col-md-12">
                <div class="col-md-12">
                           <label for="gf_name" class="col-form-label control-label">Grandfather's Name</label>
                        <input type="text" class="form-control" id="gf_name" plceholder="Grandfather's Name" name="grandfathername" value="<?php 
                                      // if(isset($row['GrandFatherName'])){
                                        echo $row['GrandFatherName'];
                                      // }
                        ?>" >
                </div>
        </div>

        

            <div class="form-group required row col-md-12">
                <div class="col-md-6">
                            <label for="gf_dob" class=" col-form-label control-label">Grandfather's Date of Birth(DD/MM/YYYY)</label>

                <input type="date" class="form-control " id="gf_dob" placeholder="DD/MM/YYYY" name="grandFatherDOB" value="<?php 
                                        // if(isset($row['GrandFatherDOB'])){
                                          echo $row['GrandFatherDOB'];
                                        // }
    
                 ?>" >
                </div>
                
                 <div class="col-md-6">
                    <label for="gf_place" class="col-form-label control-label">Grandfather's Place of Birth </label>

                        <input type="text" class="form-control" id="gf_place" plceholder="Place" name="grandPlace" value="<?php  
                                      // if(isset($row['GrandPlaceOB'])){
                                        echo $row['GrandPlaceOB'];

                                      // }

                        ?>" >
                </div> 
                
                
            </div>


       



            <div class="form-group required row col-md-12">
                <div class="col-md-12">
                            <label for="m_name" class="col-form-label control-label">Mother's Name</label>

                        <input type="text" class="form-control" id="m_name" plceholder="Mother's Name" name="motherName" value="<?php 
                                     // if(isset($row['MotherName'])){
                                     echo $row['MotherName'];   

                          ?>" >
                                     
                    
                </div>
        </div>

    </div> 
              </div>

         <!-- Parent's Address -->
    <p>
        <div class="form-group bg-info text-white card-header col-md-12">
          Parent's Address
          <div>  (If Father is not alive,mention the address where he used to stay till his expiry)</div>
        </div>
         
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"  value="<?php 
                                     // if(isset($row['MotherName'])){
                                     echo $row['MotherName'];   

                          ?>">
                                     
            <span class="form-check-sign">
                
                Same as Correspondance Address  
                
                          
          </span>
            </label> 
        </div>
    
   
     
        <div class="alert alert-warning col-sm-12 ">
      If State is other than Maharashtra, then district & taluka will not be available.Please mention the entire address in Address Line 1-2 or Village/Town along with state and pincode. In case if you do not have pincode enter 999999.    
        </div>

      <div class="card col-md-12">
          <div class="card-body">
          
          
        <div class="form-group row col-md-12">
            <div class="col-md-12">
                    <label for="faddress1" class=" col-form-label control-label">Address Line 1 </label>
        
                        <input type="text" class="form-control" id="faddress1" name="faddress1" placeholder="Address Line 1" value="<?php echo $row['faddress1']; ?>"  >
            </div>
        </div>


            <div class="form-group row col-md-12">
                <div class="col-md-12">
                    <label for="faddress2" class="col-form-label control-label">Address Line 2 </label>
                        <input type="text" class="form-control" id="faddress2" name="faddress2" plceholder="Address Line 2 " value="<?php echo $row['faddress2']; ?>"  >
                </div>
            </div>

            
              


         <div class="form-group required row col-md-12" >
                    
             
                    <div class="col-md-6">
                        <label for="country" class="col-form-label control-label">Country </label>

                        <select class="custom-select" name="fcountry" id="fcountry">
                                <option>India</option>>
                                <option><?php echo $row['fcountry']; ?></option>
                              </select>
                    </div>



          <div class="required col-md-6">
            <label for="state" class="col-form-label control-label">State</label>

            <select class="custom-select" id="fstate" name='fstate' value=''>
                      <option>--Select--</option>
                      <option><?php echo $row['fstate']; ?> </option>
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
                                <option>Manipur </option>
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
              <label for="district" class="col-form-label control-label">District </label>

              <select class="custom-select" id="fdistrict" name="fdistrict">
                      <option>--Your District--</option>
                      <option selected><?php echo $row['fdistrict']; ?></option>
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
         


                    <div class="col-md-6">
                      <label for="ftaluka" class="col-form-label control-label">Taluka </label>

                    <select class="custom-select" id="ftaluka" name="ftaluka" >

                        <option selected><?php echo $row['ftaluka']; ?></option>
                              </select>
                    </div>

         </div>
    
          <div class="col-md-12 row form-group">
            
              <div class="col-md-6">
                    <label for="fvillage" class="col-form-label control-label">Village/Town                    </label>

                   
                      <select class="custom-select"  id="fvillage"  name="fvillage" title="Taluka"   >
                          <option><?php echo $row['fvillage']; ?></option>
                    </select>
                    
            </div>   

            
            <div class="col-md-6">
                    <label for="pin" class="col-form-label control-label">Pin code</label>

                        <input type="text" class="form-control " id="fpin" name="fpin" placeholder="Pin code"  value="<?php echo $row['fpin']; ?>" >
            </div>
    </div>
</p>

    
   </div>
      </div>
    
    <div class="buttonholder" style="margin-bottom: 20px;margin-left: 40%">
        <a href="cv_apply.php"  class=" btn btn-primary btn-raised previous">&laquo; Previous</a>
        <button type="sumbit" class="save btn btn-success btn-raised" id="save" name="save">Save and Next..</button>
     </div>
     
</div>
</form>
<?php 
}
?>
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
            <script>
            $(document).ready(function(){
                         
            $('#fdistrict').on('change',function(){
             var distID = $(this).val();
             if(distID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'distID':distID,
                },
                success:function(html){
                  console.log(html);
                    $('#ftaluka').html(html);
             
                },
    });
    }
    });
    $('#ftaluka').on('change',function(){
             var subdistID = $(this).val();
             if(subdistID){
            $.ajax({
                url:'getData.php',
                method:'GET',
                data: {
                    'subdistID':subdistID,
                },
                success:function(html){
                    $('#fvillage').html(html);
             
                },
    });
    }
    });
  });
</script>
						</div>
					</div>
				</div>
				
			
	
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>//$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
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
</html>