<?php

include 'db/connectDB.php';
include 'db/gestionDB.php';


$path = 'uploads/'; // upload directory

if(isset($_FILES['file']))
{
	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	$id = $_POST['info'];

	if($size > 3145728 && $id == 1){
		echo " 3Mo maximum ";
		exit();
	}elseif ($size > 7340032) {
		echo " 7Mo maximum ";
		exit();
	}


	$link =  fct_insert_file($file, $id);
	$path = $path.strtolower($link);

	$linkup = 'http://'.$_SERVER['HTTP_HOST']."/We_Transfert/".$path;



		if(move_uploaded_file($tmp,$path))
		{

			echo $linkup;
			//echo $_POST['info']; works

		}
	else
	{
		echo 'invalid';
	}
}

?>
