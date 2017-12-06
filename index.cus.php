<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper" style="overflow:scroll;">
    <h2>Customer</h2>

    <?php
      $sql = "SELECT * FROM product;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="cardContainer" style="float: left;padding:20px;">';
        echo  '<div class="card">';
        echo    '<img src="img_uploads/'.$row['Image'].'" alt="Product" style="width:200px;height:150px;">';
        echo    '<h1>'.$row['Name'].'</h1>';
        echo    '<p class="title">'.$row['Price'].'</p>';
        echo    '<p><button type="button id="addCart">Add to Cart</button></p>';
        echo  '</div>';
        echo '</div>';
      }
    ?>

  </div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>

<script>
  $('#addCart').click(function(){
     addItemToCart(949931647 , 1, "1", "Months", "491")
  })

  function addItemToCart (variant_id, quantity, shipping_interval_frequency, shipping_interval_unit_type, subscription_id) {
    data = {
      "quantity": quantity,
      "id": variant_id,
      "properties[shipping_interval_frequency]": shipping_interval_frequency,
  	  "properties[shipping_interval_unit_type]": shipping_interval_unit_type,
  	  "properties[subscription_id]": subscription_id
    }
    jQuery.ajax({
      type: 'POST',
      url: '/cart/add.js',
      data: data,
      dataType: 'json',
      success: function() {
      window.location.href = 'cart.php';
    }
  });
}
</script>

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
