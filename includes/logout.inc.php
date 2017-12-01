<?php

if (isset($_POST['submitLogout'])) {
  session_start();
  session_unset();
  session_destroy();
  //Take back to front page
  header("Location: ../index.php");
  exit();
}
