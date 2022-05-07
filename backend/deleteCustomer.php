<?php
	require_once 'connection.php';
	$customerId=$_POST["customerId"];
	
	$sql = "Delete From Tblcustomer where customerId=$customerId";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
