<?php
  include_once('header.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Edit Profile</h2>

    <?php
      include_once('includes/dbh.inc.php');

      if (isset($_SESSION['c_id'])) {
        $cid = $_SESSION['c_id'];
        $sql = "SELECT * FROM Customer WHERE Customer_ID = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL statement failed";
        }
        else {
          mysqli_stmt_bind_param($stmt, "i", $cid);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_fetch_assoc($result);
          echo '<form class="pure-form pure-form-aligned" style="margin: 0 auto;padding-top:50px;" action="includes/editProfile.inc.php" method="post">
                  <fieldset>
                    <div class="pure-control-group">
                        <label for="fname">Firstname</label>';
          echo          '<input name="fname" type="text" class="pure-input-1-3" placeholder="'.$row['Firstname'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="lname">Lastname</label>';
          echo          '<input name="lname" type="text" class="pure-input-1-3" placeholder="'.$row['Lastname'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="uname">Username</label>';
          echo          '<input name="uname" type="text" class="pure-input-1-3" placeholder="'.$row['Username'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="date">Birhtday</label>';
          echo          '<input name="date" type="text" class="pure-input-1-3" placeholder="'.$row['Birthday'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="addr1">Address1</label>';
          echo          '<input name="addr1" type="text" class="pure-input-1-2" placeholder="'.$row['Address1'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="addr2">Address2</label>';
          echo          '<input name="addr2" type="text" class="pure-input-1-2" placeholder="'.$row['Address2'].'">';
          echo      '</div>
                    <div class="pure-control-group">
                        <label for="zip">Zip</label>';
          echo          '<input name="zip" type="number" class="pure-input-1-3" placeholder="'.$row['Zip'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="phone">Phone</label>';
          echo          '<input name="phone" type="number" class="pure-input-1-3" placeholder="'.$row['Phone'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="email">Email</label>';
          echo          '<input name="email" type="text"class="pure-input-1-3"  placeholder="'.$row['Email'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="passwd">Password</label>
                        <input name="passwd" type="password" class="pure-input-1-3" placeholder="Password">
                        <span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-controls">
                      <button type="submit" name="submitChangeCus" class="button-edit pure-button">Edit</button>
                      <button type="submit" name="submitDeleteCus" class="button-delete pure-button">Delete</button>
                    </div>
                  </fieldset>
                </form>';
        }
      }
      elseif (isset($_SESSION['s_id'])) {
        $sid = $_SESSION['s_id'];
        $sql = "SELECT * FROM supplier WHERE Supplier_ID = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL statement failed";
        }
        else {
          mysqli_stmt_bind_param($stmt, "i", $sid);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_fetch_assoc($result);
          echo '<form class="pure-form pure-form-aligned" style="margin: 0 auto;padding-top:50px;" action="includes/editProfile.inc.php" method="post">
                  <fieldset>
                    <div class="pure-control-group">
                        <label for="fname">Firstname</label>';
          echo          '<input name="fname" type="text" class="pure-input-1-3" placeholder="'.$row['Firstname'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="lname">Lastname</label>';
          echo          '<input name="lname" type="text" class="pure-input-1-3" placeholder="'.$row['Lastname'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="uname">Username</label>';
          echo          '<input name="uname" type="text" class="pure-input-1-3" placeholder="'.$row['Username'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="comp">Company</label>';
          echo          '<input name="comp" type="text" class="pure-input-1-3" placeholder="'.$row['Company'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="addr1">Address1</label>';
          echo          '<input name="addr1" type="text" class="pure-input-1-2" placeholder="'.$row['Address1'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="addr2">Address2</label>';
          echo          '<input name="addr2" type="text" class="pure-input-1-2" placeholder="'.$row['Address2'].'">';
          echo      '</div>
                    <div class="pure-control-group">
                        <label for="zip">Zip</label>';
          echo          '<input name="zip" type="number" class="pure-input-1-3" placeholder="'.$row['Zip'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="phone">Phone</label>';
          echo          '<input name="phone" type="number" class="pure-input-1-3" placeholder="'.$row['Phone'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="email">Email</label>';
          echo          '<input name="email" type="text"class="pure-input-1-3"  placeholder="'.$row['Email'].'">';
          echo          '<span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-control-group">
                        <label for="passwd">Password</label>
                        <input name="passwd" type="password" class="pure-input-1-3" placeholder="Password">
                        <span class="pure-form-message-inline">This is a required field.</span>
                    </div>
                    <div class="pure-controls">
                      <button type="submit" name="submitChangeSup" class="button-edit pure-button">Edit</button>
                      <button type="submit" name="submitDeleteSup" class="button-delete pure-button">Delete</button>
                    </div>
                  </fieldset>
                </form>';
        }
      }
      else {
        echo "string";
      }
    ?>

  </div>
</section>


<style scoped>
  .button-success,
  .button-delete,
  .button-warning,
  .button-edit {
    color: white;
    border-radius: 4px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    width: 100px;
    height: 40px;
    margin-left: 42px;
  }

  .button-success {
    background: rgb(28, 184, 65); /* this is a green */
  }

  .button-delete {
    background: rgb(202, 60, 60); /* this is a maroon */
  }

  .button-warning {
    background: rgb(223, 117, 20); /* this is an orange */
  }

  .button-edit {
    background: rgb(66, 184, 221); /* this is a light blue */
  }
</style>



<?php
  include_once('footer.php');
?>
