<?php

include_once('dbh.inc.php');
include_once('functions.inc.php');

if (isset($_POST['submitSignupCustomer'])) {

  // Escape harmful SQL variables, preventing SQL injection
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

  // Remove all HTML tags and all characters with ASCII value > 127, from a string
  $first = filter_var($first, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $last = filter_var($last, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $usern = filter_var($usern, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr1 = filter_var($addr1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr2 = filter_var($addr2, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $zip = filter_var($zip, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $phone = filter_var($phone, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  //Check for empty fields
  if (empty($first) || empty($last) || empty($usern) || empty($birth) ||
      empty($addr1) || empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else {
    //Check if input characters and sizes are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z0-9]*$/", $usern) ||
        !preg_match("/^[ a-zA-Z0-9]*$/", $addr1) || !preg_match("/^[ a-zA-Z0-9]*$/", $addr2) || !preg_match("/^[0-9]*$/", $zip) ||
        !preg_match("/^[ 0-9]*$/", $phone) || strlen($zip) > 6 || strlen($phone) > 12 || substr_count($phone, " ") > 2) {
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

          // Re-format Birthdate into YYYY-MM-DD
          $arraydate = explode(" ", $birth);
          $date = array_map('intval', $arraydate);
          $birthday = $date[2].'-'.$date[1].'-'.$date[0];

          // Re-format phone, removing any char except number
          if (strpos($phone, " ") !== false) { // '!== false' is to guarantee the condition will work for strpos in this case
            $phn = explode(" ", $phone);
            $phoneVerified = $phn[0].$phn[1].$phn[2];
          }
          else {
            $phoneVerified = $phone;
          }

          // Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          //Insert the customer into the database
          $sql = "INSERT INTO customer (Firstname, Lastname, Username, Gender, Birthday, Address1, Address2, Zip, Phone, Email, Password)
                  VALUES ('$first', '$last', '$usern', '$gender', '$birthday', '$addr1', '$addr2', '$zip', '$phoneVerified', '$email', '$hashedPwd');";

          mysqli_query($conn, $sql);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
}
elseif (isset($_POST['submitSignupSupplier'])) {

  // Escape harmful SQL variables, preventing SQL injection
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

  // Remove all HTML tags and all characters with ASCII value > 127, from a string
  $first = filter_var($first, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $last = filter_var($last, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $usern = filter_var($usern, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $comp = filter_var($comp, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr1 = filter_var($addr1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr2 = filter_var($addr2, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $zip = filter_var($zip, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $phone = filter_var($phone, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  //Check for empty fields
  if (empty($first) || empty($last) || empty($usern) || empty($comp) || empty($addr1) || 
      empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z0-9]*$/", $usern) ||
        !preg_match("/^[ a-zA-Z0-9]*$/", $comp) || !preg_match("/^[ a-zA-Z0-9]*$/", $addr1) || !preg_match("/^[ a-zA-Z0-9]*$/", $addr2) || 
        !preg_match("/^[0-9]*$/", $zip) || !preg_match("/^[ 0-9]*$/", $phone) || strlen($zip) > 6 || strlen($phone) > 12 || substr_count($phone, " ") > 2) {
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

          // Re-format phone, removing any char except number
          if (strpos($phone, " ") !== false) { // '!== false' is to guarantee the condition will work for strpos in this case
            $phn = explode(" ", $phone);
            $phoneVerified = $phn[0].$phn[1].$phn[2];
          }
          else {
            $phoneVerified = $phone;
          }

          // Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          // Insert the supplier into the database
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
