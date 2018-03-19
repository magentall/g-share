<?php
      include 'includes/header2.php';
?>

<title>G-Share</title>
</head>
<body>


        <!-- Trigger the modal with a button -->
        <div class="col-12 mr-3 ml-3 text-center mt-3" id="legal">
          <p class="legal">Welcome to G Share SPA </p>
          <p>You can here Uploads files. 10 min for less than 3 Mo or 7 Mo for 24 hours with ur mail</p>
          <p>Files are none public if u LoGoN</p>
        </div>

        <button id="login" type="button" class="mt-3 hover col-12 mr-3 ml-3  btn btn-primary" data-toggle="modal" data-target="#connexionmodal">Log In</button>
        <?php
        include 'includes/ModalInscription2.php';
        include 'includes/ModalConnexion2.php';
        ?>
        <div id="err" >

        </div>
        <div class="mt-3">
          <form id="form" action="ajaxupload2.php" method="post" enctype="multipart/form-data">
            <input id="upload" class="browse col-12 mr-3 ml-3 text-center" type="file"  name="file" />
            <button  id="button" class="mt-3 col-12 mr-3 ml-3 btn-success btn btn-default" type="submit" value="Upload">Upload</button>
          </form>
        </div>
        <div class="mt-3">
              <div class="lien col-12 mr-3 ml-3 text-center" >
                <p><i class="fab fa-sellcast"></i></p>
                <p>  <a href="#" target="_blank" class="text-center" id="lien"></a></p>
              </div>
        </div>
        <div class="mt-3">
            <span class="text-center col-12 mr-3 ml-3" id="fichiers">Uploads -> </span>
        </div>



      <div id="post" class="col-12 mr-3 ml-3 mt-3 legal post">
      </div>




      <?php include 'includes/footer2.php' ?>
