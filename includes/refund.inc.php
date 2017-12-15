<?php

include_once('dbh.inc.php');
session_start();

$pid = $_POST['pid'];
$cid = $_POST['cid'];

$sql = "SELECT t.Customer_ID, t.Product_ID, t.TDate, p.RefundAvailable FROM transaction t, product p WHERE t.Customer_ID = $cid AND t.Product_ID = $pid AND p.Product_ID = $pid;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck < 1) {
    header("Location: ../refund.php?return=fail");
    exit();
}
if ($row = mysqli_fetch_assoc($result)) {

	// Get date different
	$dat1 = $row['TDate'];
	$dat2 = date('Y-m-d');
	$date1 = date_create($dat1);
	$date2 = date_create($dat2);
	$datediff = date_diff($date1, $date2);

	// Check if date is londer than 14 days
	if ($datediff->days > 14) {
		header("Location: ../refund.php?return=expired");
    	exit();
	}
	elseif ($row['RefundAvailable'] == 'No') {
		header("Location: ../refund.php?return=invalid");
    	exit();
	}
	else {
		$sql1 = "INSERT INTO refund (Customer_ID, Product_ID, TDate, TTime) VALUES (?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql1)) {
           	echo "SQL error";
        }
 		else {
 			$date = date("Y-m-d");
    		$time = date("h:i:sa");
            mysqli_stmt_bind_param($stmt, "iiss", $cid, $pid, $date, $time);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);

            header("Location: ../index.php?return=success");
            exit();
        }
	}
}