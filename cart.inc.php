<?php
	include_once('includes/functions.inc.php');
  session_start();
?>

<?php
	if (isset($_POST['add'])) {

		
			$menu = $_GET['menu'];
		


		// Cart has at least one product
		if (isset($_SESSION['cart'])) {

			$item_array_id = array_column($_SESSION['cart'], "product_id");

			// New product is added
			if (!in_array($_GET['id'], $item_array_id)) {

				$count = count($_SESSION['cart']);

				$item_array = array(
					'product_id' => $_GET['id'],
					'item_name' => $_POST['hidden_name'],
					'item_price' => $_POST['hidden_price'],
					'item_amount' => $_POST['amount']
				);

				$_SESSION['cart'][$count] = $item_array;
				//echo '<script>window.location="index.php"</script>';
				checkSource($menu);
			}
			// Not allow duplicate product
			else {
				echo '<script>alert("Product is added")</script>';
				//echo '<script>window.location="index.php"</script>';
				checkSource($menu);
			}
		}
		// First product is added into cart
		else {
			$item_array = array(
				'product_id' => $_GET['id'],
				'item_name' => $_POST['hidden_name'],
				'item_price' => $_POST['hidden_price'],
				'item_amount' => $_POST['amount']
			);

			$_SESSION['cart'][0] = $item_array;
			//echo '<script>window.location="index.php"</script>';
			checkSource($menu);
		}
	}

	// Delete product in cart
	if (isset($_GET['action'])) {
		if ($_GET['action'] == "delete") {
			foreach ($_SESSION['cart'] as $key => $value) {
				if ($value['product_id'] == $_GET['id']) {
					unset($_SESSION['cart'][$key]);
					echo '<script>alert("Product is removed")</script>';
					echo '<script>window.location="cart.php"</script>';
				}
			}
		}
	}



