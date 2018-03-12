<?php

    include '../db/connectDB.php';
    include '../db/gestionDB.php';

    $name = $_POST['nom'];
    $email = $_POST['mail'];
    $pwd = $_POST['password'];

    insertUser($name, $email, $pwd);

    header('Location: ../index.php');