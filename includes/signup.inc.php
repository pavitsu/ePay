<?php

include_once('dbh.inc.php');
include_once('functions.inc.php');

if (isset($_POST['submitSignupCustomer'])) {

  // Assign filtered string into variables
  // Remove all HTML tags and all characters with ASCII value > 127, from a taken string
  $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $usern = filter_var($_POST['usern'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $gender = $_POST['gender'];
  $birth = filter_var($_POST['birth'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr1 = filter_var($_POST['addr1'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr2 = filter_var($_POST['addr2'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $city = $_POST['city'];
  $zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $passwd = $_POST['passwd'];

  $errorEmpty = false;
  $errorInvalid = false;
  $errorEmail = false;
  $errorUsername = false;

  //Check for empty fields
  if (empty($first) || empty($last) || empty($usern) || empty($birth) ||
      empty($addr1) || empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    echo '<span class="form-error">Fill in all fields!<span>';
    $errorEmpty = true;
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else {
    //Check if input characters and sizes are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || 
        !preg_match("/^[a-zA-Z0-9]*$/", $usern) || !preg_match("/^[- 0-9]*$/", $birth) || 
        !preg_match("/^[ a-zA-Z0-9]*$/", $addr1) || !preg_match("/^[ a-zA-Z0-9]*$/", $addr2) || 
        !preg_match("/^[0-9]*$/", $zip) || !preg_match("/^[- 0-9]*$/", $phone) || 
        strlen($zip) > 6 || strlen($phone) > 12 || substr_count($phone, " ") > 2 || 
        substr_count($phone, "-") > 2 || strlen($birth) > 10 || substr_count($birth, " ") > 2 || 
        substr_count($birth, "-") > 2) {
      echo '<span class="form-error">Check your input format<span>';
      $errorInvalid = true;
      header("Location: ../signup.php?signup=invalid");
      exit();
    }
    else {
      //Check for valid email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = true;
        echo '<span class="form-error">Write a valid e-mail<span>';
        header("Location: ../signup.php?signup=email");
        exit();
      }
      else {
        //Check for duplicate username
        $sql = "SELECT * FROM customer WHERE Username = '$usern'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          echo '<span class="form-error">Username is taken<span>';
          $errorUsername = true;
          header("Location: ../signup.php?signup=usertaken");
          exit();
        }
        else {

          // Re-format Birthdate into YYYY-MM-DD
          if (strpos($birth, " ") !== false) {
            $arraydate = explode(" ", $birth);
            $date = array_map('intval', $arraydate);
            $birthVerified = $date[2].'-'.$date[1].'-'.$date[0];
          }
          else {
            $birthVerified = $birth;
          }

          // Re-format phone, removing any char except number
          if (strpos($phone, " ") !== false) { // '!== false' is to guarantee the condition will work for strpos in this case
            $phn = explode(" ", $phone);
            $phoneVerified = $phn[0].$phn[1].$phn[2];
          }
          elseif (strpos($phone, "-") !== false) {
            $phn = explode("-", $phone);
            $phoneVerified = $phn[0].$phn[1].$phn[2];
          }
          else {
            $phoneVerified = $phone;
          }

          // Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          //Insert the customer into the database
          $sql = "INSERT INTO customer (Firstname, Lastname, Username, Gender, Birthday, Address1, Address2, City, Zip, Phone, Email, Password, card)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL error";
          }
          else {
            //Bind parameters to the place holder
            $zero = 0;
            mysqli_stmt_bind_param($stmt, "ssssssssssssi", $first, $last, $usern, $gender, $birthVerified, $addr1, $addr2, $city, $zip, $phoneVerified, $email, $hashedPwd, $zero);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);

            //echo '<span class="form-success">Signup successful<span>';
            header("Location: ../index.php?signup=success");
            exit();
          }

        }
      }
    }
  }
}
elseif (isset($_POST['submitSignupSupplier'])) {

  // Assign filtered string into variables
  // Remove all HTML tags and all characters with ASCII value > 127, from a string
  $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $last = filter_var($_POST['last'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $usern = filter_var($_POST['usern'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $comp = filter_var($_POST['comp'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr1 = filter_var($_POST['addr1'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $addr2 = filter_var($_POST['addr2'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $city = $_POST['city'];
  $zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  // Remove all illegal characters from email
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $passwd = $_POST['passwd'];

  //Check for empty fields
  if (empty($first) || empty($last) || empty($usern) || empty($comp) || empty($addr1) || 
      empty($zip) || empty($phone) || empty($email) || empty($passwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else {
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || 
        !preg_match("/^[a-zA-Z0-9]*$/", $usern) || !preg_match("/^[ a-zA-Z0-9]*$/", $comp) || 
        !preg_match("/^[ a-zA-Z0-9]*$/", $addr1) || !preg_match("/^[ a-zA-Z0-9]*$/", $addr2) || 
        !preg_match("/^[0-9]*$/", $zip) || !preg_match("/^[- 0-9]*$/", $phone) || 
        strlen($zip) > 6 || strlen($phone) > 12 || 
        substr_count($phone, " ") > 2 || substr_count($phone, "-") > 2) {
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
          elseif (strpos($phone, "-") !== false) {
            $phn = explode("-", $phone);
            $phoneVerified = $phn[0].$phn[1].$phn[2];
          }
          else {
            $phoneVerified = $phone;
          }

          // Hashing the password
          $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

          // Insert the supplier into the database
          $sql = "INSERT INTO supplier (Firstname, Lastname, Username, Company, Address1, Address2, City, Zip, Phone, Email, Password)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL error";
          }
          else {
            //Bind parameters to the place holder
            mysqli_stmt_bind_param($stmt, "sssssssssss", $first, $last, $usern, $comp, $addr1, $addr2, $city, $zip, $phoneVerified, $email, $hashedPwd);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);

            header("Location: ../index.php?signup=success");
            exit();
          }
        }
      }
    }
  }
}
else {
  header("Location: ../signup.php");
  exit();
}


?>

<style>
  .form-error {
    color: red;
  }
  .form-success {
    color: green;
  }
  .input-error {
    box-shadow: 0 0 5px red;
  }
</style>

<script>
  $("#cus-first", "#cus-last", "#cus-user", "#cus-email", "#cus-gender", "#cus-birth", "#addr1", "#addr2", "#cus-city", "#cus-zip", "#cus-phone", "#cus-passwd").removeClass("input-error");

  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorInvalid = "<?php echo $errorInvalid; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";
  var errorUsername = "<?php echo $errorUsername; ?>";

  if (errorEmpty == true) {
    $("#cus-first", "#cus-last", "#cus-user", "#cus-email", "#cus-birth", "#addr1", "#addr2", "#cus-zip", "#cus-phone", "#cus-passwd").addClass("input-error");
  }
  if (errorInvalid == true) {
    $("#cus-first", "#cus-last", "#cus-user", "#cus-email", "#cus-birth", "#addr1", "#addr2", "#cus-zip", "#cus-phone", "#cus-passwd").addClass("input-error");
  }
  if(errorEmail == true) {
    $("#cus-email").addClass("input-error");
  }
  if(errorUsername == true) {
    $("#cus-user").addClass("input-error");
  }

  /*
  if (errorEmpty == false && errorInvalid == false && errorEmail == false && errorUsername == false) {
    $("#cus-first", "#cus-last", "#cus-user", "#cus-email", "#cus-birth", "#addr1", "#addr2", "#cus-zip", "#cus-phone", "#cus-passwd").val("");
  } */
</script>


