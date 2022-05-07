<?php
	require_once 'connection.php';
    $orderId = $_POST["orderId"] ?? 0;
	$orderPrice = $_POST["orderPrice"] ?? 0;
	$orderQuantity = $_POST["orderQuantity"] ?? 0;
    $orderStatus = $_POST["orderStatus"] ?? 2;
    if($orderStatus == 2 ){
        $sql = "UPDATE tblorder SET orderPrice = $orderPrice , orderQuantity = $orderQuantity where orderId = $orderId";
	    if (mysqli_query($conn, $sql)) {
		    echo json_encode(array("statusCode"=>200));
	    } 
	    else {
	    	echo json_encode(array("statusCode"=>201));
	    }
    }else if($orderStatus == 0){
        $sql = "UPDATE tblorder SET orderStatus = $orderStatus where orderId = $orderId";
        $sql2 = "UPDATE tblcustomer SET customerDebt = customerDebt + $orderPrice where customerId = (SELECT orderCustomerId FROM tblorder where orderId = $orderId)";
	    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		    echo json_encode(array("statusCode"=>200));
	    } 
	    else {
	    	echo json_encode(array("statusCode"=>201));
	    }
    }
    else if($orderStatus == 1){
        $sql = "UPDATE tblorder set orderStatus = $orderStatus where orderId = $orderId";
        $sql2 = "UPDATE tblcustomer SET customerDebt = customerDebt - $orderPrice where customerId = (SELECT orderCustomerId FROM tblorder where orderId = $orderId)" ;
	    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		    echo json_encode(array("statusCode"=>200));
	    } 
	    else {
	    	echo json_encode(array("statusCode"=>201));
	    }
    }
	
	mysqli_close($conn);
?>