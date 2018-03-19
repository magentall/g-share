<?php
      include 'includes/header.php';
      include 'db/connectDB.php';
      include 'db/gestionDB.php';



?>
        <title>We_Transfert</title>
    </head>
    <body class="blanc ff">
      <?php  if(!isset($_GET["id"])){echo '<button id="login" type="button" class="hover col-12  btn btn-primary" data-toggle="modal" data-target="#connexionmodal">Log In</button>';}?>
      <?php  if(isset($_GET["id"])){echo '<a  href="controller/deconnexion.php" class="btn btn-danger hover col-12 ">Déconnexion</a>';}?>
        <?php
            if(isset($_GET['err'])){
              echo "<script>alert('Mot de passe erroné')</script>";
            }

            if(isset($_GET['id'])){
              $_SESSION["id"] = $_GET['id'];

              $name = selectEmail($_GET['id']);
              echo "<h2 class='text-center nom'>Bonjour $name bienvenue.</h2>";


            }
        ?>

        <!-- Trigger the modal with a button -->
        <div class="marg1 col-6 offset-3 text-center" >
          Bienvenue sur We Transfert vous avez la possibilité d'upload n'importe quel type de fichier (taille maximale : 3Mo) et obtenir en retour un lien pouvant être partagé et qui permet de downloader le fichier en question. Un fichier uploadé est supprimé 10 minutes après son upload. Donc le lien ne serat plus valide.
          Vous avez la possibilité de vous inscrire, de vous connecter et de vous déconnecter. Un utilisateur connecté peut uploader des fichiers de 7Mo max,et les durées de vie des fichiers passent à 24h.
        </div>


        <?php
        include 'includes/ModalInscription.php';
        include 'includes/ModalConnexion.php';
        ?>

        <div class="container">
          <div class="col-12 text-center" id="err" >

          </div>
          <form id="form" class="row" action="ajaxupload.php" method="post" enctype="multipart/form-data">
            <input id="upload" class="col-8 offset-1 browse btn btn-default btn-success " type="file"  name="file" />

            <button  id="button" class="col-2 gg btn-success btn btn-default" type="submit" value="Upload">Upload</button>
          </form>
        </div>

        <div class="container">
              <span class="bold lien souligner col-12 offset-1 " >Votre Lien:
                  <a href="#" target="_blank" class="" id="lien"></a>
              </span>
        </div>
        <div class="container">
            <span class="souligner bold text-center col-4 offset-4" id="fichiers">Liste de vos fichiers:</span>
              <ul class=" row">
                <?php
                  if(isset($_GET["id"])){

                    $stmt = fileList($_GET['id']);
                   $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    while($row = $stmt->fetch()) {
                       echo "<li class='col-12 col-lg-6 top '>".
                                "<span class='souligner'> nom du fichier : "."</span>". $row['name'] ."<br>". " <span class='souligner'> lien : "."</span>".$row['link'] ."<br>". "<span class='souligner'> date d'upload : " ."</span>". $row['date'] ."<br>". "<span class='souligner'> état : " ."</span>". $row['status'] .
                            "</li>";
                   }
                  }
                ?>
                </ul>
        </div>


<?php include 'includes/footer.php' ?>
