<?php include 'includes/header.php' ?>
<title>We_Transfert</title>
</head>
<body>

  <!-- Trigger the modal with a button -->
  <button type="button" class="col-4 offset-2 btn btn-info btn-lg" data-toggle="modal" data-target="#inscriptionmodal">Inscription</button>
  <button type="button" class="col-4  btn btn-primary btn-lg" data-toggle="modal" data-target="#connexionmodal">Log In</button>


  <!-- Modal inscription-->
  <div id="inscriptionmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p class="text-center col-4 offset-4">Pour S'inscrire</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <form class=""  method="post">
           <input class="text-center col-4 offset-4" type="text" name="nom" placeholder="Nom">
           <input class="text-center col-4 offset-4" type="text" name="mail" placeholder="Mail">
           <input class="text-center col-4 offset-4" type="text" name="password" placeholder="Password">
         </form>
         <a href="#" class="text-center col-4 offset-4">Oups Mot de passe perdu?</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="col-4 btn-success btn btn-default">S'inscrire</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal connexion -->
  <div id="connexionmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p class="text-center col-4 offset-4">Pour Se connecter</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <form class=""  method="post">
           <input class="text-center col-4 offset-4" type="text" name="mail" placeholder="mail">
           <input class="text-center col-4 offset-4" type="text" name="password" placeholder="password">
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="col-4 btn-success btn btn-default">Connexion</button>
        </div>
      </div>
    </div>
  </div>
    <button type="button" class="col-4 offset-4 btn-success btn btn-default">Upload</button>
    <p class="col-4 offset-4 text-center">Lien:</p>
  </div>
  <div class="">
     <p class="text-center col-4 offset-4">Liste de vos fichiers:</p>
  </div>


<?php include 'includes/footer.php' ?>
