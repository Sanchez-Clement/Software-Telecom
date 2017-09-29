<?php
function addSubtask($id,$title) {
  $bdd = connect();
  $req = $bdd->prepare('INSERT INTO Subtask (id_task, title_subtask ) VALUES(:id, :title)');
  $req->execute(array(
  'id' => $id ,
  'title' => $title,
  ));
}
 ?>
