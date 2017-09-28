<?php
function getProjects($id,$category) {
$bdd = connect();
$req = $bdd->prepare('SELECT * FROM Project  WHERE id_manager = :id and category = :category and showproject = 1');
$req->execute(array(
'id' => $id ,
'category' => $category,

));

$projects = $req->fetchAll() ;
return $projects;

}
 ?>
