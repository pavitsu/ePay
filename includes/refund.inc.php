<?php

include_once('dbh.inc.php');
session_start();

$pid = $_POST['pid'];
$category = $_POST['category'];
$cid = $_POST['cid'];

$sql = "SELECT DATEDIFF(day, GETDATE(), t.TDate) AS DateDiff, t.Customer_ID, t.Product_ID, p.Type FROM transaction t, product p WHERE t.Customer_ID = ? AND t.Product_ID = ? AND p.Type = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../refund.php?return=invalid");
    exit();
}
else {
    //Bind parameters to the place holder
    mysqli_stmt_bind_param($stmt, "iis", $cid, $pid, $category);
    //Run parameters inside database
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row['DateDiff'] > 14) {
		header("Location: ../refund.php?return=return_expire");
    	exit();
	}

    header("Location: ../index.php?return=success");
    exit();
}