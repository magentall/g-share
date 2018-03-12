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
    <form class="" action="upload_fichiers.php" method="post">
      <input class="browse col-4 offset-4 text-center" name="monFichier" type="file">
      <button type="button" class="col-4 offset-4 btn-success btn btn-default">Upload</button>
    </form>
  </div>
  <div class="">
      <span class="lien col-4 offset-4 text-center" >Votre Lien:<span class="text-center" id="lien"></span></span>
  </div>
  <div class="">
      <span class="text-center col-4 offset-4" id="fichiers">Liste de vos fichiers:</span>
  </div>


<?php include 'includes/footer.php' ?>
