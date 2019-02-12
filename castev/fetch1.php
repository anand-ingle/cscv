



<?php
//fetch.php

require 'connection.php';
$request = $_REQUEST;


$col = array(

  0 => 'rid',
  1 => 'relativename',
  2 => 'relation',
  3 => 'scrunitycommitte',
  4 => 'reasonofscrunity',
  5 => 'year',
  6 => 'cvcgranted',
  7 => 'cvcnumber',
  8 => 'cvcdate',
  9 => 'reasonofrejection',
  10 => 'rejectiondate'

);

$sql = "SELECT * FROM Relative_Info";

$query = mysqli_query($connection,$sql);

$totalData = mysqli_num_rows($query);

$totalFilter = $totalData;

$sql = "SELECT * FROM Relative_Info WHERE 1=1";

if(!empty($request['search']['value'])){

	$sql.=" AND (rid Like '".$request['search']['value']."%'";
	$sql.=" OR relativename Like '".$request['search']['value']."%')";
}

$query = mysqli_query($connection,$sql);
$totalData = mysqli_num_rows($query);


//Order

$sql.= " ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
		$request['start']."  ,".$request['length']." ";

$query = mysqli_query($connection,$sql);

$data = array();


while($row = mysqli_fetch_array($query))
{

 $sub_data   = array();
 $sub_data[] =  $row[0];
 $sub_data[] =  $row[1];
 $sub_data[] =  $row[2];
 $sub_data[] =  $row[3];
 $sub_data[] =  $row[4];
 $sub_data[] =  $row[5];
 $sub_data[] =  $row[6];
 $sub_data[] =  $row[7];
 $sub_data[] =  $row[8];
 $sub_data[] =  $row[9];
 $sub_data[] =  $row[10];
 $sub_data[] =  '<a href="relativeinfo.php?id='.$row[0].'" onclick="return confirm(\'are you sure?\' )"  class="btn btn-danger delete btn-xm">Delete</a>';
 $data[]     = $sub_data;

}


$output = array(
 "draw"             =>  intval($request["draw"]),
 "recordsTotal"     =>  intval($totalData),
 "recordsFiltered"  =>  intval($totalFilter),
 "data"    => $data
);

echo json_encode($output);

?>
