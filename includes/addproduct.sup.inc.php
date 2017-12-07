<?php

include_once('dbh.inc.php');
include_once('functions.inc.php');

if (isset($_POST['submitAddProduct'])) {

  $image = getImage($_FILES['img_file']);
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $type = $_POST['category'];
  $price = $_POST['price'];
  $quan = $_POST['quantity'];
  $disc = $_POST['discount'];
  $refund = $_POST['radio'];

  //Check for empty fields
  if (empty($image) || empty($name) || empty($desc) || 
      empty($type) || empty($price) || empty($quan)) {
    header("Location: ../addproduct.sup.php?addproduct=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[ a-zA-Z0-9]*$/", $name) || !preg_match("/^[ a-zA-Z0-9]*$/", $desc) ||
        !preg_match("/^[0-9]*$/", $price) || !preg_match("/^[0-9]*$/", $quan) || !preg_match("/^[0-9]*$/", $disc)) {
      header("Location: ../addproduct.sup.php?addproduct=invalid");
      exit();
    }
    else {
      session_start();
      $sid = $_SESSION['s_id'];

      $sql = "INSERT INTO product (Supplier_ID, Image, Name, Description, Type, Price, Quantity, Discount, RefundAvailable, Date)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE);";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
      }
      else {
        //Bind parameters to the place holder
        mysqli_stmt_bind_param($stmt, "issssiiis", $sid, $image, $name, $desc, $type, $price, $quan, $disc, $refund);
        //Run parameters inside database
        mysqli_stmt_execute($stmt);

        header("Location: ../addproduct.sup.php?addproduct=success");
        exit();
      }
    }
  }
}
else {
  header("Location: ../addproduct.sup.php");
  exit();
}
