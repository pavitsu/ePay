<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
	<div class="pageWrapper">
    	<h2>Return</h2>

    	<?php
    		$cid = $_SESSION['c_id'];

    		echo '<form class="pure-form pure-form-stacked" action="includes/refund.inc.php" method="post">
				    <fieldset>
				        <legend>Refund</legend>

				        <label for="pid">Product ID</label>
				        <input name="pid" id="pid" type="number" placeholder="Fill the number">
				        <span class="pure-form-message">This is a required field.</span>

				        <label for="type">Product Type</label>
				        <select name="category" id="type">
				            <option value="CO">Computer & Laptop</option>
		                    <option value="ST">Storage</option>
		                    <option value="AU">Audio</option>
		                    <option value="DS">Display</option>
		                    <option value="AC">Accessory</option>
				        </select>';
			echo 		'<input type="hidden" name="cid" value="'.$cid.'">';
			echo 		'<button name="submitRefund" type="submit" class="pure-button pure-button-primary">Submit</button>
		    		</fieldset>
				</form>';
    	?>

    	
	</div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>