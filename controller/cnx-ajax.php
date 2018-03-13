<?php

    include '../db/connectDB.php';
    include '../db/gestionDB.php';



      $connect = connectDB();
    //  Récupération de l'utilisateur et de son pass hashé
        $stmt = $connect->prepare("SELECT id, password  FROM utilisateur WHERE '$email' = email");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
           while($row = $stmt->fetch()) {   $resultat = $row['password']; }


          $pwdVerif = password_verify($pwd, $resultat);


    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
    echo $isPasswordCorrect;

    if (!$pwdVerif)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($pwdVerif) {

            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }

  


    $mail = $_FILES['file']['mail'];
    $pswd = $_FILES['file']['password'];

    if (checkUser($mail,$pswd)) {

    }
    else {
      # code...
      echo "wouaii";

    }
/*
    $name = $_POST['nom'];
    $email = $_POST['mail'];
    $pwd = $_POST['password'];

    $pwd = password_hash($pwd);

    insertUser($name, $email, $pwd);
*/
  //  header('Location: ../index.php');
