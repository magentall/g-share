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
    Bienvenue sur Gourou Uploads vous avez la possibilité d'uploader n'importe quel type de fichier (taille maximale : 3Mo) et obtenir en retour un lien pouvant être partagé et qui permet de downloader le fichier en question. Un fichier uploadé est supprimé 10 minutes après son upload. Donc le lien ne serat plus valide.
    Vous avez la possibilité de vous inscrire, de vous connecter et de vous déconnecter. Un utilisateur connecté peut uploader des fichiers de 7Mo max, les durées de vie des fichiers passe à 24h. Un bouton don est a votre disposition afin de nous rejoindre et trouver spritualité et bonheur. Gouroux Mac nous laveras de nos pechés et nous accompagneras dans l'au dela. Gloire a Gourou Mac notre maitre spirituel a tous.
  </div>

  <button id="login" type="button" class="hover col-4 offset-4  btn btn-primary btn-lg" data-toggle="modal" data-target="#connexionmodal">Log In</button>
  <?php
  include 'includes/ModalInscription.php';
  include 'includes/ModalConnexion.php';
  ?>

  <div class="">
    <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
  		<input id="uploadImage" class="browse col-4 offset-4 text-center" type="file" accept="image/*" name="file" />
      <a href="#"><div class="col-4 offset-4" id="preview"><img src="no-image.jpg" /></div></a>
  		<button  id="button" class="col-4 offset-4 btn-success btn btn-default" type="submit" value="Upload">Upload</button>
  	</form>
  </div>
  <div class="">
      <span class="lien col-4 offset-4 text-center" >Votre Lien:<span class="text-center" id="lien"></span></span>
  </div>
  <div class="">
      <span class="text-center col-4 offset-4" id="fichiers">Liste de vos fichiers:</span>
  </div>

<div id="err" >

</div>




<?php include 'includes/footer.php' ?>
