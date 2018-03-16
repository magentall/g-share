<?php

    include '../db/connectDB.php';
    $email = $_POST['email'];
    $pwd = $_POST['password'];



    $connect = connectDB();
    //  Récupération de l'utilisateur et de son pass hashé
        $stmt = $connect->prepare("SELECT id, password  FROM utilisateur WHERE '$email' = email");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch()) {  $resultat = $row['password'];
                                        $id = $row['id']; }


        $pwdVerif = password_verify($pwd, $resultat);


    // Comparaison du pass envoyé via le formulaire avec la base
    //$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']); pb de passage de tableau -> $var
    $p1=$_POST['password'];
    $p2=$resultat;
    $isPasswordCorrect = password_verify($p1,$p2);
    echo $isPasswordCorrect;

    if (!$pwdVerif)
    {
        header('Location: ../index.php?err=1');

    }
    else
    {
        if ($pwdVerif) {

            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            //echo 'Vous êtes connecté !';
            header('Location: ../index.php?id='.$id);
        }
        else {
            //echo 'Mauvais identifiant ou mot de passe !';
            header('Location: ../index.php?err=1');
        }
    }

?>
