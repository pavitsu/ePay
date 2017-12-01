<?php
  include_once('header.php');
?>
<!---->

<section class="pageContainer">
  <div class="pageWrapper">
      <h2>Sign Up</h2>


      <div class="buttonWrapper">
        <button onclick="document.getElementById('id01').style.display='block'"
                style="width:180px;height:60px;margin-left:10px;font-size:20px;background-color:#4CAF50;">Customer</button>
        <button onclick="document.getElementById('id02').style.display='block'"
                style="width:180px;height:60px;margin-left:10px;font-size:20px;background-color: #00B3B3;">Supplier</button>
      </div>

      <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
          <form class="modal-content animate" action="includes/signup.inc.php" method="post">
            <div class="container">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="usern" placeholder="Username">
                <h3>Gender</h3>
                <label class="container">Male
                  <input type="radio" name="radio" value="Male" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <label class="container">Female
                  <input type="radio" name="radio" value="Female">
                  <span class="checkmark"></span>
                </label>
                <input type="text" name="birth" placeholder="Birthday">
                <input type="text" name="addr1" placeholder="Address1">
                <input type="text" name="addr2" placeholder="Address2 (Optional)">
                <input type="number" name="zip" placeholder="Zip">
                <input type="number" name="phone" placeholder="Phone">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="passwd" placeholder="Password">
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="signupbtn" name="submitSignupCustomer">Sign Up</button>
                </div>
              </div>
            </form>
          </form>
        </div>

      <div id="id02" class="modal">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            <form class="modal-content animate" action="includes/signup.inc.php" method="post">
              <div class="container">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="usern" placeholder="Username">
                <input type="text" name="comp" placeholder="Company">
                <input type="text" name="addr1" placeholder="Address1">
                <input type="text" name="addr2" placeholder="Address2 (Optional)">
                <input type="number" name="zip" placeholder="Zip">
                <input type="number" name="phone" placeholder="Phone">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="passwd" placeholder="Password">
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="signupbtn" name="submitSignupSupplier">Sign Up</button>
                </div>
              </div>
            </form>
        </div>

  </div> <!-- End pageWrapper -->
</section>

<script>
  // Get the modal Customer
  var modal = document.getElementById('id01');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  // Get the modal Supplier
  var modal = document.getElementById('id02');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
</script>

<style>
  .buttonWrapper {
    margin: auto;
    width: 400px;
    padding-top: 200px;
  }
  button {
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  /* Full-width input fields */
  input[type=text], input[type=radio], input[type=number], input[type=password] {
      width: 100%;
      padding: 5px 10px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }
  /* Set a style for all buttons */
  button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }
  /* Extra styles for the cancel button */
  .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
  }
  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn,.signupbtn {float:left;width:50%}
  /* Add padding to container elements */
  .container {
      padding: 16px;
  }
  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
  }
  /* Modal Content/Box */
  .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 400px; /* Could be more or less, depending on screen size */
  }
  /* The Close Button (x) */
  .close {
      position: absolute;
      right: 35px;
      top: 15px;
      color: #000;
      font-size: 40px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: red;
      cursor: pointer;
  }
  /* Clear floats */
  .clearfix::after {
      content: "";
      clear: both;
      display: table;
  }
  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
  }
</style>




<?php
include_once('footer.php');
?>
