<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <a class="pure-button" href="#" style="float:right;margin-right:80px;">
    <i class="fa fa-shopping-cart fa-lg"></i>
    Checkout
  </a>
  <div class="pageWrapper" style="overflow:scroll;">
    <h2>Customer</h2>



    <?php
      $sql = "SELECT * FROM product;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="cardContainer" style="float: left;padding:20px;">';
        echo '<div class="card">';
        echo '<img src="img_uploads/'.$row['Image'].'" alt="John" style="width:200px;height:150px;">';
        echo '<h1>'.$row['Description'].'</h1>';
        echo '<p class="title">'.$row['Price'].'</p>';
        echo '<p>'.$row['Quantity'].'</p>';
        echo '<p><button>Shop</button></p>';
        echo '<input type="number" name="amount" placeholder="No.">';
        echo '</div>';
        echo '</div>';
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
    width: 68%;
    float: left;
    font-size: 18px;
  }
  input {
    float: left;
    width: 29%;
    height: 30px;
    display: inline-block;
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
