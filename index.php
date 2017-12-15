<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<?php

  if (isset($_SESSION['c_id'])) {
    include_once('index.cus.php');
  }
  elseif (isset($_SESSION['s_id'])) {
    include_once('index.sup.php');
  }
  else {
    include_once('index.blank.php');
  }
?>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>

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
