<?php include 'header.php' ?>
<title>We_Transfert</title>
</head>
<body>

  <!-- Trigger the modal with a button -->
  <button type="button" class="col-4 offset-2 btn btn-info btn-lg" data-toggle="modal" data-target="#inscription">Inscription</button>
  <button type="button" class="col-4  btn btn-primary btn-lg" data-toggle="modal" data-target="#connexion">Log In</button>


  <!-- Modal inscription-->
  <div id="inscription" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p class="text-center col-4 offset-4">Pour S'inscrire</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <input class="text-center col-4 offset-4" type="text" name="" placeholder="Nom">
         <input class="text-center col-4 offset-4" type="text" name="" placeholder="Mail">
         <input class="text-center col-4 offset-4" type="text" name="" placeholder="Password">
         <a href="#" class="text-center col-4 offset-4">Oups Mot de passe perdu?</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="col-4 btn-success btn btn-default">S'inscrire</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal connexion -->
  <div id="connexion" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p class="text-center col-4 offset-4">Pour Se connecter</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <input class="text-center col-4 offset-4" type="text" name="" placeholder="mail">
         <input class="text-center col-4 offset-4" type="text" name="" placeholder="password">
        </div>
        <div class="modal-footer">
          <button type="button" class="col-4 btn-success btn btn-default">Connexion</button>
        </div>
      </div>
    </div>
  </div>


<?php include 'footer.php' ?>
