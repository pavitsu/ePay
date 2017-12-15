<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>

<section class="pageContainer">
	<div class="pageWrapper">
    	<h2>Transaction</h2>

    	<table class="pure-table" style="padding-top:30px;">
		    <thead>
		        <tr>
			        <th width="5%">#</th>
			        <th width="20%">Name</th>
			        <th width="25%">Product</th>
			        <th width="10%">Amount</th>
			        <th width="15%">Total</th>
			        <th width="15%">Date</th>
			        <th width="10%">Time</th>
		        </tr>
		    </thead>

		    <tbody>

		    	<?php
		    		$sid = $_SESSION['s_id'];
		    		$sql = "SELECT t.Transaction_ID, c.Firstname, p.Name, t.Amount, t.Total, t.TDate, t.TTime FROM transaction t, product p, customer c WHERE t.Product_ID = p.Product_ID AND t.Customer_ID = c.Customer_ID AND t.Supplier_ID = ?;";
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
		                		echo '<td>'.$row['Transaction_ID'].'</td>';
		                		echo '<td>'.$row['Firstname'].'</td>';
		                		echo '<td>'.$row['Name'].'</td>';
		                		echo '<td>'.$row['Amount'].'</td>';
		                		echo '<td>'.$row['Total'].'</td>';
		                		echo '<td>'.$row['TDate'].'</td>';
		                		echo '<td>'.$row['TTime'].'</td>';
		                		echo '</tr>';
		                	}
		                	else {
		                		echo '<tr>';
		                		echo '<td>'.$row['Transaction_ID'].'</td>';
		                		echo '<td>'.$row['Firstname'].'</td>';
		                		echo '<td>'.$row['Name'].'</td>';
		                		echo '<td>'.$row['Amount'].'</td>';
		                		echo '<td>'.$row['Total'].'</td>';
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