<?php
session_start();

if (isset($_POST['submitLogin'])) {

  include_once('dbh.inc.php');

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

  //Error handlers
  //Check if inputs are empty
  if (empty($uid) || empty($passwd)) {
    header("Location: ../index.php?login=empty");
    exit();
  }
  else {
    $sql = "SELECT * FROM customer WHERE Username = '$uid';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("Location: ../index.php?login=error");
      exit();
    }
    else {
      if ($row = mysqli_fetch_assoc($result)) {
        //De-hashing the password
        $hashedPwdCheck = password_verify($passwd, $row['Password']); //$row['SQL']
        if ($hashedPwdCheck == false) { //wrong password
          header("Location: ../index.php?login=error");
          exit();
        }
        elseif ($hashedPwdCheck == true) {
          //Login the user here

          $_SESSION['c_id'] = $row['Customer_ID'];
          $_SESSION['c_first'] = $row['Firstname'];
          $_SESSION['c_last'] = $row['Lastname'];
          $_SESSION['c_email'] = $row['Email'];
          $_SESSION['c_uid'] = $row['Username'];
          $_SESSION['c_bir'] = $row['Birhtday'];
          $_SESSION['c_addr1'] = $row['Address1'];
          $_SESSION['c_addr2'] = $row['Address2'];
          $_SESSION['c_zip'] = $row['Zip'];
          $_SESSION['c_pho'] = $row['Phone'];
          $_SESSION['c_email'] = $row['Email'];

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
