<?php
	require_once 'connection.php';
	$orderId = $_POST["orderId"];
	$orderPrice = $_POST["orderPrice"];
	$sql = "DELETE FROM tblorder WHERE orderId = $orderId";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
