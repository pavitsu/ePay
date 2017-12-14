<?php
include_once('dbh.inc.php');

function getImage($img_file) {

  	$img_file = $_FILES['img_file'];
	//extract data of img_file
	$img_fileName = $_FILES['img_file']['name']; //name of the file
	$img_fileTmpName = $_FILES['img_file']['tmp_name']; //create tmp of the file
	$img_fileSize = $_FILES['img_file']['size'];
	$img_fileError = $_FILES['img_file']['error'];
	$img_fileType = $_FILES['img_file']['type'];

	$fileExt = explode('.', $img_fileName);
	$fileActualExt = strtolower(end($fileExt)); //make all ext be lowercase

	$allowd = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowd)) {
		if ($img_fileError === 0) {
			if ($img_fileSize < 50000000) {

				$fileNameNew = uniqid('', true).".".$fileActualExt; //unique image name
		        $fileDestination = '../img_uploads/' .$fileNameNew;
		        //Add image
		        move_uploaded_file($img_fileTmpName, $fileDestination);

		        return $fileNameNew;
		    }
			else { echo "Your file is too big."; }
		}
		else { echo "There was an error uploading the file."; }
	}
	else { echo "File type is invalid."; }
}

class check {
	function checkCart($value) {
	    if (!empty($value)) {
	        throw new Exception('<form class="processCheckout" action="payment.php" method="post">
	                                <button type="submit" name="submitCheckout">Checkout</button>
	                            </form>');
	    }
	    return true;
	}
	function checkSource($value) {
		switch ($value) {
	    	case 'CO':
	    		echo '<script>window.location="subpage.php?menu=CO"</script>';
	    		break;
	    	case 'ST':
	    		echo '<script>window.location="subpage.php?menu=ST"</script>';
	    		break;
	    	case 'DS':
	    		echo '<script>window.location="subpage.php?menu=DS"</script>';
	    		break;
	    	case 'AU':
	    		echo '<script>window.location="subpage.php?menu=AU"</script>';
	    		break;
	    	case 'AC':
	    		echo '<script>window.location="subpage.php?menu=AC"</script>';
	    		break;
	    	
	    	default:
	    		echo '<script>window.location="index.php"</script>';
	    		break;
	    	}
	}
	function checkProductQuantity($need, $left) {
		if (($left - $need) < 0) {
			throw new Exception("<script> alert('bla') </script>");
		}
		return true;
	}
}




