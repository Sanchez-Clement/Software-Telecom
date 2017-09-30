<?php

function getSubtask($id) {
$bdd = connect();
$req = $bdd->prepare('SELECT * FROM Subtask  WHERE id_task = :id');
$req->execute(array(
'id' => $id ,


));

$subtask = $req->fetchAll() ;
return $subtask;

}

?>
