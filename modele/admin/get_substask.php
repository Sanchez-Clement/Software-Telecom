<?php

function getSubtask($id) {
$bdd2 = connect();
$req = $bdd2->prepare('SELECT * FROM Subtask  WHERE id_task = :id');
$req->execute(array(
'id' => $id ,


));

$subtask = $req->fetchAll() ;
return $subtask;

}

?>
