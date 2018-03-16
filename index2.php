<?php
      include 'includes/header2.php';
?>

<title>G-Share</title>
</head>
<body>


        <!-- Trigger the modal with a button -->
        <div class="col-4 offset-4 text-center mt-3" id="legal">
          <p class="legal">Bienvenue sur Gourou Uploads vous avez la possibilité d'uploader n'importe quel type de fichier (taille maximale : 3Mo) et obtenir en retour un lien pouvant être partagé et qui permet de downloader le fichier en question.
          Un fichier uploadé est supprimé 10 minutes après son upload. Donc le lien ne serat plus valide.
          Vous avez la possibilité de vous inscrire, de vous connecter et de vous déconnecter.
          Un utilisateur connecté peut uploader des fichiers de 7Mo max, les durées de vie des fichiers passe à 24h.</p>
        </div>

        <button id="login" type="button" class="mt-3 hover col-4 offset-4  btn btn-primary" data-toggle="modal" data-target="#connexionmodal">Log In</button>
        <?php
        include 'includes/ModalInscription2.php';
        include 'includes/ModalConnexion2.php';
        ?>
        <div id="err" >

        </div>
        <div class="mt-3">
          <form id="form" action="ajaxupload2.php" method="post" enctype="multipart/form-data">
            <input id="upload" class="browse col-4 offset-4 text-center" type="file"  name="file" />
            <button  id="button" class="mt-3 col-4 offset-4 btn-success btn btn-default" type="submit" value="Upload">Upload</button>
          </form>
        </div>
        <div class="mt-3">
              <span class="lien col-4 offset-4 text-center" ><i class="fab fa-sellcast"></i>
                <p>  <a href="#" target="_blank" class="text-center" id="lien"></a></p>
              </span>
        </div>
        <div class="mt-3">
            <span class="text-center col-4 offset-4" id="fichiers">Uploads -> </span>
        </div>



      <div id="post" class="col-4 offset-4 mt-3 legal post">
      </div>




      <?php include 'includes/footer2.php' ?>
