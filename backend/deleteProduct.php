<?php
	require_once 'connection.php';
	$productId=$_POST["productId"];
	
	$sql = "Delete From TblProduct where productId=$productId";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
