<?php

// check si l'utilisateur est log
if ($_POST["id"]==null) {
  # utilisateur non connecté
  $lien=fct_insert_file($_POST["monFichier"],1);
  $('#lien').html($lien);
}
else {
  # utilisateur connecté
  $lien=fct_insert_file($_POST["monFichier"],$_POST["id"]);
  $('#lien').html($lien);
}html

 ?>
