<?php

include_once('dbh.inc.php');

if (isset($_POST['submitAddProduct'])) {
  $img_file = $_FILES['img_file'];
  //extract data of img_file
  $img_fileName = $_FILES['img_file']['name']; //name of the file
  $img_fileTmpName = $_FILES['img_file']['tmp_name']; //create tmp of the file
  $img_fileSize = $_FILES['img_file']['size'];
  $img_fileError = $_FILES['img_file']['error'];
  $img_fileType = $_FILES['img_file']['type'];

  $fileExt = explode('.', $img_fileName);
  $fileActualExt = strtolower(end($fileExt)); //make all ext be lowercase

  $allowd = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowd)) {
    if ($img_fileError === 0) {
      if ($img_fileSize < 50000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt; //unique image
        $fileDestination = '../img_uploads/' .$fileNameNew;
        //Add image
        move_uploaded_file($img_fileTmpName, $fileDestination);

        //Add after image
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
          header("Location: ../addproduct.sup.php?addproduct=empty");
          exit();
        }
        else {
          //Check if input char are valid
          if (!preg_match("/^[ a-zA-Z0-9]*$/", $name) || !preg_match("/^[ a-zA-Z0-9]*$/", $desc) ||
              !preg_match("/^[0-9]*$/", $price) || !preg_match("/^[0-9]*$/", $quan)) {
            header("Location: ../addproduct.sup.php?addproduct=invalid");
            exit();
          }
          else {
            session_start();
            $sid = $_SESSION['s_id'];

            $sql = "INSERT INTO product (Supplier_ID, Image, Name, Description, Type, Price, Quantity, Discount, RefundAvailable)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL error";
            }
            else {
              //Bind parameters to the place holder
              mysqli_stmt_bind_param($stmt, "issssiiis", $sid, $fileNameNew, $name, $desc, $type, $price, $quan, $disc, $refund);
              //Run parameters inside database
              mysqli_stmt_execute($stmt);

              header("Location: ../addproduct.sup.php?addproduct=success");
              exit();
            }
          }
        }

      } else {
        echo "Your file is too big.";
      }
    } else {
      echo "There was an error uploading the file.";
    }
  } else {
    echo "File type is invalid.";
  }
}
else {
  header("Location: ../addproduct.sup.php");
  exit();
}
