<?php

include 'db/connectDB.php';
include 'db/gestionDB.php';

//$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory

if(isset($_FILES['file']))
{
	$img = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];

	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

	// can upload same image using rand function
	$final_image = rand(1000,1000000).$img;

	// check's valid format
	//if(in_array($ext, $valid_extensions))
	//{
		$path = $path.strtolower($final_image);

		if(move_uploaded_file($tmp,$path))
		{
			echo "<img src='$path' />";
			echo fct_insert_file($path, 1);
			echo "<p>
			".$path."
			</p>";
		}
	else
	{
		echo 'invalid';
	}
}


?>
