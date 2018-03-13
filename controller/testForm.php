<?php

    include '../db/connectDB.php';
    include '../db/gestionDB.php';

    $name = $_POST['nom'];
    $email = $_POST['mail'];
    $pwd = password_hash($_POST['mdp1'], PASSWORD_DEFAULT);


    insertUser($name, $pwd, $email);

    header('Location: ../index.php');
