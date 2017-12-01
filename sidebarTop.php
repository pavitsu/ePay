<?php

  if (isset($_SESSION['c_id'])) {
    echo '<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Popular Product</a>
            <a href="comlap.php">Computer & Laptop</a>
            <a href="storage.php">Storage</a>
            <a href="display.php">Display</a>
            <a href="audio.php">Audio</a>
            <a href="accessory.php">Accessory</a>
			      <a href="#">Cart</a>
          </div>';
  }
  elseif (isset($_SESSION['s_id'])) { //Seller page
    echo '<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Product status</a>
            <a href="editproduct.sup.php">Edit product</a>
            <a href="addproduct.sup.php">Add product</a>
            <a href="#">Transaction</a>
            <a href="#"></a>
            <a href="#"></a>
          </div>';
  }
  else {
    echo '<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Popular product</a>
            <a href="#">Computer & Laptop</a>
            <a href="#">Storage</a>
            <a href="#">Display</a>
            <a href="#">Audio</a>
            <a href="#">Accessory</a>
            <a href="loginSup.php">Supplier Login</a>
          </div>';
  }
?>



<link rel="stylesheet" type="text/css" href="style.css">
<!-- page content that will shift right -->
<div id="main">

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
