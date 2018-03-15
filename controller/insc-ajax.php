<?php

include '../db/connectDB.php';
include '../db/gestionDB.php';

$name = $_POST['nom'];
$email = $_POST['mail'];
$pswd = password_hash($_POST['mdp1'], PASSWORD_DEFAULT);


insertUser($name, $pswd, $email);
$id=returnid($email);
$valid='wouaii';
$tabData=[$valid,$name,$email,$id];
echo json_encode($tabData);

 ?>
