<?php
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
  //$('#lien').html($lien);
}
else {
  # utilisateur connecté
  echo fct_insert_file($_POST["idf"],$_POST["id"]);
  //$('#lien').html($lien);
}*/

 ?>
