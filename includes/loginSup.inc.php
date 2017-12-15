<?php
session_start();

if (isset($_POST['submitLoginSup'])) {

  include_once('dbh.inc.php');

  $comp = mysqli_real_escape_string($conn, $_POST['comp']);
  $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

  //Error handlers
  //Check if inputs are empty
  if (empty($comp) || empty($passwd)) {
    header("Location: ../loginSup.php?login=empty");
    exit();
  }
  else {
    $sql = "SELECT * FROM supplier WHERE Company = '$comp';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("Location: ../loginSup.php?login=error");
      exit();
    }
    else {
      if ($row = mysqli_fetch_assoc($result)) {
        //De-hashing the password
        $hashedPwdCheck = password_verify($passwd, $row['Password']); //$row['SQL']
        if ($hashedPwdCheck == false) { //wrong password
          header("Location: ../loginSup.php?login=error");
          exit();
        }
        elseif ($hashedPwdCheck == true) {
          //Login the user here

          $_SESSION['s_id'] = $row['Supplier_ID'];
          $_SESSION['s_first'] = $row['Firstname'];
          $_SESSION['s_last'] = $row['Lastname'];
          $_SESSION['s_email'] = $row['Email'];
          $_SESSION['s_uid'] = $row['Company'];

          header("Location: ../index.php?login=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../index.php?login=error");
  exit();
}
