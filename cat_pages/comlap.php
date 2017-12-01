<?php
  include_once('../header.php');
  include_once('../sidebarTop.php');
  include_once('../functions.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    <h2>Computer</h2>

  <?php
    include_once('../includes/dbh.inc.php');

    $type = 'CO';

    $sql = "SELECT * FROM product WHERE Type = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL statement failed";
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $type);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="cardContainer" style="float: left;padding:20px;">';
        echo '<div class="card">';
        printCard($row['Image'], $row['Name'], $row['Description'], $row['Price'], $row['Quantity']);
        echo '<p><button>Shop</button></p>';
        echo '</div>';
        echo '</div>';
      }
    }

  ?>


  </div>
</section>


<?php
  include_once('../sidebarBottom.php');
  include_once('../footer.php');
?>
