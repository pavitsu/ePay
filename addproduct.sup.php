<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Add Product</h2><!---->

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





    <form class="pure-form" action="includes/addproduct.sup.inc.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img_file">
        <fieldset class="pure-group">
            <input name="name" type="text" class="pure-input-1-2" placeholder="Product Name">
            <input name="price" type="number" class="pure-input-1-2" placeholder="Price">
            <input name="quantity" type="number" class="pure-input-1-2" placeholder="Quantity">
        </fieldset>

        <fieldset class="pure-group">
            <textarea name="description" class="pure-input-1-2" placeholder="Describe the product"></textarea>
        </fieldset>

        <fieldset>
            <div class="pure-u-1-4">
                <label for="type">Type</label>
                <select name="category" id="type">
                    <option value="CO">Computer & Laptop</option>
                    <option value="ST">Storage</option>
                    <option value="AU">Audio</option>
                    <option value="DS">Display</option>
                    <option value="AC">Accessory</option>
                </select>
            </div>
            <div class="pure-u-1-4">
                <label for="disc">Discount</label>
                <select name="discount" id="disc">
                    <option value="0.95">5%</option>
                    <option value="0.90">10%</option>
                    <option value="0.85">15%</option>
                    <option value="0.80">20%</option>
                    <option value="0.75">25%</option>
                    <option value="0.70">30%</option>
                    <option value="0.65">35%</option>
                    <option value="0.60">40%</option>
                    <option value="0.55">45%</option>
                    <option value="0.50">50%</option>
                    <option value="0.45">55%</option>
                    <option value="0.40">60%</option>
                    <option value="0.35">65%</option>
                    <option value="0.30">70%</option>
                    <option value="0.25">75%</option>
                    <option value="0.20">80%</option>
                    <option value="0.15">85%</option>
                    <option value="0.10">90%</option>
                    <option value="0.5">95%</option>
                </select>
            </div>
            <div class="pure-u-1-4">
                <label for="refund">Refund</label>
                <select name="refund" id="refund">
                    <option value="refundYes">Yes</option>
                    <option value="refundNo">No</option>
                </select>
            </div>

            

        </fieldset>

        <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Sign in</button>
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
