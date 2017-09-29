<?php
function getThisProject($id) {
  $bdd = connect();
  $req = $bdd->prepare('SELECT * FROM Project  WHERE id = :id ');
  $req->execute(array(
  'id' => $id ,


  ));

  $thisProject = $req->fetchAll() ;
  return $thisProject;

  }




function getTask($id) {
$bdd = connect();
$req = $bdd->prepare('SELECT * FROM Task  WHERE id_project = :id');
$req->execute(array(
'id' => $id ,


));

$task = $req->fetchAll() ;
return $task;

}
 ?>
