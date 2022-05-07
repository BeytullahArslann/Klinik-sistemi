<?php
	require_once 'connection.php';
    $productId = $_POST["productId"];
	$productName = $_POST["productName"];
	$productBarcodeNo = $_POST["productBarcodeNo"];
	$productDate = $_POST["productDate"];
	$productStock = $_POST["productStock"];
	$productBuyPrice = $_POST["productBuyPrice"];
	$productSellPrice = $_POST["productSellPrice"];
	$sql = "UPDATE tblproduct set productName = '$productName' , productBarcodeNo = '$productBarcodeNo' , productBuyPrice = $productBuyPrice ,productSellPrice = $productSellPrice  , productStock = $productStock, productLastDate = '$productDate' where productId = $productId";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>