<?php 
 include("connection.php");
  session_start();
 $username=$_SESSION['username'];
  if(array_key_exists("id",$_COOKIE)){

    // if cookie exists set session id = cookie id

    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['username']=$_COOKIE['username'];

  }

  // check session id
  if(array_key_exists("id", $_SESSION)){

    //echo $_SESSION['id']."<p>Logged in! </p> "; 
  }
  else{
    // not logged in
    header("Location: index.php");
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
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
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
                            <div class=" container">
                               
                               <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/datatables.min.css"/><script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/datatables.min.js"></script> 
    <div class="p-1">
        
        </div>
        <div class="container">
        <div class=" card  col-md-10">
         <div class="card">
          <br>
          <h4 class=" card-header text-primary">Application's Received</h4>
      <table id="table_id" class="display table">
    <thead>
        <tr>
    <th>Sr.no</th>
            <th>Application ID</th>
            <th>Full Name</th>
      <th>Caste </th>
      <th>Category</th>
      <th>Address</th>
      <th>View Profile</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>4</td>
            <td>1</td>
      
            <td>2</td>
            <td>5</td>
      <td>64</td>
            <td>5</td>
            <td>5</td>
  		<?php

      $sno = 1;
    	$query= "select * from casteverifier1 ORDER BY cvid DESC ";
     $result = mysqli_query($connection, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
      <td><?php echo $sno++; ?></td>
            <td nowrap><?php echo $row['cappid']?> <?php echo $row['lname']?></td>
            <td><?php echo $row['fname']?></td>
      <td><?php echo $row['casttype']?></td>
            <td><?php echo $row['castcat']?></td>
            <td><?php echo $row['address']?></td>
            
            <td nowrap><button type="submit" class="btn btn-primary btn-raised btn-view" id="<?php echo $row['cappid']; ?>" ><i class="la la-file-text"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
      
        </tr>
    </tbody>
</table>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
				
			
	

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