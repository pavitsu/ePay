<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Add Product</h2>

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
                <label for="discount">Discount</label>
                <select name="discount" id="disc">
                    <option value="1">None</option>
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
                    <option value="0.05">95%</option>
                </select>
            </div>
            <div class="pure-u-1-4">
                <label for="refund">Refund</label>
                <select name="refund" id="refund">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>  

        </fieldset>

        <button type="submit" name="submitAddProduct" class="pure-button pure-button-primary">Submit</button>
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
