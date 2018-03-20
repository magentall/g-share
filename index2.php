<?php
      include 'includes/header2.php';
?>

<title>G-Share</title>
</head>
<body>

  <div class="container mr-5 ml-5 row"
        <!-- Trigger the modal with a button -->
        <div class="col-12 text-center mt-3" id="legal">
          <span class="legal">Welcome to G Share SPA // </span>
          <span class="desc">You can here Uploads files. 10 min for less than 3 Mo or 7 Mo for 24 hours with ur mail</span>
          <span class="plus">\\ Files are none public if u LoGoN</span>
        </div>
        <div class="mt-3 col-sm-12 col-lg-8">
          <form id="form" action="ajaxupload2.php" method="post" enctype="multipart/form-data">
            <input id="upload" class="browse col-12 mr-3 ml-3 text-center" type="file"  name="file" />
            <button  id="button" class="mt-3 col-12 mr-3 ml-3 btn-success btn btn-default" type="submit" value="Upload">Upload</button>
          </form>
        </div>

        <button id="login" type="button" class="mt-3 hover col-sm-12 col-lg-3 mr-3 ml-3  btn btn-primary" data-toggle="modal" data-target="#connexionmodal">Log In</button>
        <?php
        include 'includes/ModalInscription2.php';
        include 'includes/ModalConnexion2.php';
        ?>
        <div id="err" class="text-center mt-3">
        </div>

        <div class="mt-3 col-sm-12 col-lg-8 ml-5 mr-5 text-center">
              <div class="lien text-center" >
            <!--    <p id="link_tit">: Ur Link Ready WOW :</p> -->
                <p>  <a href="#" target="_blank" class="" id="lien"></a></p>
              </div>
        </div>
        <div class="mt-3">

        </div>


      <div class="container mr-5 ml-5 row">
        <div class="col-8">
          <div class="text-center col-12 mr-3 ml-3 text-center" id="fichiers">Links</div>
          <div id="post" class="legal pt-3 post mb-5">

          </div>
        </div>
        <div class="col-4">
          <div id="right" class="mt-3 pt-3">

          </div>
        </div>
      </div>

      <?php include 'includes/footer2.php' ?>
    </div>
