<?php
if(isset($_POST['submit'])){

        header('Location:../form162_2.php');


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
    <?php
                  include 'connection.php';
                 // require_once 'connectioncvpre.php';
                  $sql="select * from cvprevious where username='michtoh'";
                $result= mysqli_query($connection, $sql);
                                    while ($row=mysqli_fetch_array($result)){
                      
                  
                  ?>




     
                                    <div class="container">
                                    <form action="" method="post">
  <div class="container-fluid col-xl-12">
    <div class="card col-md-12">
                    <p class="bg-info text-white card-header col-xl-12 " style="margin-top:30px">Caste Certificate Validity Details of Applicant's Blood Relation(s)</p> 
    <div class="card col-xl-12">
        <p>
        <div class="form-group col-xl-12 row">
          
          <label class="col-md-12">Did any verification take place for any relative earlier?</label>
           <select class="form-control custom-select" id="earlier" name="earlier" required>
                      <option><?php echo $row['earlier_verification'];?></option>
                        <option>Yes</option>
                        <option>No</option>
                        

                    </select>
            
        </div> 
        </p>
    </div>   
    

        <!-- Previous Application Details Of Applicant -->
        <p>

        <p class="bg-info text-white card-header col-md-12" id="previous">Previous Application Details Of Applicant</p>
         <div class="card col-md-12">
        <p>
        <div class="form-group col-md-12 row">
          
          <label class="col-md-12">If applicant has applied for caste validity certificate before any commitee in Maharashtra</label> 
          
               <select class="form-control custom-select" id="app_applied" name="app_applied" required>
                      <option><?php echo $row['if_app_applied_to_caste'];?></option>
                        <option>Yes</option>
                        <option>No</option>
                        

                    </select>
        </div> 
        </p>  
     

        
        <div class="form-group row col-md-12">
            <div class="col-md-6">
              <label for="commitee" class="col-form-label control-label">Which commitee </label>

                    <select class="custom-select" id="commitee" name="commitee">
                        <option><?php echo $row['commitee'];?></option>   
                        <option>Education</option>
                        <option>Business</option>
                        <option>Service</option>
                        <option>other</option>
                    </select>
      </div>
        </div> 

        

         <div class="form-group row col-md-12">
             <div class="col-md-6">
                <label for="category" class="col-form-label control-label">Category Applied </label>
                    <select class="form-control" id="category" name="category">
                    <option><?php echo $row['category'];?></option>    
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
             
                 <div class="col-md-6">
              <label for="caste" class="col-form-label control-label">Caste Applied  </label>

              <select class="form-control" id="caste" name="caste">
                      <option><?php echo $row['caste'];?></option>   
                        <option>Education</option>
                        <option>Business</option>
                        <option>Service</option>
                        <option>other</option>
                    </select>
      </div>  
             
             
             
         </div>



    

        
<div class="form-group row col-md-12">
             <div class="col-md-6">
                 <label for="subcaste" class="col-form-label control-label">Sub cast</label>
              <select class="form-control" id="subcaste" name="subcaste">
                      <option><?php echo $row['subcaste'];?></option>    
                        <option>Education</option>
                        <option>Business</option>
                        <option>Service</option>
                        <option>other</option>
                    </select>
      </div>  

                      <div class="col-md-6">
            <label for="date" class=" col-form-label control-label">Date of Application   </label>
                           
          <input type="text" class="form-control" id="date" placeholder="Date" name="date_app"><?php echo $row['date_of_app'];?>
          </div>
        
           
</div>
        

                        <div class="form-group row col-md-12">
                                     <div class="col-md-6">
                                         <label for="decision" class="col-md-12 col-form-label control-label">Commitee's Decision</label>
                                             <select class="form-control" id="decision" name="decision">
                                                <option selected><?php echo $row['commitee_decision'];?></option>   
                                                <option>Ahmednagar</option>
                                                <option>Akola</option>
                                                <option>Amravati</option>
                                                <option>Aurangabad</option>
                                            </select>
                                     </div>
                            


                                    <div class="col-md-6">
                                                    <label for="scrutiny" class="col-form-label control-label">Purpose of Scrutiny  </label>

                                                                    <select class="form-control " id="scrutiny" name="purpose">
                                                            <option selected><?php echo $row['purpose_of_scrutiny'];?></option>   
                                                    <option>Education</option>
                                                    <option>Business</option>
                                                    <option>Service</option>
                                                    <option>other</option>
                                                </select>
                                                
                                            </div> 
                            
                            
                          </div>

        
      </div>
      <?php 
        }
       ?>
        </p>
    <!-- Documents -->
    <p>
            
                <p class="bg-info text-white card-header col-md-12" id="previous">Documents</p>
         
                
        <div class="card col-md-12">
                        
             
            <div class="col-md-12 row form-group">
                <div class="col-md-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value=""><span class="form-check-sign">Other Documents</span> </label>
                                   <textarea class="form-control " rows="2" id="documents" name="other_doc"><?php echo $row['other_documents'];?></textarea>
                            </div>
                </div>
                
                            <!-- Declaration -->
                      <p>
                          <br>
                          <br>
                   <div class="col-sm-12">
                           <h4>Declaration</h4>
                   </div>
                   </p>

                <div class="col-md-12">
                    <div class="col-md-12 form-control"  >
                       -All details mentioned in application are true to best of my knowledge
                    </div>
  
                    <div class="col-md-12 form-control">   
                       -Caste certificate number which I have mentioned in application is the 
                            only one caste certificate I possessed via legal channels
                    </div>
                    
                    <div class="col-md-12 form-control">
                        -I have never applied for caste validity certificate before
                    </div>
                </div>
                
                
            </div>
            
        </div>
   
                
        


    <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value=""><span class="form-check-sign">I agree to all terms and conditions started in above declaration.</span>
               
            </label>
    </div>
</p>
        

  

<div class="buttonholder" style="margin-bottom:20px;margin-left: 40%;margin-top: 20px">
     <a href="fatheredu.php" class="previous btn btn-primary btn-raised">&laquo; Previous</a>
      
        <button type="submit" name="submit" class="save btn btn-success btn-raised " >Submit</button>

       </div>
  </div>           
</div>
    </div>

</form>    
                                    </div>
          </div>
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