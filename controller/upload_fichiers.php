<?php

    include '../db/connectDB.php';
    include '../db/gestionDB.php';

    $temp = $_POST["idf"];
    $id = $_POST["id"];
    //echo $temp;
    //echo $id;
  //  $lien = fct_insert_file($temp,1);

    // check si l'utilisateur est log
    if ($_POST["id"] == 1) {
        # utilisateur non connecté
        $link  = fct_insert_file($temp, $id);    
    }
    // check si l'utilisateur est log
    if ($_POST["id"] == null) {
        # utilisateur non connecté
        $lien = fct_insert_file($_POST["monFichier"], $id);
        //$('#lien').html($lien);
    }
    else {
        # utilisateur connecté
        echo fct_insert_file($_POST["idf"],$id);
        $lien = fct_insert_file($_POST["monFichier"], $id);
        //$('#lien').html($lien);
    }
 ?>
