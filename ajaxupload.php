<?php

include 'db/connectDB.php';
include 'db/gestionDB.php';

//$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory

if(isset($_FILES['file']))
{
	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	$id = 1;



	$link =  fct_insert_file($file, $id);
	$path = $path.strtolower($link);

	$path = 'http://'.$_SERVER['HTTP_HOST'].$path;


/*

	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

	// can upload same image using rand function
	$final_image = rand(1000,1000000).$img;

	// check's valid format
	//if(in_array($ext, $valid_extensions))
	//{
		$path = $path.strtolower($final_image);
*/
		if(move_uploaded_file($tmp,$path))
		{
			//echo "<img src='$path' />";
			echo $path;
			/*echo "<p>
			".$path."
			</p>";*/
		}
	else
	{
		echo 'invalid';
	}
}


?>
