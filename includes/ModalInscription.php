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
              <span id="Nom_Error"></span>
              <input class="text-center col-4 offset-4" type="text" name="mail" placeholder="Mail">
              <span id="Mail_Error"></span>
              <input class="text-center col-4 offset-4" type="text" name="password" placeholder="Password">
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
