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

            $cid = $_SESSION['c_id'];

            $sql = "SELECT Firstname, Lastname, Address1, Address2, City, Zip FROM customer WHERE Customer_ID = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed";
            }
            else {
                mysqli_stmt_bind_param($stmt, "i", $cid);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);

                $cus_firstname = $row['Firstname'];
                $cus_lastname = $row['Lastname'];
                $cus_address1 = $row['Address1'];
                $cus_address2 = $row['Address2'];
                $cus_city = $row['City'];
                $cus_zip = $row['Zip'];
            }

            $receipeName = 'receipe/'.uniqid($cid.'_', true).'.txt';
    		$createReceipe = fopen($receipeName, "w") or die("Unable to open or create file!");
            $date = date("Y-m-d");
            $time = date("h:i:sa");

            // Write date and time
            fwrite($createReceipe, $date."\n");
            fwrite($createReceipe, $time."\n");

            fwrite($createReceipe, "\n\n");

            // Write customer detail
            fwrite($createReceipe, 'Name: '.$cus_firstname." ".$cus_lastname."\n");
            fwrite($createReceipe, 'Shipping Address: '.$cus_address1."\n");
            fwrite($createReceipe, '                  '.$cus_address2."\n");
            fwrite($createReceipe, '                  '.$cus_city."\n");
            fwrite($createReceipe, '                  '.$cus_zip."\n");

            fwrite($createReceipe, "\n\n");

            // Write purchased detail
    		foreach ($_SESSION['cart'] as $key => $value) {
    			$name = $value['item_name'];
    			$amount = $value['item_amount'];
    			$price = $value['item_price'];
    			$subtotal = number_format($value['item_amount'] * $value['item_price'], 2);

                $sql = "SELECT RefundAvailable FROM product WHERE Product_ID = ?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed";
                }
                else {
                    mysqli_stmt_bind_param($stmt, "i", $value['product_id']);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_assoc($result);

                }

    			fwrite($createReceipe, 'Product Name:   '.$name."\n");
    			fwrite($createReceipe, 'Product Amount: '.$amount."\n");
    			fwrite($createReceipe, 'Product Price:  '.$price."\n");
    			fwrite($createReceipe, 'Total Price:    '.$subtotal."\n");
                fwrite($createReceipe, 'Refund:         '.$row['RefundAvailable']."\n");
                fwrite($createReceipe, "\n");

                unset($_SESSION['cart'][$key]);

    		}
    		$total = $_SESSION['total'];
            fwrite($createReceipe, "\n\n");
    		fwrite($createReceipe, 'Total Price:   '.$total."\n");

    		fclose($createReceipe);
            unset($_SESSION['total']);
    	?>

        <?php
            $files = glob($receipeName);
            print_r($files);
        ?>

        <div>
            <?php
                echo '<a class="pure-button pure-button-primary" href="'.$receipeName.'" download="Receipt.'.$cus_firstname.'.txt" style="position:fixed;top: 50%;left: 44%;"> Download Receipe</a>';
            ?>
        </div>



	</div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>