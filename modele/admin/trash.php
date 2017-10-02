<?php
function getTrash($id) {
$bdd = connect();
$req = $bdd->prepare('SELECT * FROM Project  WHERE id_manager = :id and showproject = 0');
$req->execute(array(
'id' => $id ,


));

$trashes = $req->fetchAll() ;
return $trashes;

}
 ?>
