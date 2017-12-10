
<!--
    <form action="includes/signup.inc.php" class="pure-form pure-form-stacked" method="post">
          <fieldset>
              <legend>Supplier</legend>

              <div class="pure-g">
                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="first-name">First Name</label>
                      <input name="first" id="first-name" class="pure-input-1-3" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="last-name">Last Name</label>
                      <input name="last" id="last-name" class="pure-input-1-3" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="user-name">Username</label>
                      <input name="usern" id="user-name" class="pure-input-1-3" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="company">Company</label>
                      <input name="comp" id="company" class="pure-input-1-3" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="email">E-Mail</label>
                      <input name="email" id="email" class="pure-input-1-2" type="email">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="address">Address</label>
                      <input name="addr1" id="address" class="pure-input-1-2" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="address">Address</label>
                      <input name="addr2" id="address" class="pure-input-1-2" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="city">City</label>
                      <select name="city" id="city" class="pure-input-1-4">
                          <option value="BKK">Bangkok</option>
                          <option value="CNX">Chiang Mai</option>
                          <option value="Other">Other</option>
                      </select>
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="zip">Zip</label>
                      <input name="zip" id="zip" class="pure-input-1-4" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="phone">Phone</label>
                      <input name="phone" id="phone" class="pure-input-1-2" type="text">
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="password">Password</label>
                      <input name="passwd" id="password" class="pure-input-1-2" type="password">
                  </div>    
              </div>

              <label for="terms" class="pure-checkbox">
                  <input id="terms" type="checkbox"> I've read the terms and conditions
              </label>

              <button name="submitSignupSupplier" type="submit" class="pure-button pure-button-primary">Sign Up</button>
          </fieldset>
      </form>
-->

<form class="pure-form pure-form-aligned" action="includes/signup.inc.php" method="post">
  <legend style="font-size:28px;padding-top:40px;padding-left:150px;">
    <strong>Supplier</strong>
  </legend>
  <div style="float:left;padding-left:80px;padding-top: 50px;">
    <fieldset>
        <div class="pure-control-group">
            <label for="first">First Name</label>
            <input name="first" id="first" type="text" placeholder="First Name">
        </div>

        <div class="pure-control-group">
            <label for="last">Last Name</label>
            <input name="last" id="last" type="text" placeholder="Last Name">
        </div>

        <div class="pure-control-group">
            <label for="user">User Name</label>
            <input name="usern" id="user" type="text" placeholder="User Name">
        </div>

        <div class="pure-control-group">
            <label for="company">Company</label>
            <input name="comp" id="company" type="text" placeholder="Company">
        </div>

        <div class="pure-control-group">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="epay@example.com">
        </div>

    </fieldset>
  </div>

  <div style="float:left;padding-left:80px;padding-top: 50px;">
    <fieldset>
        <div class="pure-control-group">
            <label for="addr1">Address</label>
            <input name="addr1" id="addr1" type="text" placeholder="Address">
        </div>

        <div class="pure-control-group">
            <label for="addr2">Address</label>
            <input name="addr2" id="addr2" type="text" placeholder="Address (Optional)">
        </div>

        <div class="pure-control-group">
            <label for="city">City</label>
              <select name="city" id="city" class="pure-input-1-3">
                <option value="BKK">Bangkok</option>
                <option value="CNX">Chiang Mai</option>
                <option value="Other">Other</option>
              </select>
            </div>

        <div class="pure-control-group">
            <label for="zip">Zip</label>
            <input name="zip" id="zip" type="text" placeholder="Zip">
        </div>

        <div class="pure-control-group">
            <label for="phone">Phone</label>
            <input name="phone" id="phone" type="text" placeholder="000 000 0000">
        </div>

        <div class="pure-control-group">
            <label for="passwd">Password</label>
            <input name="passwd" id="passwd" type="password" placeholder="Make it difficult, yet recallable">
        </div>
    </fieldset>
  </div>

  <div class="pure-controls" style="margin: 30% 40%;">
      <button name="submitSignupSupplier" type="submit" class="pure-button pure-button-primary">Sign Up</button>
  </div>
    
</form>
