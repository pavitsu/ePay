<form class="pure-form pure-form-aligned" action="includes/signup.inc.php" method="post">
  <legend style="font-size:28px;padding-top:25px;padding-left:150px;">
    <strong>Customer</strong>
  </legend>
  <div style="float:left;padding-left:80px;padding-top: 25px;">
    <fieldset>
        <div class="pure-control-group">
            <label for="first">First Name</label>
            <input name="first" id="cus-first" type="text" placeholder="First Name">
        </div>

        <div class="pure-control-group">
            <label for="last">Last Name</label>
            <input name="last" id="cus-last" type="text" placeholder="Last Name">
        </div>

        <div class="pure-control-group">
            <label for="user">User Name</label>
            <input name="usern" id="cus-user" type="text" placeholder="User Name">
        </div>

        <div class="pure-control-group">
            <label for="gender">Gender</label>
              <select name="gender" id="cus-gender" class="pure-input-1-3">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
        </div>

        <div class="pure-control-group">
            <label for="birth">Birthday</label>
            <input name="birth" id="cus-birth" type="text" placeholder="DD MM YYYY">
        </div>

        <div class="pure-control-group">
            <label for="email">Email</label>
            <input name="email" id="cus-email" type="text" placeholder="epay@example.com">
        </div>

    </fieldset>
  </div>

  <div style="float:left;padding-left:80px;padding-top: 25px;">
    <fieldset>
        <div class="pure-control-group">
            <label for="addr1">Address</label>
            <input name="addr1" id="cus-addr1" type="text" placeholder="Address">
        </div>

        <div class="pure-control-group">
            <label for="addr2">Address</label>
            <input name="addr2" id="cus-addr2" type="text" placeholder="Address (Optional)">
        </div>

        <div class="pure-control-group">
            <label for="city">City</label>
              <select name="city" id="cus-city" class="pure-input-1-3">
                <option value="BKK">Bangkok</option>
                <option value="CNX">Chiang Mai</option>
                <option value="Other">Other</option>
              </select>
            </div>

        <div class="pure-control-group">
            <label for="zip">Zip</label>
            <input name="zip" id="cus-zip" type="text" placeholder="Zip">
        </div>

        <div class="pure-control-group">
            <label for="phone">Phone</label>
            <input name="phone" id="cus-phone" type="text" placeholder="000 000 0000">
        </div>

        <div class="pure-control-group">
            <label for="passwd">Password</label>
            <input name="passwd" id="cus-passwd" type="password" placeholder="Make it difficult, yet recallable">
        </div>
    </fieldset>
  </div>

  <div class="pure-controls" style="margin: 30% 40%;">
      <button name="submitSignupCustomer" id="cus-submit" type="submit" class="pure-button pure-button-primary">Sign Up</button>
  </div>
  <p class="cus-form"></p>
    
</form>
