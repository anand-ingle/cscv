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
				
				<a href="St_edupdate.php" class="logo">
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
                                    <?php
							 require_once '../connection.php';
                  $username=$_SESSION['username'];
							 $sql="select * from studentdetails where username='$username'";
						 $result= mysqli_query($connection, $sql);
																 while ($row=mysqli_fetch_array($result)){


							 ?>




<form class="needs-validation" novalidate action="St_edupdate.php" method="post">
	
  
   <p class="bg-info text-white card-header">Student Education Details</p>



		<div class="alert alert-warning ">
			Select District and Taluka where applicant's college is located
		</div>


      <div class="container">
        <div class="row" >
   		    <div class="form-group col-md-6">
   		        <label for="district" class="control-label">District </label>
   			   		<select class="custom-select" name="district" id="district">
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
                      <option >Yavatmal</option>       	            </select>
   		       
		 <div class="invalid-feedback">please select the district</div>
   		    </div>



   		    <div class="form-group required col-md-6">
   			    <label for="taluka" class=" control-label">Taluka</label>
 					<select class="custom-select" name="taluka" id="taluka">
   		                <option> <?php echo $row['taluka'];?></option>
       	               
       	            </select>
                
								 <div class="invalid-feedback">please select the taluka</div>
   		    </div>
   	    </div>




        <div class="form-group required">
            <label for="select" class=" col-form-label control-label">Institute/College Name   </label>
                <select class="custom-select" name="institutename" id="select" required>
   		            <option> <?php echo $row['collegename'];?></option>
       	            <option>Ahmednagar</option>
       	            <option>Akola</option>
                    <option>Amravati</option>
                    <option>Aurangabad</option>
       	        </select>
         
						 <div class="invalid-feedback">please select the institute</div>
        </div>


        <div class="form-group required">
            <label for="course" class=" col-form-label control-label">Course Name</label>
                <select class="custom-select" id="course" name="course" required>
   		            <option> <?php echo $row['coursename'];?></option>
       	            <option>Ahmednagar</option>
       	            <option>Akola</option>
                    <option>Amravati</option>
                    <option>Aurangabad</option>
       	        </select>
            
        </div>






        <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="year" class="col-form-label control-label">Year(YYYY)</label>
   			        <input type="text" class="form-control" id="year" name="year" value=" <?php echo $row['year'];?>" placeholder="YYYY" required>
   		        
   		    </div>
   		    <div class="form group col-md-6">
   			    <label for="telephone" class="col-form-label">Insitute/College Telephone No. </label>
 			        <input type="text" class="form-control" name="institutephone" id="telephone" placeholder="Telephone No." value=" <?php echo $row['collegephono'];?>" >
               
   		    </div>
        </div>


            <div class="form-group required">
                    <label for="reg_no" class="col-form-label control-label">Permanent Registration Number allocated to applicant
                        <input type="text" class="form-control col-md-6" id="reg_no" name="prn" value=" <?php echo $row['permanantregno'];?>" placeholder="Registration Number" required>
                    </label>
										 <div class="invalid-feedback">enter the permanant college Number </div>
            </div>



        <div class="form-group required row" >
   		    <div class="col-md-6">
   		        <label for="division" class="col-form-label control-label"> Applicant's Division
   			        <input type="text" class="form-control" name="division" id="division" value=" <?php echo $row['applicantdiv'];?>" placeholder="Division" required>
   		        </label>
							 <div class="invalid-feedback">Applicant division</div>
   		    </div>
   		    <div class="form group col-md-6">
   			    <label for="roll_no" class="col-form-label">Applicant's Roll No.
 			        <input type="text" class="form-control" id="roll_no" name="roll_no" value=" <?php echo $row['app_rollno'];?>" placeholder="Roll No." required>
                </label>
								 <div class="invalid-feedback">roll no.</div>
   		    </div>
        </div>


            <div class="form-group required">
                    <label for="col_add" class="col-form-label control-label">Institute/ College Address</label>
                        <input type="text" class="form-control col-md-12" id="col_add" name="college_address" value=" <?php echo $row['college_address'];?>" placeholder="Institute/College Address" required>
                    
            </div>
             <input type="submit" class="btn btn-primary btn-raised text-center" value="save" id="cvsavee" name="cvsavee">

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
        </div>
  
</form>

            
        <!-- Applicant Education details -->

        <div class="card">
         <p class="bg-info text-white card-header">Applicant Education Details</p>

            <div class="alert alert-warningk">
			Please fill all the fields for Education type Primary and Secondary. To add new Education category click on "Add" button
            </div>
         <form class="container" id="eduform" name="eduform">
         <div class="card container">

                         <div class="row card-body container" >
                <div class="form-group col-md-4 ">
                    
                    <label>Education Category</label>
                    <select class="custom-select" id="aeducat" name="aeducat">
                        <option>Primary</option>
                        <option>Secondary</option>
                        <option>College</option>
                    </select>
                </div>
                             <div class=" form-group col-md-4" ><label>Course Name</label>
                          <input type="textarea" placeholder="Enter Course" name="aecname" id="aecname" class="form-control"> </div>
                <div class="form-group col-md-4"> <label>Institute name</label>
                  <input type="textarea" placeholder="Enter Institute Name" name="aeduiname" id="aeduiname" class="form-control"> </div>
                <div class=" form-group col-md-4"> <label>Institute Address</label>
                  <input type="textarea" placeholder="Enter Institute Address..." name="aeduiaddress" id="aeduiaddress" class="form-control"> </div>
                <div class=" form-group col-md-4"> <label>Year From</label>
                  <input type="textarea" placeholder="Enter here.." name="aeduyfrom" id="aeduyfrom" class="form-control"> </div>
                <div class=" form-group col-md-3"> <label>Year to</label>
                  <input type="textarea" placeholder="Enter here.." name="aeduyto" id="aeduyto" class="form-control"> </div>
              <input type="text" id="etype" name="etype" value="student" hidden>
            
             <button type="submit" class="btn btn-default btn-primary col-md-2" id="eduadd" name="eduadd" >Add</button>
                 <button  style="display: none;" class="btn btn-default btn-primary" id="eduupdate" name="eduupdate">Update</button>

                          
                          </div>    
     
               
             
             
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
                          <th >Action</th>
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
            <td nowrap><button type="submit" class="btn btn-primary btn-edit btn-raised" id="<?php echo $row['seid']; ?>" ><i class="la la-edit "></i></button>
                <button type="button" class="btn btn-primary btn-remove btn-raised" id="<?php echo $row['seid']; ?>"><i class="la la-remove"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
                  </table>
				  </div>
              </div>
         </div>
		             </form>
	  
			

<script>
$(document).ready(function(){
 $('#eduadd').click(function(event){  
  event.preventDefault();  
  if($('#aecname').val() == "")  
  {  
   alert("course is required");  
  }  
  else if($('#aeduiname').val() == '')  
  {  
   alert("institute name is required");  
  }  
  else if($('#aeduiaddress').val() == '')
  {  
   alert("Institute address is required");  
  }else if($('#aeduyfrom').val() == '')
  {  
   alert("from year is required");  
  }else if($('#aeduyto').val() == '')
  {  
   alert(" year to is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"./edu/eduinsert.php",  
    method:"POST",  
    data:$('#eduform').serialize(),  
  
    success:function(data){  
     $('#eduform')[0].reset();  
     console.log(data);
     //$('#add_data_Modal').modal('hide');  
     $('#education_table').html(data);  
    }  
   });  
  }  
 });
 

 var tbl_id;
$(document).on('click', '.btn-edit', function(ev){
			ev.preventDefault();
			var btn_button = $(this);
			btn_button.html(' <i class="la la-spinner la-spin"></i> ');
			tbl_id = $(this).attr("id");
			$('.btn-reset').trigger('click');
			$.ajax({
			  cache: false,
			  url: './edu/eduselect.php', // url where to submit the request
			  type : "POST", // type of action POST || GET
			  dataType : 'json', // data type
			  data : { cmd: "get_details", tbl_id: tbl_id }, // post data || get data
			  success : function(result) {
				btn_button.html(' <i class="la la la-pencil-square-o"></i> ');
				console.log(result);
				$("#aecname").val(result['aecname']);
				$("#aeduiname").val(result['eduiname']);
				$("#aeduiaddress").val(result['aeduiaddress']);
				$("#aeduyfrom").val(result['aeduyto']);
				$("#aeduyto").val(result['aeduyto']).change();
				$('#eduadd').hide();
				$('#eduupdate').show();
			  },
			  error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			  }
			});
		});
		
  $('#eduupdate').click(function(event){   
  event.preventDefault();  
  if($('#aecname').val() == "")  
  {  
   alert("course is required");  
  }  
  else if($('#aeduiname').val() == '')  
  {  
   alert("institute name is required");  
  }  
  else if($('#aeduiaddress').val() == '')
  {  
   alert("Institute address is required");  
  }else if($('#aeduyfrom').val() == '')
  {  
   alert("from year is required");  
  }else if($('#aeduyto').val() == '')
  {  
   alert(" year to is required");  
  } 
  else  
  {  //var ed_id=$(this).attr("id");
         var aeducat=$("#aeducat option:selected").val();
	 var aecname=$('#aecname').val();
	 var eduiname=$('#aeduiname').val();
	 var aeduiaddress=$('#aeduiaddress').val();
	 var aeduyfrom=$('#aeduyfrom').val();
	 var aeduyto=$('#aeduyto').val();
	 
   $.ajax({  
    url:'./edu/eduupdate.php',  
    method:"POST",  
    data:{
		'tbl_id':tbl_id,
                'aeducat':aeducat,
		'aecname':aecname,
		'eduiname':eduiname,
                'aeduiaddress':aeduiaddress,
		'aeduyfrom':aeduyfrom,
		'aeduyto':aeduyto,
	},  
    success:function(data){  
         console.log(data);
     $('#eduform')[0].reset();   
     $('#education_table').html(data);  
	 $('#eduadd').show();
	 $('#eduupdate').hide();
    },
    error:function(data){
        console.log(data);
    },
   });  
  }  
 });
 $(document).on('click', '.btn-remove', function(e){
	 var id = $(this).attr("id");
  	$clicked_btn = $(this);
  	$.ajax({
  	  url: './edu/edudelete.php',
  	  type: 'POST',
  	  data: {
    	'delete': 1,
    	'id': id,
      'etype': student
      },
      success: function(data){
        // remove the deleted comment
		$('#education_table').html(data);
        $clicked_btn.parent().remove();
        
      }
  	});
  });
		
});  	


</script>		
             



    <div class="buttonholder">
        <a href="cvbirth.php" class="previous btn btn-primary btn-raised">&laquo; Previous</a>
       	<a href="fatheredu.php" class="save btn btn-success btn-raised" id="save">Save&Next</a>

       </div>
</div>

<?php
}
	?>
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