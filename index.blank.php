<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    <h2>Customer</h2>

    <div style="padding-top: 25px;">
      <?php
        $sql = "SELECT Product_ID, Image, Name, Price, Discount FROM product ORDER BY Product_ID DESC;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col-md-3" style="padding-top:40px">';
          echo    '<form method="post" action="cart.inc.php?action=add&id='.$row['Product_ID'].'&menu=IN" >';
          echo        '<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding: 10px; align="center">';
          echo          '<img src="img_uploads/'.$row['Image'].'" alt="Product" style="width:180px;height:130px; class="img-responsive">';
          echo          '<h4 class="text-info" style="text-align:center;font-size:22px">'.$row['Name'].'</h5>';
          if ($row['Discount'] != 1) {
            echo        '<h5 class="text-danger" style="text-decoration:line-through;text-align:center;font-size:16px">'.$row['Price'].' Bath</h5>';
            echo        '<h5 class="text-danger" style="text-align:center;font-size:16px">Now '.$row['Price']*$row['Discount'].' Bath</h5>';
          }
          else {
            echo        '<h5 class="text-danger" style="text-align:center;font-size:16px">'.$row['Price'].' Bath</h5>';
            echo        '<h5 class="text-danger" style="color:transparent;font-size:16px">Blank</h5>';
          }
          echo          '<input type="text" name="amount" class="form-control" value="1">';
          echo          '<input type="hidden" name="hidden_name" value="'.$row['Name'].'">';
          echo          '<input type="hidden" name="hidden_price" value="'.$row['Price']*$row['Discount'].'">';
          echo          '<input type="submit" name="add" style="margin-top: 5px;margin-left: 24%;" class="btn btn-default" value="Add to Cart">';
          echo        '</div>';
          echo     '</form>';
          echo  '</div>';
        }
      ?>
    </div>

  </div>
</section>

<style>
  .form h4, h5 {
    padding: 5px;
  }
</style>

<script>
  function link_to_signup() {
    alert("Please Sign up or Log-in before you continue.");
  }
</script>


<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
