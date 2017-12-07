<?php
  include_once('header.php');
  include_once('sidebarTop.php');
  include_once('includes/functions.inc.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    <h2>Product Status</h2>

  <?php
    include_once('includes/dbh.inc.php');

    $sid = $_SESSION['s_id'];

    $sql = "SELECT Image, Name, Price, Quantity FROM product WHERE Supplier_ID = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL statement failed";
    }
    else {
      mysqli_stmt_bind_param($stmt, "i", $sid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="cardContainer" style="float: left;padding:20px;">';
        echo '<div class="card">';
        echo '<img src="img_uploads/'.$row['Image'].'" alt="John" style="width:200px;height:150px;">';
        echo '<h1>'.$row['Name'].'</h1>';
        echo '<p class="title">'.$row['Price'].'</p>';
        echo '<p>'.$row['Quantity'].'</p>';
        echo '</div>';
        echo '</div>';
      }
    }
  ?>

  </div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>

<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 200px;
    max-height: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    display: block;
  }

  .title {
    color: grey;
    font-size: 18px;
  }

  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  button:hover, a:hover {
    opacity: 0.7;
  }
</style>
