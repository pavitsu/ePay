<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Add Product</h2>

    <form class="addProduct" action="includes/addproduct.sup.inc.php" method="post" enctype="multipart/form-data">
      <input type="file" name="img_file">
      <input type="text" name="name" placeholder="Product Name">
      <textarea name="description" rows="6" cols="40" placeholder="Describe your product..."></textarea>
      <p><strong>Type</strong></p>
      <select name="category">
        <option value="CO">Computer & Laptop</option>
        <option value="ST">Storage</option>
        <option value="AU">Audio</option>
        <option value="DS">Display</option>
        <option value="AC">Accessory</option>
      </select>
      <input type="number" name="price" placeholder="Price">
      <input type="number" name="quantity" placeholder="Quantity">
      <input type="number" name="discount" placeholder="Discount 00%">
      <h3>Refund Available</h3>
      <label class="container">Yes
        <input type="radio" name="radio" value="refundYes" checked="checked">
        <span class="checkmark"></span>
      </label>
      <label class="container">No
        <input type="radio" name="radio" value="refundNo">
        <span class="checkmark"></span>
      </label>

      <button type="submit" name="submitAddProduct">Submit</button>
    </form>

  </div>
</section>

<style>
  .container {
    padding: 10px;
  }
</style>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
