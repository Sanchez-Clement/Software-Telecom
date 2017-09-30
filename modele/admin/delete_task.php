<?php
function deleteTask($id){
$bdd = connect();
$reponse = $bdd->prepare('DELETE FROM Task WHERE id = :id');
$reponse->execute(array(
'id' => $id,

));

$reponse2 = $bdd->prepare('DELETE FROM Subtask WHERE id_task = :id');
$reponse2->execute(array(
'id' => $id,

));

}

 ?>
