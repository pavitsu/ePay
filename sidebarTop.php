<?php

  if (isset($_SESSION['c_id'])) {
    echo '<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Popular Product</a>
            <a href="subpage.php?menu=CO">Computer & Laptop</a>
            <a href="subpage.php?menu=ST">Storage</a>
            <a href="subpage.php?menu=DS">Display</a>
            <a href="subpage.php?menu=AU">Audio</a>
            <a href="subpage.php?menu=AC">Accessory</a>
            <hr>
            <a href="refund.php">Return Product</a>
          </div>';
  }
  elseif (isset($_SESSION['s_id'])) { //Seller page
    echo '<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Product status</a>
            <hr>
            <a href="editproduct.sup.php">Edit product</a>
            <hr>
            <a href="addproduct.sup.php">Add product</a>
            <hr>
            <a href="transaction.php">Transaction</a>
            <hr>
            <a href="returned.php">Product Returned</a>
            <hr>
            <a href="#"></a>
            <a href="#"></a>
          </div>';
  }
  else {
    echo '<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Popular Product</a>
            <a href="subpage.php?menu=CO">Computer & Laptop</a>
            <a href="subpage.php?menu=ST">Storage</a>
            <a href="subpage.php?menu=DS">Display</a>
            <a href="subpage.php?menu=AU">Audio</a>
            <a href="subpage.php?menu=AC">Accessory</a>
            <hr>
            <a href="loginSup.php">Supplier Login</a>
          </div>';
  }
?>

<style>
  hr { 
    border: 0; 
    height: 1px; 
    background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
  }
</style>



<link rel="stylesheet" type="text/css" href="style.css">
<!-- page content that will shift right -->
<div id="main">

    
