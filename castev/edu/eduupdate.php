<?php 
require 'connection.php';
$msg="";
$username='anand';
if(!empty($_POST))
{
 $output = '';

 $ed_id=$_POST['tbl_id'];
 $aeducat=$_POST['aeducat'];
    $aecname=$_POST['aecname'];
    $eduiname=$_POST['eduiname'];
    $aeduiaddress=$_POST['aeduiaddress'];
    $aeduyfrom=$_POST['aeduyfrom'];
    $aeduyto=$_POST['aeduyto'];
    $etype=$_POST['etype'];

 $sql="UPDATE studedu
 SET
	 aeducat='{$aeducat}',
	 aecname='{$aecname}',
   eduiname='{$eduiname}',
   aeduiaddress='{$aeduiaddress}',
	aeduyfrom='{$aeduyfrom}',
	aeduyto='{$aeduyto}'
	WHERE seid=".$ed_id;
   
   if(mysqli_query($connection, $sql))
    {
    
    
   $sno = 1;
     $output .= '<label class="text-success">Data Added...</label>';
     $select_query = "select * from studedu WHERE username='$username' and type='$etype' ORDER BY seid DESC ";
     $result = mysqli_query($connection, $select_query);
     $output .= '
   
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
        

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
        <tr>
      <td>' . $sno++ . '</td>
            <td>' . $row['aeducat'] . '</td>
            <td>' . $row['aecname'] . '</td>
            <td>' . $row['eduiname'] . '</td>
            <td>' . $row['aeduiaddress'] . '</td>
            <td>' . $row['aeduyfrom'] . '</td>
            <td>' . $row['aeduyto'] . '</td>
            <td nowrap><button type="submit" class="btn btn-primary btn-edit btn-raised" id="' . $row['seid'] . '"><i class="la la-edit"></i></button>
      <button type="button" class="btn btn-primary btn-remove btn-raised" id="' . $row['seid'] . '"><i class="la la-remove"></i></button>
      </td>
                
                      </tr>
      ';
     }
     $output .= '</table></div>';
    
    echo $output;
}else{
echo mysqli_error($connection);

}

   }

?>
