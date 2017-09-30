<?php

function deleteSubtask($id){
$bdd = connect();
$reponse = $bdd->prepare('DELETE FROM Subtask WHERE id = :id');
$reponse->execute(array(
'id' => $id,
));
}
?>
