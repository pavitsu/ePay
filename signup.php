<?php
  include_once('header.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
      <h2>Sign Up</h2>

      <div class="pure-menu pure-menu-horizontal" style="text-align: center;font-size: 28px;">
        <!--<a href="#" class="pure-menu-heading pure-menu-link"></a>-->
        <ul id="link" style="padding-top: 20px;">
            <button class="pure-button pure-button-primary" id="cus" style="background:#007acc;font-size:22px;">Customer</button>
            <button class="pure-button pure-button-primary" id="sup" style="background:#ff6600;font-size:22px;">Supplier</button>
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
