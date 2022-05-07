<?php
	require_once 'connection.php';
	$customerName=$_POST["customerName"];
	$customerEmail=$_POST["customerEmail"];
	$customerPhone=$_POST["customerPhone"];
	$customerPassword=$_POST["customerPassword"];
	$sql = "INSERT INTO tblcustomer (customerName,customerEmail,customerPhone,customerPassword) VALUES ('$customerName','$customerEmail','$customerPhone','$customerPassword')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>