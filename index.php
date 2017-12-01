<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">

    <?php
      if (isset($_SESSION['c_id'])) {
        include_once('index.cus.php');
      }
      elseif (isset($_SESSION['s_id'])) {
        include_once('index.sup.php');
      }
      else {
        echo '<h2>epay</h2>';
        echo "string";
      }
    ?>
  </div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
