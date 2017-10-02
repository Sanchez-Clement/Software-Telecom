<?php
function getTrash($id) {
$bdd = connect();
$req = $bdd->prepare('SELECT id, title_project, DATE_FORMAT(deadline, \'%d/%m/%Y\') AS deadline_fr FROM Project  WHERE id_manager = :id and showproject = 0');
$req->execute(array(
'id' => $id ,


));

$trashes = $req->fetchAll() ;
return $trashes;

}
 ?>
