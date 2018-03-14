<?php

include '../db/connectDB.php';
include '../db/gestionDB.php';
$email = $_POST['email'];
$pwd = $_POST['password'];

/*

$connect = connectDB();
//  Récupération de l'utilisateur et de son pass hashé
    $stmt = $connect->prepare("SELECT id, password  FROM utilisateur WHERE '$email' = email");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while($row = $stmt->fetch()) {  $resultat = $row['password'];
                                    $id = $row['id']; }


    $pwdVerif = password_verify($pwd, $resultat);
*/

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = 1; // password_verify($_POST['password'], $resultat['password']);

$email = 'temp';
$id = 40;

$tabData=[$isPasswordCorrect,$id,$email];
echo json_encode($tabData);

?>
