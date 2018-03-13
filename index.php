<?php
      include 'includes/header.php';
      include 'db/connectDB.php';
      include 'db/gestionDB.php';
?>
<title>We_Transfert</title>
</head>
<body>

  <!-- Trigger the modal with a button -->
  <div id="title">
    Uploadez-vos fichiers
  </div>

  <button id="login" type="button" class="col-4 offset-4  btn btn-primary btn-lg" data-toggle="modal" data-target="#connexionmodal">Log In</button>
  <?php
  include 'includes/ModalInscription.php';
  include 'includes/ModalConnexion.php';
  ?>

  <div class="">
    <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
  		<input id="uploadImage" class="browse col-4 offset-4 text-center" type="file" accept="image/*" name="file" />
      <div class="col-4 offset-4" id="preview"><img src="no-image.jpg" /></div>
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
