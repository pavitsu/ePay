<?php

include_once('dbh.inc.php');

if (isset($_POST['submitSignupCustomer'])) {

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $usern = mysqli_real_escape_string($conn, $_POST['usern']);
  $gender = mysqli_real_escape_string($conn, $_POST['radio']);
  $birth = mysqli_real_escape_string($conn, $_POST['birth']);
  $addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
  $addr2 = mysqli_real_escape_string($conn, $_POST['addr2']);
  $zip = mysqli_real_escape_string($conn, $_POST['zip']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

  //Check for empty fields
  if (empty($first) || empty($last) || empty($usern) || empty($birth) ||
      empty($addr1) || empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header("Location: ../signup.php?signup=invalid");
      exit();
    }
    else {
      //Check for valid email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=email");
        exit();
      }
      else {
        //Check for duplicate username
        $sql = "SELECT * FROM customer WHERE Username = '$usern'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          header("Location: ../signup.php?signup=usertaken");
          exit();
        }
        else {
          //Birthday
          $arraydate = explode(" ", $birth);
          $date = array_map('intval', $arraydate);
          $birthday = $date[2].'-'.$date[1].'-'.$date[0];

          //Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          //Insert the user into the database
          $sql = "INSERT INTO customer (Firstname, Lastname, Username, Gender, Birthday, Address1, Address2, Zip, Phone, Email, Password)
                  VALUES ('$first', '$last', '$usern', '$gender', '$birthday', '$addr1', '$addr2', '$zip', '$phone', '$email', '$hashedPwd');";
          mysqli_query($conn, $sql);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
}
elseif (isset($_POST['submitSignupSupplier'])) {
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $usern = mysqli_real_escape_string($conn, $_POST['usern']);
  $comp = mysqli_real_escape_string($conn, $_POST['comp']);
  $addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
  $addr2 = mysqli_real_escape_string($conn, $_POST['addr2']);
  $zip = mysqli_real_escape_string($conn, $_POST['zip']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);

  //Check for empty fields
  if (empty($first) || empty($last) || empty($comp) || empty($addr1) || empty($usern) ||
      empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $comp)) {
      header("Location: ../signup.php?signup=invalid");
      exit();
    }
    else {
      //Check for valid email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=email");
        exit();
      }
      else {
        //Check for duplicate username
        $sql = "SELECT * FROM supplier WHERE Company = '$comp';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          header("Location: ../signup.php?signup=nametaken");
          exit();
        }
        else {
          //Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          //Insert the user into the database
          $sql = "INSERT INTO supplier (Firstname, Lastname, Username, Company, Address1, Address2, Zip, Phone, Email, Password)
                  VALUES ('$first', '$last', '$usern', '$comp', '$addr1', '$addr2', '$zip', '$phone', '$email', '$hashedPwd');";
          mysqli_query($conn, $sql);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../signup.php");
  exit();
}
