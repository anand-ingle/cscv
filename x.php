<!DOCTYPE html>

<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/css/ready.css">
  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <script src="assets/js/core/jquery.3.2.1.min.js"></script>




</head>



<body>
<div class="container">

  <div class="card">
    <div class="card-header bg-info">Proof Of Identity</div>
    <div class="card-body">


   <form  class="mplaform" id="mform" name="mform" action="insert.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
         <label for="relation">Proof Of Identity</label>
       <select class="form-control custom-select" name="proofofiden" id="data1" required>
          <option value="" selected>Open this select menu</option>
         <option value="PAN Card">PAN Card</option>
         <option value="PassPort">PassPort</option>
         <option value="RSBY card">RSBY card</option>
         <option value="MNREGA Job Card">MNREGA Job Card</option>
         <option value="Driver License">Driver License</option>
         <option value="Photo Of Applicant">Photo Of Applicant</option>
         <option value="Identity Card Issued By Govt or Semi Govt Organization">Identity Card Issued By Govt or Semi Govt Organization</option>
       </select>
           <div class="invalid-feedback">Specify Relation with Relative</div>


     </div>
     <input  id="mfile" class="form-control form-group" type="file" name="myfile">
     <button type="submit"  name="apupload" class="btn btn-primary" id="add" value="ADD">ADD</button>
     <input class="form-group" type="button" id="display" value="Display All Uploaded Files" />

   </form>
    <div id="responsecontainer" align="center">

    </div>


   <br>
   <ol>

</div>
</div>

<div class="card">
<div class="card-header bg-info">Proof Of Address:</div>
<div class="card-body">
  <form class="address" id="address" name="address" action="uploadap.php" method="post" enctype="multipart/form-data">



    <div class="form-group">
        <label for="relation">Proof Of Address</label>
      <select class="form-control custom-select" name="data2" id="data2" required>
         <option value="" selected>Open this select menu</option>
        <option>PassPort</option>
        <option>Water Bill</option>
        <option>Ration Card</option>
        <option>Aadhaar Card</option>
        <option>Voter ID Card</option>
        <option>Telephone Bill</option>
        <option>Driving License</option>
        <option>Electricty Bill</option>
        <option>Property Tax Receipt</option>
        <option>Extracts Of 7/12 and 8A/Rent Receipt</option>

      </select>
          <div class="invalid-feedback">Specify Relation with Relative</div>


    </div>
             <input id="filetwo" class="form-control form-group" type="file" name="twoin" disabled>

    <button name="btnuploadone"  name="add1" class="btn btn-primary" id="add1">ADD</button>
  </form>
  <br>
</div>
<script type="text/javascript">


$(document).ready(function() {

   $("#display").click(function() {

     $.ajax({    //create an ajax request to display.php
       type: "GET",
       url: "fetch.php",
       dataType: "html",   //expect html to be returned
       success: function(response){
           $("#responsecontainer").html(response);
           //alert(response);
       }

   });


$('#mform').on('submit', '#add', function(event){  
  event.preventDefault();  
  var form=new FormData($(this)[0]);
  console.log(form);
  var form =$('#mform');
    $.ajax({  
     data: FormData,
     async: false,
     cache: false,
     processData:false,
     contentType:false,
     url: form.attr('action'),
     type: form.att('method'),

    contentType: false,
    processData: false,
      success: function(result){
      alert(result);
    },
    error: function(xhr, status, error) {
      alert(xhr.responseText);
    }
    
  });
});




});
});
</script>
</div>




<div class="card">
<div class="card-header bg-info">Other Document:</div>
<div class="card-body">
  <form>



    <div class="form-group">
        <label for="relation">Other Document</label>
      <select class="form-control custom-select" name="data3" id="data3" required>
         <option value="" selected>Open this select menu</option>
        <option>Affidivit</option>
        <option>8 A Extract</option>
        <option>7/12 Extract</option>
        <option>Copy OF Voter List</option>
        <option>School Leaving Certificate</option>
        <option>Resident Proof Of Nagar Parishad</option>
        <option>Photo id of Applicant</option>
        <option>Copy of Ration Card & Elecaoral Photo id</option>
        <option>TC Bonafide Certificate(TC NO)</option>
        <option>Income --Proof</option>

      </select>
          <div class="invalid-feedback">Specify Relation with Relative</div>


    </div>
             <input id="filethree" class="form-control form-group" type="file" name="threein" disabled>

    <button name="otherupload"  class="btn btn-primary" id="add3">ADD</button>
  </form>
  <br>
</div>
</div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
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
</body>

</html>
