<!-- Modal inscription-->
<div id="inscriptionmodal"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <p class="text-center col-4 offset-4">Pour S'inscrire</p>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="form-insc" class=""  method="post" onSubmit="return validation(this)" action="controller/insc-ajax.php"> <!-- action="controller/testForm.php">-->

              <div class="col-6 offset-3 text-center">Pseudo:
                  <input class="text-center" type="text" name="nom" placeholder="Pseudo">
              </div>
              <span id="Nom_Error"></span>

              <div class="col-6 offset-3 text-center">Mail:
                  <input class="text-center" type="email" name="mail" placeholder="Mail">
              </div>
              <span id="Mail_Error"></span>

              <div class="col-6 offset-3 text-center">Password:
                  <input class="text-center" type="password" name="mdp1" placeholder="Password">
              </div>
              <span id="Password_Error"></span>

              <div class="col-6 offset-3 text-center">Password Verif:
                  <input class="text-center" type="password" name="mdp2" placeholder="Re Password">
              </div>
              <span id="Password_Error"></span>

           <a href="#" class="text-center col-4 offset-4">Oups Mot de passe perdu?</a>
       </div>
       <div class="modal-footer">
         <button type="button" class="hover col-6 btn btn-default btn-primary" data-toggle="modal" data-target="#connexionmodal" data-dismiss="modal">Log In</button>
          <button type="submit" class="col-6 btn-success btn btn-default">S'inscrire</button>
       </div>
          </form>
    </div>
  </div>
</div>
