<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Edit Product</h2>

    <table class ="pure-table" style="margin:auto;padding-top:50px">
      <col width="10%">
      <col width="30%">
      <col width="18%">
      <col width="13%">
      <col width="14%">
      <col width="15%">
      <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Refund</th>
        <th>Edit</th>
      </tr>
    </thead>

    <?php
      include_once('includes/dbh.inc.php');
      $sid = $_SESSION['s_id'];
      $sql = "SELECT * FROM product WHERE Supplier_ID = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $sid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        echo '<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo   '<td>'.$row["Product_ID"].'</td>';
          echo    '<td>'.$row["Name"].'</td>';
          echo    '<td>'.$row["Price"].'</td>';
          echo    '<td>'.$row["Quantity"].'</td>';
          echo    '<td>'.$row["RefundAvailable"].'</td>';
          echo    '<td><a  href="editdelproduct.sup.php?pid='.$row["Product_ID"].'">Edit</a></td>';
          echo  '</tr>' ;
        }
        echo '</tbody>';
      }
    ?>
    </table>


  </div>
</section>

<script>
  $(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text




  });
</script>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
