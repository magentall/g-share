<?php
<<<<<<< HEAD
echo "yes";
 include '../db/connectDB.php'
 include '../db/gestionDB.php';

  $temp=$_POST["idf"];
  echo $temp;
//  $lien = fct_insert_file($temp,1);

// check si l'utilisateur est log
if ($_POST["id"]==1) {
  # utilisateur non connecté
  echo fct_insert_file($_POST["idf"],1);
=======
  include 'db/gestionDB.php';
  include '../db/connectDB.php';

// check si l'utilisateur est log
if ($_POST["id"] == null) {
  # utilisateur non connecté
  $lien = fct_insert_file($_POST["monFichier"],1);
>>>>>>> 0f5ad66a681e655ab373df454b18c9f3fa2ed6a1
  //$('#lien').html($lien);
}
else {
  # utilisateur connecté
<<<<<<< HEAD
  echo fct_insert_file($_POST["idf"],$_POST["id"]);
=======
  $lien = fct_insert_file($_POST["monFichier"],$_POST["id"]);
>>>>>>> 0f5ad66a681e655ab373df454b18c9f3fa2ed6a1
  //$('#lien').html($lien);
}*/

 ?>
