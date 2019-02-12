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


<html>
<head>
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
                  require_once '../connection.php';
                  $username=$_SESSION['username'];
                  $sql="select * from create_application where username='$username'";
                $result= mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_array($result)){
                      
                  
                  ?>
 <form method="post" action="saveappd.php">
  <div class=" col-12 "> 
        <!-- <div style="border:  5px solid #F8F8F8"> -->
        <fieldset>
            <div class="card container">
                <div class="card-header"><h3>Create Application</h3></div>
             
               
                <p> 
            <!-- <div style="border: 1px solid #F0F0F0">-->   
                     
            <div class="alert alert-warning">
           All fields marked with <span>*</span> sign are required 
            </div>
             
                </p>
         
                <!-- Caste Certificate Details -->

                <p class="bg-info text-white card-header">Caste Certificate Details</p> 
                <div class="card col-md-12"> 
            
                  <div class="form-group required has-feedback">
                     <label for="a_name" class=" control-label">Applicant's full name (As perspecified in Caste Certificate)</label>
                  </div>
                      <div class="form-group">
                          <input type="text" class="form-control" id="a_name" placeholder="Applicant's full name" name="a_name"  required value="<?php echo $row['a_full_name']  ?>">
                          <div class="invalid-feedback">Please fill this field</div>
                      </div>
                  
   


                  <div class="form-group required">
                      <label for="cerNo" class=" col-form-label control-label">Applicant's Certificate No.</label>
                          <div class="col-md-12 mr-auto">
                              <input type="text" class="form-control" id="cerNo" placeholder="Certificate No." name="cerNo" required value="<?php echo $row['a_certificate_no'] ?>">
                          </div>
                  </div>

    
     
                  <div class="form-group required " >
                    <div class="">
                        <label for="c_date" class=" col-form-label control-label">Certificate Issuing Date (DD/MM/YYYY) </label>
                          <input type="date" class="form-control" id="Date" placeholder="DD/MM/YYYY" name="c_date" required value="<?php echo $row['c_issueing_date']; ?>">
                       
                    </div>
              
                    <div class="form group required ">
                      <label for="issueFrom" class="col-form-label control-label">Issued from  </label>
                        <input type="text" class="form-control" id="issueFrom" placeholder="Issued from" name="issueFrom" required value="<?php echo $row['issued_from']; ?>">
                    
                    </div>
                  </div>

      

                  <div class="form-group required">
                      <label for="authority" class=" col-form-label control-label">Designation of Certificate Issuing Authority</label>
                          <input type="text" class="form-control" id="authority" placeholder="Certificate Issuing Authority" name="authority" required value="<?php echo  $row['designation_of_certificate_issuing_authority'];
                          ?>">
                      
                  </div>
    
          
      
                  <div class="form-group" >
                      <label for="documents" class=" col-form-label control-label">Documents submitted to the Officer for receiving the caste certificate </label>
                          <input type="text" class="form-control" id="documents" placeholder="Documents submitted" name="documents" value="<?php echo $row['documents_submitted_to_officer']; ?>">
                     
                   </div>
             </div>
              
           <!--Applicant Details  -->
       

                    <p class="bg-info text-white card-header form-group">Applicant Details</p>
                
                   <div class="card">
               
                                                    <div class="form-group">
                                                        <label >Gender</label>
                                                        <select class="custom-select" id="gender" name="gender" >
                                                            <option><?php echo $row['gender']; ?></option>
                                                          
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>  

              

                 <div class="form-group required">
                    <label for="uid" class="col-form-label control-label">UID No. </label>
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="UID no." required value="<?php echo $row['UID_no']; ?>">
                   
                </div> 

                
        <div class="form-group required">
            <label for="category" class="col-form-label control-label" >Category Applied </label>
                <select class="custom-select" id="category" name="category" required>
                    <option><?php echo $row['category_applied']; ?></option>
                      
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
           
        </div>
  



        <div class="form-group required" >
          <label for="caste" class=" col-form-label control-label ">Caste Applied</label>
              <select class="custom-select" id="caste" name="caste" required="required">
              
                        <option><?php echo $row['caste_applied']; ?></option>
                                              
                        
                    </select>
              
          </div>             
        


        <div class="form-group" >
          <label for="subcaste" class=" col-form-label control-label ">Sub caste   </label>
              <input class="form-control" id="subcaste" name="subcaste" value="<?php echo $row['sub_caste'] ?>">
             
                        
                        
                        
                               
          </div>                    
       
       
                        
                       
                    
      
        <div class="required row" >
        
          <div class="col-md-12">
            <div class="form-group">
              <label for="dob" class=" col-form-label control-label">Date of Birth (DD/MM/YYYY)    </label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="DD/MM/YYYY" required value="<?php echo $row['dob'] ?>">
          
          </div>
          
        </div> 

        <div class="container">
          <div class="row" >
          <div class="form-group col ">
                                             <label for="mob">Mobile Number</label>
                                      <input type="tel" id="appmob" name="appmob" class="form-control" value="<?php echo $row['mob_no']; ?>">
                                     </div>
               <div class="form-group col  ">
                                             <label for="mob">Email-ID</label>
                                             <input type="email" id="appemail" name="appemail" class="form-control" value="<?php echo $row['email']; ?>">
                                     </div>
          </div>
        </div>
                   </div>         
      <div class="bg-info text-white card-header">
                Address for Correspondence
            </div>
            
             
             <div class="card">  
            
            <div class="form-group required">
                    <label for="corresAddress1" class=" col-form-label control-label">Address Line 1 </label>
                        <input type="text" class="form-control" id="corresAddress1" name="corresAddress1" placeholder="Address Line 1" required value="<?php echo $row['address_line_1']; ?>">
                   
            </div>
            
            <div class="form-group">
                    <label for="corresAddress2" class=" col-form-label control-label">Address Line 2 </label>
                        <input type="text" class="form-control" id="corresAddress2" name="corresAddress2" plceholder="Address Line 2" value="<?php echo $row['address_line_2']; ?>">
                   
            
            </div> 


               


            <div class="form-group required row" >
          <div class="col-md-6">
              <label for="country" class="col-form-label control-label">Country</label>
              <select class="custom-select" id="country" name="country" required value="">
                                            <option> <?php echo $row['country']; ?></option>
                         <option>India</option>   
                        
                    </select>
              
          </div>
         


          <div class="form group required col-md-6">
            <label for="state" class=" col-form-label control-label">State</label>
          <select class="custom-select" id="state" name="state" required value="">
                                            <option><?php echo $row['state'] ?></option>
            <option>--Select State--</option>
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
              

        <div class="form-group required row" >
          <div class="col-12">
              <label for="district" class=" col-form-label control-label">District     </label>
              <select class="custom-select" id="district" name="district" required>
                                            <option><?php echo $row['district']; ?></option>
                     <option > -Your District-</option>
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
                      <option >Hingoli</option>
                      <option >Jalgaon</option>
                      <option >Jalna</option>
                      <option >Kolhapur</option>
                      <option >Latur</option>
                      <option >Mumbai City</option>
                      <option >Mumbai Suburban</option>
                      <option >Nagpur</option>
                      <option>Nanded</option>
                      <option >Nandurbar</option>
                      <option >Nashik</option>
                      <option >Osmanabad</option>
                      <option>Palghar</option>
                      <option >Parbhani</option>
                      <option ">Pune</option>
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
         </div>




         <div class="container">
            <div class="row">

              <div class="form-group required col-md-6">
                <label for="taluka">Taluka  </label>
              <select class="custom-select" id="taluka" name="taluka" required>
                    <option><?php echo $row['taluka'] ?></option>            
                      
              </select>
                  
              </div>
            
              <div class="form-group required col-md-6">
                
                        <label for="a_town">Village/Town </label>
                            <select class="custom-select" id="village_or_town" name="village_or_town" required>
                            <option><?php echo $row['village_or_town'] ?></option>        
                             </select>    
                         
                  
              </div>
                
                <div class="form-group required col-md-6">
                        <label for="a_pincode">Pin code </label>
                            <input type="text" class="form-control" id="a_pincode" name="a_pincode" placeholder="Pin code" required 
                            value="<?php echo $row['pin_code']; ?>">
                </div>
           </div>
        </div>

   </div>


       <div class="buttonholder">
           <button type="submit" class="btn btn-primary btn-raised" id="save"value="submit">Save and Next..</button>
           <a href="Familydetails.html" hidden class="next btn btn-primary btn-raised " id="next">Next &raquo;</a>

       </div>
       
  </div>

            
 </fieldset>
</div>
</form>
  <?php
                                    }
                                    ?>
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