<?php
	require_once 'connection.php';
    $customerId=$_POST["customerId"];
    $customerName=$_POST["customerName"];
	$customerEmail=$_POST["customerEmail"];
	$customerPhone=$_POST["customerPhone"];
	$customerPassword=$_POST["customerPassword"];
	$sql = "UPDATE tblcustomer set customerName = '$customerName' , customerEmail = '$customerEmail' , customerPhone = '$customerPhone' ,customerPassword = '$customerPassword'  where customerId = $customerId";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>