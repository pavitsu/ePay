<?php
  session_start();
  include_once('includes/dbh.inc.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="pageWrapper">
          <ul>
            <li><a href="index.php">epay</a></li>
          </ul>
          <div class="navLogin"> <!-- wrap login -->
            <?php
              if (isset($_SESSION['c_id']) || isset($_SESSION['s_id'])) {
                echo '<form action="includes/logout.inc.php" method="post"> <!--LOGOUT-->
                        <button type="submit" name="submitLogout">Logout</button>
                      </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post"> <!--LOGIN-->
                        <input type="text" name="uid" placeholder="Username">
                        <input type="password" name="passwd" placeholder="Password">
                        <button type="submit" name="submitLogin">Login</button>
                      </form>
                      <a href="signup.php">Sign up</a>';
              }
            ?>

          </div> <!-- end navLogin -->
        </div> <!-- end pageWrapper -->
      </nav>
    </header>
