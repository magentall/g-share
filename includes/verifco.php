<?php

  include '../db/connectDB.php';

  $connect = connectDB();
//  Récupération de l'utilisateur et de son pass hashé
    $stmt = $connect->prepare("SELECT id, password  FROM utilisateur WHERE '$email' = email");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
       while($row = $stmt->fetch()) {   $resultat = $row['password']; }

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}