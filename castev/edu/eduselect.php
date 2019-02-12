<?php
session_start();
require_once('connection.php');
$cmd = $_REQUEST['cmd'];
$username=$_SESSION['username'];

if($cmd == "get_details"){
	$tbl_id = $_REQUEST['tbl_id'];
	$out_put = array();
	$query = "select * from studedu where seid='$tbl_id'";
	$result = mysqli_query($connection,$query) or die(mysqli_error());
	$row = mysqli_fetch_assoc($result);
	
	echo json_encode($row);
}

?>