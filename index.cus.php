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

        echo '<div class="col-md-3">';
        echo    '<form method="post" action="cart.inc.php?action=add&id='.$row['Product_ID'].'" >';
        echo        '<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding: 10px; align="center">';
        echo          '<img src="img_uploads/'.$row['Image'].'" alt="Product" style="width:180px;height:130px; class="img-responsive">';
        echo          '<h5 class="text-info">'.$row['Name'].'</h5>';
        echo          '<h5 class="text-danger">'.$row['Price'].' Bath</h5>';
        echo          '<input type="text" name="amount" class="form-control" value="1">';

        echo          '<input type="hidden" name="hidden_name" value="'.$row['Name'].'">';
        echo          '<input type="hidden" name="hidden_price" value="'.$row['Price'].'">';
        
        echo          '<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-default" value="Add to Cart">';
        echo        '</div>';
        echo     '</form>';
        echo  '</div>';
      }
    ?>

    


  </div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>


