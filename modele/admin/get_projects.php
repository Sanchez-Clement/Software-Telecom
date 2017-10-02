<?php
function getProjects($id,$category) {
$bdd = connect();
$req = $bdd->prepare('SELECT id, id_manager, category, title_project, resume_project, DATE_FORMAT(deadline, \'%d/%m/%Y\') AS deadline_fr FROM Project  WHERE id_manager = :id and category = :category and showproject = 1 ORDER BY deadline DESC');
$req->execute(array(
'id' => $id ,
'category' => $category,

));

$projects = $req->fetchAll() ;
return $projects;

}
 ?>
