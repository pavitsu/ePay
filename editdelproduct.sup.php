<?php
  include_once('header.php');
?>

<div class="pageWrapper">
  <h2>Edit Product</h2>
  <div class="viewProduct">

    <?php

      $sid = $_SESSION['s_id'];
      $pid = $_GET['pid'];
      include_once('includes/dbh.inc.php');
      $sql = "SELECT Name, Description, Price, Quantity FROM product WHERE Product_ID = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $pid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        echo '<form class="pure-form" action="includes/editdelproduct.sup.inc.php" method="post">';
        
        echo '<fieldset class="pure-group">';
        echo '<input name="name" type="text" class="pure-input-1-2" placeholder="Product Name:  '.$row["Name"].'">';
        echo '<input name="price" type="number" class="pure-input-1-2" placeholder="Price:  '.$row["Price"].'">';
        echo '<input name="quantity" type="number" class="pure-input-1-2" placeholder="Quantity:  '.$row["Quantity"].'">';
        echo '</fieldset>';
        echo '<fieldset class="pure-group">';
        echo '<textarea name="description" class="pure-input-1-2" placeholder="'.$row["Description"].'"></textarea>';
        echo '</fieldset>';

        echo '<fieldset>
                <div class="pure-u-1-4">
                    <label for="type">Type</label>
                    <select name="category" id="type">
                        <option value="CO">Computer & Laptop</option>
                        <option value="ST">Storage</option>
                        <option value="AU">Audio</option>
                        <option value="DS">Display</option>
                        <option value="AC">Accessory</option>
                    </select>
                </div>
                <div class="pure-u-1-4">
                    <label for="discount">Discount</label>
                    <select name="discount" id="disc">
                        <option value="1">None</option>
                        <option value="0.95">5%</option>
                        <option value="0.90">10%</option>
                        <option value="0.85">15%</option>
                        <option value="0.80">20%</option>
                        <option value="0.75">25%</option>
                        <option value="0.70">30%</option>
                        <option value="0.65">35%</option>
                        <option value="0.60">40%</option>
                        <option value="0.55">45%</option>
                        <option value="0.50">50%</option>
                        <option value="0.45">55%</option>
                        <option value="0.40">60%</option>
                        <option value="0.35">65%</option>
                        <option value="0.30">70%</option>
                        <option value="0.25">75%</option>
                        <option value="0.20">80%</option>
                        <option value="0.15">85%</option>
                        <option value="0.10">90%</option>
                        <option value="0.05">95%</option>
                    </select>
                </div>
                <div class="pure-u-1-4">
                    <label for="refund">Refund</label>
                    <select name="refund" id="refund">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>  

            </fieldset>';


		    echo		  '<input type="hidden" name="pid" value='.$pid.'>';

        echo    '<div class="class="pure-button pure-button-primary><button type="submit" name="submitEdit">Edit</button></div>';
        echo    '<div class="class="pure-button pure-button-primary><button type="submit" name="submitDelete">Delete</button></div>';
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
