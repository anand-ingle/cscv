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


   <form  class="mplaform" id="mform" name="mform"  method="post" enctype="multipart/form-data">
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
     <input  id="mfile" class="form-control form-group" type="file" name="myfile">
     <input type="submit"  name="apupload" class="btn btn-primary text-white" id="add" value="ADD">
     <input class="form-group" type="button" id="display" value="Display All Uploaded Files" />

   </form>
    <div id="responsecontainer" align="center">

    </div>


   <br>
   <ol>

</div>
</div>







<script type="text/javascript">


$(document).ready(function() {

   $("#display").click(function() {

     $.ajax({    //create an ajax request to display.php
       type: "GET",
       url: "fetchone.php",
       dataType: "html",   //expect html to be returned
       success: function(response){
           $("#responsecontainer").html(response);
           //alert(response);
       }

   });
});

$('#mform').on('click', '#add', function(event){
  event.preventDefault();
  var form=$('form').get(0);
  console.log(form);
    $.ajax({
      dataType:"JSON",
     url:"insertap.php",
     type:"POST",
     data: new FormData(form),

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

</script>



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
