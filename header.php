<?php
  session_start();
  include_once('includes/dbh.inc.php');
  include_once('functions.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
          integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <nav>

      <?php
        if(isset($_SESSION['c_id']) || isset($_SESSION['s_id'])) {
          echo '<a class="pure-button" style="float:right;margin-right:40px;margin-top:12.5px;">
                  <i class="fa fa-shopping-cart fa-lg"  ></i>
                  Checkout
                </a>';
        } else {
          echo '<a class="pure-button" onclick="myFunction()" style="float:right;margin-right:40px;margin-top:12.5px;">
                  <i class="fa fa-shopping-cart fa-lg"  ></i>
                  Checkout
                </a>';
        }
      ?>

      <span style="font-size:30px;cursor:pointer;float:left;margin-left:12.5px;margin-top:12.5px;" onclick="openNav()">&#9776;</span>
      
        <div class="pageWrapper">
          <ul>
            <li><a href="index.php">epay</a></li>
          </ul>
          <div class="navLogin"> <!-- wrap login -->

            <?php
              if (isset($_SESSION['c_id']) ) {
				        echo '<a href="editProfile.php" style="float:left;padding-right:20px;">'.$_SESSION['c_uid'].'</a>';
                echo '<form action="includes/logout.inc.php" method="post"> <!--LOGOUT-->
                        <button type="submit" name="submitLogout">Logout</button>
                      </form>';
              } elseif(isset($_SESSION['s_id'])) {
				        echo '<a href="editProfile.php">'.$_SESSION['s_uid'].'</a>';
                echo '<form action="includes/logout.inc.php" method="post"> <!--LOGOUT-->
                        <button type="submit" name="submitLogout">Logout</button>
                      </form>';
              } else {
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


<script>
  function myFunction() {
      alert("Please, Sign up or Log-in before you continue.");
  }
</script>