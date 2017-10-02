<?php
function getThisProject($id) {
  $bdd = connect();
  $req = $bdd->prepare('SELECT id,title_project,DATE_FORMAT(deadline, \'%d/%m/%Y\') AS deadline_fr FROM Project  WHERE id = :id ');
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
