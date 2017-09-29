<?php
function addTask($id,$title) {
  $bdd = connect();
  $req = $bdd->prepare('INSERT INTO Task (id_project, title_task ) VALUES(:id, :title)');
  $req->execute(array(
  'id' => $id ,
  'title' => $title,
  ));
}
 ?>
