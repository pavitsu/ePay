<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    
  <?php
    include_once('includes/dbh.inc.php');

    if (isset($_GET['menu'])) {
    	$menu = $_GET['menu'];
    	switch ($menu) {
    	case 'CO':
    		echo '<h2>Computer & Laptop</h2>';
    		break;
    	case 'ST':
    		echo '<h2>Storage</h2>';
    		break;
    	case 'DS':
    		echo '<h2>Display</h2>';
    		break;
    	case 'AU':
    		echo '<h2>Audio</h2>';
    		break;
    	case 'AC':
    		echo '<h2>Accessory</h2>';
    		break;
    	
    	default:
    		echo "No value";
    		break;
    	}
    }
    else {
    	echo "NO VALUE";
    }
  ?>

  <div style="padding-top: 25px;">
    <?php
      $sql = "SELECT Product_ID, Image, Name, Price FROM product WHERE Type = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $menu);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

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
      }
    ?>
  </div>

  

  </div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>


