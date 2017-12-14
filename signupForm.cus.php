<!---->
<!--
    <form action="includes/signup.inc.php" class="pure-form pure-form-stacked" method="post">
          <fieldset>
              <legend>Customer</legend>

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
                      <label for="gender">Gender</label>
                      <select name="gender" id="gender" class="pure-input-1-4">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                      </select>
                  </div>

                  <div class="pure-u-1 pure-u-md-1-3">
                      <label for="birth-day">Birthday</label>
                      <input name="birth" id="birth-day" class="pure-input-1-4" type="text">
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

              <button name="submitSignupCustomer" type="submit" class="pure-button pure-button-primary">Sign Up</button>
          </fieldset>
      </form>
-->

<!--
<form class="pure-form pure-form-stacked">
  <legend>Customer</legend>
      <div style="float:left">
        <fieldset>
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
                <label for="last-name">User Name</label>
                <input name="usern" id="last-name" class="pure-input-1-3" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="pure-input-1-3">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="birthday">Birthday</label>
                <input name="birth" id="birthday" class="pure-input-1-3" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">E-Mail</label>
                <input name="email" id="email" class="pure-input-1-3" type="email">
            </div>
          </div>
        </fieldset>
      </div>

      <div style="float:left">
        <fieldset>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="address1">Address</label>
                <input name="addr1" id="address1" class="pure-input-1-3" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="address2">Address</label>
                <input name="addr2" id="address2" class="pure-input-1-3" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="city">City</label>
                <select name="city" id="city" class="pure-input-1-3">
                    <option value="BKK">Bangkok</option>
                    <option value="CNX">Chiang Mai</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="zip">Zip</label>
                <input name="zip" id="zip" class="pure-input-1-3" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="phone">Phone</label>
                <input name="phone" id="phone" class="pure-input-1-3" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="passwd">Password</label>
                <input name="passwd" id="passwd" class="pure-input-1-3" type="password">
            </div>
            </div>

            <label for="terms" class="pure-checkbox">
                <input name="term" id="terms" type="checkbox"> 
                <a href="termandcondition.html">I've read the terms and conditions</a>
            </label>

            <button name="submitSignupCustomer" type="submit" class="pure-button pure-button-primary">Sign Up</button>
          </div>
        </fieldset>
      </div>
</form>
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $("form").submit(function(event) {
      event.preventDefault(); // Halt form action
      var first = $("#cus-first").val();
      var last = $("#cus-last").val();
      var user = $("#cus-user").val();
      var gender = $("#cus-gender").val();
      var birth = $("#cus-birth").val();
      var email = $("#cus-email").val();
      var addr1 = $("#cus-addr1").val();
      var addr2 = $("#cus-addr2").val();
      var city = $("#cus-city").val();
      var zip = $("#cus-zip").val();
      var phone = $("#cus-phone").val();
      var passwd = $("#cus-passwd").val();
      var submitSignupCustomer = $("#cus-submit").val();
      $(".cus-form").load("includes/signup.inc.php", {
        // POST: ...
        first: first,
        last: last,
        usern: user,
        gender: gender,
        birth: birth,
        email: email,
        addr1: addr1,
        addr2: addr2,
        city: city,
        zip: zip,
        phone: phone,
        passwd: passwd,
        submitSignupCustomer: submitSignupCustomer
      });
    });
  });
</script>


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
            <input name="email" id="cus-email" type="email" placeholder="epay@example.com">
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
