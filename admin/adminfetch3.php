



<?php
//fetch.php

require '../connection.php';
$request = $_REQUEST;


$col = array(

  0 => 'cvid',
  1 => 'cappid',
  2 => 'fname',
  3 => 'casttype',
  4 => 'castcat',
  5 => 'address',
  6 => 'status',
  7 => 'verifiername',
  8 => 'username'

);

$sql = "SELECT * FROM casteverifier1";

$query = mysqli_query($connection,$sql);

$totalData = mysqli_num_rows($query);

$totalFilter = $totalData;

$sql = "SELECT * FROM casteverifier1 WHERE 1=1";

if(!empty($request['search']['value'])){

  $sql.=" AND (cappid Like '".$request['search']['value']."%'";
  $sql.=" OR fname Like '".$request['search']['value']."%')";
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
 $sub_data[] =  $row[1]; //cappid
 $sub_data[] =  $row[2]; //fname
 $sub_data[] =  $row[3]; //casttype
 $sub_data[] =  $row[4]; //castcat
 $sub_data[] =  $row[5];//address
 $sub_data[] =  $row[6];//status
 $sub_data[] =  '<button href="#"  class="btn btn-info delete btn-xm">Check</button>';
 
 $sub_data[] =  "12days";
 /*$sub_data[] =  $row[8];
 $sub_data[] =  $row[9];
 $sub_data[] =  $row[10];*/
 $sub_data[] =  ' <a href="applicationverify.php?username='.$row[8].'" class="btn btn-info delete btn-xm">Verify</a>';
//$sub_data[] =  '<a href="#"  class="btn btn-info delete btn-xm">Verify</a>';

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
