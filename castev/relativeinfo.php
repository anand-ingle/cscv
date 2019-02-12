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
              <a href ='index.php?logout=99'>
                <i class="la la-sign-out"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
				</div>
			</div>

      <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



</head>

<body>

<!-- container Start...-->
  <div class="main-panel">
        <div class="content">
        <div class="container">
                                      

    <div class="card">
      <div class="card-header bg-info">Relative Info...</div>
      <div class="card-body">
        <form class="needs-validation" id="myform" novalidate>


        <div class="row required">
          <div class="col-8">
            <div class="form-group">
              <label for="relativename">Relative Name:</label>
              <input type="text" name="name" id="relativename" class="form-control" required>
              <div class="valid--feedback">  Looks good!</div>

            </div>

          </div>
          <div class="col-4">
            <div class="form-group">
                <label for="relation">Relation With Applicants</label>
              <select class="form-control custom-select" name="relation_Option" id="relation_Option" required>
                 <option value="" selected>Open this select menu</option>
                <option>Brother</option>
                <option>Sister</option>
                <option>Father</option>
                <option>Mother</option>
                <option>Uncle</option>
                <option>GrandFather</option>
                <option>GrandMother</option>
              </select>
                  <div class="invalid-feedback">Specify Relation with Relative</div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="scrutinycommitee">Scrutiny Commitee</label>
          <select class="form-control custom-select" name="commitee" id="commitee" required>
             <option value="" selected>Open this select menu</option>
            <option>Nagpur</option>
            <option>Pune</option>
            <option>Amravati</option>
            <option>Aurangabad</option>
            <option>Mumbai</option>
            <option>Ahmednagar</option>
            <option>Buldhana</option>
          </select>
              <div class="invalid-feedback">Please Select The Commitee</div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="form-group">
              <label for="reason">Reason For Scrunity</label>
              <select class="form-control custom-select" name="reason" id="four" required>
                <option value="" selected>Open this select menu</option>
                <option>Service</option>
                <option>Scholarship Only</option>
                <option>Education</option>
                <option>Work</option>
                <option>Government Work</option>
                <option>OTHER</option>
              </select>
                  <div class="invalid-feedback">Select The Reason For Scrunity</div>
            </div>

          </div>
          <div class="col-4">
            <div class="form-group">
                <label for="when">When The Verification Took Place</label>
                 <input class="form-control" name="dateVerification" type="date" value="" id="fifth">
                 <div class="invalid-feedback">Select The Verification Date</div>
            </div>

          </div>
        </div>



        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="relativename">Was The Certificate of Caste Validity Granted ?</label>
              <select class="form-control custom-select" name="granted" id="granted" required>

                 <option selected>Open this select menu</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
              </select>
                  <div class="invalid-feedback">Please Select Validity Granded Or Not</div>
            </div>
          </div>

        </div>

<div><fieldset id="field">
        <div class="row">

          <div class="col-4">
            <div class="form-group">
                <label for="rcvn">Relative's Caste Validity Certificate Number</label>
                <input type="text" class="form-control" name="cvc_number" id="cvc_number"  value="" required>
    <div class="invalid-feedback">Enter The Caste Validity Number Of Relative</div>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="dateofissue">Date Of Issue Of Caste Validity Certificate</label>
               <input class="form-control" type="date" name="cvc_date" value="" id="eighth" required>
                   <div class="invalid-feedback">Select The Issued Date</div>
            </div>
        </div>

    </div>
  </fieldset>

    <div class="form-group">
      <label for="reasonrejection">Reason For Rejection:</label>
      <select class="form-control custom-select" name="rejection_reason" id="ninth" required>
        <option selected value="">Open this select menu</option>
        <option>Documents Are Not Submitted Correct</option>
        <option>DOcuments Missing</option>
        <option>No Previous Record Found In Family</option>
        <option>Specify</option>
      </select>
          <div class="invalid-feedback">Please Specify The Reason</div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class="form-group">
          <label for="datereject">Date Of Rejection:</label>
          <input class="form-control" name="date" id="date" type="date" value="" id="tenth" required>
           <div class="invalid-feedback">Select The Date</div>
        </div>
    </div>
    </div>

    <div class="form-group row">
         <div class="offset-sm-2 col-sm-10">
           <button type="button"  class="btn btn-primary btn-raised" id="add">ADD</button>


         </div>

       </div>




     </form>  <!--form-->



     <div class="table-responsive">
     <table id="tab_logic" class=" table table-bordered table-hover">
     <thead>
        <tr>
            <td>ID</td>
            <td>Relative Name</td>
            <td>Relation</td>
            <td>Scrunity Commitee</td>
            <td>Reason Of Scrunity</td>
            <td>Year</td>
            <td>CVC Granted</td>
            <td>CVC Number</td>
            <td>CVC Date</td>
            <td>Reason Of Rejection</td>
            <td>Rejection Date</td>
            <td>ACTION</td>
            
        </tr>
     </thead>

     </table>

     <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript">

     $(document).ready( function () {
    $('#tab_logic').DataTable({

      "ajax" : "a.json",
      "columns" : [
        { "data" : "name" },
        { "data" : "gender" },
        { "data" : "designation" }
      ]
    });
} );
     </script> -->


     <script type="text/javascript">

     $(document).ready(function(){


      FetchData();

      function FetchData()
      {
              var dataTable = $('#tab_logic').DataTable({

              "processing" : true,
              "serverSide" : true,
              "ajax" : {
              url : "fetch1.php",
              type : "post"
              }

      });

      }

/*
       $(document).on('click', '#insert', function(){
   var first_name = $('#data1').text();
   var last_name = $('#data2').text();
   if(first_name != '' && last_name != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{first_name:first_name, last_name:last_name},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });

*/
      $(document).on('click', '#add', function(e){

        var data = $("#myform").serialize();

        $.ajax({
          data    : data,
          method  : "post",
          url     : "relative2save.php",
                    

          success: function(data){
            $('#tab_logic').DataTable().destroy();
            alert("data saved");
            FetchData();
          }

        })


      });




  /*   $(document).on('click', '.delete', function(){
   

    $.ajax({
     url:"delete.php",
     method:"POST",
     
     success:function(data){
    
      $('#tab_logic').DataTable().destroy();
       alert("Deleted");
      FetchData();
     }
    });
    
  });*/




     });
     </script>


 <?php

    require "connection.php";

if (isset( $_GET['id'] ) ) {

  $id = $_GET['id'];
  $sqldelete="DELETE FROM Relative_Info WHERE rid='$id'";
  $resultdelete = mysqli_query($connection, $sqldelete);

  if ($resultdelete) {
    echo '<script>window.location.href="relativeinfo.php"</script>';
  }
  else{
    echo '<script>alert("Delete Failed")</script>';
  }
}

?>

     </div><!--table-->



</div><!--cardbody-->


</div><!--card-->




</div>   <!--container-->

</body>


</html>