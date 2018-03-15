<?php
include 'db/connectDB.php';
include 'db/gestionDB.php';


$stmt = fileList($_POST['id']);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch()) {
   echo "<li class='col-12 col-lg-6 top '>".
            "<span class='souligner'> nom du fichier : "."</span>". $row['name'] ."<br>". " <span class='souligner'> lien : "."</span>".$row['link'] ."<br>". "<span class='souligner'> date d'upload : " ."</span>". $row['date'] ."<br>". "<span class='souligner'> état : " ."</span>". $row['status'] .
        "</li>";
}
?>
