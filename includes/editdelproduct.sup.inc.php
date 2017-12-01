<?php

include_once('dbh.inc.php');

if (isset($_POST['submitEdit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $desc = mysqli_real_escape_string($conn, $_POST['description']);
  $type = mysqli_real_escape_string($conn, $_POST['category']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $quan = mysqli_real_escape_string($conn, $_POST['quantity']);
  $disc = mysqli_real_escape_string($conn, $_POST['discount']);
  $refund = mysqli_real_escape_string($conn, $_POST['radio']);

  //Check for empty fields
  if (empty($name) || empty($desc) || empty($type) ||
      empty($price) || empty($quan)) {
    header("Location: ../editdelproduct.sup.php?editproduct=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[ a-zA-Z0-9]*$/", $name) || !preg_match("/^[ a-zA-Z0-9]*$/", $desc) ||
        !preg_match("/^[0-9]*$/", $price) || !preg_match("/^[0-9]*$/", $quan)) {
      header("Location: ../editdelproduct.sup.php?editproduct=invalid");
      exit();
    }
    else {
      session_start();
      $sid = $_SESSION['s_id'];
      $pid = 2;
      $sql = "UPDATE product SET Name='$name', Description='$desc', Type='$type', Price='$price',
              Quantity='$quan', Discount='$disc', RefundAvailable='$refund' WHERE Product_ID='$pid';";
      mysqli_query($conn, $sql);
      header("Location: ../editdelproduct.sup.php?editproduct=success");
      exit();
    }

  }
}
else {
  header("Location: ../editdelproduct.sup.php");
  exit();
}
