<?php
  include_once('header.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
      <h2>Sign Up</h2>

      <div class="pure-menu pure-menu-horizontal" style="text-align: center;font-size: 28px;">
        <!--<a href="#" class="pure-menu-heading pure-menu-link"></a>-->
        <ul id="link" class="pure-menu-list">
            <button class="pure-button" style="width: 180px;height: 60px;" id="cus">Customer</button>
            <button class="pure-button" style="width: 180px;height: 60px;" id="sup">Supplier</button>
        </ul>
      </div>
        
      <!-- Sign Up Form loaded from AJAX -->
      <div id="form"></div>

  </div> <!-- End pageWrapper -->
</section>


<script>
  $(document).ready(function() {
    $("#cus").click(function() {
      $("#form").load("signupForm.cus.php");
    });
    $("#sup").click(function() {
      $("#form").load("signupForm.sup.php");
    });
  });
</script>


<?php
  include_once('footer.php');
?>
