<?php
require_once('connection.php');
$cmd = $_REQUEST['cmd'];

if($cmd == "get_details"){
	$tbl_id = $_REQUEST['uid'];
	$out_put = array();
	$query = "select * from aadhar where aadharno='$tbl_id'";
	$result = mysqli_query($connection,$query) or die(mysqli_error());
	$row = mysqli_fetch_assoc($result);
	
	echo json_encode($row);
}

?>