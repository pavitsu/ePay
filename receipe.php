<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<!--
r   Open a file for read only. File pointer starts at the beginning of the file
w   Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. 
    File pointer starts at the beginning of the file
a   Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. 
    Creates a new file if the file doesn't exist
x   Creates a new file for write only. Returns FALSE and an error if file already exists
r+  Open a file for read/write. File pointer starts at the beginning of the file
w+  Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. 
    File pointer starts at the beginning of the file
a+  Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. 
    Creates a new file if the file doesn't exist
x+  Creates a new file for read/write. Returns FALSE and an error if file already exists
-->

<section class="pageContainer">
	<div class="pageWrapper">
    	<h2>Receipe</h2>

    	<?php
    		$createReceipe = fopen("receipe/receipe.txt", "w") or die("Unable to open or create file!");
            $date = date("Y-m-d");
            $time = date("h:i:sa");

    		foreach ($_SESSION['cart'] as $key => $value) {
    			$name = $value['item_name'];
    			$amount = $value['item_amount'];
    			$price = $value['item_price'];
    			$subtotal = number_format($value['item_amount'] * $value['item_price'], 2);

    			fwrite($createReceipe, $name."\n");
    			fwrite($createReceipe, $amount."\n");
    			fwrite($createReceipe, $price."\n");
    			fwrite($createReceipe, $subtotal."\n");

    		}
    		$total = number_format($_SESSION['total'], 2);
    		fwrite($createReceipe, $total."\n");
            fwrite($createReceipe, $date."\n");
            fwrite($createReceipe, $time."\n");

    		fclose($createReceipe);
    	?>





	</div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>