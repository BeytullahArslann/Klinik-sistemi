<?php
	require_once 'connection.php';
	$orderProductId = $_POST["orderProductId"];
	$orderCustomerId = $_POST["orderCustomerId"];
	$orderDate = $_POST["orderDate"];
	$orderPrice = $_POST["orderPrice"];
	$orderQuantity = $_POST["orderQuantity"];
	$sql = "INSERT INTO tblorder (orderProductId,orderCustomerId,orderDate,orderPrice,orderStatus,orderQuantity) VALUES ($orderProductId,$orderCustomerId,'$orderDate',$orderPrice,0,$orderQuantity)";
    $sql2 = "UPDATE tblcustomer SET customerDebt = customerDebt+$orderPrice where customerId = $orderCustomerId" ;
	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
