<?php
      include 'includes/header.php';
      include 'db/connectDB.php';
      include 'db/gestionDB.php';
?>
<title>We_Transfert</title>
</head>
<body>

  <!-- Trigger the modal with a button -->

  <button type="button" class="col-4 offset-4  btn btn-primary btn-lg" data-toggle="modal" data-target="#connexionmodal">Log In</button>
  <?php
  include 'includes/ModalInscription.php';
  include 'includes/ModalConnexion.php';
  ?>

  <div class="">
      <input class="browse col-4 offset-4 text-center" id="idf" type="file">
      <button type="button" class="col-4 offset-4 btn-success btn btn-default" onclick="upload_fichiers()">Upload</button>
  </div>
  <div class="">
      <span class="lien col-4 offset-4 text-center" >Votre Lien:<span class="text-center" id="lien"></span></span>
  </div>
  <div class="">
      <span class="text-center col-4 offset-4" id="fichiers">Liste de vos fichiers:</span>
  </div>

  <div id="preview"><img src="no-image.jpg" /></div>

  <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/*" name="image" />
		<input id="button" type="submit" value="Upload">
	</form>

<?php include 'includes/footer.php' ?>
