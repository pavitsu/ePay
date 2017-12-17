<?php

include_once('dbh.inc.php');
session_start();

if (isset($_POST['submitChangeCus'])) {

  $first = mysqli_real_escape_string($conn, $_POST['fname']);
  $last = mysqli_real_escape_string($conn, $_POST['lname']);
  $usern = mysqli_real_escape_string($conn, $_POST['uname']);
  $birth = mysqli_real_escape_string($conn, $_POST['date']);
  $addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
  $addr2 = mysqli_real_escape_string($conn, $_POST['addr2']);
  $zip = mysqli_real_escape_string($conn, $_POST['zip']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

  //Check for empty fields
  if (empty($first) || empty($last) || empty($usern) || empty($birth) ||
      empty($addr1) || empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../editProfile.php?editProfile=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header("Location: ../editProfile.php?editProfile=invalid");
      exit();
    }
    else {
      //Check for valid email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../editProfile.php?editProfile=invalid");
        exit();
      }
      else {
        //Check for duplicate username
        $sql = "SELECT * FROM customer WHERE Username = '$usern'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 10) {
          header("Location: ../editProfile.php?editProfile=usertaken");
          exit();
        }
        else {
          //Birthday
          $arraydate = explode(" ", $birth);
          $date = array_map('intval', $arraydate);
          $birthday = $date[2].'-'.$date[1].'-'.$date[0];

          //Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);
          $cid = $_SESSION['c_id'];

          //Insert the user into the database
          $sql = "UPDATE customer SET Firstname = ?, Lastname = ?, Username = ?, Birthday = ?, Address1 = ?,
                                      Address2 = ?, Zip = ?, Phone = ?, Email = ?, Password = ? WHERE Customer_ID='$cid';";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL error";
          }
          else {
            //Bind parameters to the place holder
            mysqli_stmt_bind_param($stmt, "ssssssssss", $first, $last, $usern, $birthday, $addr1, $addr2, $zip, $phone, $email, $hashedPwd);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);

            header("Location: ../editProfile.php?editProfile=success");
            exit();
          }
        }
      }
    }
  }
}
elseif (isset($_POST['submitDeleteCus'])) {
  $cid = $_SESSION['c_id'];
  $sql = "DELETE FROM customer WHERE Customer_ID = '$cid';";
  mysqli_query($conn, $sql);
  session_unset();
  session_destroy();
  header("Location: ../index.php");
  exit();
}
elseif (isset($_POST['submitChangeSup'])) {
  $first = mysqli_real_escape_string($conn, $_POST['fname']);
  $last = mysqli_real_escape_string($conn, $_POST['lname']);
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $comp = mysqli_real_escape_string($conn, $_POST['comp']);
  $addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
  $addr2 = mysqli_real_escape_string($conn, $_POST['addr2']);
  $zip = mysqli_real_escape_string($conn, $_POST['zip']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

  //Check for empty fields
  if (empty($first) || empty($last) || empty($uname) || empty($comp) || empty($addr1) ||
      empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../editProfile.inc.php?editProfile=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $comp)) {
      header("Location: ../editProfile.php?editProfile=invalid");
      exit();
    }
    else {
      //Check for valid email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../editProfile.php?editProfile=email");
        exit();
      }
      else {
        //Check for duplicate username
        $sql = "SELECT * FROM supplier WHERE Company = '$comp';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 10) {
          header("Location: ../editProfile.php?editProfile=nametaken");
          exit();
        }
        else {
          //Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          $sid = $_SESSION['s_id'];
          //Insert the user into the database

          $sql = "UPDATE supplier SET Firstname='$first', Lastname='$last', Username='$uname', Company='$comp', Address1='$addr1',
                          Address2='$addr2', Zip='$zip', Phone='$phone', Email='$email', Password='$passwd' WHERE Supplier_ID='$sid';";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL error";
          }
          else {
            //Bind parameters to the place holder
            mysqli_stmt_bind_param($stmt, "ssssssssss", $first, $last, $usern, $comp, $addr1, $addr2, $zip, $phone, $email, $hashedPwd);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);

            header("Location: ../editProfile.php?editProfile=success");
            exit();
          }
        }
      }
    }
  }
}
elseif (isset($_POST['submitDeleteSup'])) {
  $sid = $_SESSION['s_id'];
  $sql = "DELETE FROM supplier WHERE Supplier_ID = '$sid';";
  mysqli_query($conn, $sql);
  session_unset();
  session_destroy();
  header("Location: ../index.php");
  exit();
}
else {
  header("Location: ../editProfile.php");
  exit();
}
