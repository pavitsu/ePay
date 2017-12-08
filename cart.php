<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Cart</h2>

    <div style="clear: both"></div>
    <hr>
    <h2 style="font-size: 28px;">My Order List</h2>
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
              echo    '<td><a href="cart.inc.php?action=delete&id='.$value['product_id'].'"><span class="text-danger">Delete</span></td>';
              echo '</tr>';
              $total = $total + ($value['item_amount'] * $value['item_price']);
            }
            echo '<tr>';
            echo    '<td colspan="3" align="right">Total</td>';
            echo    '<td align="right">'.number_format($total, 2).'</td>';
            echo    '<td></td>';
            echo '</tr>';
          }
        ?>

      </table>


      <form class="processCheckout" action="checkout.php" method="post">
      	<button type="submit" name="submitCheckout">Checkout</button>
      </form>



<style>
	.processCheckout button {
    background-color: #4CAF50;
    font-size: 16px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-left: 35%;
    border: none;
    cursor: pointer;
    width: 30%;
  }
</style>


<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
