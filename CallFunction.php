<?php
	include "tableaccess.php";
	$driver_id = $_POST['driver_id'];
	$requestId = $_POST['requestId'];
	$bid = $_POST['bid'];
	
	if($bid == NULL){
		changeAvailability($driver_id);
		header("Location: homeDriver.php");
	}else{
		insertDriverBid($driver_id ,$requestId, $bid);
		header("Location: availableHires.php?show=1");
	}
	
?>

