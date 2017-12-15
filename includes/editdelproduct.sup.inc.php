<?php

include_once('dbh.inc.php');

if (isset($_POST['submitEdit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $desc = mysqli_real_escape_string($conn, $_POST['description']);
  $type = mysqli_real_escape_string($conn, $_POST['category']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $quan = mysqli_real_escape_string($conn, $_POST['quantity']);
  $disc = mysqli_real_escape_string($conn, $_POST['discount']);
  $refund = mysqli_real_escape_string($conn, $_POST['refund']);

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
      $pid = $_POST['pid'];



      $sql = "UPDATE product SET Name = ?, Description = ?, Type = ?, Price = ?,
              Quantity = ?, Discount = ?, RefundAvailable = ? WHERE Product_ID = $pid;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
      } else {
        mysqli_stmt_bind_param($stmt, "sssiids", $name, $desc, $type, $price, $quan, $disc, $refund);
        mysqli_stmt_execute($stmt);
      }

      header("Location: ../editproduct.sup.php?editproduct=success");
      exit();
    }

  }
}
elseif (isset($_POST['submitDelete'])) {
  $pid = $_POST['pid'];
  $sql = "DELETE FROM product WHERE Product_ID = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
  } else {
    mysqli_stmt_bind_param($stmt, "s", $pid);
    mysqli_stmt_execute($stmt);
  }

  header("Location: ../editproduct.sup.php?deleteproduct=success");
  exit();
}
else {
  header("Location: ../editdelproduct.sup.php");
  exit();
}
