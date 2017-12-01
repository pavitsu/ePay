<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Supplier Login</h2>
    <form class="supplierLogin" action="includes/loginSup.inc.php" method="post">
      <input type="text" name="comp" placeholder="Company">
      <input type="password" name="passwd" placeholder="Password">
      <button type="submit" name="submitLoginSup">Login</button>
    </form>
  </div>
</section>

<style>
  .supplierLogin {
    margin: auto;
    width: 400px;
    padding: 50px;
  }
  .supplierLogin input[type=text], input[type=password] {
    width: 100%;
    padding: 5px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  .supplierLogin button {
    background-color: #4CAF50;
    font-size: 16px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-left: 30%;
    border: none;
    cursor: pointer;
    width: 40%;
  }
</style>


<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>
