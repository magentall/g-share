<?php

include 'db/connectDB.php';
include 'db/gestionDB.php';


$path = 'uploads/'; // upload directory


if(isset($_FILES['file']))
{
	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	$id = $_POST['info'];
	$size = $_FILES['file']['size'];



	if($size > 3145728 && $id == 1){
		echo '3m';
	}elseif ($size > 7340032) {
		echo '7m';
	}
	else{
		$link =  fct_insert_file($file, $id);
		$path = $path.strtolower($link);

		$linkup = 'http://'.$_SERVER['HTTP_HOST']."/We_Transfert/".$path;
		if(move_uploaded_file($tmp,$path))
		{
			echo $linkup;
			//echo $size;
		}
		else
		{
			echo 'invalid';
		}

	}
}

?>
