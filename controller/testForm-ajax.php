<?php

    include '../db/connectDB.php';
    include '../db/gestionDB.php';

    $name = $_POST['nom'];
    $email = $_POST['mail'];
    $pwd = $_POST['password'];

    $pwd = password_hash($pwd);

    insertUser($name, $email, $pwd);

  //  header('Location: ../index.php');
    echo "wouaii";
