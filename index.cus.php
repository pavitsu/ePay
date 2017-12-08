<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    <h2>Customer</h2>

    <?php
      $sql = "SELECT Product_ID, Image, Name, Price FROM product ORDER BY Product_ID DESC;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="col-md-4">';
        echo    '<form method="post" action="shop.php?action=add&id='.$row['Product_ID'].'" >';
        echo        '<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-sgadow: 0 1px 2px rgba(0,0,0,0.05); padding: 10px; align="center">';
        echo          '<img src="img_uploads/'.$row['Image'].'" alt="Product" style="width:260px;height:150px; class="img-responsive">';
        echo          '<h5 class="text-info">'.$row['Name'].'</h5>';
        echo          '<h5 class="text-danger">'.$row['Price'].'</h5>';
        echo          '<input type="text" name="amount" class="form-control" value="1">';
        echo          '<input type="hidden" name="hidden_name" value="'.$row['Name'].'">';
        echo          '<input type="hidden" name="hidden_price" value="'.$row['Price'].'">';
        echo          '<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-default" value="Add to Cart">';
        echo        '</div>';
        echo     '</form>';
        echo  '</div>';
      }
    ?>

    <div style="clear: both"></div>
    <h2>My Order List</h2>
    <div class="table-respondsive">

      <table class="table table-bordered">
        <tr>
          <th width="40%">Product Name</th>
          <th width="10%">Quantity</th>
          <th width="20%">Price Details</th>
          <th width="15%">Order Total</th>
          <th width="5%">Action</th>
        </tr>

        <?php
          if (!empty($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
              echo '<tr>';
              echo    '<td>'.$value['item_name'].'</td>';
              echo    '<td>'.$value['item_amount'].'</td>';
              echo    '<td>'.$value['item_price'].'</td>';
              echo    '<td>'.number_format($value['item_amount'] * $value['item_price'], 2).'</td>';
              echo    '<td><a href="shop.php?action=delete&id='.$value['product_id'].'"><span class="text-danger">X</span></td>';
              echo '</tr>';
              $total = $total + ($value['item_amount'] * $value['item_price']);

              echo '<tr>';
              echo    '<td colspan="3" align="right">Total</td>';
              echo    '<td align="right">'.number_format($total, 2).'</td>';
              echo    '<td></td>';
              echo '</tr>';
            }
          }
        ?>

        </table>


  </div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>


