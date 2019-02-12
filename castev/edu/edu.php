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


<?php

require 'database.php';
$msg="";

?>
<html>

<head>
  <title>Department of Information Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

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
          <div class="container">
           
                <form method="post" id="insert_form">
                         <div class="row" name="">
                <div class="col-sm-6 form-group col-md-2">
                    
                    <label>Year</label>
                  <input type="textarea" placeholder="Enter Year" name="year" id="year" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-2"> <label>Course</label>
                  <input type="textarea" placeholder="Enter Course" name="course" id="course" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-3"> <label>Board/University</label>
                  <input type="textarea" placeholder="Enter Here..." name="board" id="board" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-2"> <label>% Mark</label>
                  <input type="textarea" placeholder="Enter here.." name="mark" id="mark" class="form-control"> </div>
                <div class="col-sm-6 form-group col-md-3"> <label>Division</label>
                  <input type="textarea" placeholder="Enter here.." name="division" id="division" class="form-control"> </div>
              </div>
            
                <button type="submit" class="btn btn-default btn-primary" id="eduadd" name="eduadd">Add</button>
                 <button type="submit" style="display: none;" class="btn btn-default btn-primary" id="eduupdate" name="eduupdate">Update</button>

                      
                </form>
              
              
              <div class="row">
			  <div id="education_table">
                  <table class="table table-bordered">
                      <tr>
						  <th>Sr.No</th>
                          <th width="10%">Year</th>
                          <th width="20%">Course</th>
                          <th width="20%">Board</th>
                           <th width="10%">Mark</th>
                           <th width="10%">Division</th>
                          <th >Action</th>
                      </tr>
            <?php
			$sno = 1;
    $query= "select * from education ORDER BY edu_id DESC";
     $result = mysqli_query($database, $query);
      while($row = mysqli_fetch_array($result))
      {
        ?>
        <tr>
			<td><?php echo $sno++; ?></td>
            <td><?php echo $row['year']?></td>
            <td><?php echo $row['course']?></td>
            <td><?php echo $row['board']?></td>
            <td><?php echo $row['mark']?></td>
            <td><?php echo $row['division']?></td>
            <td nowrap><button type="submit" class="btn btn-primary btn-edit" id="<?php echo $row['edu_id']; ?>" ><i class="fa fa-edit"></i></button>
			<button type="submit" class="btn btn-primary btn-remove" id="<?php echo $row['edu_id']; ?>"><i class="fa fa-remove"></i></button>

                </td>
                      </tr>
                      <?php
      }

                      ?>
                  </table>
				  </div>
              </div></div>
			  
			

<script>
$(document).ready(function(){
 $('#insert_form').on('click', '#eduadd', function(event){  
  event.preventDefault();  
  if($('#year').val() == "")  
  {  
   alert("Year is required");  
  }  
  else if($('#course').val() == '')  
  {  
   alert("Course is required");  
  }  
  else if($('#board').val() == '')
  {  
   alert("Board is required");  
  }else if($('#mark').val() == '')
  {  
   alert("Mark is required");  
  }else if($('#division').val() == '')
  {  
   alert("Division is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"eduinsert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
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
			btn_button.html(' <i class="fa fa fa-spinner fa-spin"></i> ');
			tbl_id = $(this).attr("id");
			$('.btn-reset').trigger('click');
			$.ajax({
			  cache: false,
			  url: 'eduselect.php', // url where to submit the request
			  type : "POST", // type of action POST || GET
			  dataType : 'json', // data type
			  data : { cmd: "get_details", tbl_id: tbl_id }, // post data || get data
			  success : function(result) {
				btn_button.html(' <i class="fa fa fa-pencil-square-o"></i> ');
				console.log(result);
				$("#year").val(result['year']);
				$("#course").val(result['course']);
				$("#board").val(result['board']);
				$("#mark").val(result['mark']);
				$("#division").val(result['division']).change();
				$('#eduadd').hide();
				$('#eduupdate').show();
			  },
			  error: function(xhr, resp, text) {
				console.log(xhr, resp, text);
			  }
			});
		});
		
 $('#insert_form').on('click', '#eduupdate', function(event){  
  event.preventDefault();  
  if($('#year').val() == "")  
  {  
   alert("Year is required");  
  }  
  else if($('#course').val() == '')  
  {  
   alert("Course is required");  
  }  
  else if($('#board').val() == '')
  {  
   alert("Board is required");  
  }else if($('#mark').val() == '')
  {  
   alert("Mark is required");  
  }else if($('#division').val() == '')
  {  
   alert("Division is required");  
  }
   
  else  
  {  //var ed_id=$(this).attr("id");
	 var year=$('#year').val();
	 var course=$('#course').val();
	 var board=$('#board').val();
	 var mark=$('#mark').val();
	 var division=$('#division').val();
	 
   $.ajax({  
    url:"eduupdate.php",  
    method:"POST",  
    data:{
		'ed_id':tbl_id,
		'year':year,
		'course':course,
		'board':board,
		'mark':mark,
		'division':division,
	},  
  
    success:function(data){  
     $('#insert_form')[0].reset();  
     //$('#add_data_Modal').modal('hide');  
     $('#education_table').html(data);  
	 $('#eduadd').show();
	 $('#eduupdate').hide();
    }  
   });  
  }  
 });
 $(document).on('click', '.btn-remove', function(e){
	 var id = $(this).attr("id");
  	$clicked_btn = $(this);
  	$.ajax({
  	  url: 'edudelete.php',
  	  type: 'POST',
  	  data: {
    	'delete': 1,
    	'id': id,
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
    </body>
</html>
    