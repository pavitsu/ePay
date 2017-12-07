<?php
include_once('dbh.inc.php');

function printCard($a, $b, $c) {

	echo '<img src="img_uploads/'.$a.'" alt="John" style="width:200px;height:150px;">';
    echo '<h1>'.$b.'</h1>';
    echo '<p class="title">'.$c.'</p>';
}

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

				$fileNameNew = uniqid('', true).".".$fileActualExt; //unique image
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


