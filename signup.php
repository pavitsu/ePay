
<?php
  include_once('header.php');
  /*for tell user about what happening?*/
  if(isset($_POST['add'])){/*for when user try add to cart from index.blank.php*/
    echo '<div class="alert alert-danger"><strong>You shall not pass!</strong> Please sign-up,or log-in before you continue.</div>';
  }elseif(isset($_GET['signup'])){/*for when user register get sign-up signal to tell them what happening*/
    $signal=$_GET['signup'];
    if($signal=='empty'){echo '<div class="alert alert-danger"><strong>You shall not pass!</strong> Please fill every infomation before you sign-up.</div>';}
    if($signal=='invalid'){echo '<div class="alert alert-danger"><strong>You shall not pass!</strong> Please fill your infomation with a-z, A-Z, 0-9</div>';}
    if($signal=='nametaken'){echo '<div class="alert alert-danger"><strong>You shall not pass!</strong> This username has already been taken. Please pick another username</div>';}
    else{;}
  }

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
