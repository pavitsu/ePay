

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

