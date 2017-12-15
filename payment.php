<?php
  include_once('header.php');
  include_once('includes/dbh.inc.php');
?>

<section class="pageContainer">
  <div class="pageWrapper">
    <h2>Payment</h2>

    <?php
      	$cid = $_SESSION['c_id'];

		$sql = "SELECT card FROM customer WHERE Customer_ID = ?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		    echo "SQL statement failed";
		}
		else {
			mysqli_stmt_bind_param($stmt, "i", $cid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$rowResult = mysqli_fetch_assoc($result);

			if (isset($_POST['submitCheckout'])) {

		        if ($rowResult['card'] === 0) {
		          	echo '<div style="max-margin:400px; float:left; padding-right: 100px;">
					    	<form class="pure-form pure-form-aligned" action="includes/payment.inc.php?mark=0" method="post">
							    <fieldset>
							        <div class="pure-control-group">
							            <label for="number">Card Number</label>
							            <input name="number" id="number" type="text" placeholder="Card Number">
							        </div>

							        <div class="pure-control-group">
							            <label for="cvv">CVV</label>
							            <input name="cvv" id="cvv" type="text" placeholder="123">
							        </div>

							        <div class="pure-control-group">
							            <label for="exp">Expire Date</label>
							            <input name="exp" id="exp" type="text" placeholder="Expire Date">
							        </div>

							        <div class="pure-control-group">
							            <label for="name">Holder Name</label>
							            <input name="name" id="name" type="text" placeholder="Name">
							        </div>

							        <div class="pure-u-1 pure-u-md-1-3">
					                    <label for="bank">Issue Bank</label>
					                    <select name="bank" id="bank" class="pure-input-1-4">
					                        <option value="BBl">Bangkok Bank</option>
					                        <option value="KTB">Krungthai</option>
					                        <option value="KBANK">Kasikorn Bank</option>
					                        <option value="SCB">Siam Commercial</option>
					                    </select>
					                </div>

					                <div class="pure-u-1 pure-u-md-1-3">
					                    <label for="type">City</label>
					                    <select name="type" id="type" class="pure-input-1-4">
					                        <option value="VISA">VISA</option>
					                        <option value="MC">Master Card</option>
					                        <option value="JCB">JCB</option>
					                    </select>
					                </div>

							        <div class="pure-controls">
							            <label for="cb" class="pure-checkbox">
							                <input id="cb" type="checkbox"> Ive read the terms and conditions
							            </label>

							            <button name="submitPayment" type="submit" class="pure-button pure-button-primary">Submit</button>
							        </div>
							    </fieldset>
							</form>
					   	</div>';
		        }
		        elseif ($rowResult['card'] === 1) {

			        $sql = "SELECT CNumber, CVV, ExpDate, HolderName FROM payment WHERE Customer_ID = ?;";
			        $stmt = mysqli_stmt_init($conn);
			        if (!mysqli_stmt_prepare($stmt, $sql)) {
			          echo "SQL statement failed";
			        }
			        else {
			          mysqli_stmt_bind_param($stmt, "i", $cid);
			          mysqli_stmt_execute($stmt);
			          $result = mysqli_stmt_get_result($stmt);
			          $row = mysqli_fetch_assoc($result);

			          	echo '<div style="max-margin:400px; float:left; padding-right: 100px;">
						    	<form class="pure-form pure-form-aligned" action="includes/payment.inc.php?mark=1" method="post">
								    <fieldset>
								        <div class="pure-control-group">
								            <label for="number">Card Number</label>';
						echo	            '<input name="number" id="number" type="text" placeholder="'.$row['CNumber'].'">';
						echo	        '</div>

								        <div class="pure-control-group">
								            <label for="cvv">CVV</label>';
						echo	            '<input name="cvv" id="cvv" type="text" placeholder="'.$row['CVV'].'">';
						echo	        '</div>

								        <div class="pure-control-group">
								            <label for="exp">Expire Date</label>';
						echo	            '<input name="exp" id="exp" type="text" placeholder="'.$row['ExpDate'].'">';
						echo	        '</div>

								        <div class="pure-control-group">
								            <label for="name">Holder Name</label>';
						echo	            '<input name="name" id="name" type="text" placeholder="'.$row['HolderName'].'">';
						echo	        '</div>

								        <div class="pure-u-1 pure-u-md-1-3">
						                    <label for="bank">Issue Bank</label>
						                    <select name="bank" id="bank" class="pure-input-1-4">
						                        <option value="BBl">Bangkok Bank</option>
						                        <option value="KTB">Krungthai</option>
						                        <option value="KBANK">Kasikorn Bank</option>
						                        <option value="SCB">Siam Commercial</option>
						                    </select>
						                </div>

						                <div class="pure-u-1 pure-u-md-1-3">
						                    <label for="type">City</label>
						                    <select name="type" id="type" class="pure-input-1-4">
						                        <option value="VISA">VISA</option>
						                        <option value="MC">Master Card</option>
						                        <option value="JCB">JCB</option>
						                    </select>
						                </div>

								        <div class="pure-controls">
								            <label for="cb" class="pure-checkbox">
								                <input id="cb" type="checkbox"> Ive read the terms and conditions
								            </label>

								            <button name="submitPayment" type="submit" class="pure-button pure-button-primary">Update and Submit</button>
								        </div>
								    </fieldset>
								</form>
						   	</div>';

						echo '<div>';
			          	echo '<form class="pure-form pure-form-aligned" action="includes/transaction.inc.php?mark=1" method="post">';
			          	echo '<h3>Use saved card</h3>';
			          	echo '<button name="submitPayment" type="submit" class="pure-button pure-button-primary">Submit</button>';
			          	echo '</form>';
			          	echo '</div>';
			        }
		      	}
		    }

		    else {
		      	echo "string";
		    }
	 	}

	?>


	