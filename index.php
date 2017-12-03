<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>



    <?php
      if (isset($_SESSION['c_id'])) {
        echo '<section class="pageContainer">
          <div class="pageWrapper">';
        include_once('index.cus.php');
        echo '</div>
        </section>';
      }
      elseif (isset($_SESSION['s_id'])) {
        echo '<section class="pageContainer">
          <div class="pageWrapper">';
        include_once('index.sup.php');
        echo '</div>
        </section>';

      }
      else {
    ?>
    <section class="pageContainer">
      <a class="pure-button" href="#" style="float:right;margin-right:80px;">
        <i class="fa fa-shopping-cart fa-lg"></i>
        Checkout
      </a>
      <div class="pageWrapper" style="overflow:scroll;">
        <h2>Catalog</h2>



        <?php
          $sql = "SELECT * FROM product;";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="cardContainer" style="float: left;padding:20px;">';
            echo '<div class="card">';
            echo '<img src="img_uploads/'.$row['Image'].'" alt="John" style="width:200px;height:150px;">';
            echo '<h1>'.$row['Name'].'</h1>';
            echo '<p class="title">'.$row['Price'].'</p>';
            echo '<p><button onclick="myFunction()" >Add to Cart</button></p>';
            echo '</div>';
            echo '</div>';
          }
        ?>

      </div>
    </section>
<?php }
?>


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
  h1, p {
    padding: 5px;
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

<script>
function myFunction() {
    alert("Please, Sign up or Log-in before you continue.");
}
</script>
