<?phprequire 'db/connectDB.php';
$bdd = connectDB();
$delusrfile = $bdd->prepare(
"DELETE FROM file
WHERE date < (NOW()- INTERVAL 1 DAY) AND utilisateur_id != 1");
$anonymousfiles = $bdd->prepare(
"SELECT * FROM files
INNER JOIN users ON file.utilisateur_id=utilisateur.id
WHERE date < (NOW()-1000) AND utilisateur.id = 1");

$delusrfile->execute();
$anonymousfiles->execute();

$anonymousfiles->setFetchMode(PDO::FETCH_ASSOC)

while($file = $anonymousfiles->fetch()){
   shell_exec("rm /var/www/We_Transfert/uploads/" . "$file" . " \;");
}:;

$delete == $bdd->prepare(
"DELETE FROM file
WHERE date < (NOW()-1000) AND utilisateur_id = 1");shell_exec("find /var/www/We_Transfert/uploads -mtime +1 -exec rm {} \;");
?>
