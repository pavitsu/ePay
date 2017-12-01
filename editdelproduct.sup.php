<?php
  include_once('header.php');
?>

<div class="pageWrapper">
  <div class="viewProduct">

    <?php

      $sid = $_SESSION['s_id'];
      $pid = 2;
      include_once('includes/dbh.inc.php');
      $sql = "SELECT * FROM product WHERE Product_ID = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $pid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        echo '<h2>Profile</h2>';
        echo '<form action="includes/editdelproduct.sup.inc.php" method="post">';
        echo    '<input type="text" name="name" placeholder="'.$row["Name"].'">';
        echo    '<textarea name="description" rows="6" cols="40" placeholder="'.$row["Description"].'"></textarea>';
        echo    '<p><strong>Type</strong></p>
                  <select name="category">
                    <option value="CO">Computer & Laptop</option>
                    <option value="ST">Storage</option>
                    <option value="AU">Audio</option>
                    <option value="DS">Display</option>
                    <option value="AC">Accessory</option>
                  </select>';
        echo    '<input type="number" name="price" placeholder="'.$row["Price"].'">';
        echo    '<input type="number" name="quantity" placeholder="'.$row["Quantity"].'">';
        echo    '<input type="number" name="discount" placeholder="'.$row["Discount"].'">';
        echo    '<h3>Refund Available</h3>
                <label class="container">Yes
                  <input type="radio" name="radio" value="refundYes" checked="checked">
                  <span class="checkmark"></span>
                  </label>
                  <label class="container">No
                  <input type="radio" name="radio" value="refundNo">
                  <span class="checkmark"></span>
                </label>';

        echo    '<div class="change"><button type="submit" name="submitEdit">Edit</button></div>';
        echo    '<div class="delete"><button type="submit" name="submitDelete">Delete</button></div>';
        echo '</form>';
      }
    ?>

  <?php
    if (isset($_SESSION['editSuccess'])) {
      echo '<div id="alertSuccess">
              <p><strong>Success!</strong> Profile is edited successfully</p>
            </div>';
    }
  ?>
</div>

<style>
  .container {
    padding: 10px;
  }
  #alertSuccess {
    width: 400px;
    height: 40px;
    margin: 80px auto;
    background-color: #80ff80;
    border-left: 6px solid #00cc7e;
  }
  #alertSuccess p {
    padding-top: 14px;
    text-align: center;
  }
</style>
<style>
  .viewProfile h2 {
    text-align: center;
    font-family: arial;
    font-size: 36px;
    color: #696969;
    line-height: 63px;
    margin-bottom: 20px;
  }
  .viewProfile {
    width: 400px;
    margin: 0 auto;
    padding-top: 30px;
  }
  .viewProfile input {
    width: 90%;
    height: 40px;
    margin-bottom: 6px;
    padding: 0px 5%; /* top-buttom  left-right */
    border: none;
    background-color: #fff;
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 40px;
  }
  .viewProfile .change button {
    float: left;
    display: block;
    margin: 10px auto; /* move button to the middle */
    width: 48%;
    height: 40px;
    border: none;
    background-color: #00E600;
    font-family: arial;
    font-size: 16px;
    color: #fff;
    line-height: 40px;
    cursor: pointer;
  }
  .viewProfile .change button:hover {
    background-color: #111;
  }
  .viewProfile .delete button {
    float: right;
    display: block;
    margin: 10px auto; /* move button to the middle */
    width: 48%;
    height: 40px;
    border: none;
    background-color: #E60000;
    font-family: arial;
    font-size: 16px;
    color: #fff;
    line-height: 40px;
    cursor: pointer;
  }
  .viewProfile .delete button:hover {
    background-color: #111;
  }
</style>
