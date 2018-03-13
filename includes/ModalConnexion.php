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
               <form class=""  method="post" action="controller/cnx-ajax.php"> <!-- action="includes/verifco.php">-->
                 <div class="col-6 offset-3 text-center">Mail:
                     <input class="text-center" type="text" name="email" placeholder="Mail">
                 </div>
                 <span id="Mail_Error"></span>

                 <div class="col-6 offset-3 text-center">Password:
                     <input class="text-center" type="password" name="password" placeholder="Password">
                 </div>
                 <span id="Password_Error"></span>

            </div>
            <div class="modal-footer">
                <button type="submit" class="col-6 btn-success btn btn-default">Connexion</button>
                <button type="button" class="col-6  btn btn-info btn-default" data-toggle="modal" data-target="#inscriptionmodal" data-dismiss="modal">Inscription</button>
            </div>
            </form>
        </div>
    </div>
</div>
