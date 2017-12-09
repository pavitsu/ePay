<?php

include_once('dbh.inc.php');
session_start();

$mark = $_GET['mark'];

if (isset($_POST['submitPayment'])) {
	$number = mysqli_real_escape_string($conn, $_POST['number']);
  $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
  $expdate = mysqli_real_escape_string($conn, $_POST['exp']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $bank = mysqli_real_escape_string($conn, $_POST['bank']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);

  $cid = $_SESSION['c_id'];
    

  if ($mark == 0) {
    $sql = "INSERT INTO payment (Customer_ID, CNumber, CVV, ExpDate, HolderName, IssueBank, Type)
                  VALUES (?, ?, ?, ?, ?, ?, ?);";
  }
  elseif ($mark == 1) {
    $sql = "UPDATE payment SET Customer_ID = ?, CNumber = ?, CVV = ?, ExpDate = ?, HolderName = ?, IssueBank = ?,
	                                      Type = ? WHERE Customer_ID = '$cid';";
  }

  $stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
	   	echo "SQL error";
	}
	else {

		// Re-format Birthdate into YYYY-MM-DD
    if (strpos($expdate, " ") !== false) {
      $arraydate = explode(" ", $expdate);
      $date = array_map('intval', $arraydate);
      $expVerified = $date[1].'-'.$date[0];
    }
    else {
      $expVerified = $expdate;
    }

	   //Bind parameters to the place holder
	   mysqli_stmt_bind_param($stmt, "issssss", $cid, $number, $cvv, $expVerified, $name, $bank, $type);
	   //Run parameters inside database
	   mysqli_stmt_execute($stmt);

	   header("Location: ../receipe.php?payment=success");
	   exit();
	}

    
}