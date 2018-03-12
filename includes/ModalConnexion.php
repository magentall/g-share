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
                   <span id="Mail_Error"></span>
                   <input class="text-center col-4 offset-4" type="text" name="password" placeholder="password">
                   <span id="Password_Error"></span>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="col-4 btn-success btn btn-default">Connexion</button>
                <button type="button" class="col-4 offset-2 btn btn-info btn-default" data-toggle="modal" data-target="#inscriptionmodal" data-dismiss="modal">Inscription</button>
            </div>
        </div>
    </div>
</div>
