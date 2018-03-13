<?php
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres
function ajoutfichier(){
$repertoireDestination = dirname(fichiers)."/";
$nomDestination        = "fichier_du_".date("YmdHis").".txt"; //recupere l'extension

if (is_uploaded_file($_FILES["monfichier"]["tmp_name"])) {
    if (rename($_FILES["monfichier"]["tmp_name"],
                   $repertoireDestination.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;
    } else {
        echo "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
} else {
    echo "Le fichier n'a pas été uploadé (trop gros ?)";
}
}
?>
