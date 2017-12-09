<?php
  include_once('header.php');
  include_once('sidebarTop.php');
?>


<section class="pageContainer">
	<div class="pageWrapper">
    	<h2>Receipe</h2>


    	<div>
    		<?php
    			echo '<a class="pure-button pure-button-primary" href="'.$_SESSION['ReceipeID'].'" download=""> Download Receipe</a>';
    		?>
		    
		</div>



	</div>
</section>

<?php
  include_once('sidebarBottom.php');
  include_once('footer.php');
?>