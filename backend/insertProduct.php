<?php
	require_once 'connection.php';
	$productName=$_POST["productName"];
	$productBarcodeNo=$_POST["productBarcodeNo"];
	$productDate=$_POST["productDate"];
	$productStock=$_POST["productStock"];
	$productBuyPrice=$_POST["productBuyPrice"];
	$productSellPrice=$_POST["productSellPrice"];
	$sql = "INSERT INTO tblproduct (productName,productBarcodeNo,productBuyPrice,productSellPrice,productStock,productLastDate) VALUES ('$productName','$productBarcodeNo',$productBuyPrice,$productSellPrice,$productStock,'$productDate')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
