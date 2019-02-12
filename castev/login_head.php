<?php include 'session-check-profile.php'
?>
<!DOCTYPE html>
<html>

<head>
  <title>Department of Information Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

  <link rel="stylesheet" href="theme.css" type="text/css">
  <meta name="description" content="Government College of Engineering Aurangabad, Department of Information Technology was started in 2000-01.
Provides UG programme in Information Technology with intake capacity of 60.">
  <meta name="keywords" content="IT department ,GECA, Aurangabad, Government College of Engineering Aurangabad ,IT GECA,itsa,Maharashtra Engineering,IT Engineering,BAMU,BATU,IT">
  <link rel="icon" href="geca.png"> </head>

<body class="">
  <nav>
    <div class="navbar bg-primary navbar-expand-md p-0">
      <a class="navbar-brand" href="#">
        <img src="geca.png" width="120" height="120" class="d-inline-block align-top" alt=""> </a>
      <a class="navbar text-primary h"><b class="text-white"><b class="w-30"><span style="font-weight:normal;"><b class="h2 text-uppercase"><b class="">Department of Information Technology</b></b>
        </span>
        <br><span class=" text-light text-center text-uppercase"><b class="h">&nbsp;Government college of Engineering, Aurangabad</b></span></b>
        </b>
      </a><b class="text-white"><b class="w-30">
    </b></b>
    </div><b class="text-white"><b class="w-30">
  </b></b>
  </nav>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="active nav-link" href="faculty_login.php"><i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile"><i class="fa fa-user fa-fw"></i>My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faculty"><i class="fa fa-file-pdf-o fa-fw"></i>View Faculty
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#publications"><i class="fa fa-file-pdf-o fa-fw"></i>Publications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#Curriculum"><i class="fa fa-edit fa-fw"></i>Curriculum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#AICTE"><i class="fa fa-file-pdf-o fa-edit"></i>AICTE Forms</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link"><i class=" 	fa fa-window-close"></i>Logout</a>
            </li>
          </ul>
        </div>
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/datatables.min.css"/><script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/datatables.min.js"></script> 
		<div class="p-1">
        
        </div>
        <div class="col-md-6">
          <form class="form-inline m-0">
            <input class="form-control mr-2
col-md-9" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
          <br>
          <h4 class="text-primary">Teacher's</h4>
		  <table id="table_id" class="display table">
    <thead>
        <tr>
		<th>Sr.no</th>
            <th>NAME</th>
            <th>Email</th>
			<th>Mobile</th>
			<th>Birthday</th>
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
    $query= "select * from tpinfo ORDER BY tpid DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
			<td><?php echo $sno++; ?></td>
            <td nowrap><?php echo $row['fname']?> <?php echo $row['lname']?></td>
            <td><?php echo $row['email']?></td>
			<td><?php echo $row['mobileno1']?></td>
            <td><?php echo $row['bday']?></td>
            <td><?php echo $row['address']?></td>
            
            <td nowrap><button type="submit" class="btn btn-primary btn-view" id="<?php echo $row['tpid']; ?>" ><i class="fa fa-vcard-o"></i></button>

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

<br>
<br>
<br>
<div class="">
            <h3> Publications And Conference :</h3>
          </div>
            <div id="ptable">
              <table id="publica" class="display table">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th width="20%">Type</th>
                    <th width="20%">Title</th>
                    <th width="20%">Publisher</th>
                    <th width="20%">Date</th>
                     <!--<th width="40%">Details</th> -->
                  </tr>
               </thead>
                  <?php
      $sno = 1;
    $query= "select * from publications ORDER BY p_id DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
                  <tr>
                    <td>
                      <?php echo $sno++; ?>
                    </td>
                    <td>
                      <?php echo $row['p_type']?>
                    </td>
                    <td>
                      <?php echo $row['p_title']?>
                    </td>
                    <td>
                      <?php echo $row['pub_name']?>
                    </td>
                    <td>
                      <?php echo $row['p_date']?>
                    </td>
                  </tr>
                  <?php
      }

                      ?>
               
              </table>
            </div>

            <script>

$(document).ready( function () {
    $('#publica').DataTable({
       "processing": true,
         //"sAjaxSource":"response.php",
         "dom": 'lBfrtip',
        buttons: [
            'copy', 'csv', 'excel'
        ]
    });
} );
</script>
		  
          <h4 class="text-primary">AICTE FORM</h4>
		   <table id="table_id2" class="display table">
    <thead>
        <tr>
		<th>Sr.no</th>
            <th>NAME</th>
            <th>Email</th>
			<th>Mobile</th>
			<th>Birthday</th>
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
    $query= "select * from aicte ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
			<td><?php echo $sno++; ?></td>
            <td nowrap><?php echo $row['fname']?> <?php echo $row['lname']?></td>
            <td><?php echo $row['email']?></td>
			<td><?php echo $row['monumber']?></td>
            <td><?php echo $row['birthday']?></td>
            <td><?php echo $row['gender']?></td>
            
            <td nowrap><button type="submit" class="btn btn-primary btn-view" id="<?php echo $row['tpid']; ?>" ><i class="fa fa-vcard-o"></i></button>

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
    $('#table_id2').DataTable();
} );
</script>
		<div id="Curriculum">  
          <h4 class="text-primary">Syllabus</h4>
		   <table id="table_id3" class="display table">
    <thead>
        <tr>
		<th>Sr.no</th>
            <th>NAME</th>
            <th>Email</th>
			<th>Mobile</th>
			<th>Birthday</th>
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
    $query= "select * from tpinfo ORDER BY tpid DESC ";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
			<td><?php echo $sno++; ?></td>
            <td nowrap><?php echo $row['fname']?> <?php echo $row['lname']?></td>
            <td><?php echo $row['email']?></td>
			<td><?php echo $row['mobileno1']?></td>
            <td><?php echo $row['bday']?></td>
            <td><?php echo $row['address']?></td>
            
            <td nowrap><button type="submit" class="btn btn-primary btn-view" id="<?php echo $row['tpid']; ?>" ><i class="fa fa-vcard-o"></i></button>

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
    $('#table_id3').DataTable();
} );
</script>
		  </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
  </div>
</body>

</html>