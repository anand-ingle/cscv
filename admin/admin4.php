<html>
<head>
<title>Demo Fetch</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--  <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link href="startbootstrap-simple-sidebar-master/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="startbootstrap-simple-sidebar-master/css/simple-sidebar.css" rel="stylesheet">
   <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/ready.css">
  <link rel="stylesheet" href="assets/css/demo.css">

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



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
              url : "adminfetch4.php",
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
</div>

</body>


</html>
