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



  <style>
             
             .photo{
                 
                 border: 1px solid black;
                 align :right;
                 font-size: 11px
             }
         </style>




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
                                    
                                    
                                    
                                    
      <?php
      
                  require_once 'connection.php';
                  $username='raja';
                   //$username=$_SESSION['username'];
                  $sql="select * from create_application ca INNER JOIN cvfamilydetails cfd on ca.username=cfd.username INNER JOIN studentdetails std on cfd.username=std.username INNER JOIN cvbirth cv on std.username=cv.username INNER JOIN fatherdetails fd on cv.username=fd.username where cv.username='$username'";
                  
            $result=mysqli_query($connection, $sql);          
           
           echo mysqli_error($connection);
    // output data of each row
             while($row = mysqli_fetch_assoc($result))
            
            {
                  
          ?>
					
                                    
                                    <div class="container col-sm-10" >

                                                <form action="form16.php" method="post">

                                                    <div class="card" style="margin-left: 10px;margin-right: 40px">

                                                        <div class="card-body">

                                                            <div class="text-center">
                                                                <h3>FORM-16</h3>

                                                                <p><i>[ rule 14 ]</i></p>
                                                                <br>
                                                                <h4>FOR STUDENTS</h4>
                                                             </div>

                                                            <div class="row col-sm-12" style="margin-left: 10px ;margin-right: 10px">
                                                                <br>
                                                               <p> <strong>  
                                                                    Application Form for verification of Scheduled Caste / Scheduled Caste convert to Buddhism/De-Notified
                                                                Tribe (Vimukta Jati)/ Nomadic Tribe/Other Backward Class/Special Backward Category Certificate to be
                                                                submitted to Divisional Caste Certificate Scrutiny Committee.
                                                                 </strong>   </p>
                                                            </div>

                                                           <br>
                                                            <div class="row " style="margin-left: 10px">
                                                                <div class="col-sm-9">
                                                                        To, 

                                                                        <div> 
                                                                      *****************************************************************************************
                                                                      *****************************************************************
                                                                      ********************************************************
                                                                      ************
                                                                        </div>
                                                                </div>      

                                                                <div class="col-sm-3">
                                                                     <div class="card photo" style="width: 100px;height: 120px">

                                                                        <div class="card-body">

                                                                            <div class="text-center"> 
                                                                                Affix
                                                                            Passport size 
                                                                             Colour
                                                                             Photo
                                                                            </div>
                                                                        </div>   
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <br><br>
                                                             <div class="row" style="margin-left: 10px">
                                                                 Sub :-<pre>                   </pre> <strong>Verification of </strong><div><pre>           </pre> </div><strong> Caste Certificate.</strong> 
                                                             </div>

                                                             <br><br>
                                                             <div class="row" style="margin-left: 10px">
                                                                 <div>Sir,</div>
                                                                 <div style="margin-left: 30px">
                                                                      I, the undersigned <?php echo $row['a_full_name'];?> hereby request to verify my Caste Certificate of <?php echo $row['category_applied'];?>
                                                                     Category. Following information and documents are submitted herewith in support of my caste claim :-
                                                                 </div>
                                                            </div>

                                                             <br>
                                                             <div class="row" style="margin-left: 10px">

                                                                 <strong>1.</strong><div class="row col-sm-10"><strong style="margin-left: 20px">(a)&nbsp;&nbsp; Full name of the Applicant (as mentioned in Caste Certificate)</strong></div>

                                                                 <br>                             
                                                                 <div class="col-sm-12"  style="margin-left: 50px">
                                                                   <?php echo $row['a_full_name'];?>
                                                                 </div>


                                                                 <div style="margin-left: 50px" class="col-sm-12" >  <strong> Present Address </strong> </div>
                                                                 <div style="margin-left: 50px" class="col-sm-8" > 
                                                                    <?php echo $row['address_line_1'];?>
                                                                 </div>
                                                            </div>

                                                             <div class="row" style="margin-left: 10px">

                                                                 <div style="margin-left: 10px" class="col-sm-12">
                                                                     <div class="row" style="margin-left: 10px"><strong> (b)&nbsp;&nbsp; Mobile No.</strong><div style="margin-left: 130px"><?php echo $row['mob_no'];?></div></div>  
                                                                     <br><div class="row" style="margin-left: 10px"><strong> (c)&nbsp;&nbsp; E-Mail </strong><div style="margin-left: 170px"><?php echo $row['email'];?></div></div>



                                                                     <br><div class="row" style="margin-left: 10px"><strong>(d)&nbsp;&nbsp; Institute/College Name :</strong><div style="margin-left: 30px"><?php echo $row['collegename'];?></div></div>

                                                                 </div>



                                                                 <div class="col-sm-12" style="margin-left: 10px">
                                                                     <div class="row" style="margin-left: 45px"><strong> Course Name : </strong><div style="margin-left: 105px"><?php echo $row['coursename'];?></div></div>
                                                                     <div class="row" style="margin-left: 45px"><strong> Applicant's Institute/College Division : </strong><div style="margin-left: 55px"><?php echo $row['applicantdiv'];?></div></div>
                                                                      <div class="row" style="margin-left: 45px"><strong>Applicant's Institute/College Roll Number :</strong><div style="margin-left: 20px"><?php echo $row['app_rollno'];?></div></div>                          
                                                                 </div>




                                                            </div>

                                                             <br>





                                                             <div class="row " style="margin-left: 10px">
                                                                 <strong>2.</strong><div class="row col-sm-10"><strong style="margin-left: 55px"> Caste/Sub Caste claimed by applicant</strong></div>               
                                                                <div class="row col-sm-12" style="margin-left: 55px"><strong>Caste :</strong><div style="margin-left: 55px"><?php echo $row['caste_applied'];?></div></div>  
                                                                <div class="row col-sm-12" style="margin-left: 55px"><strong>Sub Caste :</strong><div style="margin-left: 20px"><?php echo $row['sub_caste'];?></div></div>                              
                                                             </div>


                                                             <br> 
                                                           <div class="row" style="margin-left: 10px">

                                                               <strong>3.</strong><div  class="row col-sm-10"><strong style="margin-left: 20px">(a)&nbsp;&nbsp; Applicant's Birth date :</strong><div style="margin-left: 30px"><?php echo $row['dob'];?></div>
                                                             </div>





                                                                <div style="margin-left: 20px" class="row col-sm-12"><strong>(b)&nbsp;&nbsp; Applicant's Birth place :</strong><div style="margin-left: 20px"><?php echo $row['birthplace'];?></div></div>


                                                            </div>

                                                             <br>



                                                              <div class="row" style="margin-left: 10px">

                                                                  <strong>4.</strong><div class="row col-sm-10"><strong style="margin-left: 55px" >Full Name of Applicant's Father</strong></div>                                         
                                                                  <div class="col-sm-12"  style="margin-left: 55px"><?php echo $row['FatherName'];?> </div>

                                                                 <div style="margin-left: 20px" class="row col-sm-12"><strong>(a)&nbsp;&nbsp; Fathers Date of Birth :</strong><div style="margin-left: 40px"><?php echo $row['FatherDOB'];?></div></div>
                                                                 <div style="margin-left: 20px" class="row col-sm-12"><strong>(b)&nbsp;&nbsp; Fathers Birth Place :</strong><div style="margin-left: 55px"><?php echo $row['PlaceOB'];?></div></div>

                                                                  <div style="margin-left: 55px" class="col-sm-10" >  <strong>Permanent Address (If father is not alive please mention full address of his last residence.)</strong> </div>
                                                                  <div style="margin-left:55px"  class="col-sm-8"> 
                                                                   <?php echo $row['addressLine1'];?> 

                                                                 </div>



                                                            </div>


                                                             <br>


                                                              <div class="row" style="margin-left: 10px">

                                                                  <strong>5.</strong><div class="row col-sm-10" ><strong style="margin-left: 55px" >Full Name of applicant's Grand Father (Father's Father)</strong></div>                                         
                                                                  <div class="col-sm-12"  style="margin-left: 55px"><?php echo $row['GrandFatherName'];?> </div>

                                                                 <div style="margin-left: 20px" class="row col-sm-12"><strong>(a)&nbsp;&nbsp; Grand Father's Date of Birth :</strong><div style="margin-left: 40px"><?php echo $row['GrandFatherDOB'];?> </div></div>
                                                                 <div style="margin-left: 20px" class="row col-sm-12"><strong>(b)&nbsp;&nbsp; Grand Father's Birth Place :</strong><div style="margin-left: 55px"><?php echo $row['GrandPlaceOB'];?> </div></div>


                                                            </div>


                                                        <br>

                                                      <div class="row" style="margin-left: 10px">

                                                       <strong>6.</strong><div  class="row col-sm-10"><strong style="margin-left: 55px">Present occupation/service of applicant's Father</strong><div style="margin-left: 20px"><?php echo $row['fathersoccupation'];?></div></div>

                                                        <div style="margin-left: 55px" class="col-sm-12" ><strong>Address with telephone number</strong> </div>
                                                                 <div style="margin-left: 55px" class="col-sm-8"> 
                                                                  <?php echo $row['officeaddress'];?>
                                                                 <?php echo $row['officecontact'];?>

                                                                 </div>


                                                      <div class="row col-sm-12" style="margin-left: 55px"><strong>Telephone No :</strong><div style="margin-left: 20px"><?php echo $row['officecontact'];?></div></div>  


                                                    </div>


                                                        <br>
                                                       <div class="row" style="margin-left: 10px">

                                                      <strong>7.</strong><div class="row col-sm-10"><strong  style="margin-left: 55px" >Father's Education :</strong><div style="margin-left: 20px"><?php echo $row['fathersqualification'];?></div></div>

                                                       </div>


                                                        <br>
                                                        <div class="row" style="margin-left: 10px">

                                                       <strong>8.</strong><div class="row col-sm-10"><strong style="margin-left: 55px" >Inherited Profession of Family :</strong><div style="margin-left: 20px"><?php echo $row['traditionalbusiness'];?></div></div>

                                                        </div>




                                                         <br>


                                                        <div class="row" style="margin-left: 10px">
                                                         <strong>9.</strong><div  class="row col-sm-10"><strong style="margin-left: 20px">(a)&nbsp;&nbsp; Applicant's Mother Tongue : </strong><div style="margin-left: 45px"><?php echo $row['mothertongue'];?></div></div>
                                                           <div style="margin-left: 20px" class="row col-sm-12"><strong>(b)&nbsp;&nbsp; Applicant's Regional Dialect :</strong><div style="margin-left: 35px"><?php echo $row['mothertongue'];?></div></div>
                                                           <div style="margin-left: 20px" class="row col-sm-12"><strong>(c)&nbsp;&nbsp; Applicant's God/Goddess :</strong><div style="margin-left: 60px"><?php echo $row['godname'];?></div></div>
                                                           <div style="margin-left: 20px" class="col-sm-12" ><strong>(d)&nbsp;&nbsp; Five Surnames of applicant's Relative/persons from caste :</strong> </div>
                                                                 <div style="margin-left: 55px" class="col-sm-8"> 
                                                                 <?php echo $row['sur1'];?>,<?php echo $row['sur2'];?>,<?php echo $row['sur3'];?>,<?php echo $row['sur4'];?>,<?php echo $row['sur5'];?>

                                                                 </div>




                                                        </div>


                                                            <br>
                                                    <div class="row" style="margin-left: 10px">

                                                        <strong>10.</strong><div class="row col-sm-10"><strong style="margin-left: 45px">Applicant's (a) Native Place (Address) :</strong></div>                                         
                                                            <div class="col-sm-12"  style="margin-left: 55px"><?php echo $row['addressLine1'];?> </div>

                                                            <div style="margin-left: 20px" class="row col-sm-12"><strong>(b)&nbsp;&nbsp; If applicant has left Native place</strong></div>

                                                             <div style="margin-left: 55px" class="col-sm-12" ><strong>Please specify when and who left the place and reason for leaving :</strong> </div>

                                                             <div style="margin-left: 55px" class="row col-sm-12" ><strong>Year of leaving:</strong><div style="margin-left: 150px"><?php echo $row['whenLeft'];?></div></div>

                                                            <div style="margin-left: 55px" class="row col-sm-12" ><strong>Person who left the native place:</strong><div style="margin-left: 20px"><?php echo $row['whoLeft'];?></div> </div>

                                                            <div style="margin-left: 55px" class="row col-sm-12" ><strong>Reason :</strong><div style="margin-left: 205px"><?php echo $row['reasonForLeaving'];?></div> </div>

                                                           <div style="margin-left: 25px" class="row col-sm-12"><strong>(c)&nbsp;&nbsp; Since when applicant is residing at present address :</strong><div style="margin-left: 20px"><?php echo $row['residingSince'];?></div></div>

                                                           <div style="margin-left: 25px" class="row col-sm-12"><strong>(d)&nbsp;&nbsp; At present who is residing at native place. Please give address and Telephone No.</strong></div>


                                                            <div style="margin-left: 55px" class="row col-sm-12"><strong>Person Name :</strong><div style="margin-left: 25px"><?php echo $row['relation'];?></div></div>

                                                             <div style="margin-left: 55px" class="row col-sm-12"><strong>Telephone No :</strong><div style="margin-left: 20px"><?php echo $row['telNumber'];?></div></div>

                                                             <div style="margin-left: 55px" class="row col-sm-12"><strong>Address :</strong><div style="margin-left: 65px"><?php echo $row['nativeAddress'];?></div></div>


                                                             <div style="margin-left: 25px" class="row col-sm-12"><strong>(e)&nbsp;&nbsp; Whether applicant is holding house/land at native place?</strong><div style="margin-left: 20px"><?php echo $row['ownLand'];?></div></div>




                                                   </div>

                                                        <br>
                                                        <div class="row" style="margin-left: 10px">


                                                                <strong >11.</strong>
                                                                 <div class="row col-sm-10">

                                                                     <strong style="margin-left: 50px" >
                                                                    Name of the competent authority from whom caste certificate is obtained and
                                                                  Certificate No. and Date.
                                                                </strong>
                                                              </div>




                                                             <div style="margin-left: 55px" class="row col-sm-12"><strong> Competent Authority :</strong><div style="margin-left: 20px"><?php echo $row['designation_of_certificate_issuing_authority'];?></div></div>
                                                             <div style="margin-left: 55px" class="row col-sm-12"><strong>Certificate No:</strong><div style="margin-left: 80px"><?php echo $row['a_certificate_no'];?></div></div>
                                                             <div style="margin-left: 55px" class="row col-sm-12"><strong>Issue Date:</strong><div style="margin-left: 105px"><?php echo $row['c_issueing_date'];?></div></div>

                                                    </div>


                                                        <br>
                                                        <div class="row" style="margin-left: 10px">

                                                            <strong >12.</strong><div class="row col-sm-10"><strong style="margin-left: 50px">Name of the document on which basis caste certificate is obtained from competent authority.</strong></div> <br>                                        
                                                        <div class="col-sm-12"  style="margin-left: 55px"><?php echo $row['documents_submitted_to_officer'];?> </div>

                                                      <?php 
                                                      }
                                                      ?>

                                                    </div>

                                         <br>



                                         <div class="row" style="margin-left: 10px">
                                        <strong>13.</strong><div class="row col-sm-10"><strong style="margin-left: 50px "> Details of institution where applicant studied/studying</strong></div>
                                        </div>

                                       <p>
                                        <div class="row container">
                                                              <div id="education_table">
                                                      <table class="table table-bordered">
                                                          <tr>
                                                            <th>Sr.No</th>
                                                              <th width="10%">Education Category</th>
                                                              <th width="10%">Course Name</th>
                                                              <th width="20%">Institute name</th>
                                                              <th width="20%">Institute Address</th>
                                                               <th width="10%">Year From</th>
                                                               <th width="10%">Year to</th>

                                                          </tr>
                                                <?php
                                                            $sno = 1;
                                        $query= "select * from studedu where username='$username' and type='student' ORDER BY seid DESC";
                                         $result = mysqli_query($connection, $query);
                                          while($row = mysqli_fetch_array($result))
                                          {
                                            ?>
                                            <tr>
                                                            <td><?php echo $sno++; ?></td>
                                                  <td><?php echo $row['aeducat']?></td>
                                                <td><?php echo $row['aecname']?></td>
                                                <td><?php echo $row['eduiname']?></td>
                                                <td><?php echo $row['aeduiaddress']?></td>
                                                <td><?php echo $row['aeduyfrom']?></td>
                                                <td><?php echo $row['aeduyto']?></td>

                                                          </tr>
                                                          <?php
                                                          }
                                                          ?>
                                                      </table>
                                                                      </div>
                                                  </div>






                                    <div class="row" style="margin-left: 10px">
                                    <strong>14.</strong><div class="row col-sm-10"><strong style="margin-left: 50px">If Applicant's father is litrate,following information to be frunished</strong></div>
                                    </div>
                                    <div class="row">
                                            <div class="col-xl-12">


                                                            <div class="row container">
                                                              <div id="education_table">
                                                      <table class="table table-bordered">
                                                          <tr>
                                                            <th>Sr.No</th>
                                                              <th width="10%">Education Category</th>
                                                              <th width="10%">Course Name</th>
                                                              <th width="20%">Institute name</th>
                                                              <th width="20%">Institute Address</th>
                                                               <th width="20%">Year From</th>
                                                               <th width="20%">Year to</th>

                                                          </tr>
                                                <?php

                                                            $sno = 1;
                                        $query= "select * from studedu where username='$username' and type='father' ORDER BY seid DESC";
                                         $result = mysqli_query($connection, $query);
                                          while($row = mysqli_fetch_array($result))
                                          {
                                            ?>
                                            <tr>
                                                            <td><?php echo $sno++; ?></td>
                                                  <td><?php echo $row['aeducat']?></td>
                                                <td><?php echo $row['aecname']?></td>
                                                <td><?php echo $row['eduiname']?></td>
                                                <td><?php echo $row['aeduiaddress']?></td>
                                                <td><?php echo $row['aeduyfrom']?></td>
                                                <td><?php echo $row['aeduyto']?></td>

                                                          </tr>
                                                          <?php
                                                            }

                                                          ?>
                                                      </table>
                                                                      </div>
                                                  </div>
                                            </div>
                                         </div>

                                    <div class="row" style="margin-left: 10px">
                                    <strong>15.</strong><div class="row" class="col-sm-10"><strong style="margin-left: 50px" >If applicant/applicant's family has migrated to Maharashtra state, following information is to be</strong></div></div>
                                    <strong style="margin-left: 50px" class="col-sm-10">frunished :-</strong>

                                    <br><div class="row" class="col-sm-10" style="margin-left: 65px">Is applicant's family migrated to Maharashtra State?<div style="margin-left: 70px">********</div></div>
                                    <div class="col-sm-10" style="margin-left: 50px">If yes,from which State and when (Year)?</div> 
                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">State:</strong><div style="margin-left: 80px">********</div></div>
                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">Year:</strong><div style="margin-left: 80px">********</div></div><br>




                                    <div class="row" style="margin-left: 10px">
                                    <strong>16.</strong><div  class="row" class=" col-sm-10"><strong style="margin-left: 50px">(a) Whether scrutiny of the caste certificate of any member of the family has been done </strong><div style="margin-left: 80px">*******</div></div></div>
                                    <div class="col-sm-10"><strong style="margin-left: 50px">earlier?</strong></div><br>

                                    <div class="col-sm-10"><strong style="margin-left: 50px">(b) If validity certificate is received (enclosed attested copy) Furnish Following Details</strong></div>
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered col-md-12">
                                                   <thead class="head text-center" id="a_education" id="fatherTable">

                                                     <tr>
                                                       <th scope="row" col width="170">Name of family member</th>
                                                       <th scope="row">Relation with applicant</th>
                                                       <th scope="row">Why (Reason of Scrutiny)</th>
                                                       <th scope="row">When Scrutinized</th>
                                                       <th scope="row">Validity Certificate No</th>
                                                       <th scope="row">Validity certificate Date</th>
                                                     </tr>

                                                   </thead> 

                                                   <tbody>
                                                    <tr>
                                                      <td><?php echo $row['relativename'];?></td>
                                                      <td><?php echo $row['relation'];?></td>
                                                      <td><?php echo $row['reasonofscrunity'];?></td>
                                                      <td><?php echo $row['cvcnumber'];?></td>
                                                      <td><?php echo $row['cvcdate'];?></td>
                                                      <td><?php echo $row['aecname'];?></td>

                                                    </tr> 


                                                    <tr>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>

                                                    </tr>
                                                    <tr>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>

                                                    </tr>

                                                   </tbody> 
                                                </table>
                                            </div>
                                         </div>
                                         <p>
                                         <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(c) If Validity Certificate is rejected give its details below</strong><div style="margin-left: 120px"><?php echo $row['cvcgranted'];?></div></div></p>




                                    <div class="row" style="margin-left: 10px">
                                    <strong>17.</strong><div class="row" class="col-sm-10"><strong style="margin-left: 50px">(a) If applicant has applied for Caste Certificate </strong><div style="margin-left: 80px">********</div></div></div>
                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px"> before any committee in its state</strong><div style="margin-left: 190px">********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(b) If yes, which committee </strong><div style="margin-left: 235px">********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(c) For which Caste</strong><div style="margin-left: 298px">*********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(i) Caste Category</strong><div style="margin-left: 305px">********</div></div> 
                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(ii) Sub Caste</strong><div style="margin-left:  340px">*********</div></div> 

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(d) Date of Application</strong><div style="margin-left: 270px">*********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">(e) Committee's decision</strong><div style="margin-left: 260px">*********</div>

                                    <p>
                                    <div class="row" style="margin-left: 10px ">
                                    <strong>18.</strong><div class="row" class="col-sm-10"><strong style="margin-left: 50px">(a) Purpose of scrutiny</strong></div>
                                    </div>
                                    </p>
                                    <p>
                                    <div class="col-sm-10"><strong style="margin-left: 50px"> Documents to be attached with application</strong></div>
                                    <div  class="row" style="margin-left: 10px">
                                    <strong>19.</strong><div class="row" class="col-sm-10"><strong style="margin-left: 50px"> Following documents are attached only as per the sequence.</strong></div>
                                    </div></p>

                                    <div  class="row" style="margin-left: 10px">
                                    <strong>(A).</strong><div class="row" class="col-sm-10"><strong style="margin-left: 50px"> Important Primary Documents Evidence</strong><div style="margin-left: 290px">(Strike out whichever is not applicable)</div></div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Original Caste Certificate of the Applicant</strong><div style="margin-left: 290px">********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Certified Copy of Caste Certificate of the Applicanta</strong><div style="margin-left: 215px">*********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Original Affidavit (In Specimen Form 3 Rule-4(1))</strong><div style="margin-left: 235px">********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Original Affidavit (In Specimen Form 17 Rule-14)</strong><div style="margin-left: 240px">********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Certificate by the Principal of College (As per the last para of Form-16,Rule-14)</strong><div style="margin-left: 15px">********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Attested Xeorx copy of identity card issued by the college</strong><div style="margin-left: 175px">*********</div></div>

                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Caste Certificate issued by the Competent Authority
                                    </strong><div style="margin-left: 220px">********</div></div>
                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Primary School Leaving Certificate
                                    </strong><div style="margin-left: 350px">********</div></div>
                                    <div class="row" class="col-sm-10"><strong style="margin-left: 80px">&nbsp;Extract of Birth/Death Registry(Village Register-14)
                                    </strong><div style="margin-left: 225px">********</div></div>
                                    </p>

                                    <p>
                                    <div class="row" style="margin-left: 10px">
                                    <strong>(b-2)</strong><div class="row" class="col-sm-10"><strong style="margin-left: 40px">Any other documents supporting caste claim attached</strong><div style="margin-left: 200px">********</div></div>
                                    </div>
                                    <div class="col-sm-10" style="margin-left: 10px"><strong> If any of the above documents are not available, then attach other relevent documents.(mention)</strong></div>
                                    </p>
                                    <p>
                                      <p><p><strong class="col-sm-10" style="margin-left: 10px">I am producing certified copy of above documents with my application.I declare on oath that the information furnished by me in this application is true and correct.I am aware that incomplete application will be rejected and responsibility making fresh application will be of mine.</strong></p>
                                    <br>
                                      <strong>Place:</strong>
                                      <div class="row form-group">
                                        <div class="col-sm-9">
                                      <strong>Date:</strong></div>
                                      <div class="col-sm-3" style="margin:left; ">
                                        <strong>Yours,</strong></div> </div>
                                    </br>

                                    <div class="row form-group">
                                      <div class="col-sm-8">
                                      <strong>(Signature of the Applicant's Father/Guardian)</strong></div>
                                      <div class="col-sm-4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Applicant's Signature.</strong></div>

                                    </div>
                                    </p>
                                    </p>
                                    </div>










                                                </div>   
                                            </div>

                                        </form>


                                    </div>
                
                                    
                                </div>
                        </div>
            
            
            
            
            
						
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