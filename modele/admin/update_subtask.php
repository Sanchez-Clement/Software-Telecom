<?php
function updateSubtask($id) {
  $bdd = connect();
  $req = $bdd->prepare('UPDATE Subtask SET done_subtask = :done WHERE id = :id');
  $req->execute(array(
  	'done' => $_POST['subtask'.$id],
  	'id' => $id
  	));
    }



 ?>
