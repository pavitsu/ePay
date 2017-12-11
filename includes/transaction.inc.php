<?php

include_once('dbh.inc.php');
session_start();

$cid = $_SESSION['c_id'];
$cfirst = $_SESSION['c_first'];


foreach ($_SESSION['cart'] as $key => $value) {

	$sql1 = "SELECT Supplier_ID, Price, Quantity FROM product WHERE Product_ID = ?;";
	$stmt1 = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt1, $sql1)) {
		echo "SQL error";
	} else {
		mysqli_stmt_bind_param($stmt1, "i", $value['product_id']);
		mysqli_stmt_execute($stmt1);
	}
	$result1 = mysqli_stmt_get_result($stmt1);
    $row1 = mysqli_fetch_assoc($result1);
	$negQuantity = $row1['Quantity'] - $value['item_amount'];

	$pid = $value['product_id'];
	$sql2 = "UPDATE product SET Quantity = ? WHERE Product_ID = $pid;";
	$stmt2 = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt2, $sql2)) {
		echo "SQL error";
	} else {
		mysqli_stmt_bind_param($stmt2, "i", $negQuantity);
		mysqli_stmt_execute($stmt2);
	}

    $sql3 = "INSERT INTO transaction (Customer_ID, CustomerName, Supplier_ID, Product_ID, Total, TDate, TTime) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $total = $value['item_amount'] * $value['item_price'];
    $date = date("Y-m-d");
    $time = date("h:i:sa");
    $stmt3 = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt3, $sql3)) {
		echo "SQL error";
	} else {
		mysqli_stmt_bind_param($stmt3, "isisiss", $cid, $cfirst, $row1['Supplier_ID'], $value['product_id'], $total, $date, $time);
		mysqli_stmt_execute($stmt3);
	}
}

header("Location: ../receipe.php?payment=success");
exit();

    


