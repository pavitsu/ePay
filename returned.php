<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
	<div class="pageWrapper">
    	<h2>Product Returned</h2>

    	<table class="pure-table" style="margin:auto;margin-top:50px">
		    <thead>
		        <tr>
			        <th width="10%">ID</th>
			        <th width="30%">Customer</th>
			        <th width="30%">Product</th>
			        <th width="15%">Date</th>
			        <th width="15%">Amount</th>
		        </tr>
		    </thead>

		    <tbody>

		    	<?php
		    		$sid = $_SESSION['s_id'];
		    		$sql = "SELECT r.Product_ID, c.Firstname, p.Name, r.TDate, r.TTime FROM refund r, customer c, product p WHERE r.Customer_ID = c.Customer_ID AND r.Product_ID = p.Product_ID AND p.Supplier_ID = ?;";
		    		$stmt = mysqli_stmt_init($conn);
		    		if (!mysqli_stmt_prepare($stmt, $sql)) {
		                echo "SQL statement failed";
		            }
		            else {
		                mysqli_stmt_bind_param($stmt, "i", $sid);
		                mysqli_stmt_execute($stmt);
		                $result = mysqli_stmt_get_result($stmt);

		                $i = 1;
		                while ($row = mysqli_fetch_assoc($result)) {
		                	if ($i%2 == 1) {
		                		echo '<tr class="pure-table-odd">';
		                		echo '<td>'.$row['Product_ID'].'</td>';
		                		echo '<td>'.$row['Firstname'].'</td>';
		                		echo '<td>'.$row['Name'].'</td>';
		                		echo '<td>'.$row['TDate'].'</td>';
		                		echo '<td>'.$row['TTime'].'</td>';
		                		echo '</tr>';
		                	}
		                	else {
		                		echo '<tr>';
		                		echo '<td>'.$row['Product_ID'].'</td>';
		                		echo '<td>'.$row['Firstname'].'</td>';
		                		echo '<td>'.$row['Name'].'</td>';
		                		echo '<td>'.$row['TDate'].'</td>';
		                		echo '<td>'.$row['TTime'].'</td>';
		                		echo '</tr>';
		                	}

		                	$i++;
		                }
		               
		            }
		    	?>
		        
		    </tbody>
		</table>

	</div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>