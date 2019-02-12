<html>
<head>
<title>Demo Fetch</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>

<body>

<!-- container Start...-->

  <div class="container">

    <div class="card">
      <div class="card-header bg-info">Application Issued/Pending</div>
      <div class="card-body">




     <div class="table-responsive">
     <table id="tab_logic" class=" table table-bordered table-hover">
     <thead>
        <tr>
          <td>Application ID</td>
          <td>Full Name</td>
          <td>Caste</td>
          <td>Category</td>
          <td>Address</td>
          <td>Status</td>
          <td>Action</td>

        </tr>
     </thead>

     </table>

     <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



     <script type="text/javascript">

     $(document).ready(function(){


      FetchData();

      function FetchData()
      {
              var dataTable = $('#tab_logic').DataTable({

              "processing" : true,
              "serverSide" : true,
              "ajax" : {
              url : "adminfetch6.php",
              type : "post"
              }

      });

      }



     });
     </script>




     </div><!--table-->



</div><!--cardbody-->


</div><!--card-->




</div>   <!--container-->

</body>


</html>
