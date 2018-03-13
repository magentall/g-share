<?php
      include 'includes/header.php';
      include 'db/connectDB.php';
      include 'db/gestionDB.php';
?>
<title>We_Transfert</title>
</head>
<body>

  <!-- Trigger the modal with a button -->
  <div class="col-4 offset-4 text-center" id="title">
    Bienvenue sur Gourou Uploads vous avez la possibilité d'uploader n'importe quel type de fichier (taille maximale : 3Mo) et obtenir en retour un lien pouvant être partagé et qui permet de downloader le fichier en question.<br><br> Un fichier uploadé est supprimé 10 minutes après son upload. Donc le lien ne serat plus valide.<br><br>
    Vous avez la possibilité de vous inscrire, de vous connecter et de vous déconnecter.<br><br> Un utilisateur connecté peut uploader des fichiers de 7Mo max, les durées de vie des fichiers passe à 24h.<br><br> N'hesitez pas à nous rejoindre <span class="argent">(pour seulement 5.000€/mois)</span> afin de trouver spritualité et bonheur.<br><br> Gouroux Mac nous laveras de nos pechés et nous accompagneras dans l'au dela.<br><br> Gloire a Gourou Mac notre maitre spirituel a tous.
  </div>

  <button id="login" type="button" class="hover col-4 offset-4  btn btn-primary btn-lg" data-toggle="modal" data-target="#connexionmodal">Log In</button>
  <?php
  include 'includes/ModalInscription.php';
  include 'includes/ModalConnexion.php';
  ?>

  <div class="">
    <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
  		<input id="upload" class="browse col-4 offset-4 text-center" type="file"  name="file" />
  		<button  id="button" class="col-4 offset-4 btn-success btn btn-default" type="submit" value="Upload">Upload</button>
  	</form>
  </div>
  <div class="">
        <span class="lien col-4 offset-4 text-center" >Votre Lien:
            <a href="#" target="_blank" class="text-center" id="lien"></a>
        </span>
  </div>
  <div class="">
      <span class="text-center col-4 offset-4" id="fichiers">Liste de vos fichiers:</span>
  </div>

<div id="err" >

</div>




<?php include 'includes/footer.php' ?>
