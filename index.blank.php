<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    <h2 style="color:darkorange;font: normal 30px/1 Tahoma, Geneva, sans-serif;" >Product Lists</h2>

    <div style="padding-top: 25px;">
      <?php
        $sql = "SELECT Product_ID, Image, Name, Price FROM product ORDER BY Product_ID DESC;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col-md-3">';
          echo    '<form onclick="link_to_signup()" action="signup.php" >';
          echo        '<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding: 10px; align="center">';
          echo          '<img src="img_uploads/'.$row['Image'].'" alt="Product" style="width:180px;height:130px; class="img-responsive">';
          echo          '<h5 class="text-info">'.$row['Name'].'</h5>';
          echo          '<h5 class="text-danger">'.$row['Price'].' Bath</h5>';
          echo          '<input type="text" name="amount" class="form-control" value="1">';

          echo          '<input type="hidden" name="hidden_name" value="'.$row['Name'].'">';
          echo          '<input type="hidden" name="hidden_price" value="'.$row['Price'].'">';
/**/
<<<<<<< HEAD
          echo          '<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-default" value="Add to Cart">';
=======
          echo          '<input type="submit" name="add" style="margin-top: 5px;margin-left: 24%;" class="btn btn-default" value="Add to Cart">';
>>>>>>> b1fe112690a9f7dcf7a00405f99809ae9c2376f5
          echo        '</div>';
          echo     '</form>';
          echo  '</div>';
        }
      ?>
    </div>

  </div>
</section>

<script>
  function link_to_signup() {
    alert("Please Sign up or Log-in before you continue.");
  }
</script>


<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
