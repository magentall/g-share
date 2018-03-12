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

              <div class="col-6 offset-3 text-center">Pseudo:
                  <input type="text" name="nom" placeholder="Pseudo">
              </div>
              <span id="Nom_Error"></span>

              <div class="col-6 offset-3 text-center">Mail:
                  <input type="email" name="mail" placeholder="Mail">
              </div>
              <span id="Mail_Error"></span>

              <div class="col-6 offset-3 text-center">Password:
                  <input type="text" name="password" placeholder="Password">
              </div>
              <span id="Password_Error"></span>

              <div class="col-6 offset-3 text-center">Password Verif:
                  <input type="text" name="passwordVerif" placeholder="Re Password">
              </div>
              <span id="Password_Error"></span>

           </form>
           <a href="#" class="text-center col-4 offset-4">Oups Mot de passe perdu?</a>
       </div>
       <div class="modal-footer">
          <button type="button" class="col-4 btn-success btn btn-default">S'inscrire</button>
       </div>
    </div>
  </div>
</div>
