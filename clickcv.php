<!DOCTYPE html>
<html lang="en">
<head>
  <title>toggle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do you have Caste Certificate?</h4>
        </div>
      
          <div class="modal-body">
            <div class="radio">
          <label> <input class="yes" type="radio" name="optradio" id="yes" value="yesp">Yes</label>
             </div>
             <div class="radio">
        <label>  <input type="radio" name="optradio" id="no" value="nop">No</label>
           </div>
           </div>
        
        <div class="modal-footer">
          <button id="mm" class="btn btn-default mm" data-dismiss="modal" name="submit" >Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>

               
<script >
   
  $('.mm').click(function(e){
        e.preventDefault();

        $('#myModal')
        
            .modal('hide')
            .on('hidden.bs.modal', function (e) {
              if(document.getElementById('yes').checked) {
                $('#newM').modal('show');

                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding
            } });

       });
    // else{
    //   alert("You have to apply for caste certificate");
    // }         
  </script>

    <!-- Modal content-->
    <div class="modal fade" id="newM" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Enter your Caste Certificate Number:</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
        <input class="form-control" type="text" name="casteNumber" placeholder="Caste Number">
        </div>
       </div>
       <div class="modal-footer">
        <br>
        <button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
      </div>
      </div>
    </div>
    </div>

           
</body>
</html>
