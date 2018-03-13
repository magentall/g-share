<?php

include 'db/connectDB.php';
include 'db/gestionDB.php';


$path = 'uploads/'; // upload directory

if(isset($_FILES['file']))
{
	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	$id = 1;


	$link =  fct_insert_file($file, $id);
	$path = $path.strtolower($link);

	$linkup = 'http://'.$_SERVER['HTTP_HOST']."/".$path;



		if(move_uploaded_file($tmp,$path))
		{

			echo $linkup;

		}
	else
	{
		echo 'invalid';
	}
}

?>
